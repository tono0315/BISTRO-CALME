<form class="header_search" action=<?php echo home_url();?> method="get">
    <input type="text" name="s" value="<?php the_search_query();?>" placeholder="キーワードを入力">
    <i class="fas fa-search"></i>
</form>