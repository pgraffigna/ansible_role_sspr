# agregar atributo ST con valor ALV_BUCKET a los usuarios del ou SOPORTE
#!/bin/bash

# variables
OU="ou=SOPORTE,dc=cultura,dc=lab"
LDAP_SERVER="ldap.cultura.lab"
LDAP_ADMIN="cn=admin,dc=cultura,dc=lab"
LDAP_PASSWORD="password"

for i in $(ldapsearch -x -b "${OU}" | grep 'member' | cut -d':' -f2 | sed 's/ //g')
do

ldapmodify -x -H ldapi:/// -D "${LDAP_ADMIN}" -w "${LDAP_PASSWORD}" << EOF
dn: $i
changetype: modify
add: st
st: alv_bucket

EOF
done
