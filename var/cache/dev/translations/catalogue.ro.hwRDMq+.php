<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('ro', array (
  'time' => 
  array (
    'diff.ago.year' => '%count% an în urmă|%count% ani în urmă|%count% de ani în urmă',
    'diff.ago.month' => '%count% lună în urmă|%count% luni în urmă|%count% de luni în urmă',
    'diff.ago.day' => '%count% zi în urmă|%count% zile în urmă|%count% de zile în urmă',
    'diff.ago.hour' => '%count% oră în urmă|%count% ore în urmă|%count% de ore în urmă',
    'diff.ago.minute' => '%count% minut în urmă|%count% minute în urmă|%count% de minute în urmă',
    'diff.ago.second' => '%count% secundă în urmă|%count% secunde în urmă|%count% de secunde în urmă',
    'diff.empty' => 'acum',
    'diff.in.second' => 'peste %count% secundă|peste %count% secunde|peste %count% de secunde',
    'diff.in.hour' => 'peste %count% oră|peste %count% ore|peste %count% de ore',
    'diff.in.minute' => 'peste %count% minut|peste %count% minute|peste %count% de minute',
    'diff.in.day' => 'peste %count% zi|peste %count% zile|peste %count% de zile',
    'diff.in.month' => 'peste %count% lună|peste %count% luni|peste %count% de luni',
    'diff.in.year' => 'peste %count% an|peste %count% ani|peste %count% de ani',
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
