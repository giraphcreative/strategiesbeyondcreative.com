<?php


function the_image_text() {
    $image = get_sub_field('image');
    $content = get_sub_field('content');
    $alignment = get_sub_field('alignment');
    $treatment = get_sub_field( 'treatment' );
    $theme = get_sub_field('theme');

    if ( $treatment == 'circular' ) {
        $image_url = wp_get_attachment_image_url( $image, 'square' );
    } else { 
        $image_url = wp_get_attachment_image_url( $image, 'full' );
    }

    if ( !empty( $image ) && !empty( $content ) ){
        ?>
    <div class="image-text <?php print $theme; ?> <?php print $alignment ?> <?php print $treatment ?>">
        <div class="image-text-image">
            <div class="image-text-image-frame">
                <img src="<?php print $image_url ?>" />
            </div>
        </div>
        <div class="image-text-content">
            <?php print $content ?>
        </div>
    </div>
        <?php
    }
}

