<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('nn', array (
  'time' => 
  array (
    'diff.ago.year' => '%count% år sidan',
    'diff.ago.month' => '1 månad sidan|%count% månader',
    'diff.ago.day' => '1 dag sidan|%count% dagar sidan',
    'diff.ago.hour' => '1 time sidan|%count% timar sidan',
    'diff.ago.minute' => '1 minutt sidan|%count% minutt sidan',
    'diff.ago.second' => '1 sekund sidan|%count% sekund sidan',
    'diff.empty' => 'no',
    'diff.in.second' => 'om 1 sekund|om %count% sekund',
    'diff.in.hour' => 'om 1 time|om %count% timar',
    'diff.in.minute' => 'om 1 minutt|om %count% minutt',
    'diff.in.day' => 'om 1 dag|om %count% dagar',
    'diff.in.month' => 'om 1 månad|om %count% månader',
    'diff.in.year' => 'om %count% år',
  ),
));

$catalogueNo = new MessageCatalogue('no', array (
));
$catalogue->addFallbackCatalogue($catalogueNo);
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
$catalogueNo->addFallbackCatalogue($catalogueEn);

return $catalogue;
