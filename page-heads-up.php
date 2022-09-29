<?php

get_header();

$date_time = get_field('next_event_date_time');

?>

<!-- <h1>Page heads up</h1> -->
<div data-event="<?php echo $date_time;  ?>" id="countdown-timer"></div>
<?php // print_r($date_time); ?>

<?php

get_footer();

?>