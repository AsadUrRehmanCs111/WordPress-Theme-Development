<?php get_header() ?>
<div class="container">
    <div class="main">

        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article class="post">
                    <h3>
                        <?php the_title() ?>
                    </h3>
                    <div class="meta">
                        Created By <?php the_author() ?> on <?php the_time('F j, Y g:i a') ?>
                    </div>
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
</div>
<?php comments_template(); ?>

<?php get_footer() ?>