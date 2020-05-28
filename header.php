<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head();?>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body id=mainBody <?php body_class();?>>

<!-- Begin Loader -->
<?php  if( ! is_page( array( 'CHILDREN', 'contact', 'management' ) ) ){ ?>



    <div class="loader" data-background-color="#ffffff" data-text-color="#000000">
        <p>LOADING</p>
        <span class="circle"></span>
    </div>
    <?php   } ?>
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

            <?php wp_nav_menu (
                array('theme_location' => 'top-menu',
                'container'       => 'nav',
                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'link_before' => '  <span class="item_outer">
                                        <span class="item_text">',
                'link_after' =>     '   </span>
                                        <i class="eltdf-menu-arrow fa fa-angle-down"></i>
                                    </span>'
                )
            ); ?>

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