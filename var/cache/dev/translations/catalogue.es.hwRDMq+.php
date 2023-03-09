<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('es', array (
  'time' => 
  array (
    'diff.ago.year' => 'hace 1 año|hace %count% años',
    'diff.ago.month' => 'hace 1 mes|hace %count% meses',
    'diff.ago.day' => 'hace 1 día|hace %count% días',
    'diff.ago.hour' => 'hace 1 hora|hace %count% horas',
    'diff.ago.minute' => 'hace 1 minuto|hace %count% minutos',
    'diff.ago.second' => 'hace 1 segundo|hace %count% segundos',
    'diff.empty' => 'ahora',
    'diff.in.second' => 'en 1 segundo|en %count% segundos',
    'diff.in.hour' => 'en 1 hora|en %count% horas',
    'diff.in.minute' => 'en 1 minuto|en %count% minutos',
    'diff.in.day' => 'en 1 día|en %count% días',
    'diff.in.month' => 'en 1 mes|en %count% meses',
    'diff.in.year' => 'en 1 año|en %count% años',
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
