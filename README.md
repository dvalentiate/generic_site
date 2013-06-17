# Operating Instructions

## cloud9 ide

Open terminal window and enter the following and press enter.
```
httpd -d ~/lib/httpd -c "Listen $IP:$PORT" -c "DocumentRoot $HOME/$C9_PID/web" -X
```
The terminal should sit with that command as the last line.

You should be able to visit http://project.username.c9.io/

Use ctrl-c key combination to terminate the web server.

## localhost on Mac OS X, with PHP >= 5.4

Open a terminal window and enter the following command.
```
php -S localhost:8080 -t web app.php
```
The terminal should sit with that command as the last line.

You should be able to visit http://localhost:8080/

User ctrl-c key combination to terminate the web server.
