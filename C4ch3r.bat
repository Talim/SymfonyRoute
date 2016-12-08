@echo off
cls
title Videur de cache Symfony
color 0C
echo           ===========================
echo           =          C4ch3r         =
echo           ===========================
echo.
rem +> Changer le chemin de votre projet Symfony
rem +> Se diriger dans le répertoire \var
rem +> ex: "C:\xampp\htdocs\SymfonyTP1\Symfony\var\cache\dev"


rem TP1
rem "C:\xampp\htdocs\SymfonyTP1\Symfony\var\cache\dev"

rem TP2
rem C:\MAMP\htdocs\SymfonyRoute\var\cache\dev
cd "C:\MAMP\htdocs\SymfonyRoute\var\cache\dev"
echo Suppression du cache...
del /F /q /S *
rem php console cache:clear
echo.
echo Succes !
pause>null