import os
import re

directory = '/Users/bp/Desktop/Lucky Transporter'

def replace_in_file(filepath):
    try:
        with open(filepath, 'r', encoding='utf-8') as f:
            content = f.read()
            
        original_content = content
        
        # Replace variations
        content = content.replace('Lucky Transporter', 'LC Packers and Mover')
        content = content.replace('lucky transporter', 'lc packers and mover')
        content = content.replace('LUCKY TRANSPORTER', 'LC PACKERS AND MOVER')
        content = content.replace('Lucky transporter', 'LC packers and mover')
        
        # In case there are some with "Lucky Transport"
        content = content.replace('Lucky Transport', 'LC Packers and Mover')
        content = content.replace('lucky transport', 'lc packers and mover')
        
        if content != original_content:
            with open(filepath, 'w', encoding='utf-8') as f:
                f.write(content)
            print(f"Updated: {filepath}")
    except Exception as e:
        print(f"Error processing {filepath}: {e}")

def walk_directory():
    for root, dirs, files in os.walk(directory):
        # skip .git or node_modules if they exist
        if '.git' in root or 'node_modules' in root:
            continue
            
        for file in files:
            if file.endswith(('.php', '.html', '.css', '.js', '.txt', '.json')):
                filepath = os.path.join(root, file)
                replace_in_file(filepath)

if __name__ == '__main__':
    walk_directory()
    print("Done!")
