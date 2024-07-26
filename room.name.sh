#!/bin/bash -e

_cmd_exists() {
  if ! command -v "${1}" > /dev/null; then
    echo "${0}: '${1}' is not installed, exiting..." 1>&2
    exit 1
  fi
}

grep="$( command -v 'grep' )"; _cmd_exists 'grep'
cut="$( command -v 'cut' )"; _cmd_exists 'cut'
head="$( command -v 'head' )"; _cmd_exists 'head'
tail="$( command -v 'tail' )"; _cmd_exists 'tail'

${grep} -v '^;' '/etc/asterisk/meetme.conf' | ${grep} 'conf =>' | ${cut} -d ' ' -f3 | ${head} -n "${1}" | ${tail} -1

exit 0
