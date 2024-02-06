<?php get_header(); ?>

<main>
    <div class="topPageContents">
        <section class="sectionWrap">
            <h1>チーム情報</h1>
            <div class="teamList">
                <?php $team_query = new WP_Query( array('post_type' => 'team_information', 'posts_per_page' => 20,) ); ?>
                <?php if ($team_query->have_posts()) :while ($team_query->have_posts()) : $team_query->the_post(); ?>
                <div class="teamListItem">
                    <a href="<?php the_permalink(); ?>">
                        <?php $teamlogo = get_field('team_logo');
                        if( !empty( $teamlogo ) ): ?>
                            <img src="<?php echo esc_url($teamlogo['url']); ?>" alt="" />
                        <?php endif; ?>
                        <p><?php the_field('team_name'); ?></p>
                    </a>
                </div>
                <?php endwhile; endif; ?>
            </div>
        </section>
        <section class="sectionWrap">
            <h1>順位表</h1>
            <div class="rankSection">
                <div class="listText">
                    <p>試合数</p>
                    <p>勝点</p>
                </div>
                <ol class="rankList">
                    <?php $rank_query = new WP_Query( array('post_type' => 'rank', 'posts_per_page' => 6,) ); ?>
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
                <div class="sectionBtn">
                    <a href="/rank" class="sectionBtnItem">
                        <p class="sectionBtnText">全ての順位を見る</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/ic_arrow_01.png" alt="sectionBtnImg">
                    </a>
                </div>
            </div>
        </section>
        <section class="sectionWrap">
            <h1>試合結果</h1>
            <div class="sectionResultInner">
                <ul class="resultList multiple">
                    <?php $result = new WP_Query( array('post_type' => 'result', 'posts_per_page' => 9,) ); ?>
                    <?php if ($result->have_posts()) : while ($result->have_posts()) : $result->the_post(); ?>
                    <li class="resultItem">
                        <a href="<?php the_permalink(); ?>">
                            <p class="resultSchedule"><?php the_field('schedule'); ?></p>
                            <div class="resultWrap">
                                <div class="wrapTeam">
                                    <?php $homeImg = get_field('home_img');
                                    if( !empty( $homeImg ) ): ?>
                                        <img src="<?php echo esc_url($homeImg['url']); ?>" alt="" class="resultImg"/>
                                    <?php endif; ?>
                                    <p class="resultName home"><?php the_field('home_name'); ?></p>
                                </div>
                                <p class="gameResult"><?php the_field('game_result'); ?></p>
                                <div class="wrapTeam">
                                    <?php $awayImg = get_field('away_img');
                                    if( !empty( $awayImg ) ): ?>
                                    <img src="<?php echo esc_url($awayImg['url']); ?>" alt="" class="resultImg"/>
                                    <p class="resultName away"><?php the_field('away_name'); ?></p>
                                    <?php endif; ?>
                                </div> 
                            </div>
                        </a>
                    </li>
                    <?php endwhile; endif; ?>
                </ul>
            </div>
        </section>
        
    </div>
</main>

<?php get_footer(); ?>