<?php

$db = @mysqli_connect('localhost', 'root', '', 'gb') or die('Didn\'t connect with DB');
mysqli_set_charset($db, "utf8") or die('Didn\'t set encoding');
