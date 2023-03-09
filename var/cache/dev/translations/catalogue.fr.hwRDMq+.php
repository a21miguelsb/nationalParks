<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('fr', array (
  'time' => 
  array (
    'diff.ago.year' => 'il y a 1 an|il y a %count% ans',
    'diff.ago.month' => 'il y a 1 mois|il y a %count% mois',
    'diff.ago.day' => 'il y a 1 jour|il y a %count% jours',
    'diff.ago.hour' => 'il y a 1 heure|il y a %count% heures',
    'diff.ago.minute' => 'il y a 1 minute|il y a %count% minutes',
    'diff.ago.second' => 'il y a 1 seconde|il y a %count% secondes',
    'diff.empty' => 'maintenant',
    'diff.in.second' => 'dans 1 seconde|dans %count% secondes',
    'diff.in.hour' => 'dans 1 heure|dans %count% heures',
    'diff.in.minute' => 'dans 1 minute|dans %count% minutes',
    'diff.in.day' => 'dans 1 jour|dans %count% jours',
    'diff.in.month' => 'dans 1 mois|dans %count% mois',
    'diff.in.year' => 'dans 1 an|dans %count% ans',
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
