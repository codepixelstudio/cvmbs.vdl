
// ========================================================================================================
// START :: require + modules + dependencies
// ========================================================================================================

    // import modules
    import $ from 'jquery';

    // datatables
    import DataTable from 'datatables.net';

// ========================================================================================================
// END :: require + modules + dependencies
// ========================================================================================================



// ========================================================================================================
// START :: config.objects
// ========================================================================================================

    // homepage slideshow
    const slideshow = $( '#custom_billboard.slideshow .slideshow_slides' );

// ========================================================================================================
// END :: config.objects
// ========================================================================================================



// ========================================================================================================
// START :: initialize
// ========================================================================================================

    // you know what it is bruh
    $(document).ready( function() {

        // script check
        console.log( 'ball so hard' );

        // render datatable
        renderProcedureSearch();

        // dynamic table display variables
        var procedures = $('#test_procedures_filter input');
        var toggleable = $('.toggle_me');

        // dev test
        procedures.on( 'input', function() {

            // test length
            if ( this.value.length >= 3 ) {

                toggleable.addClass( 'revealed' ).removeClass( 'disabled' );
                console.log( 'loaded' );

            } else if ( this.value.length < 3 ) {

                toggleable.addClass( 'disabled' ).removeClass( 'revealed' );
                console.log( 'unloaded' );

            }

        });

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
        var controlfields = $('#search_procedures_input_control');
        var procedureinfo = $('#procedures_info');
        var controlpages  = $('#procedures_controls');
        
        // initiate
        var table = $('#test_procedures').DataTable( {

            'order'      : [[ 1, 'asc' ]],
            // stateSave    : true,
            responsive   : true,
            pageLength   : -1,
            info         : false,
            paging       : false,
            lengthChange : false,
            language     : {

                searchPlaceholder : 'to display results, please input 3 or more characters...'

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