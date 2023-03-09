<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('cs', array (
  'time' => 
  array (
    'diff.ago.year' => 'před rokem|[2, Inf]před %count% roky',
    'diff.ago.month' => 'před měsícem|[2, Inf]před %count% měsíci',
    'diff.ago.day' => '{1}včera|{2}předevčírem|[3, Inf]před %count% dny',
    'diff.ago.hour' => 'před hodinou|[2, Inf]před %count% hodinami',
    'diff.ago.minute' => 'před minutou|[2, Inf]před %count% minutami',
    'diff.ago.second' => 'před sekundou|[2, Inf]před %count% sekundami',
    'diff.empty' => 'nyní',
    'diff.in.second' => '{1}za sekundu|[2, 4]za %count% sekundy|[5, Inf]za %count% sekund',
    'diff.in.hour' => '{1}za hodinu|[2, 4]za %count% hodiny|[5, Inf]za %count% hodin',
    'diff.in.minute' => '{1}za minutu|[2, 4]za %count% minuty|[5, Inf]za %count% minut',
    'diff.in.day' => '{1}zítra|{2}pozítří|[3, 4]za %count% dny|[5, Inf]za %count% dnů',
    'diff.in.month' => '{1}za měsíc|[2, 4]za %count% měsíce|[5, Inf]za %count% měsíců',
    'diff.in.year' => '{1}za rok|[2, 4]za %count% roky|[5, Inf]za %count% let',
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
