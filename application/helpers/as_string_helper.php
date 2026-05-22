<?php

function add_dashes($data)
{
    return strtolower(str_replace(' ', '-', $data));
}

function remove_underscores($data)
{
   return ucwords(str_replace('_', ' ', $data));
}
