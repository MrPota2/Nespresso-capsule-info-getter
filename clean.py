import os

done = open('done.txt', 'r').read().split('\n')
urls = open('urls.txt', 'r').read().split('\n')
urls_temp = open('urls_temp.txt', 'w')

for url in urls:
    if url not in done:
        urls_temp.write(url + '\n')

urls_temp.close()
os.remove('urls.txt')
os.rename('urls_temp.txt', 'urls.txt')

print("Done")
