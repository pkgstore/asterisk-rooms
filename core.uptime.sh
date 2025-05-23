#!/bin/bash -e

asterisk -x "core show uptime" | awk 'NR==1 { print $3, $5, $7 }' && exit 0 || exit 1
