#!/bin/bash

# Verify an argument is provided
if [ "$#" -ne 1 ]; then
    echo "Usage: $0 <directory>"
    echo "Error: Directory argument missing."
    exit 1
fi

# Directory containing PHP files, passed as an argument
DIRECTORY="$1"

# Loop over each PHP file in the specified directory
find "$DIRECTORY" -type f -name "*.php" | while read -r file; do
    [ -n "$DEBUG" ] && echo "Processing file: $file"
    # Check if the file contains the strict_types declaration
    if ! grep -qE 'declare\s*\(\s*strict_types\s*=\s*1\s*\)\s*;' "$file"; then
        [ -n "$DEBUG" ] && echo "Declaration not found in: $file"
        # If not, prepend the strict_types declaration
        {
            echo '<?php declare( strict_types = 1 ); ?>'
            cat "$file"
        } > "$file.tmp" && mv "$file.tmp" "$file"
    else
       [ -n "$DEBUG" ] && echo "Declaration found in: $file"
    fi
done
