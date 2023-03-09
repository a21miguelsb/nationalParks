<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('tr', array (
  'time' => 
  array (
    'diff.ago.year' => '%count% yıl önce',
    'diff.ago.month' => '%count% ay önce',
    'diff.ago.day' => '%count% gün önce',
    'diff.ago.hour' => '%count% saat önce',
    'diff.ago.minute' => '%count% dakika önce',
    'diff.ago.second' => '%count% saniye önce',
    'diff.empty' => 'şimdi',
    'diff.in.second' => '%count% saniye içinde',
    'diff.in.hour' => '%count% saat içinde',
    'diff.in.minute' => '%count% dakika içinde',
    'diff.in.day' => '%count% gün içinde',
    'diff.in.month' => '%count% ay içinde',
    'diff.in.year' => '%count% yıl içinde',
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
