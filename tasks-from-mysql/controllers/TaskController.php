<?php

$tasks = $app['database']->selectAll('tasks');
require('view/tasks.view.php');