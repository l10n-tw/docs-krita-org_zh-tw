#!/usr/bin/env bash

set -e
shopt -s globstar

if [ $# -ne 2 ]; then
    echo "Incorrect number of arguments" >&2
    exit 1
fi

pot_diff_unchanged() {
    diff -q -I^\"POT-Creation-Date: "$1" "$2" > /dev/null
}

pushd "$1" > /dev/null
for p in **/*.pot; do
    newname=${newname//\//___}
    newname=docs_krita_org_$p
    if [[ -f "$2/$newname" ]] && pot_diff_unchanged "$p" "$2/$newname"; then
        echo "Template '$p' not changed, skipping."
        continue
    fi
    echo "Copying '$p' to '$2/$newname'..."
    cp "$p" "$2/$newname"
done
popd > /dev/null

pushd "$2" > /dev/null
for p in **/*.pot; do
    newname=${p/docs_krita_org_/}
    newname=${newname//___/\/}
    if [[ ! -f "$1/$newname" ]]; then
        echo "Deleting POT template '$p'..."
        rm "$p"
    fi
done
popd > /dev/null
