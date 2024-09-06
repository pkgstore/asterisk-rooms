#!/bin/bash -e

asterisk -x "meetme kick ${1} ${2}" && exit 0 || exit 1
