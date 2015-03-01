<?php echo $blocks['head']; ?>
<body>
    <div id="wrapper">
<?php echo $blocks['header']; ?>
        <article  class="wrapper">
            <!--=========================== NEWS  =================================-->
            <div class="news">
                <h1>Новости Испании</h1>
                <div class="bread_crumbs">
                    <a href="javascript: void(0);">главная</a><img class="arrow" src="images/arrow.png"/>
                    <a class="actives" href="javascript: void(0);">новости</a>
                </div>
               
                <div class="news_l">
                    <?php
                        foreach($news as $singleNews){
                            $title = $singleNews->title;
                            $body = mb_substr(strip_tags($singleNews->body), 0, 60).'...';
                    ?>
                            <div class="three">
                                <span class="three_img">
                                    <img src="pictures/img_dlock.jpg"/>
                                </span>
                                <a class="three_a" href="javascript: void(0);"><?=$title?></a>
                                <p class="three_title">
                                    <?=$body?>
                                    <a href="javascript: void(0);"> Читать далее >> </a>
                                </p>
                            </div>
                    <?php
                        }
                    ?>                    
                    <div class="cr"></div>
                </div>
                <div class="news_r">
                    <h5>Лента новостей</h5>
                    <ul class="newsline">
                        <?php
                        foreach($news as $singleNews){
                            $title = $singleNews->title;
                            $date = date('d.m.y', strtotime( $singleNews->created_at ) );
                        ?>
                                <li><a href="javascript: void(0);"><?=$title?></a> <span class="right"><?=$date?></span></li>
                        <?php
                            }
                        ?>
                    </ul>
                    <a class="button_all" href="javascript: void(0);">Все новости</a>
                </div>
                <div class="cr"></div>
                <ul class="pages">
                    <li class="pages_l"><a href="javascript: void(0);">.</a></li>
                    <li class="pages_activ"><a href="javascript: void(0);">1</a></li>
                    <li><a href="javascript: void(0);">2</a></li>
                    <li><a href="javascript: void(0);">3</a></li>
                    <li><a href="javascript: void(0);">...</a></li>
                    <li><a href="javascript: void(0);">17</a></li>
                    <li class="pages_r" ><a href="javascript: void(0);">.</a></li>
                </ul>
                <div class="hfooter"></div>
            </div>
            <!--=========================== \NEWS\  =================================-->
        </article>
<?php echo $blocks['footer']; ?>