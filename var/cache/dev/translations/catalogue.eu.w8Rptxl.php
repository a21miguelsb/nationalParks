<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('eu', array (
  'time' => 
  array (
    'diff.ago.year' => 'duela urtebete|duela %count% urte',
    'diff.ago.month' => 'duela hilabete bat|duela %count% hilabete',
    'diff.ago.day' => 'duela egun bat|duela %count% egun',
    'diff.ago.hour' => 'duela ordu bat|duela %count% ordu',
    'diff.ago.minute' => 'duela minutu bat|duela %count% minutu',
    'diff.ago.second' => 'duela segundo bat|duela %count% segundo',
    'diff.empty' => 'orain',
    'diff.in.second' => 'segundo bat barru|%count% segundo barru',
    'diff.in.hour' => 'ordu bat barru|%count% ordu barru',
    'diff.in.minute' => 'minutu bat barru|%count% minutu barru',
    'diff.in.day' => 'egun bat barru|%count% egun barru',
    'diff.in.month' => 'hilabete bat barru|%count% hilabete barru',
    'diff.in.year' => 'urtebete barru|%count% urte barru',
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
