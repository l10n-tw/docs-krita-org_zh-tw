#!/usr/bin/env bash

set -e
shopt -s globstar

if [ $# -ne 2 ]; then
    echo "Incorrect number of arguments" >&2
    exit 1
fi

dir_from=$(realpath "$1")
dir_to=$(realpath "$2")

pot_diff_unchanged() {
    diff -q -I^\"POT-Creation-Date: "$1" "$2" > /dev/null
}

pushd "$dir_from" > /dev/null
for p in **/*.pot; do
    newname=${p//\//___}
    newname=docs_krita_org_$newname
    if [[ -f "$dir_to/$newname" ]] && pot_diff_unchanged "$p" "$dir_to/$newname"; then
        echo "Template '$p' not changed, skipping."
        continue
    fi
    echo "Copying '$p' to '$dir_to/$newname'..."
    cp "$p" "$dir_to/$newname"
done
popd > /dev/null

pushd "$dir_to" > /dev/null
for p in **/*.pot; do
    newname=${p/docs_krita_org_/}
    newname=${newname//___/\/}
    if [[ ! -f "$dir_from/$newname" ]]; then
        echo "Deleting POT template '$p'..."
        rm "$p"
    fi
done
popd > /dev/null
