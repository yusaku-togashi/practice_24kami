<?php get_header(); ?>

<main class="archive news">
    <div class="newsSection">
        <h1>ニュース一覧</h1>
    </div>
    <ul class="newsCategoryBtn">
        <?php $news_terms = get_terms('newslabel');
        $current_term = get_queried_object(); 
        $current_slug = !empty($current_term) ? $current_term->slug : '';
        ?>
        <li><a href="/news">全て</a></li>
        <?php foreach ($news_terms as $news) {
        $term_link = get_term_link($news->slug, 'newslabel');
        echo '<li ' . ($current_slug === $news->slug ? 'class="current"' : '') . '><a href="' . $term_link . '">' . $news->name . '</a></li>';
        }
        ?>
    </ul>
    <ul class="newsContent">
        <?php  
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        $args = array (
            'post_type' => array('news'),
            'paged' => $paged,
            'posts_per_page' => 6,
            'tax_query' => array(
                array(
                    'taxonomy' => 'newslabel',
                    'field' => 'slug',
                    'terms' => array('injury'),
                )
            )
        );

        $news_query = new WP_Query($args);

        $news_query->query($args);
        if ($news_query->have_posts()) : while ($news_query->have_posts()) : $news_query->the_post();
            $obj = get_post_type_object($post->post_type); 
            $terms = get_the_terms($post->ID, 'newslabel');
            $category_name = !empty($terms) ? $terms[0]->name : '';
            ?>
        <li class="newsContentItem">
            <div class="thumbnail">
                <?php the_post_thumbnail(); ?>
            </div>
            <div class="contentWrap">
                <a href="<?php the_field('news_link'); ?>">
                <div class="itemInner">
                <p class="postData"><?php the_time('Y-m-d'); ?></p>
                <p class="newsLabel"><?php echo esc_html($category_name); ?></p>
                </div>
                <h3 class="newsTitle"><?php the_field('news_title'); ?></h3>
                <p class="newsAuthor">
                    <?php the_field('news_author'); ?>
                </p>
                </a>
            </div>
        </li>
        <?php endwhile;
            endif;
            wp_reset_postdata();
        ?>
    </ul>
    <?php 
    the_posts_pagination(
    array(
        'mid_size' => 1,
        'prev_next' => true,
        'prev_text' => ('<'),
        'next_text' => ('>'),
        'type' => 'list',
        )
    );
    ?>
</main>

<?php get_footer(); ?>