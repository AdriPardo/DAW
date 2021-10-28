#!/usr/bin/bash

rm -r ./dist;

mkdir ./dist;

cp -r ./src/* ./dist/;

touch ./dist/web/main.css;
sass ./dist/web/main.scss:./dist/web/main.css;

rm ./dist/web/main.css.map;
rm ./dist/web/main.scss;

