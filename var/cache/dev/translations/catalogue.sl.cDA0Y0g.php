<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('sl', array (
  'time' => 
  array (
    'diff.ago.year' => '{1}pred 1 letom|{2}pred %count% letoma|[3, Inf]pred %count% leti',
    'diff.ago.month' => '{1}pred 1 mesecem|{2}pred %count% mesecema|[3, Inf]pred %count% meseci',
    'diff.ago.day' => '{1}pred 1 dnevom|{2}pred %count% dnevoma|[3, Inf]pred %count% dnevi',
    'diff.ago.hour' => '{1}pred 1 uro|{2}pred %count% urama|[3, Inf]pred %count% urami',
    'diff.ago.minute' => '{1}pred 1 minuto|{2}pred %count% minutama|[3, Inf]pred %count% minutami',
    'diff.ago.second' => '{1}pred 1 sekundo|{2}pred %count% sekundama|[3, Inf]pred %count% sekundami',
    'diff.empty' => 'pravkar',
    'diff.in.second' => '{1}za 1 sekundo|{2}za %count% sekundi|[3, Inf]za %count% sekunde',
    'diff.in.hour' => '{1}za 1 uro|{2}za %count% uri|[3, Inf]za %count% ure',
    'diff.in.minute' => '{1}za 1 minuto|{2}za %count% minuti|[3, Inf]za %count% minute',
    'diff.in.day' => '{1}za 1 dan|{2}za %count% dneva|[3, Inf]za %count% dni',
    'diff.in.month' => '{1}za 1 mesec|{2}za %count% meseca|[3, Inf]za %count% mesece',
    'diff.in.year' => '{1}za 1 leto|{2}za %count% leti|[3, Inf]za %count% leta',
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
