<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('ar', array (
  'time' => 
  array (
    'diff.ago.year' => '{1}منذ سنة|{2}منذ سنتين|[3,9]منذ %count% سنوات|[10,+Inf]منذ %count% سنة',
    'diff.ago.month' => '{1}منذ شهر|{2}منذ شهرين|[2,9]منذ %count% أشهر|[10,+Inf]منذ %count% شهور',
    'diff.ago.day' => '{1} منذ يوم|{2}منذ يومين|[2,10]منذ %count% ايام|[11,+Inf]منذ %count% يوم',
    'diff.ago.hour' => '{1}منذ ساعة|{2}منذ ساعتين|[2,10]منذ %count% ساعات|[11,+Inf]منذ %count% ساعة',
    'diff.ago.minute' => '{1}منذ دقيقة واحدة|{2}منذ دقيقتين|[2,10]منذ %count% دقائق|[11,+Inf]منذ %count% دقيقة',
    'diff.ago.second' => '{1}منذ ثانية واحدة|{2}منذ ثانيتين|[2,10]منذ %count% ثواني|[11,+Inf]منذ %count% ثانية',
    'diff.empty' => 'الان',
    'diff.in.second' => '{1}في خلال ثانية|{2}في خلال ثانيتين|[3,10]في خلال %count% ثواني|[11,+Inf]في خلال %count% ثانية',
    'diff.in.hour' => '{1}في خلال ساعة|{2}في خلال ساعتين|[3,10]في خلال %count% ساعات|[11,+Inf]في خلال %count% ساعة',
    'diff.in.minute' => '{1}في خلال دقيقة|{2}في خلال دقيقتين|[3,10]في خلال %count% دقائق|[11,+Inf]في خلال %count% دقيقة',
    'diff.in.day' => '{1}في خلال يوم|{2}في خلال يومين|[3,10]في خلال %count% ايام|[11,+Inf]في خلال %count% يوم',
    'diff.in.month' => '{1}في خلال شهر|{2}في خلال شهرين|[3,10]في خلال %count% أشهر|[11,+Inf]في خلال %count% شهر',
    'diff.in.year' => '{1}في خلال سنة|{2}في خلال سنتين|[3,10]في خلال %count% سنوات|[11,+Inf]في خلال %count% سنة',
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
