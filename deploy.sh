#!/bin/bash

USER=devops
SERVER=178.62.21.30
SCRIPT_DIR="/var/www/jet2/"
SCRIPT="./create.sh"

BRANCH=${1:-master}

echo "Connecting to server ${SERVER}"
ssh ${USER}@${SERVER} "cd ${SCRIPT_DIR} && ${SCRIPT} ${BRANCH}"

