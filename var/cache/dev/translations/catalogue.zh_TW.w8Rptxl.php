<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('zh_TW', array (
  'time' => 
  array (
    'diff.ago.year' => '%count% 年前',
    'diff.ago.month' => '%count% 月前',
    'diff.ago.day' => '%count% 天前',
    'diff.ago.hour' => '%count% 小時前',
    'diff.ago.minute' => '%count% 分鐘前',
    'diff.ago.second' => '%count% 秒前',
    'diff.empty' => '剛才',
    'diff.in.second' => '%count% 秒後',
    'diff.in.hour' => '%count% 小時後',
    'diff.in.minute' => '%count% 分鐘後',
    'diff.in.day' => '%count% 天後',
    'diff.in.month' => '%count% 個月後',
    'diff.in.year' => '%count% 年後',
  ),
));

$catalogueZh = new MessageCatalogue('zh', array (
  'time' => 
  array (
    'diff.ago.year' => '%count% 年前',
    'diff.ago.month' => '%count% 个月前',
    'diff.ago.day' => '%count% 天前',
    'diff.ago.hour' => '%count% 小时前',
    'diff.ago.minute' => '%count% 分钟前',
    'diff.ago.second' => '%count% 秒前',
    'diff.empty' => '刚才',
    'diff.in.second' => '%count% 秒后',
    'diff.in.hour' => '%count% 小时后',
    'diff.in.minute' => '%count% 分钟后',
    'diff.in.day' => '%count% 天后',
    'diff.in.month' => '%count% 个月后',
    'diff.in.year' => '%count% 年后',
  ),
));
$catalogue->addFallbackCatalogue($catalogueZh);
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
$catalogueZh->addFallbackCatalogue($catalogueEn);

return $catalogue;
