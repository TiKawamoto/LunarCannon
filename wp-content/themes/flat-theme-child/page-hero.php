<?php /* Template Name: Page Hero */ 

get_header( 'hero' ); ?>
<section id="page">
    <div class="container">
        <div id="content" class="site-content" role="main">
            <?php /* The loop */ ?>
            <?php while ( have_posts() ) { the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php edit_post_link( __( 'Edit', ZEETEXTDOMAIN ), '<small class="edit-link pull-right ">', '</small><div class="clearfix"></div>' ); ?>
                <?php if ( has_post_thumbnail() && ! post_password_required() ) { ?>
               
                <?php } ?>
                <div class="entry-content">
                    <?php the_content(); ?>
                    <?php zee_link_pages(); ?>
                </div>
            </article>
            <?php } ?>
        </div><!--/#content-->
    </div>
</section><!--/#page-->
<?php get_footer();