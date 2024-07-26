#!/bin/bash -e

_cmd_exists() {
  if ! command -v "${1}" > /dev/null; then
    echo "${0}: '${1}' is not installed, exiting..." 1>&2
    exit 1
  fi
}

asterisk="$( command -v 'asterisk' )"; _cmd_exists 'asterisk'
awk="$( command -v 'awk' )"; _cmd_exists 'awk'
grep="$( command -v 'grep' )"; _cmd_exists 'grep'

${asterisk} -x "sip show peer ${1}" | ${grep} 'Callerid' | ${awk} '{ print $3, $4 }'

exit 0
