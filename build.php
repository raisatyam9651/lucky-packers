<?php

/**
 * LC Packers and Movers - Static Site Generator for Netlify
 * This script crawls the local PHP server and generates static HTML files.
 */

$distDir = __DIR__ . '/dist';
$baseUrl = 'http://localhost:8111'; // The local server must be running

// 1. Create or clean the distribution directory
if (!is_dir($distDir)) {
    mkdir($distDir, 0755, true);
} else {
    echo "Cleaning existing dist directory...\n";
    system("rm -rf " . escapeshellarg($distDir) . "/*");
}

// 2. Define files and directories to process
$scanDirs = [
    '', // Root
    'blogs',
    'our-services'
];

$filesToStatic = [];

foreach ($scanDirs as $dir) {
    $fullPath = __DIR__ . ($dir ? '/' . $dir : '');
    if (!is_dir($fullPath)) continue;

    $files = scandir($fullPath);
    foreach ($files as $file) {
        if (pathinfo($file, PATHINFO_EXTENSION) === 'php') {
            // Skip utility files
            if (in_array($file, ['header.php', 'footer.php', 'build.php', 'contact-form-handler.php', 'sidebar.php'])) {
                continue;
            }
            
            $relativePath = ($dir ? $dir . '/' : '') . $file;
            $filesToStatic[] = $relativePath;
        }
    }
}

echo "Found " . count($filesToStatic) . " PHP files to convert.\n";

// 3. Fetch HTML and save to dist
foreach ($filesToStatic as $phpFile) {
    $url = $baseUrl . '/' . $phpFile;
    $htmlFile = str_replace('.php', '.html', $phpFile);
    
    // Handle index.php -> index.html
    if (basename($htmlFile) === 'index.html') {
        // Keep as index.html
    } else if ($phpFile === 'index.php') {
        $htmlFile = 'index.html';
    }

    $targetPath = $distDir . '/' . $htmlFile;
    $targetDir = dirname($targetPath);

    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0755, true);
    }

    echo "Processing: $phpFile -> $htmlFile\n";
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    $output = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($httpCode === 200) {
        // Replace .php links with .html links in the generated HTML
        // This is a simple regex that might need refinement based on link structure
        $output = preg_replace('/href="([^"]+)\.php"/i', 'href="$1.html"', $output);
        
        file_put_contents($targetPath, $output);
    } else {
        echo "Error: Failed to fetch $url (HTTP $httpCode)\n";
    }
}

// 4. Copy static assets
echo "Copying assets...\n";
if (is_dir(__DIR__ . '/assets')) {
    system("cp -R " . escapeshellarg(__DIR__ . '/assets') . " " . escapeshellarg($distDir . '/assets'));
}

// Copy other necessary files (like robots.txt or sitemap.xml if they exist)
$others = ['robots.txt', 'sitemap.xml', 'favicon.ico'];
foreach ($others as $other) {
    if (file_exists(__DIR__ . '/' . $other)) {
        copy(__DIR__ . '/' . $other, $distDir . '/' . $other);
    }
}

echo "\nBuild Complete! Static files are in the 'dist' directory.\n";
echo "You can now drag and drop the 'dist' folder to Netlify or use netlify-cli to deploy.\n";
?>
