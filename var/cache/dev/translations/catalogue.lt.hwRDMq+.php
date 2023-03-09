<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('lt', array (
  'time' => 
  array (
    'diff.ago.year' => 'prieš metus|prieš %count% metus|prieš %count% metų',
    'diff.ago.month' => 'prieš mėnesį|prieš %count% mėnesius|prieš %count% mėnesių',
    'diff.ago.day' => 'prieš dieną|prieš %count% dienas|prieš %count% dienų',
    'diff.ago.hour' => 'prieš valandą|prieš %count% valandas|prieš %count% valandų',
    'diff.ago.minute' => 'prieš minutę|prieš %count% minutes|prieš %count% minučių',
    'diff.ago.second' => 'prieš sekundę|prieš %count% sekundes|prieš %count% sekundžių',
    'diff.empty' => 'dabar',
    'diff.in.second' => 'po sekundės|po %count% sekundžių|po %count% sekundžių',
    'diff.in.hour' => 'po valandos|po %count% valandų|po %count% valandų',
    'diff.in.minute' => 'po minutės|po %count% minučių|po %count% minučių',
    'diff.in.day' => 'po dienos|po %count% dienų|po %count% dienų',
    'diff.in.month' => 'po mėnesio|po %count% mėnesių|po %count% mėnesių',
    'diff.in.year' => 'po metų|po %count% metų|po %count% metų',
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
