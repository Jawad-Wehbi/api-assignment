<?php
// get christmas date and today's daate
$christmas = date('Y-12-25');
$today     = date('Y-m-d');
// if today is after this year's christmas
if ($today > $christmas) {
    $christmas = date('Y-12-25', strtotime($christmas.'+1 year'));
}
// if today is before this year's christmas
echo round((strtotime($christmas) - strtotime($today)) / 86400);
?>