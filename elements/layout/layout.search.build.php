<?php // ========================================================================================================================
// script :: test procedure database -> dynamic search functionality

    // set testproc URL
    $procedureStore = $_SERVER[ 'DOCUMENT_ROOT' ] . '/wp-content/themes/vdl/data/procedures.json';
    $procedureStore = 'https://vdlexternal.cvmbs.colostate.edu/api/PriceListApi/GetPriceListResults';

    // test price list
    $procedureData = json_decode( file_get_contents( $procedureStore ) );

    // top level object
    $procedureList = $procedureData->Results->TestPriceList;

// ======================================================================================================================== ?>

<!-- search -->
<div id="search_procedure_database">

    <!-- toolbar.DEV -->
    <div id="procedures_toolbar" class="toolbar">

        <!-- fields -->
        <div id="procedures_fields" class="toolbar-control-group">



        </div>
        <!-- END fields -->

    </div>
    <!-- END toolbar.DEV -->

    <!-- table -->
    <table id="test_procedures" class="procedures dt-responsive toggle_me revealed">

        <!-- sortable header -->
        <thead>

            <tr>

                <th data-priority="1">

                    Test Name

                </th>

                <th>

                    Species

                </th>

                <th data-priority="10000">

                    Price

                </th>

            </tr>

        </thead>
        <!-- END sortable header -->

        <!-- data table -->
        <tbody>

            <?php

                // empty variable
                $results = '';

                foreach ( $procedureList as $procedure ) {
                    
                    // basic name
                    $testName    = $procedure->TestName;

                    // extract and build URL
                    $testQuery   = $procedure->TestInfoFormattedQueryString;
                    $testURL     = str_replace( array( 'N/A[split]', 'Available[split]' ), '', $testQuery );

                    // extract and build species list
                    $speciesList = $procedure->SpeciesList;
                    
                    if ( !$speciesList ) {

                        $testSpecies = $procedure->Species;

                    } else {

                        $testSpecies = $procedure->SpeciesList;

                    }

                    // test price
                    $testPrice   = $procedure->Cost;

                    $results .= '<tr class="procedure"><td class="link_column"><a class="procedure_link" target="_blank" href="https://vdlexternal.cvmbs.colostate.edu/PriceList/TestInfo' . $testURL . '">' . $testName . '</a></td><td>' . $testSpecies . '</td><td class="link_column">' . $testPrice . '</td></tr>';

                }

                echo $results;

            ?>

        </tbody>
        <!-- END data table -->

    </table>
    <!-- END table -->

    <!-- pagination -->
    <div id="procedures_controls" class="toolbar toggle_me revealed">



    </div>
    <!-- END pagination -->

    <!-- info -->
    <div id="procedures_info" class="toolbar toggle_me revealed">



    </div>
    <!-- END info -->

    <!-- control button -->
    <div id="procedures_reveal">

        <button id="reveal_button" class="control_button">

            show results

        </button>

    </div>
    <!-- END control button -->

</div>
<!-- END search -->
