<?php


function the_blockquote() {
    $content = get_sub_field( 'content' );
    $alignment = get_sub_field( 'alignment' );
    $theme = get_sub_field( 'theme' );
    $image = get_sub_field( 'image' );
    $image_shade = get_sub_field( 'image_shade' );
    if ( !empty( $content ) ){
        ?>
    <div class="blockquote <?php print $alignment; ?> <?php print $theme; ?>" <?php print( !empty( $image ) ? 'style="background-image: url(' . $image . ');"' : '' ); ?>>
        <?php if ( !empty( $image_inner ) ) { ?>
        <div class="column-image">
            <img src="<?php print $image_inner ?>" />
        </div>
        <?php } ?>
        <div class="column-content">
            <?php print $content ?>
        </div>
    </div>
        <?php
    }
}

