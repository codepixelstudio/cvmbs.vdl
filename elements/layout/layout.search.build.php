<?php // ========================================================================================================================
// PHP :: test procedure data -> generate interactive layer

    // retrieve local data
    $procedureList = file_get_contents( $_SERVER[ 'DOCUMENT_ROOT' ] . '/wp-content/themes/vdl/data/procedures.json' );

// ======================================================================================================================== ?>

<!-- search -->
<div id="search_procedure_database">

    <!-- results -->
    <div id="search_results">

        <span>your results go here</span>

    </div>
    <!-- END results -->

    <!-- search field -->
    <div id="search_field">

        <!-- form -->
        <form id="search_database_form">

            <input type="text" name="" value="" placeholder="search for a procedure">

            <input type="submit" name="" value="search">

        </form>
        <!-- END form -->

    </div>
    <!-- END search field -->

</div>
<!-- END search -->
