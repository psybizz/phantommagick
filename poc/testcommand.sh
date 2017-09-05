#!/usr/bin/env bash
phantomjs --ssl-protocol=any --ignore-ssl-errors=yes '../src/scripts/phantom_magick.js' 'input.html' 'output.pdf' 'A4' '1' '70' 'portrait' '{"left": "0", "top": "1cm", "right": "0", "bottom": "1cm"}'
