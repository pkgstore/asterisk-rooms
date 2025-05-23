#!/bin/bash -e

cmd=''

case "${1}" in
  'reload') cmd='reload' ;;
  'restart') cmd='restart now' ;;
  'stop') cmd='stop now' ;;
  *) echo 'Command is not supported!' && exit 1 ;;
esac

asterisk -x "core ${cmd}" && exit 0 || exit 1
