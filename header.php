<!DOCTYPE html>
<html lang="en">

<head>
  <?php the_field('html_head_meta_content'); ?>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php // the_title(); 
          ?></title>
  <?php wp_head(); ?>
</head>

<body>