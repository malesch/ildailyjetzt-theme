<!DOCTYPE html>
<html
    <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width" />
        <title>
        <?php wp_title( '|', true, 'right' );bloginfo( 'name' );
            $site_description = get_bloginfo( 'description', 'display' );if ( $site_description && ( is_home() || is_front_page() ) )
		    echo " | $site_description";
        ?>
        </title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" />
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/img/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/img/favicon-16x16.png">
        <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/img/site.webmanifest">
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/js/jquery.fancybox.css?v=2.1.4" type="text/css" media="screen" />
    </head>

    <body>
        <div id="fb-root"></div>
        <script>
            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=172437672934206";
                fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));
        </script>

        <?php
            show_admin_bar(false);
        ?>

        <div id="container">
            <div id="header" >
                <div id="left">
                    <!--<a href="#subscribe" class="box">subscribe</a><br />-->
                    <span class="logo">Il Daily Jetzt</span><br />
                    <a href="#what" class="box">il daily what??</a>
                </div>

                <div id="inbetween">
                    <a href="http://www.omiotu.com" id="omiotu">for other projects visit my website ><img src="https://omiotu.com/wp-content/themes/omiotu/img/logo-omiotu.png" /></a>
                </div>

                <div id="right">
                    <a href="mailto:omi@calcaxy.com" class="mail"><span class="noview">write me</span></a>...a visual blog by<br />
                    <a href="mailto:omi@calcaxy.com" class="grey">tOmi scheiderbauer (omi)</a><br />
                    <a href="http://www.calcaxy.com/homeology" target="_blank" class="grey calcicon">visit also the old<br />
                    <span class="calc">calc</span> HOMEOLOGY</a>
                    <a href="http://www.facebook.com/ildailyjetzt" class="facebook">
                        <div class="fb-like" data-href="http://facebook.com/ildailyjetzt/" data-height="40px" data-colorscheme="light" data-layout="button_count" data-action="like" data-show-faces="false" data-send="false"></div>
                        <span class="noview">Facebook</span>
                    </a>
                </div>
            </div> <!-- #header -->

            <div id="center">
                <div id="subscribe" class="noview">
                    <div class="subscribe">
                        <span id="eemail_msg">
                            please leave your e-mail address and
                            receive a weekly e-mail with the link
                            to IL DAILY JETZT.
                        </span>
                        <br />
                        <form name="subscribe" id="subform" method="post">
                            <input class="eemail_textbox_class" name="eemail_txt_email" id="eemail_txt_email" onKeyPress="if(event.keyCode==13) eemail_submit_ajax('<?php echo emailnews_plugin_url('widget'); ?>')" onBlur="if(this.value=='') this.value='<?php echo get_option('eemail_widget_txt_cap'); ?>';" onFocus="if(this.value=='<?php echo get_option('eemail_widget_txt_cap'); ?>') this.value='';" value="<?php echo get_option('eemail_widget_txt_cap'); ?>" maxlength="150" type="text">
                            <input type="submit" name="eemail_txt_Button" id="eemail_txt_Button" onClick="return eemail_submit_ajax('<?php echo emailnews_plugin_url('widget'); ?>')"   value="send" class="submit" />
                        </form>
                    </div>
                </div>

                <div id="buy" class="noview">
                    <div class="buy">
                    <?php
                        // query for the about page
                        $your_query = new WP_Query( 'pagename=buy' );
                        // "loop" through query (even though it's just one page)
                        while ( $your_query->have_posts() ) : $your_query->the_post();
                            the_content();
                        endwhile;
                        // reset post data (important!)
                        wp_reset_postdata();
                    ?>
                    </div>
                </div>

                <div id="what" class="noview">
                    <div class="what">
                    <?php
                        // query for the about page
                        $your_query = new WP_Query( 'pagename=what' );
                        // "loop" through query (even though it's just one page)
                        while ( $your_query->have_posts() ) : $your_query->the_post();
                            the_content();
                        endwhile;
                        // reset post data (important!)
                        wp_reset_postdata();
                    ?>
                    </div>
                </div>
