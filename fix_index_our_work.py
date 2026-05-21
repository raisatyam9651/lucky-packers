with open('index.php', 'r') as f:
    content = f.read()

content = content.replace('./our-work.php', 'javascript:void(0);')

with open('index.php', 'w') as f:
    f.write(content)

print("Updated index.php")
