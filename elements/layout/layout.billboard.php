<?php

    // ACF group
    $homepage_options = get_field( 'vdl_homepage_options' );

    // fields
    $vdl_billboard     = $homepage_options[ 'billboard_image' ];
    $subheadline       = $homepage_options[ 'billboard_text' ];

    // quick links
    $quick_links       = $homepage_options[ 'quick_links' ];
    $pay_bill          = $quick_links[ 'pay_bill' ];
    $pay_bill_link     = $pay_bill[ 'url' ];
    $pay_bill_text     = $pay_bill[ 'title' ];
    $view_results      = $quick_links[ 'view_results' ];
    $view_results_link = $view_results[ 'url' ];
    $view_results_text = $view_results[ 'title' ];

    // sidebar
    $sidebar_buttons   = $homepage_options[ 'sidebar_buttons' ];

?>

<!-- special.billboard -->
<section id="special-billboard" class="ui-billboard pattern vdl" tabindex="-1">

    <!-- billboard -->
    <div class="billboard_component main" style="background-image:url(<?php echo $vdl_billboard; ?>);">

        <!-- quick links -->
        <div id="billboard_quicklinks">

            <!-- link -->
            <a id="pay_bill" class="quicklink" href="<?php echo $pay_bill_link; ?>">

                <?php echo $pay_bill_text; ?>

            </a>
            <!-- END link -->

            <!-- link -->
            <a id="view_results" class="quicklink" href="<?php echo $view_results_link; ?>">

                <?php echo $view_results_text; ?>

            </a>
            <!-- END link -->

        </div>
        <!-- END quick links -->

        <!-- text content -->
        <div class="billboard_text">

            <!-- headline -->
            <div class="headline">

                <span class="white">

                    diagnostic

                </span>

                <span class="green">

                    excellence

                </span>

            </div>
            <!-- END headline -->

            <!-- subheadline -->
            <div class="subheadline">

                <?php echo $subheadline; ?>

            </div>
            <!-- END subheadline -->

        </div>
        <!-- END text content -->

        <?php get_template_part( 'elements/layout/layout.search' ); ?>

    </div>
    <!-- END billboard -->

    <!-- sidebar -->
    <div class="billboard_component sidebar">

        <!-- link -->
        <a class="sidebar_button" href="#">

            <span class="button_text title">

                how to submit a sample

            </span>

            <span class="button_text description">

                Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt

            </span>

        </a>
        <!-- END link -->

        <!-- link -->
        <a class="sidebar_button" href="#">

            <span class="button_text title">

                find a form

            </span>

            <span class="button_text description">

                Excepteur sint occaecat cupidatat non proident

            </span>

        </a>
        <!-- END link -->

        <!-- link -->
        <a class="sidebar_button" href="#">

            <span class="button_text title">

                shipping information

            </span>

            <span class="button_text description">

                Lorem ipsum dolor sit amet consectetur

            </span>

        </a>
        <!-- END link -->

    </div>

</section>
<!-- END special.billboard -->
