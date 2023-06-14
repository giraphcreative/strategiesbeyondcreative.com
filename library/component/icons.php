<?php


// output the icons
function the_icons() {

    // check if the nested repeater field has rows of data
    if ( have_rows( 'icon' ) ):

        print '<div class="icon-container"><div class="icons">';

        // loop through the rows of data
        while ( have_rows('icon') ) : the_row();

            $icon = get_sub_field('icon');
            $title = get_sub_field('title');
            $link = get_sub_field('link');
            $color = get_sub_field('color');
            $content = get_sub_field('content');
            echo '<div class="icon ' . $color . '">' . ( !empty( $link ) ? '<a href="' . $link . '">' : '' ) .
                ( !empty( $image ) ? '<div class="icon-image"><img src="' . $image . '" /></div>' : '' ) . 
                '<div class="icon-container"><img src="' . $icon . '" /></div>' . 
                '<h4>' . $title . '</h4>' . 
                '<div class="icon-content">' . apply_filters( 'the_content', $content ) . '</div>' .
                ( !empty( $link ) ? '</a>' : '' ) . 
                '</div>';

        endwhile;

        print '</div></div>';

    endif;
    
}

