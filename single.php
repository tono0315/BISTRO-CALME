    <?php get_header();?>
    <h2 class="pageTitle">最新情報<span>NEWS</span></h2>

    <main class="main">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-9">

                    <article class="article">
                        <header id="post-<?php the_ID();?>" <?php post_class("article");?>>
                            <h2 class="article_title"><?php the_title();?></h2>
                            <div class="article_meta">
                                <?php the_category();?>
                                <time datetime="<?php the_time('Y-m-d');?>"><?php the_time('Y年m月d日');?></time>
                            </div>
                        </header>

                        <div class="article_body">
                            <div class="content">
                                <?php the_content();?>
                            </div>
                        </div>

                        <div class="postLinks">
                            <div class="postLink postLink-prev"><?php previous_post_link('<i class="fas fa-chevron-left"></i>%link');?></div>
                            <div class="postLink postLink-next"><?php next_post_link('%link<i class="fas fa-chevron-right"></i>');?></div>
                        </div>
                    </article>

                </div>

                <div class="col-12 col-md-3">
                    <?php get_sidebar('categories');?>
                    <?php get_sidebar('archives');?>
                </div>
            </div>
        </div>
    </main>

    <div class="pagetop js-pagetop"><i class="fas fa-angle-up"></i>PAGE TOP</div>
    <?php get_footer();?>