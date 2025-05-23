#!/bin/bash -e

grep '^conf =>' '/etc/asterisk/meetme.conf' | cut -d ' ' -f 3 | wc -l && exit 0 || exit 1
