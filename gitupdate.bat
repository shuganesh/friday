@echo off
:ask
echo Last Commit Details :
git log -1
@echo To exit type exit
set INPUT=
set /P INPUT=Enter Commit Name: %=%

If /I NOT "%INPUT%"=="exit" goto yes 
If /I "%INPUT%"=="exit" goto no

goto ask
:yes
@git add .
@git commit -m %INPUT%
@git push -u origin master
pause
goto exit
:no
@exit