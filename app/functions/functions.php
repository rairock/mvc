<?php

function dd($params = [])
{
    echo '<pre>';
    print_r($params);
    echo '</pre>';
    die;
}

