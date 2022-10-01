<?php

get_header();

$date_time = get_field('next_event_date_time');
$canceled = get_field('next_event_cancel');

?>

<header>
  <div class="social-links">
    <a href="" id="twitter" title="Heads-up Events on Twitter" target="_blank">&#xf099;</a>
    <a href="" id="instagram" title="Heads-up Events on Instagram" target="_blank">&#xf16d;</a>
  </div>
</header>

<?php

if (!$canceled) :

?>

  <div data-event="<?php echo $date_time;  ?>" id="countdown-timer"></div>

<?php else : ?>

  <div data-canceled="<?php echo $canceled; ?>" id="canceled"></div>

<?php

endif;

get_footer();

?>