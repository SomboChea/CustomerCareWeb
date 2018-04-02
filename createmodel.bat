@echo off
:loop
set /p model="Model name : "
php artisan make:Controller %model%Controller

goto  loop
pause