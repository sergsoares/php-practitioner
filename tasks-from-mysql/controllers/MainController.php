<?php

$tasks = $app['database']->selectAll('tasks');
require('view/index.view.php');