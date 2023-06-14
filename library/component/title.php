<?php

function the_section_title() {

    $title = get_sub_field('title');
    $color = get_sub_field('color');
    $icon = get_sub_field('icon');

    ?>
    <div class="title <?php print $color ?>">
        <div class="title-content">
            <h1><?php print $title ?></h1>
        </div>
        <div class="title-icon">
            <img src="<?php print $icon; ?>" />
        </div>
    </div>
    <?php

}

