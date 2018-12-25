<?php
    $redis = new Redis();
    $redis->connect('/var/run/redis.socket');
    echo "Connection to server success" . PHP_EOL;

    $redis->set("test","Hello");

    echo "REDIS TEST" . $redis-get("test");
