<aside class="archive">
    <h2 class="archive_title">カテゴリ 一覧</h2>
    <ul class="archive_list">
        <?php 
        $arg = array('title_li' => "");
        wp_list_categories($arg);
        ?>
    </ul>
</aside>