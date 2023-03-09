<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('de', array (
  'time' => 
  array (
    'diff.ago.year' => 'vor einem Jahr|vor %count% Jahren',
    'diff.ago.month' => 'vor einem Monat|vor %count% Monaten',
    'diff.ago.day' => 'vor einem Tag|vor %count% Tagen',
    'diff.ago.hour' => 'vor einer Stunde|vor %count% Stunden',
    'diff.ago.minute' => 'vor einer Minute|vor %count% Minuten',
    'diff.ago.second' => 'vor einer Sekunde|vor %count% Sekunden',
    'diff.empty' => 'jetzt',
    'diff.in.second' => 'in einer Sekunde|in %count% Sekunden',
    'diff.in.hour' => 'in einer Stunde|in %count% Stunden',
    'diff.in.minute' => 'in einer Minute|in %count% Minuten',
    'diff.in.day' => 'in einem Tag|in %count% Tagen',
    'diff.in.month' => 'in einem Monat|in %count% Monaten',
    'diff.in.year' => 'in einem Jahr|in %count% Jahren',
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
