#!/bin/bash
VERSION=$(grep -oP 'Version:\s*\K[0-9.]+' style.css)
THEME=$(basename "$PWD")

# Create stash ref including uncommitted changes (without actually stashing)
git add -A
STASH=$(git stash create)
git reset HEAD --quiet

cd .. && rm -f "${THEME}-${VERSION}.zip"
cd "$THEME"

# Archive from stash (includes uncommitted changes) or HEAD if no changes
git archive --format=zip --prefix="${THEME}/" -o "../${THEME}-${VERSION}.zip" ${STASH:-HEAD}

echo "✓ ${THEME}-${VERSION}.zip"
