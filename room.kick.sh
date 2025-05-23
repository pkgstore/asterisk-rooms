#!/bin/bash -e

asterisk -x "meetme kick ${1} all" && exit 0 || exit 1
