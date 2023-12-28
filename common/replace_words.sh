#!/bin/bash

if [ "$#" -ne 2 ]; then
    echo "Usage: $0 <old_word> <new_word>"
    # usage: $0 "old_word" "new_word"
    exit 1
fi

directory_path="./"

old_word="$1"
new_word="$2"

escaped_old_word=$(echo "$old_word" | sed 's/[\/&]/\\&/g')

cd "$directory_path" || exit

for file in *; do
    if [ -f "$file" ]; then
        sed -i "s|$escaped_old_word|$new_word|g" "$file"
        echo "Replaced $old_word with $new_word in $file"
    fi
done

echo "Replacement complete."
