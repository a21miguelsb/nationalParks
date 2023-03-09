<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('sr_Latin', array (
  'time' => 
  array (
    'diff.ago.year' => '{1}pre 1 godinu|[2,4]pre %count% godine|[5,Inf]pre %count% godina',
    'diff.ago.month' => '{1}pre 1 mesec|[2,4]pre %count% meseca|[5,Inf]pre %count% meseci',
    'diff.ago.day' => '{1}pre 1 dan|[2,Inf]pre %count% dana',
    'diff.ago.hour' => '{1}pre 1 sat|[2,4]pre %count% sata|[5,Inf]pre %count% sati',
    'diff.ago.minute' => '{1}pre 1 minut|[2,Inf]pre %count% minuta',
    'diff.ago.second' => '{1}pre 1 sekundu|[2,5]pre %count% sekunde|[6,Inf]pre %count% sekundi',
    'diff.empty' => 'sada',
    'diff.in.second' => '{1}za 1 sekundu|[2,5]za %count% sekunde|[6,Inf]za %count% sekundi',
    'diff.in.hour' => '{1}za 1 sat|[2,5]za %count% sata|[6,Inf]za %count% sati',
    'diff.in.minute' => '{1}za 1 minut|[2,Inf]za %count% minuta',
    'diff.in.day' => '{1}za 1 dan|[2,Inf]za %count% dana',
    'diff.in.month' => '{1}za 1 mesec|[2,5]za %count% meseca|[6,Inf]za %count% meseci',
    'diff.in.year' => '{1}za 1 godinu|[2,Inf]za %count% godine',
  ),
));

$catalogueSr = new MessageCatalogue('sr', array (
));
$catalogue->addFallbackCatalogue($catalogueSr);
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
$catalogueSr->addFallbackCatalogue($catalogueEn);

return $catalogue;
