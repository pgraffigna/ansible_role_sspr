#!/usr/bin/env bash

# Colours
VERDE="\e[0;32m\033[1m"
AMARILLO="\e[0;33m\033[1m"
ROJO="\e[0;31m\033[1m"
AZUL="\e[0;34m\033[1m"
FIN="\033[0m\e[0m"

# Variables
ADMIN_LDAP=password123

# Ctrl-C
trap ctrl_c INT
function ctrl_c(){
        echo -e "\n${ROJO}[SAMBA] Programa Terminado por el usuario ${FIN}"
        exit 0
}

if [[ $EUID > 0 ]]; then
  echo -e "${ROJO}[SAMBA] Correr como root o con sudo ${FIN}"
  exit 1

else
echo -e "${AMARILLO}[SAMBA] Instalando dependencias ${FIN}"
apt update && apt install -y debconf-utils

DEBIAN_FRONTEND=noninteractive apt-get install -y slapd ldap-utils

echo -e "slapd slapd/no_configuration boolean false" | debconf-set-selections
echo -e "slapd slapd/domain string cultura.lab" | debconf-set-selections
echo -e "slapd shared/organization string 'cultura'" | debconf-set-selections
echo -e "slapd slapd/password1 password ${ADMIN_LDAP}" | debconf-set-selections
echo -e "slapd slapd/password2 password ${ADMIN_LDAP}" | debconf-set-selections
echo -e "slapd slapd/backend select HDB" | debconf-set-selections
echo -e "slapd slapd/purge_database boolean true" | debconf-set-selections
echo -e "slapd slapd/allow_ldap_v2 boolean false" | debconf-set-selections
echo -e "slapd slapd/move_old_database boolean true" | debconf-set-selections

# Reconfigurando slapd para que tome los cambios
dpkg-reconfigure -f noninteractive slapd
fi

