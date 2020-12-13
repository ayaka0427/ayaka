<!DOCTYPE html>
<html lang="jp">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta discription="熊本県山鹿市 平山温泉 フローラ。天然掛け流しの日帰り温泉。">
        <meta property="og:title" content="平山温泉フローラ">
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://www.spa-flora.com/flora.php">
        <meta property="og:image" content="image/roten2.jpg">
        <meta property="og:description" content="熊本県山鹿市-平山温泉フローラ-天然掛け流しの日帰り温泉。">
        <title>平山温泉フローラ</title>
        <link rel="stylesheet" href="stylesheet.css">
        <link rel="icon" type="image/x-icon" href="image/fabicon.png">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript" src="common.js"></script>
</head>
<body>
    
<!-------------Top Logo--------------->

    <div class="logo">
        <a href="flora.php"><img src="image/flora_logo.png" alt="logo" /></a>
    </div>
    
<!----トップメニューバー--->
    
    <div id="head_menu">
        <ul>
            <li><a href="access.html">アクセス</a></li>
            <li><a href="qa.html">よくあるご質問</a></li>
            <li><a href="enquiry.php">お問い合わせ</a></li>
            <li>0968-44-5888</li>
            <li><a href="https://www.instagram.com/hirayamaonsen_flora/"><img id="insta" src="image/insta.jpg" alt="InstaLogo" /></a></li>
            <li><a href="https://twitter.com/hirayamaflora"><img id="twitter" src="image/twitter.jpg" alt="TwitterLogo" /></a></li>
        </ul>
    </div> 
<!-------------main menu --------------->
        
    <div id="main_menu">
        <ul>
            <li><a href="flora.php">ホーム</a></li>
            <li><a href="spa.html">お風呂</a></li>
            <li><a href="price.html">料金・館内施設</a></li>
            <li><a href="cafe.html">湯カフェ</a></li>
            <li><a href="https://bellesaron.com/">マッサージ</a></li>
            <li><a href="hirayama_info.html">平山・山鹿のご案内</a></li>
            <li><a href="http://spa-flora.com/blog/">最新情報</a></li>
        </ul>
    </div>
    
<!----menu SP--->
    <div id="menu_sp">
         <div id="main_menu_sp">
            <ul>
                <li><a href="flora.php">ホーム</a></li>
                <li><a href="spa.html">お風呂</a></li>
                <li><a href="price.html">料金・館内施設</a></li>
                <li><a href="cafe.html">湯カフェ</a></li>
                <li><a href="https://bellesaron.com/">マッサージ</a></li>
                <li><a href="hirayama_info.html">平山・山鹿のご案内</a></li>
                <li><a href="http://spa-flora.com/blog/">最新情報</a></li>
            </ul>
        </div>
        
        <div id="head_menu_sp">
             <ul>
                <li><a href="access.html">アクセス</a></li>
                <li><a href="qa.html">よくあるご質問</a></li>
                 <li><a href="enquiry.php">お問い合わせ</a></li>
               
            </ul>
            <dic class="address_sp">
                <p>〒861-0556<br>熊本県山鹿市平山5235<br>TEL 0968-44-5888</p>
            </dic>
            <div class="sns_sp">
                <a href="https://www.instagram.com/hirayamaonsen_flora/"><img id="insta" src="image/insta.jpg" alt="InstaLogo" /></a>
                <a href="https://twitter.com/hirayamaflora"><img id="twitter" src="image/twitter.jpg" alt="TwitterLogo" /></a>
            </div>
        </div> 
    </div>
    <img src="image/menu.png" class="open">
    <img src="image/cross.png" class="close">
   
<!------go to top------------------------->
    <div id="page_top">
        <a href="#"><img ="goToTop" src="image/up-arrow.png" alt="up_arrow" /></a>
    </div>       
    
<!----------main image & welcome message------------>      
    
    <div id="main">
        <h1><img id="main_image" src="image/home_main.jpg" alt="image" /></h1>
        <h2>温泉に入ることを<br>日常の一部として</h2>
        
     </div>   
     
     
<!----------intro------------>      
    <div id="intro">
        <h1>平山温泉フローラ</h1>
        <h2>美白の湯</h2>
        <p>フローラは、pH9.9の弱アルカリ性。<br>古い角質を取りツルツル肌をつくる効果が高く<br>シミに効果があると言われる
            硫黄成分<br>さらには万病の湯とされる弱放射能[ラドン]を含み<br>美肌効果と共に薬効の効果も期待できます。
        </p>
    </div>
    <div class="background"></div>
<!----------blog------------>      
    <div id="blog">
        
        <div class="blog_ctt">
            <h1 class="blog_main_title">最新情報</h1>
                <?php
                    $rss = simplexml_load_file('http://spa-flora.com/blog/?feed=rss2');
        
                    /* foreachで回して各記事のデータを取得し配列に入れます。 */
                    $news_list = [];
                    $news_cnt = 0;
                    foreach($rss->channel->item as $item){
                        $news_list[] = [
                            'title'   => $item->title, //記事タイトル
                            'date'    => date("Y.m.d", strtotime($item->pubDate)), //日付
                            'link'    => $item->link //リンク
                        ];
                        $news_cnt++;
                        
                        //配列に格納する記事数制御
                        if ($news_cnt==5) {
                            break;
                        }
                    }
                ?>
    
                    <ul class="blog_title">
                        <?php foreach ($news_list as $news):?>
                        <li><span class="blog_date"><?php echo $news['date'];?></span><a href="<?php echo $news['link'];?>" target="_blank"><span class="b_title"><?php echo $news['title'];?></span></a></li>
                        <?php endforeach;?>
                    </ul>
                </div> 
                <div class="b_info">
                    <div class="gototravel">
                        <img src="image/gototravel.jpg" alt="gtt" />
                    </div>
                    
                    <div class="tuesday">
                        <img src="image/tue.png" alt="image" />
                    </div>
                </div>
    
    </div>
<!----------menu 1 right------------>  
    <div id="menu_1">
        <div class="content1">
            <h1>お風呂</h1>
            <div class="content_p_1">
                <p class="r_right">フローラのお風呂は</p>
                <p class="r_left">源泉かけ流しの天然温泉</p>
            </div>
            <a href="spa.html" class="btn_1"><span class="btn_span">詳細</span></a>
        </div>
        
        <div class="menu1_image">
            <a href="spa.html"><img src="image/roten4.jpg" alt="image" /></a>
        </div>
        
        <div class="clearfix"></div>
    </div>

<!----------menu 2 left------------>  
    <div id="menu_2">
        <div class="content2">
            <h1>料金・施設案内</h1>
            <div class="content_p_2">
                <p class="l_right">フローラでゆっくりとした</p>
                <p class="l_left">時間をお過ごしください</p>
            </div>
            <a href="price.html" class="btn_2"><span class="btn_span">詳細</span></a>
        </div>
            
        <div class="menu2_image">
            <a href="price.html"><img src="image/cafe2.jpg" alt="image" /></a>
        </div>
        
        <div class="clearfix"></div>
    </div>
<!----------menu 3 right------------>  
    <div id="menu_3">
        <div class="content3">
            <h1>湯カフェ</h1>
            <div class="content_p_3">
                <p class="r_right">フローラ自慢の味を</p>
                <p class="r_left">ぜひご堪能下さい</p>
            </div>
            <a fref="cafe.html" class="btn_3"><span class="btn_span">詳細</span></a>
        </div>
        
        <div class="menu3_image">
            <a fref="cafe.html"><img src="image/cafe4.jpg" alt="image" /></a>
        </div>
        <div class="clearfix"></div>
    </div>
<!----------menu 4 left------------>  
    <div id="menu_4">
        <div class="content4">
            <h1>マッサージ</h1>
            <div class="content_p_4">
                <p class="l_right">リンパマッサージで</p>
                <p class="l_left">至福のひとときを</p>
            </div>
            <a href="https://bellesaron.com/" class="btn_4"><span class="btn_span">詳細</span></a>
        </div>
        
        <div class="menu4_image">
            <a href="https://bellesaron.com/"><img src="image/massage.jpg" alt="image" /></a>
        </div>
        <div class="clearfix"></div>
    </div>
<!----------menu ５ right------------>  
    <div id="menu_5">
        <div class="content5">
            <h1>周辺のご案内</h1>
            <div class="content_p_5">
                <p class="r_right">のどかな田園調布の中に佇む</p>
                <p class="r_left">山鹿の奥座敷、平山温泉</p>
            </div>
            <a fref="hirayama_info.html" class="btn_5"><span class="btn_span">詳細</span></a>
        </div>
        
        <div class="menu3_image">
            <a fref="hirayama_info.html"><img src="image/temple.jpg" alt="image" /></a>
        </div>
        <div class="clearfix"></div>
    </div>
<!-----------map------------------->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3344.092481934753!2d130.6576318151405!3d33.054031977116225!
    2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3540ffdcaa0f532d%3A0x7a0b2d546998a0aa!2z5bmz5bGx5rip5rOJIOaXpeW4sOOCiuOCueOD
    kSDjg5Xjg63jg7zjg6k!5e0!3m2!1sen!2sau!4v1600249681480!5m2!1sen!2sau" width="100%" height="400" frameborder="0" s
    tyle="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">"
    </iframe>
<!-----------footer------------->
    <div id="footer">
        <img class="footer_logo" src="image/flora_logo.png" alt="footerlogo" />
        <div class="address">
            <p>〒861-0556<br>熊本県山鹿市平山5235<br>TEL 0968-44-5888</p>
        </div>    
        <div class="clearfix"></div>
        
    </div>
        <div class="footer_menu">
            <ul>
                <li><a href="qa.html">よくあるご質問</a></li>
                <li><a href="enquiry.php">お問い合わせ</a></li>
                <li><a href="https://www.instagram.com/hirayamaonsen_flora/"><img class="insta sns" src="image/insta.jpg" alt="InstaLogo" /></a></li>
                <li><a href="https://twitter.com/hirayamaflora"><img class="twitter sns" src="image/twitter.jpg" alt="TwitterLogo" /></a></li>
            </ul>
        </div>
        <div class="sp_sns">
            <a href="https://www.instagram.com/hirayamaonsen_flora/"><img class="insta_sp" src="image/insta.jpg" alt="InstaLogo" /></a>
            <a href="https://twitter.com/hirayamaflora"><img class="twitter_sp" src="image/twitter.jpg" alt="TwitterLogo" /></a>
        </div>
    
    <div id="copyright">&copy; 2020 Flora All Right Reserved.</div>
</body>
</html>
