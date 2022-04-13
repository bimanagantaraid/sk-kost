<?php

function ratingcount($bintang, $user)
{
    if ($user == 0) {
        $rate = 0;
        return $rate;
    }
    $rate = (int)($bintang / $user);
    return $rate;
}
