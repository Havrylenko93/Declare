<?php
declare(strict_types=1);

/**
 * declare (directive)
 *
 * The directive section allows the behavior of the declare block to be set.
 *
 * Currently only three directives are recognized:
 * - the ticks directive,
 * - the encoding directive,
 * - the strict_types directive
 */

function tickHandler()
{
    echo 'Will be displayed after every 10 ticks ' . "\u{1F60D}" . nl2br(PHP_EOL); // Еmoji
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
