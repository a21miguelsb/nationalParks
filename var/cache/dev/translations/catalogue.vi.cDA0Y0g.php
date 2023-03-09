<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('vi', array (
  'time' => 
  array (
    'diff.ago.year' => '1 năm trước|%count% năm trước',
    'diff.ago.month' => '1 tháng trước|%count% tháng trước',
    'diff.ago.day' => '1 ngày trước|%count% ngày trước',
    'diff.ago.hour' => '1 giờ trước|%count% giờ trước',
    'diff.ago.minute' => '1 phút trước|%count% phút trước',
    'diff.ago.second' => '1 giây trước|%count% giây trước',
    'diff.empty' => 'bây giờ',
    'diff.in.second' => 'trong 1 giây|trong %count% giây',
    'diff.in.hour' => 'trong 1 giờ|trong %count% giờ',
    'diff.in.minute' => 'trong 1 phút|trong %count% phút',
    'diff.in.day' => 'trong 1 ngày|trong %count% ngày',
    'diff.in.month' => 'trong 1 tháng|trong %count% tháng',
    'diff.in.year' => 'trong 1 năm|trong %count% năm',
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
