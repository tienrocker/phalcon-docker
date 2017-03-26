<?php

$redis = new Redis();
$redis->connect('redis', 6379);
$redis->auth('secret');
$redis->set('test', 'test', 1111);
$redis->save();
echo $redis->get('test');