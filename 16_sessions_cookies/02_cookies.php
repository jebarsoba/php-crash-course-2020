<?php

// How to set cookies
setcookie('name', 'Jorge', time() + 60, '/');
var_dump($_COOKIE);

// How to update cookie

// How to delete cookie
setcookie('name', 'Jorge', time() - 60, '/');