<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('ky', array (
  'time' => 
  array (
    'diff.ago.year' => '%count% жыл мурун',
    'diff.ago.month' => '%count% ай мурун',
    'diff.ago.day' => '%count% күн мурун',
    'diff.ago.hour' => '%count% саат мурун',
    'diff.ago.minute' => '%count% минута мурун',
    'diff.ago.second' => '%count% секунд мурун',
    'diff.empty' => 'азыр',
    'diff.in.second' => '%count% секундадан кийин',
    'diff.in.hour' => '%count% сааттан кийин',
    'diff.in.minute' => '%count% минутадан кийин',
    'diff.in.day' => '%count% күндөн кийин',
    'diff.in.month' => '%count% айдан кийин',
    'diff.in.year' => '%count% жылдан кийин',
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
