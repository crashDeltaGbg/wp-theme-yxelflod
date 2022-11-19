<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  if (get_field('html_head_meta_content')) the_field('html_head_meta_content'); ?>
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:title" content="Next Event" />
  <meta name="twitter: site" content="@heads_up_events" />
  <meta name="twitter: creator" content="@heads_up_events" />
  <meta name="twitter: image" content="<?php the_post_thumbnail_url('large'); ?>" />
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <script src="https://kit.fontawesome.com/acc737eb0c.js" crossorigin="anonymous"></script>
  <link rel="apple-touch-icon" sizes="180x180" href="<?php site_url('/assets/img/favicon/heads-up/apple-touch-icon.png'); ?>">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php site_url('/assets/img/favicon/heads-up/favicon-32x32.png'); ?>">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php site_url('/assets/img/favicon/heads-up/favicon-16x16.png'); ?>">
  <link rel="manifest" href="<?php site_url('/assets/img/favicon/heads-up//site.webmanifest'); ?>">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>