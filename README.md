# Log POST

This is a very simple Docker container that logs incoming POST requests to a file. In fact, any requests are logged.

To make the log directory persistent, mount a persistent volume onto `/var/www/html/logs`. 
Make sure the mounted directory allows writing by another user, ie. `chmod -R 777`.

Do your request to the root path, ie. `/`.

Logs are available under `/logs/`. Each request is stored in its own file, with headers and the PHP `$_SERVER` object.