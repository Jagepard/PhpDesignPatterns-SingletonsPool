<?php

namespace AntiPatterns\SingletonsPool;

require_once "vendor/autoload.php";

if (SingletonsPool::getInstance("First") !== SingletonsPool::getInstance("Second")) {
    echo "SingletonsPool \n";
}
