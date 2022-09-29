<?php

get_header();

$date_time = get_field('next-event-date-time');

?>

<div data-date-time="<?php echo $date_time;  ?>" id="countdown-timer"></div>