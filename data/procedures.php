<?php // ========================================================================================================================
// PHP :: test procedure database -> localization script

    // define local storage path
    $local = $_SERVER[ 'DOCUMENT_ROOT' ] . '/wp-content/themes/vdl/data/';

    // set remote API URL
    $procedureAPI = 'https://vdlexternal.cvmbs.colostate.edu/api/PriceListApi/GetPriceListResults';

    // convert data
    $procedureData = json_decode( file_get_contents( $procedureAPI ) );

    // identify top level object
    $procedureList = $procedureData->Results->TestPriceList;

    // define local JSON store
    $procedureJSON = $local . 'procedures.json';

    // format JSON
    $procedures = json_encode( $procedureList, JSON_PRETTY_PRINT );

    // create/overwrite JSON store
    file_put_contents( $procedureJSON, $procedures );

// ======================================================================================================================== ?>

