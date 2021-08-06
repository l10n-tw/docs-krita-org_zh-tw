#!/usr/bin/env bash

set -e
shopt -s globstar

if [ $# -ne 2 ]; then
    echo "Incorrect number of arguments" >&2
    exit 1
fi

dir_from=$(realpath "$1")
dir_to=$(realpath "$2")

pushd "$dir_from" > /dev/null
for p in *.pot; do
    component="$(basename "$p" ".pot")"
    if [[ ! -f "$dir_to/$component.po" ]]; then
        echo "PO catalog for component '$component' does not exist, copying from template..."
        cp "$p" "$dir_to/$component.po"
    fi
done
popd > /dev/null
