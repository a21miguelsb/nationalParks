<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('fi', array (
  'time' => 
  array (
    'diff.ago.year' => '1 vuosi sitten|%count% vuotta sitten',
    'diff.ago.month' => '1 kuukausi sitten|%count% kuukautta sitten',
    'diff.ago.day' => '1 päivä sitten|%count% päivää sitten',
    'diff.ago.hour' => '1 tunti sitten|%count% tuntia sitten',
    'diff.ago.minute' => '1 minuutti sitten|%count% minuuttia sitten',
    'diff.ago.second' => '1 sekuntti sitten|%count% sekunttia sitten',
    'diff.empty' => 'nyt',
    'diff.in.second' => 'yhden sekunnin päästä|%count% sekunnin päästä',
    'diff.in.hour' => 'yhden tunnin päästä|%count% tunnin päästä',
    'diff.in.minute' => 'yhden minuutin päästä|%count% minuutin päästä',
    'diff.in.day' => 'yhden päivän päästä|%count% päivän päästä',
    'diff.in.month' => 'yhden kuukauden päästä|%count% kuukauden päästä',
    'diff.in.year' => 'yhden vuoden päästä|%count% vuoden päästä',
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
