<?php

function requestVar($key, $default)
{
    if (isset($_GET [$key])) {
        $value = $_GET [$key] ?: $default;
    } else {
        $value = $default;
    }
    return $value;
}
