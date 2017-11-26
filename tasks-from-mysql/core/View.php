<?php

class View
{

    public static function render($view)
    {
        require Router::load('routes.php')
            ->direct($view);

    }
}