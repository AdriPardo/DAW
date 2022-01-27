#!/bin/bash

PROJECT_NAME="P6"
SERVIDOR="C:\xampp"
#Casa:"D:/Mis_cosas/Herramientas/Xampp"
#Clase:"C:\xampp"

rm -r $SERVIDOR/htdocs/$PROJECT_NAME;
rm -r $SERVIDOR/php/$PROJECT_NAME;

mkdir $SERVIDOR/htdocs/$PROJECT_NAME;
#mkdir $SERVIDOR/htdocs/$PROJECT_NAME/cliente;
#mkdir $SERVIDOR/php/$PROJECT_NAME;

#cp -r ./dist/web/* $SERVIDOR/htdocs/$PROJECT_NAME/cliente;
#find ./dist/php/* -type d -not -name public -exec cp -r "{}" $SERVIDOR/php/$PROJECT_NAME \;
#cp -r ./dist/php/public $SERVIDOR/htdocs/$PROJECT_NAME/servidor;
cp -r ./dist/php/* $SERVIDOR/htdocs/$PROJECT_NAME;
