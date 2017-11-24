<?php

$query = require('bootstrap.php');
$tasks = $query->selectAll('tasks');

require('view.php');

?>