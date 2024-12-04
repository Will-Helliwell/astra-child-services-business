<!-- Display gutenberg blocks with astra styling applied -->
<div class="entry-content clear" data-ast-blocks-layout="true" itemprop="text">
    <?php
    while (have_posts()) : the_post();
        the_content();
    endwhile;
    ?>
</div>