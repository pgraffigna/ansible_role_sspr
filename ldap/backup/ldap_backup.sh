#!/bin/bash
# script para backup de la configuración + BD de usuarios de LDAP

RUTA_BACKUP=/home/vagrant/ldap_backup
SLAPCAT=/usr/sbin/slapcat
FECHA=`date +"%d-%m-%Y"`
DIT="dc=testing,dc=com"

${SLAPCAT} -b cn=config > ${RUTA_BACKUP}/config_bk_${FECHA}.ldif
${SLAPCAT} -b ${DIT} > ${RUTA_BACKUP}/usuarios_bk_${FECHA}.ldif
chown -R vagrant:vagrant ${RUTA_BACKUP}
chmod 600 ${RUTA_BACKUP}/*.ldif
