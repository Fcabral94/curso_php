<?php

$ciudad["colon"] = "5000";
$ciudad["gchu"] = "8000";
$ciudad["cdelu"] = "7000";
$ciudad["parana"] = "1000";

$maxs = array_keys($ciudad, max($ciudad));
print_r ($maxs);
echo max($ciudad);
