<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('sk', array (
  'time' => 
  array (
    'diff.ago.year' => 'pred rokom|[2, Inf]pred %count% rokmi',
    'diff.ago.month' => 'pred mesiacom|[2, Inf]pred %count% mesiacmi',
    'diff.ago.day' => '{1}včera|{2}predvčerom|[3, Inf]pred %count% dňami',
    'diff.ago.hour' => 'pred hodinou|[2, Inf]pred %count% hodinami',
    'diff.ago.minute' => 'pred minútou|[2, Inf]pred %count% minútami',
    'diff.ago.second' => 'pred sekundou|[2, Inf]pred %count% sekundami',
    'diff.empty' => 'teraz',
    'diff.in.second' => '{1}za sekundu|[2, 4]za %count% sekundy|[5, Inf]za %count% sekúnd',
    'diff.in.hour' => '{1}za hodinu|[2, 4]za %count% hodiny|[5, Inf]za %count% hodín',
    'diff.in.minute' => '{1}za minútu|[2, 4]za %count% minúty|[5, Inf]za %count% minút',
    'diff.in.day' => '{1}zajtra|{2}pozajtra|[3, 4]za %count% dni|[5, Inf]za %count% dní',
    'diff.in.month' => '{1}za mesiac|[2, 4]za %count% mesiace|[5, Inf]za %count% mesiacov',
    'diff.in.year' => '{1}za rok|[2, 4]za %count% roky|[5, Inf]za %count% rokov',
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
