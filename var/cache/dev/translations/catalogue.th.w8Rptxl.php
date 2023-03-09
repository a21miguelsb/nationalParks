<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('th', array (
  'time' => 
  array (
    'diff.ago.year' => '%count% ปีที่แล้ว',
    'diff.ago.month' => '%count% เดือนที่แล้ว',
    'diff.ago.day' => '%count% วันที่แล้ว',
    'diff.ago.hour' => '%count% ชั่วโมงที่แล้ว',
    'diff.ago.minute' => '%count% นาทีที่แล้ว',
    'diff.ago.second' => '%count% วินาทีที่แล้ว',
    'diff.empty' => 'ณ ตอนนี้',
    'diff.in.second' => 'ใน %count% วินาที',
    'diff.in.hour' => 'ใน %count% ชั่วโมง',
    'diff.in.minute' => 'ใน %count% นาที',
    'diff.in.day' => 'ใน %count% วัน',
    'diff.in.month' => 'ใน %count% เดือน',
    'diff.in.year' => 'ใน %count% ปี',
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
