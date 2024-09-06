#!/bin/bash -e

grep '^conf =>' '/etc/asterisk/meetme.conf' | cut -d ' ' -f 3 | head -n "${1}" | tail -n 1 && exit 0 || exit 1
