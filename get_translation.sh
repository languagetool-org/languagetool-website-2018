#!/bin/bash
# gets translation from http://webtranslateit.com
# Requires wti, see https://github.com/atelierConvivialite/webtranslateit

if [ $# -ne 1 ]; 
    then echo "Please specify exactly one argument: language code (e.g. 'de')"
    exit
fi
wti pull -l $1
