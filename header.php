<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="apple-touch-icon" sizes="180x180"
        href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32"
        href="<?php echo get_template_directory_uri(); ?>/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16"
        href="<?php echo get_template_directory_uri(); ?>/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/images/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon/safari-pinned-tab.svg"
        color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <?php wp_head();?>

</head>

<body id=mainBody <?php body_class();?>>

    <!-- Begin Loader -->
    <?php if (is_front_page()) {?>
    <div class="loader" data-background-color="#ffffff" data-text-color="#000000">
        <p>LOADING</p>
        <span class="circle"></span>
    </div>
    <?php }?>
    <!-- Begin Header -->
    <header class="head">
        <!-- <div class=""> -->
        <a href="/" class="logo-container">
            <div class="comp-title">
                <div class="main-title">
                    <p>LASTING IMPRESSIONS </p>
                </div>
                <div class="alt-title">
                    <SPAN class="title">by Lois</SPAN>
                </div>
            </div>
            <!-- <p>LASTING IMPRESSIONS <SPAN class="title">by Lois</SPAN></p> -->
        </a>

        <?php wp_nav_menu(
    array('theme_location' => 'top-menu',
        'container' => 'nav',
        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'link_before' => '  <span class="item_outer">
                                            <span class="item_text">',
        'link_after' => '   </span>
                                            <i class="eltdf-menu-arrow fa fa-angle-down"></i>
                                        </span>',
    )
);?>

        <div class="mobile-menu-burger">

            <a href="" class="mobile-navigation">
                <span class="line line-1"></span>
                <span class="line line-2"></span>
                <span class="line line-3"></span>
            </a>
        </div>

        <!-- <a href="#" class="mobile-navigation icon3-list2"></a> -->
        <!-- </div> -->
    </header>


    <!-- End Header -->