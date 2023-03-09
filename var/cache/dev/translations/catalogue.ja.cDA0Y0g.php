<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('ja', array (
  'time' => 
  array (
    'diff.ago.year' => '%count%年前',
    'diff.ago.month' => '%count%ヶ月前',
    'diff.ago.day' => '%count%日前',
    'diff.ago.hour' => '%count%時間前',
    'diff.ago.minute' => '%count%分前',
    'diff.ago.second' => '%count%秒前',
    'diff.empty' => '今',
    'diff.in.second' => '%count%秒後',
    'diff.in.hour' => '%count%日後',
    'diff.in.minute' => '%count%分後',
    'diff.in.day' => '%count%日後',
    'diff.in.month' => '%count%ヶ月後',
    'diff.in.year' => '%count%年後',
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
