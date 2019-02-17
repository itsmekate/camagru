<?php
  return array(
    // 'post/([0-9]+)' => 'post/view/',
    'post/([a-z]+)/([0-9]+)' => 'post/view/$1/$2',
    'post' => 'post/index',
    // 'feed' => 'post/index',

    // 'feed' => 'feed/list',
  );
?>
