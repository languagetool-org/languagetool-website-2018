#!/bin/bash

# combine source files into a single JS file

cat src/atd.core2.js src/editor_plugin3.js >editor_plugin3.js

# checks for jsmin, if it exists, uses it to minify the combined file
# http://crockford.com/javascript/jsmin

if which jsmin 1>/dev/null 2>/dev/null; then
	mv editor_plugin2.js editor_plugin2.tmp.js
	jsmin <editor_plugin2.tmp.js >editor_plugin2.js
	rm -f editor_plugin2.tmp.js
fi
