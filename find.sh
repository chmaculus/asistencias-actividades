#!/bin/sh
#find ./ -iname "*.php" -exec grep -H 'this->mod->reserva' {} \;
find ./ -iname "*.php" -exec grep -H 'http://' {} \;


