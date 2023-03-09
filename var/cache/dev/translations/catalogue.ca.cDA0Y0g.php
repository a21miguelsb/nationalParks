<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('ca', array (
  'time' => 
  array (
    'diff.ago.year' => 'fa 1 any|fa %count% anys',
    'diff.ago.month' => 'fa 1 mes|fa %count% mesos',
    'diff.ago.day' => 'fa 1 dia|fa %count% dies',
    'diff.ago.hour' => 'fa 1 hora|fa %count% hores',
    'diff.ago.minute' => 'fa 1 minut|fa %count% minuts',
    'diff.ago.second' => 'fa 1 segon|fa %count% segons',
    'diff.empty' => 'ara',
    'diff.in.second' => 'd\'aquí 1 segon|d\'aquí %count% segons',
    'diff.in.hour' => 'd\'aquí 1 hora|d\'aquí %count% hores',
    'diff.in.minute' => 'd\'aquí 1 minut|d\'aquí %count% minuts',
    'diff.in.day' => 'd\'aquí 1 dia|d\'aquí %count% dies',
    'diff.in.month' => 'd\'aquí 1 mes|d\'aquí %count% mesos',
    'diff.in.year' => 'd\'aquí 1 any|d\'aquí %count% anys',
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
