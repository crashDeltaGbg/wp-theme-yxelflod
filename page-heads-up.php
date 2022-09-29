<?php

get_header();

$date_time = get_field('next_event_date_time');

print_r($date_time);

?>

<div data-event="<?php // echo $date_time;  ?>" id="countdown-timer"></div>

<?php

get_footer();

?>