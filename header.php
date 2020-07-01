<?php

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="fh5co-loader"></div>

<div id="page">
    <nav class="fh5co-nav" role="navigation">
        <div class="top-menu">
            <div class="container">
                <div class="row">
                    <div class="col-xs-2">
                        <div id="fh5co-logo"><a href="<?=home_url('/');?>"><? bloginfo('name'); ?></a></div>
                    </div>
                    <div class="col-xs-10 text-right menu-1">
                        <? wp_nav_menu(array(
                                'theme_location' => 'header-menu',
                            'container' => false,
                            'walker' => new Law_Header_Memu
                        )) ?>
                    </div>
                </div>

                <? get_search_form() ?>

            </div>
        </div>
    </nav>