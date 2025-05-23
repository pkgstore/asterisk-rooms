#!/bin/bash -e

asterisk -x "meetme list ${1}" | awk '{ print $3 "/" $4 }' | sed '$d' && exit 0 || exit 1
