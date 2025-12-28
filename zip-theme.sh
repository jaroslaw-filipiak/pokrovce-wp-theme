#!/bin/bash
VERSION=$(grep -oP 'Version:\s*\K[0-9.]+' style.css)
THEME=$(basename "$PWD")

# Add all files including ignored dist folder
git add -A
git add -f dist/

# Create stash ref including uncommitted changes
STASH=$(git stash create)

# Reset staging area
git reset HEAD --quiet

cd .. && rm -f "${THEME}-${VERSION}.zip"
cd "$THEME"

# Archive from stash (includes dist and uncommitted changes)
git archive --format=zip --prefix="${THEME}/" -o "../${THEME}-${VERSION}.zip" ${STASH:-HEAD}

echo "✓ ${THEME}-${VERSION}.zip"
