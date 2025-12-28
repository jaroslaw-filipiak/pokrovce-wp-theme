#!/bin/bash
VERSION=$(grep -oP 'Version:\s*\K[0-9.]+' style.css)
THEME=$(basename "$PWD")
cd .. && rm -f "${THEME}-${VERSION}.zip"

cd "$THEME"
git archive --format=zip --prefix="${THEME}/" -o "../${THEME}-${VERSION}.zip" HEAD

echo "✓ ${THEME}-${VERSION}.zip"
