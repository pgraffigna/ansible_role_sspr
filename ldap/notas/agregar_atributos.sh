#!/bin/bash
# variables
OU="ou=soporte,dc=home,dc=local"
LDAP_SERVER="ldap.home.local"
LDAP_ADMIN="cn=admin,dc=home,dc=local"
LDAP_PASSWORD="password"

for i in $(ldapsearch -x -b "${OU}" | grep 'member' | cut -d':' -f2 | sed 's/ //g')
do

ldapmodify -x -H ldapi:/// -D "${LDAP_ADMIN}" -w "${LDAP_PASSWORD}" << EOF
dn: $i
changetype: modify
add: st
st: vpn

EOF
done
# agregar atributo "st" con valor "vpn" a los usuarios del OU soporte
