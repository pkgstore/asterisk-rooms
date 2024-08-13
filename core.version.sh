#!/bin/bash -e

_cmd_exists() {
  if ! command -v "${1}" > /dev/null; then
    echo "${0}: '${1}' is not installed, exiting..." 1>&2
    exit 1
  fi
}

asterisk="$( command -v 'asterisk' )"; _cmd_exists 'asterisk'
awk="$( command -v 'awk' )"; _cmd_exists 'awk'

${asterisk} -x "core show version" | ${awk} '{ print $2 }'

exit 0
