<?php
  return array(
    // '' => 'post/view/$1/$2',
    // 'post/([0-9]+)' => 'post/view/',

    'account/register' => 'account/register',
    'account/index' => 'account/index',
    'account/account' => 'account/index',
    'post/([a-z]+)/([0-9]+)' => 'post/view/$1/$2',
    'post' => 'post/index',

    // 'post//([a-z]+)/([0-9]+)' => 'post/view/',
    // 'feed' => 'post/index',

    // 'feed' => 'feed/list',
  );
?>
