#!/usr/bin/env python3
from shutil import copytree, ignore_patterns, rmtree
import os, requests, zipfile, io

script_dir = os.path.dirname(os.path.realpath(__file__))

while True:
    name = str(input("Enter name: "))
    if name.isalnum():
        break
    print("Must be aplhanumeric!")

src = script_dir
dst = script_dir + "/../" + name

try:
    rmtree(dst)
    copytree(src, dst, ignore=ignore_patterns('*.pyc', 'tmp*'))
except FileExistsError:
    print("Already exists!")
    quit()



for dname, dirs, files in os.walk(dst + "/themes/_s"):
    for fname in files:
        if fname != "screenshot.png":
            fpath = os.path.join(dname, fname)
            with open(fpath) as f:
                s = f.read()
            s = s.replace("'_s'", "'" + name + "'")
            s = s.replace("_s_", name + "_")
            s = s.replace("Text Domain: _s", "Text Domain: " + name)
            s = s.replace(" _s", " " + name)
            s = s.replace("_s-", name + "-")
            with open(fpath, "w") as f:
                f.write(s)


elementor_url = "https://downloads.wordpress.org/plugin/elementor.latest-stable.zip"
github_updater_url = "https://github.com/afragen/github-updater/releases/download/8.6.3/github-updater-8.6.3.zip"
wp_sync_db_url = "https://github.com/wp-sync-db/wp-sync-db/archive/1.5.zip"
wp_sync_db_media_files_url = "https://github.com/wp-sync-db/wp-sync-db-media-files/archive/1.1.5.zip"

for zip_url in [elementor_url, github_updater_url, wp_sync_db_url, wp_sync_db_media_files_url]:
    r = requests.get(zip_url)
    z = zipfile.ZipFile(io.BytesIO(r.content))
    z.extractall( dst + "/plugins")

