<?php

// require 'connection.php';
// echo '<br>This will not be executed if connection.php is not found.';

include 'connection.php';
echo '<br>This will be executed even if connection.php is not found.';

// Similarly we use require_once and include_once, the only difference is they include files for once not every time.

// Learn More From Links Given Below:
// https://www.php.net/manual/en/function.require.php
// https://www.php.net/manual/en/function.include.php
// https://www.php.net/manual/en/function.require-once.php
// https://www.php.net/manual/en/function.include-once.php