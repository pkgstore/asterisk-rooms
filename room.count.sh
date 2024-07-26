#!/bin/bash -e

_cmd_exists() {
  if ! command -v "${1}" > /dev/null; then
    echo "${0}: '${1}' is not installed, exiting..." 1>&2
    exit 1
  fi
}

grep="$( command -v 'grep' )"; _cmd_exists 'grep'
cut="$( command -v 'cut' )"; _cmd_exists 'cut'
wc="$( command -v 'wc' )"; _cmd_exists 'wc'

${grep} -v '^;' '/etc/asterisk/meetme.conf' | ${grep} 'conf =>' | ${cut} -d ' ' -f3 | ${wc} -l

exit 0
