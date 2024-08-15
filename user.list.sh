#!/bin/bash -e

_cmd_exists() {
  if ! command -v "${1}" > /dev/null; then
    echo "${0}: '${1}' is not installed, exiting..." 1>&2
    exit 1
  fi
}

asterisk=$( command -v 'asterisk' ); _cmd_exists 'asterisk'
awk=$( command -v 'awk' ); _cmd_exists 'awk'
sed=$( command -v 'sed' ); _cmd_exists 'sed'

${asterisk} -x "meetme list ${1}" | ${awk} '{ print $3 "/" $4 }' | ${sed} '$d'

exit 0
