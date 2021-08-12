
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/slick/slick-theme.css"/>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/main.css"/>
    <?php wp_head(); ?>
  </head>
  <body>
      
    <nav class="top-nav">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <p class="logo"><a class="text-decoration-none" href="<?php bloginfo('url'); ?>"><?php bloginfo('title'); ?></a></p>
                </div>
                <div class="col-md-4">
                    <p class="slogan">
                        <?php bloginfo('description'); ?>
                    </p>
                </div>
                <div class="col-md-6">
                    <div class="text-end">
                        <?php echo do_shortcode ("[addtoany]"); ?>
                    </div>
                </div>
            </div>
            <div class="row">
            </div>
        </div>
    </nav>