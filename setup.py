#!/usr/bin/env python3
from shutil import copytree, ignore_patterns, rmtree
import os

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
    copytree(src, dst, ignore=ignore_patterns('[.]*', '*.png', 'setup.py', '*.pyc', 'tmp*'))
except FileExistsError:
    print("Already exists!")
    quit()



for dname, dirs, files in os.walk(dst):
    for fname in files:
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