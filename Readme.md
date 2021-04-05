# Last 10 callers / Asterisk cdr db

Put the project on a php enabled webserver.
Php should be able to connect to a mysql/maria database.

Create file db_password.php with content like:


```

<?php

$dbPassword = 'my_secret_password';

```

... and put in the password to your 'asterisk' cdr db



