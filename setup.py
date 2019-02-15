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
    copytree(src, dst, ignore=ignore_patterns('[.]*', 'setup.py', '*.pyc', 'tmp*'))
except FileExistsError:
    print("Already exists!")
