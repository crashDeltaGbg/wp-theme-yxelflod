<?php

get_header();

$date_time = get_field('next_event_date_time');
$canceled = get_field('next_event_cancel');

if (!$canceled) : 

?>

<div data-event="<?php echo $date_time;  ?>" id="countdown-timer"></div>

<?php else : ?>

  <div data-canceled="<?php echo $canceled; ?>" id="canceled"></div>

<?php

endif;

get_footer();

?>