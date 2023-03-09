<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('da', array (
  'time' => 
  array (
    'diff.ago.year' => '%count% år siden',
    'diff.ago.month' => '1 måned siden|%count% måneder',
    'diff.ago.day' => '1 dag siden|%count% dage siden',
    'diff.ago.hour' => '1 time siden|%count% timer siden',
    'diff.ago.minute' => '1 minut siden|%count% minutter siden',
    'diff.ago.second' => '1 sekund siden|%count% sekunder siden',
    'diff.empty' => 'nu',
    'diff.in.second' => 'om 1 sekund|om %count% sekunder',
    'diff.in.hour' => 'om 1 time|om %count% timer',
    'diff.in.minute' => 'om 1 minut|om %count% minutter',
    'diff.in.day' => 'om 1 dag|om %count% dage',
    'diff.in.month' => 'om 1 måned|om %count% måneder',
    'diff.in.year' => 'om %count% år',
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
