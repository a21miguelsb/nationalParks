<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('uk', array (
  'time' => 
  array (
    'diff.ago.year' => '%count% рiк тому|%count% роки тому|%count% рокiв тому',
    'diff.ago.month' => '%count% мiсяць тому|%count% мiсяцi тому|%count% мiсяцiв тому',
    'diff.ago.day' => '%count% день тому|%count% днi тому|%count% днiв тому',
    'diff.ago.hour' => '%count% годину тому|%count% години тому|%count% годин тому',
    'diff.ago.minute' => '%count% хвилину тому|%count% хвилини тому|%count% хвилин тому',
    'diff.ago.second' => '%count% секунду тому|%count% секунди тому|%count% секунд тому',
    'diff.empty' => 'зараз',
    'diff.in.second' => 'через %count% секунду|через %count% секунди|через %count% секунд',
    'diff.in.hour' => 'через %count% годину|через %count% години|через %count% годин',
    'diff.in.minute' => 'через %count% хвилину|через %count% хвилини|через %count% хвилин',
    'diff.in.day' => 'через %count% день|через %count% днi|через %count% днiв',
    'diff.in.month' => 'через %count% мiсяць|через %count% мiсяцi|через %count% мiсяцiв',
    'diff.in.year' => 'через %count% рiк|через %count% роки|через %count% рокiв',
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
