<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('hu', array (
  'time' => 
  array (
    'diff.ago.year' => '1 éve|%count% éve',
    'diff.ago.month' => '1 hónapja|%count% hónapja',
    'diff.ago.day' => '1 napja|%count% napja',
    'diff.ago.hour' => '1 órája|%count% órája',
    'diff.ago.minute' => '1 perce|%count% perce',
    'diff.ago.second' => '1 másodperce|%count% másodperce',
    'diff.empty' => 'most',
    'diff.in.second' => '1 másodperc múlva|%count% másodperc múlva',
    'diff.in.hour' => '1 óra múlva|%count% óra múlva',
    'diff.in.minute' => '1 perc múlva|%count% perc múlva',
    'diff.in.day' => '1 nap múlva|%count% nap múlva',
    'diff.in.month' => '1 hónap múlva|%count% hónap múlva',
    'diff.in.year' => '1 év múlva|%count% év múlva',
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
