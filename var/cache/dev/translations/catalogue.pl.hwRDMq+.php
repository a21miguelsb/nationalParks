<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('pl', array (
  'time' => 
  array (
    'diff.ago.year' => 'rok temu|%count% lata temu|%count% lat temu',
    'diff.ago.month' => 'miesiąc temu|%count% miesiące temu|%count% miesięcy temu',
    'diff.ago.day' => 'wczoraj|%count% dni temu|%count% dni temu',
    'diff.ago.hour' => 'godzinę temu|%count% godziny temu|%count% godzin temu',
    'diff.ago.minute' => 'minutę temu|%count% minuty temu|%count% minut temu',
    'diff.ago.second' => 'sekundę temu|%count% sekundy temu|%count% sekund temu',
    'diff.empty' => 'teraz',
    'diff.in.second' => 'za sekundę|za %count% sekundy|za %count% sekund',
    'diff.in.hour' => 'za godzinę|za %count% godziny|za %count% godzin',
    'diff.in.minute' => 'za minutę|za %count% minuty|za %count% minut',
    'diff.in.day' => 'jutro|za %count% dni|za %count% dni',
    'diff.in.month' => 'za miesiąc|za %count% miesiące|za %count% miesięcy',
    'diff.in.year' => 'za rok|za %count% lata|za %count% lat',
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
