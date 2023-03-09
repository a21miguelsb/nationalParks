<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('bg', array (
  'time' => 
  array (
    'diff.ago.year' => 'преди 1 година|преди %count% години',
    'diff.ago.month' => 'преди 1 месец|преди %count% месеца',
    'diff.ago.day' => 'преди 1 ден|преди %count% дни',
    'diff.ago.hour' => 'преди 1 час|преди %count% часа',
    'diff.ago.minute' => 'преди 1 минута|преди %count% минути',
    'diff.ago.second' => 'преди 1 секунда|преди %count% секунди',
    'diff.empty' => 'сега',
    'diff.in.second' => 'след 1 секунда|след %count% секунди',
    'diff.in.hour' => 'след 1 час|след %count% часа',
    'diff.in.minute' => 'след 1 минута|след %count% минути',
    'diff.in.day' => 'след 1 ден|след %count% дни',
    'diff.in.month' => 'след 1 месец|след %count% месеца',
    'diff.in.year' => 'след 1 година|след %count% години',
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
