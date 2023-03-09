<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('it', array (
  'time' => 
  array (
    'diff.ago.year' => '1 anno fa|%count% anni fa',
    'diff.ago.month' => '1 mese fa|%count% mesi fa',
    'diff.ago.day' => '1 giorno fa|%count% giorni fa',
    'diff.ago.hour' => '1 ora fa|%count% ore fa',
    'diff.ago.minute' => '1 minuto fa|%count% minuti fa',
    'diff.ago.second' => '1 secondo fa|%count% secondi fa',
    'diff.empty' => 'ora',
    'diff.in.second' => 'tra 1 secondo|tra %count% secondi',
    'diff.in.hour' => 'tra 1 ora|tra %count% ore',
    'diff.in.minute' => 'tra 1 minuto|tra %count% minuti',
    'diff.in.day' => 'tra 1 giorno|tra %count% giorni',
    'diff.in.month' => 'tra 1 mese|tra %count% mesi',
    'diff.in.year' => 'tra 1 anno|tra %count% anni',
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
