@echo off

set cwd=%cd%

:: Make sure to tweak the example C:\Homestead path in the script to the actual location of your Homestead installation.
set homesteadVagrant=C:\Homestead

cd /d %homesteadVagrant% && vagrant %*
cd /d %cwd%

set cwd=
set homesteadVagrant=