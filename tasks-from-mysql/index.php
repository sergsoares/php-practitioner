<?php

$query = require('core/bootstrap.php');
$tasks = $query->selectAll('tasks');

require('view/view.php');

?>