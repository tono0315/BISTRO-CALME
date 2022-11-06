    <?php get_header();?>
    <h2 class="pageTitle">サイト内検索<span>SEARCH</span></h2>

    <main class="main">
        <div class="container">
            <h2 class="main_title">「<?php the_search_query();?>」の検索結果</h2>
            <div class="row">
            <?php if(have_posts()):?>
                <?php while(have_posts()):the_post();?>
                    <?php get_template_part('template-parts/loop-news');?>
                <?php endwhile;?>
            <?php endif;?>
            </div>
        </div>

    </main>

    <div class="pagetop js-pagetop"><i class="fas fa-angle-up"></i>PAGE TOP</div>
    <?php get_footer();?>