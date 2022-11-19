<?php

get_header('heads-up');

$date_time = get_field('next_event_date_time');
$canceled = get_field('next_event_cancel');

?>

<header>
  <div class="social-links">
    <a href="https://twitter.com/heads_up_events" id="twitter" title="Heads-up Events on Twitter" target="_blank">
      <i class="fa-brands fa-twitter"></i>
    </a>
    <a href="https://www.instagram.com/__heads__up__events__/" id="instagram" title="Heads-up Events on Instagram" target="_blank">
      <i class="fa-brands fa-instagram"></i>
    </a>
  </div>
</header>

<main>

  <?php

  if (!$canceled) :

  ?>

    <div data-event="<?php echo $date_time;  ?>" id="countdown-timer"></div>

  <?php else : ?>

    <div data-canceled="<?php echo $canceled; ?>" id="canceled"></div>

  <?php

  endif;

  ?>

</main>

<?php

get_footer('heads-up');

?>