<?php
    $pass = password_hash(123456,PASSWORD_BCRYPT);
    echo $pass;
    var_dump(password_verify(123456, $pass));

?>