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
<section id="special_billboard" class="ui-billboard pattern vdl" tabindex="-1">

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

    </div>
    <!-- END billboard -->

    <!-- sidebar -->
    <div class="billboard_component sidebar">

        <!-- link -->
        <a id="test_information" class="sidebar_button" href="https://vdlexternal.cvmbs.colostate.edu/PriceList/PriceListView">

            <span class="button_text title">

                test information and price list

            </span>

            <span class="button_text description">

                view all test procedures and pricing information

            </span>

        </a>
        <!-- END link -->

        <?php foreach ( $sidebar_buttons as $sidebar_button ): ?>

        <!-- link -->
        <a class="sidebar_button" href="<?php echo $sidebar_button[ 'button_link' ]; ?>">

            <span class="button_text title">

                <?php echo $sidebar_button[ 'button_title' ]; ?>

            </span>

            <span class="button_text description">

                <?php echo $sidebar_button[ 'button_text' ]; ?>

            </span>

        </a>
        <!-- END link -->

        <?php endforeach; ?>

    </div>

</section>
<!-- END special.billboard -->
