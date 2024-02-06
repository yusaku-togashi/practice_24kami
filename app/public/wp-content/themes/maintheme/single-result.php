<?php get_header(); ?>

<main class="single result">
    <div class="sectionResult">
        <h1 class="sectionHeading">
            試合結果
        </h1>
    </div>
    <?php while (have_posts()) : the_post(); ?>
    <?php $terms = get_the_terms($post->ID, 'result'); ?>
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
    <ul class="statsWrap">
        <h2 class="statsHeading">スタッツ</h2>
        <li class="statsList">
            <p class="statsItem">
                <?php the_field('home_possession') ?>
            </p>
            <p class="listCaption">
                ボール支配率
            </p>
            <p class="statsItem">
            <?php the_field('away_possession') ?>
            </p>
        </li>
        <li class="statsList">
            <p class="statsItem">
                <?php the_field('home_shots') ?>
            </p>
            <p class="listCaption">
                シュート数
            </p>
            <p class="statsItem">
            <?php the_field('away_shots') ?>
            </p>
        </li>
        <li class="statsList">
            <p class="statsItem">
                <?php the_field('home_target') ?>
            </p>
            <p class="listCaption">
                枠内シュート
            </p>
            <p class="statsItem">
            <?php the_field('away_target') ?>
            </p>
        </li>
        <li class="statsList">
            <p class="statsItem">
                <?php the_field('home_passper') ?>
            </p>
            <p class="listCaption">
                パス成功率
            </p>
            <p class="statsItem">
            <?php the_field('away_passper') ?>
            </p>
        </li>
        <li class="statsList">
            <p class="statsItem">
                <?php the_field('home_yellow') ?>
            </p>
            <p class="listCaption">
                イエローカード
            </p>
            <p class="statsItem">
            <?php the_field('away_yellow') ?>
            </p>
        </li>
        <li class="statsList">
            <p class="statsItem">
                <?php the_field('home_red') ?>
            </p>
            <p class="listCaption">
                レッドカード
            </p>
            <p class="statsItem">
            <?php the_field('away_red') ?>
            </p>
        </li>
    </ul>
    <?php endwhile;?>

    <?php get_sidebar('result'); ?>

    <div class="sectionBtn result">
        <a href="/" class="sectionBtnItem result">
            <p class="sectionBtnText">TOPに戻る</p>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/ic_arrow_01.png" alt="sectionBtnImg">
        </a>
    </div>

</main>

<?php get_footer(); ?>