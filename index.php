
<?php

function solution($N)
{
    $binary = decbin($N);

    $length = 0;
    $binary = str_split($binary);
    $highest = 0;
    $count = true;
    $chighest = 0;

    for ($i = 0; $i < count($binary); $i++) {
        if ($binary[$i] == 0) {
            $count = true;
        } else {

            $count = false;
            if ($highest < $chighest)
                $highest = $chighest;
        }



        if ($count) {
            $length += 1;
            $chighest = $length;
        } else {
            $chighest = $length;
            $length = 0;
        }
    }


    return $highest;
}

?>
