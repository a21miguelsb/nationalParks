<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('id', array (
  'time' => 
  array (
    'diff.ago.year' => '1 tahun yang lalu|%count% tahun yang lalu',
    'diff.ago.month' => '1 bulan yang lalu|%count% bulan yang lalu',
    'diff.ago.day' => '1 hari yang lalu|%count% hari yang lalu',
    'diff.ago.hour' => '1 jam yang lalu|%count% jam yang lalu',
    'diff.ago.minute' => '1 menit yang lalu|%count% menit yang lalu',
    'diff.ago.second' => '1 detik yang lalu|%count% detik yang lalu',
    'diff.empty' => 'baru saja',
    'diff.in.second' => 'dalam 1 detik|dalam %count% detik',
    'diff.in.hour' => 'dalam 1 jam|dalam %count% jam',
    'diff.in.minute' => 'dalam 1 menit|dalam %count% menit',
    'diff.in.day' => 'dalam 1 hari|dalam %count% hari',
    'diff.in.month' => 'dalam 1 bulan|dalam %count% bulans',
    'diff.in.year' => 'dalam 1 tahun|dalam %count% tahun',
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
