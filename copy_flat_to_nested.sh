#!/usr/bin/env bash

set -e
shopt -s globstar

if [ $# -ne 2 ]; then
    echo "Incorrect number of arguments" >&2
    exit 1
fi

pushd "$1" > /dev/null
for p in **/*.po; do
    newname=${p/docs_krita_org_/}
    newname=${newname//___/\/}
    echo "Copying '$p' to '$2/$newname'..."
    mkdir -p $(dirname "$2/$newname")
    cp "$p" "$2/$newname"
done
