#!/usr/bin/env python3

while True:
    name = str(input("Enter name: "))
    if name.isalnum():
        break
    print("Must be aplhanumeric!")

