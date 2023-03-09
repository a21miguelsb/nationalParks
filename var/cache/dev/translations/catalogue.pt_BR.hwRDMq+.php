<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('pt_BR', array (
  'time' => 
  array (
    'diff.ago.year' => '1 ano atrás|%count% anos atrás',
    'diff.ago.month' => '1 mês atrás|%count% meses atrás',
    'diff.ago.day' => '1 dia atrás|%count% dias atrás',
    'diff.ago.hour' => '1 hora atrás|%count% horas atrás',
    'diff.ago.minute' => '1 minuto atrás|%count% minutos atrás',
    'diff.ago.second' => '1 segundo atrás|%count% segundos atrás',
    'diff.empty' => 'agora',
    'diff.in.second' => 'em 1 segundo|em %count% segundos',
    'diff.in.hour' => 'em 1 hora|em %count% horas',
    'diff.in.minute' => 'em 1 minuto|em %count% minutos',
    'diff.in.day' => 'em 1 dia|em %count% dias',
    'diff.in.month' => 'em 1 mês|em %count% meses',
    'diff.in.year' => 'em 1 ano|em %count% anos',
  ),
));

$cataloguePt = new MessageCatalogue('pt', array (
  'time' => 
  array (
    'diff.ago.year' => '1 ano atrás|%count% anos atrás',
    'diff.ago.month' => '1 mês atrás|%count% meses atrás',
    'diff.ago.day' => '1 dia atrás|%count% dias atrás',
    'diff.ago.hour' => '1 hora atrás|%count% horas atrás',
    'diff.ago.minute' => '1 minuto atrás|%count% minutos atrás',
    'diff.ago.second' => '1 segundo atrás|%count% segundos atrás',
    'diff.empty' => 'agora',
    'diff.in.second' => 'em 1 segundo|em %count% segundos',
    'diff.in.hour' => 'em 1 hora|em %count% horas',
    'diff.in.minute' => 'em 1 minuto|em %count% minutos',
    'diff.in.day' => 'em 1 dia|em %count% dias',
    'diff.in.month' => 'em 1 mês|em %count% meses',
    'diff.in.year' => 'em 1 ano|em %count% anos',
  ),
));
$catalogue->addFallbackCatalogue($cataloguePt);
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
$cataloguePt->addFallbackCatalogue($catalogueEn);

return $catalogue;
