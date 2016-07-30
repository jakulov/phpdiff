<?php

require 'vendor/autoload.php';

echo '
<style>
    .diff td {
        vertical-align: top;
    }
    .diff span {
        display: block;
        padding: 0 8px;
        border: 1px solid transparent;
        min-width: 300px;
    }
    .diffDeleted span {
        background: #ffb8b3;
        border-color: #ffa3a0;
    }
    .diffInserted span {
        background: #a9ffb0;
        border-color: #5bff7d;
    }
</style>
';

$text1 = "
line A
line B
line E";

$text2 = "
line A
line C
line D
line E";

$diff = \jakulov\phpdiff\Diff::compare($text1, $text2, false);

echo \jakulov\phpdiff\Diff::toTable($diff, '', '');
