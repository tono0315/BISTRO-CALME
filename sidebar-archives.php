<aside class="archive">
    <h2 class="archive_title">月別アーカイブ</h2>
        <ul class="archive_list">
            <?php 
            $arg = array('type' => 'monthly');
            wp_get_archives($arg);
            ?>
        </ul>
</aside>