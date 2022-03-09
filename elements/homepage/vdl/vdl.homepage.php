<?php

    $homepage_options = get_field( 'vdl_homepage_options' );

?>

<!-- site.layout -->
<main id="site-layout" class="off-canvas-content vdl" data-off-canvas-content>

    <?php get_template_part( 'elements/homepage/vdl/vdl.billboard' ); ?>

    <?php get_template_part( 'elements/homepage/vdl/vdl.content' ); ?>

    <?php get_template_part( 'elements/layout/layout.footer' ); ?>

</main>
<!-- site.layout -->

<?php get_template_part( 'elements/homepage/special/toolbar/toolbar.menu' ); ?>
