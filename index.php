<?php $nowPage = "top"; ?>
<?php require_once('config.php'); ?>
<?php include_once('include/common/header/header.php'); ?>
<!--コンテンツ-->
<main class="indexMain">
    <div class="wapper d_flex j_between indexMainWap">
        <div class="pc_only picIndexMain">
            <figure class="picIndexMainInner">
                <img loading="lazy" src="img/picIndexMainInner.webp" alt="GWイベント" width="787" height="697.5">
            </figure>
        </div>
        <div class="spwap">
            <?php include_once('include/layouts/index/03_index.php'); ?>
        </div>
    </div>

</main>
<!--コンテンツ-->
<?php include_once('include/common/footer/footer.php'); ?>