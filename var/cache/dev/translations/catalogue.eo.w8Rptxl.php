<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('eo', array (
  'time' => 
  array (
    'diff.ago.year' => 'antaŭ 1 jaro|antaŭ %count% jaroj',
    'diff.ago.month' => 'antaŭ 1 monato|antaŭ %count% monatoj',
    'diff.ago.day' => 'antaŭ 1 tago|antaŭ %count% tagoj',
    'diff.ago.hour' => 'antaŭ 1 horo|antaŭ %count% horoj',
    'diff.ago.minute' => 'antaŭ 1 minuto|antaŭ %count% minutoj',
    'diff.ago.second' => 'antaŭ 1 sekundo|antaŭ %count% sekundoj',
    'diff.empty' => 'nun',
    'diff.in.second' => 'post 1 sekundo|post %count% sekundoj',
    'diff.in.hour' => 'post 1 horo|post %count% horoj',
    'diff.in.minute' => 'post 1 minuto|post %count% minutoj',
    'diff.in.day' => 'post 1 tago|post %count% tagoj',
    'diff.in.month' => 'post 1 monato|post %count% monatoj',
    'diff.in.year' => 'post 1 jaro|post %count% jaroj',
  ),
));

$catalogueEn = new MessageCatalogue('en', array (
  'time' => 
  array (
    'diff.ago.year' => '1 year ago|%count% years ago',
    'diff.ago.month' => '1 month ago|%count% months ago',
    'diff.ago.day' => '1 day ago|%count% days ago',
    'diff.ago.hour' => '1 hour ago|%count% hours ago',
    'diff.ago.minute' => '1 minute ago|%count% minutes ago',
    'diff.ago.second' => '1 second ago|%count% seconds ago',
    'diff.empty' => 'now',
    'diff.in.second' => 'in 1 second|in %count% seconds',
    'diff.in.hour' => 'in 1 hour|in %count% hours',
    'diff.in.minute' => 'in 1 minute|in %count% minutes',
    'diff.in.day' => 'in 1 day|in %count% days',
    'diff.in.month' => 'in 1 month|in %count% months',
    'diff.in.year' => 'in 1 year|in %count% years',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEn);

return $catalogue;
