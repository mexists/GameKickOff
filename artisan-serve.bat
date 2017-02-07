set /a port="8000"
RunHiddenConsole.exe php artisan serve --port=%port%
start chrome "http://localhost:%port%"