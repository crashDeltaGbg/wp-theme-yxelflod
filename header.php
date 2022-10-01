<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  if (get_field('html_head_meta_content')) the_field('html_head_meta_content');
  if (is_page('heads-up')) : ?>
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:titel" content="Next Event" />
    <meta name="twitter: site" content="@heads_up_events" />
    <meta name="twitter: creator" content="@heads_up_events" />
    <meta name="twitter: image" content="<?php the_post_thumbnail_url('large'); ?>">
  <?php endif; ?>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php // the_title(); 
          ?></title>
  <?php wp_head(); ?>
</head>

<body>