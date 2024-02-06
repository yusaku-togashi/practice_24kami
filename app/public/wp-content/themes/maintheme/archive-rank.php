<?php get_header(); ?>

<main class="archive rank">
    <div class="rankSection">
        <h1>順位表</h1>
        <div class="listText">
            <p>試合数</p>
            <p>勝点</p>
        </div>
        <ol class="rankList">
            <?php $rank_query = new WP_Query( array(
                'post_type' => 'rank',
                'posts_per_page' => 20,) 
                ); ?>
            <?php if ($rank_query->have_posts()) :
                $count=1;
                while ($rank_query->have_posts()) : 
                $rank_query->the_post(); ?>
            <li class="rankListItem">
                <p><?php echo $count ?></p>
                <div class="rankTeamLogo">
                    <?php $rank_teamlogo = get_field('rank_temlogo'); 
                        if( !empty( $rank_teamlogo ) ): ?>
                            <img src="<?php echo esc_url($rank_teamlogo['url']); ?>" alt="" />
                    <?php endif; ?>
                </div>
                <a href="<?php the_permalink(); ?>">
                    <p class="rankTeamName"><?php the_field('rank_teamname'); ?></p>
                </a>
                <div class="rankNum">
                    <p><?php the_field('game_count'); ?></p>
                    <p><?php the_field('win_point'); ?></p>
                </div>
            </li>
            <?php $count++; endwhile; endif; ?>
        </ol>
    </div>
</main>

<?php get_footer(); ?>