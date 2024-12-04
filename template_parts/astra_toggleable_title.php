<?php
$astra_display_title_toggle = get_post_meta(get_the_ID(), 'site-post-title', true);
if ($astra_display_title_toggle !== 'disabled') { ?>
    <header class="entry-header ast-no-thumbnail">
        <h1 class="entry-title" itemprop="headline"><?php the_title(); ?></h1>
    </header>
<?php } else { ?>
    <header class="entry-header ast-no-thumbnail ast-no-title ast-header-without-markup"></header>
<?php } ?>