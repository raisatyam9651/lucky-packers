import re

file_path = 'our-services/transportation.php'
with open(file_path, 'r') as f:
    content = f.read()

# We need to find the second occurrence of <div class="col-lg-4"> that contains <aside class="services__sidebar">
# and remove it up to the </div> that closes it.
# A simpler way: we know it starts at the second <div class="col-lg-4">\n                            <aside class="services__sidebar">
# Let's just find that specific block and remove it.

start_str = """                        <div class="col-lg-4">
                            <aside class="services__sidebar">"""

parts = content.split(start_str)
if len(parts) >= 3:
    # There is a second sidebar.
    before = start_str.join(parts[:2])
    after = parts[2]
    
    # The 'after' part contains the rest of the sidebar and the extra divs.
    # We want to remove the sidebar and leave exactly 3 closing divs before the </section>.
    # Let's find </section> in the 'after' part.
    section_end_idx = after.find('</section>')
    
    if section_end_idx != -1:
        # We replace everything from the start of the second sidebar up to </section>
        # with just the 3 closing divs needed.
        new_after = """                    </div>
                </div>
            </div>
        """ + after[section_end_idx:]
        
        new_content = before + new_after
        
        with open(file_path, 'w') as f:
            f.write(new_content)
        print("Fixed transportation.php")
    else:
        print("Could not find </section>")
else:
    print("Could not find second sidebar.")
