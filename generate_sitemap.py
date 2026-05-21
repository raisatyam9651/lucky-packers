import os
import glob
from xml.etree.ElementTree import Element, SubElement, tostring
from xml.dom import minidom

DOMAIN = "https://www.lcpackersandmover.com"

# Find all PHP files
pages = []
for root, dirs, files in os.walk('.'):
    if '.git' in root or 'assets' in root or 'form' in root or '.claude' in root:
        continue
    for file in files:
        if file.endswith('.php'):
            # Filter out includes
            if file in ['header.php', 'footer.php', 'blogs_data.php', 'recent_blogs_section.php', 'location-template.php', 'modals.php', 'sidebar.php']:
                continue
            
            filepath = os.path.join(root, file)
            # Normalize path
            filepath = filepath.replace('./', '', 1)
            if filepath == 'index.php':
                url = DOMAIN + '/'
            else:
                url = DOMAIN + '/' + filepath
            pages.append(url)

# Sort pages for neatness
pages.sort()

# Create XML
urlset = Element('urlset', xmlns="http://www.sitemaps.org/schemas/sitemap/0.9")

for page in pages:
    url_element = SubElement(urlset, "url")
    loc = SubElement(url_element, "loc")
    loc.text = page
    changefreq = SubElement(url_element, "changefreq")
    changefreq.text = "weekly"
    priority = SubElement(url_element, "priority")
    if page == DOMAIN + '/':
        priority.text = "1.00"
    else:
        priority.text = "0.80"

xml_str = minidom.parseString(tostring(urlset)).toprettyxml(indent="  ")

with open('sitemap.xml', 'w') as f:
    f.write(xml_str)

print(f"Generated sitemap.xml with {len(pages)} pages.")
