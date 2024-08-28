<div class="side-bar--right">
    <div class="menu">
        <div class="circle-image">
            <img src="<?php echo esc_url(home_url()); ?>/wp-content/themes/trbg/assets/img/1711057371028.jpg" alt="">
        </div>
        <h2 class="menu__title">Name Name</h2>
        <div class="prof__text">
            <p>プロフィールテキストテキストテキストテキストテキストテキストテキスト テキストテキストテキストテキストテキストテキストテキストテキストテキスト
                テキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
        </div>
    </div>

    <div class="menu">
        <h2 class="menu__title">Ranking</h2>

        <div class="menu__box">
            <div class="post__eyecatch">
                <img src="https://code-jump.com/demo/html/blog/img/ranking1.jpg" alt="">
            </div>
            <div class="post__title">
                <p>タイトルテキストテキストテキストテキストテキストテキストテキスト</p>
            </div>
        </div>


        <div class="menu__box">
            <div class="post__eyecatch">
                <img src="https://code-jump.com/demo/html/blog/img/ranking2.jpg" alt="">
            </div>
            <div class="post__title">
                <p>タイトルテキストテキストテキストテキストテキストテキストテキスト</p>
            </div>
        </div>


        <div class="menu__box">
            <div class="post__eyecatch">
                <img src="https://code-jump.com/demo/html/blog/img/ranking3.jpg" alt="">
            </div>
            <div class="post__title">
                <p>タイトルテキストテキストテキストテキストテキストテキストテキスト</p>
            </div>
        </div>

    </div>

    <div class="menu">
        <h2 class="menu__title">Archive</h2>
        <div class="menu__archive">
            <?php
            $args = array(
                'type' => 'monthly',
                'limit' => 15,
                'format' => 'html',
                'before' => '<div class="menu__archive--list>',
                'after' => '</div>',
                'show_post_count' => true,
                'echo' => 0,
                'order' =>'DESC',
                'post_type' => 'post'
            );
            $archives = wp_get_archives($args);

            $archives = preg_replace('/ \((\d+)\)/', ')<span class="archive-count">($1)</span>', $archives);

            echo $archives;
            ?>
            <!-- <div class="menu__archive--list">XXXX年XX月(XX)</div>
            <div class="menu__archive--list">XXXX年XX月(XX)</div>
            <div class="menu__archive--list">XXXX年XX月(XX)</div>
            <div class="menu__archive--list">XXXX年XX月(XX)</div>
            <div class="menu__archive--list">XXXX年XX月(XX)</div>
            <div class="menu__archive--list">XXXX年XX月(XX)</div>
            <div class="menu__archive--list">XXXX年XX月(XX)</div>
            <div class="menu__archive--list">XXXX年XX月(XX)</div>
            <div class="menu__archive--list">XXXX年XX月(XX)</div>
            <div class="menu__archive--list">XXXX年XX月(XX)</div>
            <div class="menu__archive--list">XXXX年XX月(XX)</div>
            <div class="menu__archive--list">XXXX年XX月(XX)</div>
            <div class="menu__archive--list">XXXX年XX月(XX)</div>
            <div class="menu__archive--list">XXXX年XX月(XX)</div>
            <div class="menu__archive--list">XXXX年XX月(XX)</div> -->
        </div>
    </div>

</div>