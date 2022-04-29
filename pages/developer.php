<?php // Template Name: Developer Page ?>

<?php

    // set testproc URL
    $testProcURL = 'https://vdlexternal.cvmbs.colostate.edu/api/PriceListApi/GetPriceListResults';

    // test price list
    $testProcData = json_decode( file_get_contents( $testProcURL ) );

    // top level object
    $testList = $testProcData->Results->TestPriceList;

    // count
    $results = count( $testList );

?>

<?php get_header(); ?>

<!-- primary -->
<div id="primary" class="content-area">

    <!-- site.layout -->
    <main id="site-layout" class="off-canvas-content" data-off-canvas-content>

        <!-- container -->
        <div class="developer_container">

    		<!-- article -->
    		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <h2>Test Procedure API Results&nbsp;[ <?php echo $results; ?> ]</h2>

                <ul>

                    <?php

                        // setup output
                        foreach ( $testList as $testListItem ) {

                            $testName = $testListItem->TestName;
                            $testPrice = $testListItem->Cost;

                            echo '<li>' . $testName . ' - ' . $testPrice . '</li>';

                        }

                    ?>

                </ul>

                <pre>

                    <?php

                        print_r( $testProcData );

                    ?>

                </pre>

            </article>
    		<!-- #post-<?php the_ID(); ?> -->

        </div>
        <!-- END container -->

	</main>
	<!-- END main -->

</div>
<!-- END primary -->

<?php get_footer(); ?>

<?php get_template_part( 'elements/layout/layout.footer' ); ?>
