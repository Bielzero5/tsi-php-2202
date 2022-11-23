<?php
require '../controleDeSessao/controle.php';
session_destroy();
header('Location: /tsi-php-2202/login');