<?php get_header() ?>
<div class="container">
    <div class="main">

        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article class="post">
                    <h3>
                        <?php the_title() ?>
                    </h3>
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="post_thumbnail">
                            <a href="<?php the_permalink(); ?>" alt="<?php the_title_attribute(); ?>">
                                <?php the_post_thumbnail(); ?>
                            </a>
                        </div>
                    <?php endif; ?>
                    <p><?php the_content() ?></p>
                </article>

            <?php endwhile; ?>
        <?php else : ?>
            <?php echo wpautop('Sorry No Post Found'); ?>
        <?php endif; ?>
    </div>
    <div class="sidebar">
        <?php if (is_active_sidebar('sidebar')) : ?>
            <?php dynamic_sidebar('sidebar'); ?>
        <?php else : ?>
            <!-- Time to add some widgets! -->
        <?php endif; ?>
    </div>
    <div class="clr"></div>
</div>
<?php get_footer() ?>