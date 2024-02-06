<main>
    <ul class="sidebar result">
        <?php $result = new WP_Query( array('post_type' => 'result', 'posts_per_page' => 9,) ); ?>
        <?php if ($result->have_posts()) : while ($result->have_posts()) : $result->the_post(); ?>
        <li class="sideResultItem">
            <a href="<?php the_permalink(); ?>">
            <p><?php the_field('result_title'); ?></p>
            </a>
        </li>
        <?php endwhile; endif; ?>
    </ul>
</main>