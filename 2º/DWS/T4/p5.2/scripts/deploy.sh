#!/bin/bash

rm -r C:/xampp/htdocs/DWS;
rm -r C:/xampp/php/DWS;

mkdir C:/xampp/htdocs/DWS;
mkdir C:/xampp/php/DWS;

cp -r ./dist/web/* C:/xampp/htdocs/DWS;
cp -r ./dist/php/. C:/xampp/php/DWS;