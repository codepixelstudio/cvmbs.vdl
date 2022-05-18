
// ========================================================================================================
// START :: require + modules + dependencies
// ========================================================================================================

    // import modules
    import $ from 'jquery';

    // slick.js
    require( 'slick-carousel' );
    import slick from 'slick-carousel';

    // datatables
    // import DataTable from 'datatables.net';

// ========================================================================================================
// END :: require + modules + dependencies
// ========================================================================================================



// ========================================================================================================
// START :: config.objects
// ========================================================================================================

    // homepage slideshow
    const slideshow = $( '#custom_billboard.slideshow .slideshow_slides' );

    // objects
    var toggleMe = $( '.toggle_me' );

// ========================================================================================================
// END :: config.objects
// ========================================================================================================



// ========================================================================================================
// START :: initialize
// ========================================================================================================

    // you know what it is bruh
    $(document).ready( function() {

        // datatables
        renderProcedureSearch();

    });

// ========================================================================================================
// END :: initialize
// ========================================================================================================



// ========================================================================================================
// START :: Data Tables
// ========================================================================================================

    // test procedure search
    function renderProcedureSearch() {

        // toolbars
        var controlfields = $('#procedures_fields');
        var procedureinfo = $('#procedures_info');
        var controlpages  = $('#procedures_controls');
        
        // initiate
        var table = $('#test_procedures').DataTable( {

            'order'    : [[ 1, 'asc' ]],
            stateSave  : true,
            responsive : true,
            // info       : false,
            // lengthMenu : [ 0, 10, 25 ],
            language   : {

                searchPlaceholder : 'search by species or procedure name'

            }

        });

        // rearrange DOM for main directory view(s)
        $('#test_procedures_length').appendTo( controlfields );
        $('#test_procedures_filter').prependTo( controlfields );
        $('#test_procedures_info').appendTo( procedureinfo );
        $('#test_procedures_paginate').appendTo( controlpages );

    }

// ========================================================================================================
// END :: Data Tables
// ========================================================================================================