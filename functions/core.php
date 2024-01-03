<?php

function dd()
{
    echo '<pre>';
    foreach (func_get_args() as $arg) {
        var_dump($arg);
    }
    echo '</pre>';
    die();
}
