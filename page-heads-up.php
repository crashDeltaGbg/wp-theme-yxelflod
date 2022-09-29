<?php

get_header();

$date_time = get_field('next-event-date-time');

?>

<div data-event="<?php echo $date_time;  ?>" id="countdown-timer"></div>

<?php

get_footer();

?>