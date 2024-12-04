<?php
/*
 * Template Name: homepage
 * description: >-
  Page template for the homepage
 */
?>

<!-- Get astra header -->
<?php get_header(); ?>

<!-- Replicate astra default template outer html for styling and SEO -->
<div id="primary" class="content-area primary">
    <main id="main" class="site-main">
        <article id="post-<?php the_ID(); ?>" <?php post_class('ast-article-single'); ?> itemscope="itemscope" itemtype="https://schema.org/CreativeWork">

            <!-- Replicate astra toggle title -->
            <?php get_template_part('template_parts/astra_toggleable_title'); ?>

            <!-- Display gutenberg blocks with astra styling applied -->
            <div class="entry-content clear" data-ast-blocks-layout="true" itemprop="text">
                <?php
                while (have_posts()) : the_post();
                    the_content();
                endwhile;
                ?>
            </div>
        </article>
    </main>
</div>

<!-- Get astra footer -->
<?php get_footer(); ?>