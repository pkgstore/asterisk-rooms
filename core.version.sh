#!/bin/bash -e

asterisk -x "core show version" | awk '{ print $2 }' && exit 0 || exit 1
