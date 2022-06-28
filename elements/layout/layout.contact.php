<?php // ========================================================================================================================
// script :: homepage contact info

    // get fields
    $homepage_options    = get_field( 'vdl_homepage_options' );
    $contact_information = $homepage_options[ 'contact_information' ];

// ======================================================================================================================== ?>

<!-- about -->
<div class="homepage_section contact">

    <div class="contact_info">

        <div class="contact_entry phone">

            <span class="entry_text label">

                phone:

            </span>

            <span class="entry_text content">

                <?php echo $contact_information[ 'phone' ]; ?>

            </span>

        </div>

        <div class="contact_entry email">

            <span class="entry_text label">

                e-mail:

            </span>

            <span class="entry_text content">

                <?php echo $contact_information[ 'email' ]; ?>

            </span>

        </div>

        <div class="contact_entry shipping">

            <span class="entry_text label">

                <?php echo $contact_information[ 'address_1' ][ 'address_label' ]; ?>

            </span>

            <span class="entry_text content">

                <?php echo $contact_information[ 'address_1' ][ 'street_address' ]; ?>

            </span>

        </div>

        <div class="contact_entry usps">

            <span class="entry_text label">

                <?php echo $contact_information[ 'address_2' ][ 'address_label' ]; ?>

            </span>

            <span class="entry_text content">

                <?php echo $contact_information[ 'address_2' ][ 'street_address' ]; ?>

            </span>

        </div>

    </div>

    <a id="contact_button" href="<?php echo $contact_information[ 'contact_button' ][ 'url' ]; ?>">
        
        <?php echo $contact_information[ 'contact_button' ][ 'title' ]; ?>
    
    </a>

</div>
<!-- END about -->
