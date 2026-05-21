import os
import glob

files = glob.glob('our-services/*.php')

start_str = """                        <div class="col-lg-4">
                            <aside class="services__sidebar">"""

for file_path in files:
    with open(file_path, 'r') as f:
        content = f.read()

    parts = content.split(start_str)
    if len(parts) >= 3:
        # There is a second sidebar.
        before = start_str.join(parts[:2])
        after = parts[2]
        
        section_end_idx = after.find('</section>')
        
        if section_end_idx != -1:
            new_after = """                    </div>
                </div>
            </div>
        """ + after[section_end_idx:]
            
            new_content = before + new_after
            
            with open(file_path, 'w') as f:
                f.write(new_content)
            print(f"Fixed {file_path}")
        else:
            print(f"Could not find </section> in {file_path}")

