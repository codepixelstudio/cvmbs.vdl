<?php // ========================================================================================================================
// script :: test procedure database -> dynamic search functionality

    // set testproc URL
    $procedureStore = $_SERVER[ 'DOCUMENT_ROOT' ] . '/wp-content/themes/vdl/data/procedures.json';
    $procedureStore = 'https://vdlexternal.cvmbs.colostate.edu/api/PriceListApi/GetPriceListResults';

    // test price list
    $procedureData = json_decode( file_get_contents( $procedureStore ) );

    // top level object
    $procedureList = $procedureData->Results->TestPriceList;

    // ACF group
    $homepage_options = get_field( 'vdl_homepage_options' );

// ======================================================================================================================== ?>

<!-- search -->
<div id="search_procedure_database">

    <!-- static content + input control -->
    <div id="search_procedures_controls_container">

        <!-- section static -->
        <div id="search_procedures_static">

            <!-- heading -->
            <h2>

                find test information and pricing

            </h2>
            <!-- END heading -->

            <!-- instructions -->
            <p>

                <?php echo $homepage_options[ 'procedure_search_text' ]; ?>

            </p>
            <!-- END instructions -->

        </div>
        <!-- END section static -->

        <!-- all procedures -->
        <div id="view_all_procedures">

            <!-- all procedures -->
            <a id="view_all_procedures_link" href="https://vdlexternal.cvmbs.colostate.edu/pricelist/pricelistview">

                view all procedures

            </a>
            <!-- END all procedures -->

        </div>
        <!-- END all procedures -->

        <!-- toolbar.DEV -->
        <div id="search_procedures_input">

            <!-- fields -->
            <div id="search_procedures_input_control" class="toolbar-control-group">



            </div>
            <!-- END fields -->

        </div>
        <!-- END toolbar.DEV -->

    </div>
    <!-- END static content + input control -->

    <!-- table -->
    <table id="test_procedures" class="procedures dt-responsive toggle_me disabled">

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

</div>
<!-- END search -->
