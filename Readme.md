# Last 10 callers / Asterisk cdr db

Put the project on a php enabled webserver.
Php should be able to connect to a mysql/maria database.

Create file db_password.php with content like:


```

<?php

$dbPassword = 'my_secret_password';

```

... and put in the password to your 'asterisk' cdr db


You might want to set the modes of this file like:

```
-rw-r----- 1 root www-data   31 Apr  5 15:52 db_password.php
```

... assuming the web server runs as group `www-data`. 
This avoid other users on the host being able to see the
db password.


