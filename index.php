<?php

function tickHandler()
{
    echo 'Will be displayed after every 10 ticks' . nl2br(PHP_EOL);
}

register_tick_function('tickHandler');

$start = microtime(true);

declare(ticks=10) {
    for ($i=0; $i < 9000; $i++) {
        echo nl2br($i . PHP_EOL);
    }
}

echo "<pre>";
var_dump($end = microtime(true) - $start);
echo "</pre>";
