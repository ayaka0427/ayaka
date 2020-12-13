<?php

    session_start();
    
    $enquiry_name = $_POST['name'];
    $enquiry_email = $_POST['email'];
    $enquiry_phone = $_POST['phone'];
    $enquiry_message = $_POST['message'];
    
    
    
    
    $enquiry_name = htmlspecialchars($enquiry_name,ENT_QUOTES,'UTF-8');
    $enquiry_email = htmlspecialchars($enquiry_email,ENT_QUOTES,'UTF-8');
    $enquiry_phone = htmlspecialchars($enquiry_phone,ENT_QUOTES,'UTF-8');
    $enquiry_message = htmlspecialchars($enquiry_message,ENT_QUOTES,'UTF-8');
    
    
    $_SESSION['input'] = $_POST;
    
    // 入力ミスがあったら
    $error_flg = false;
    
    if($enquiry_name == '') {
        $_SESSION['error'][] = 'お名前を記入してください。'; 
        $error_flg = true;
    }
    
    if($enquiry_email == ''|| preg_match('|^[0-9a-z_./?-]+@([0-9a-z-]+\.)+[0-9a-z-]+$|', $enquiry_email) == 0 ) {
       $_SESSION['error'][] = 'メールアドレスを正しく記入してください。'; 
       $error_flg = true;
    }
    
    if($enquiry_phone == '' || preg_match('	/^[0-9]{2,20}$/', $enquiry_phone) == 0 ) {
        $_SESSION['error'][] = 'お電話番号を記入してください。'; 
        $error_flg = true;
    }
    
    if($enquiry_message == '') {
       $_SESSION['error'][] = 'お問い合わせ内容を記入してください。'; 
       $error_flg = true;
    }
    
    if($error_flg){
        header('Location:enquiry.php');
        exit;
    }
    
    
         
    //  ----------other way of error codings -----------  
        // if(0 < count($_SESSION['error'])){
        //     header('Location:enquiry.php');
        //     exit;
        // }
        
        // if($enquiry_name == ''|| $enquiry_email == ''|| $enquiry_phone == ''|| $enquiry_message == '') {
          
        //     header('Location:enquiry.php');
        //     exit;
        
?>
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
       
    <!------go to top-------->
        <div id="page_top">
            <a href="#"><img ="goToTop" src="image/up-arrow.png" alt="up_arrow" /></a>
        </div>
       
        <div id="enquiry_check">
           <div class="enquiry_check_title">お問い合わせ内容確認</div>
      
       
           <?php 
           
            // ぜんぶOKだったら
            print '<form method="post" action="enquiry_done.php">';
            print '<input type="hidden" name="name" value="'.$enquiry_name.'">';
            print '<input type="hidden" name="email" value="'.$enquiry_email.'">';
            print '<input type="hidden" name="phone" value="'.$enquiry_phone.'">';
            print '<input type="hidden" name="message" value="'.$enquiry_message.'">';
            print '<div class="e_box">';
            print '<div class="e_check">【お名前】</div><br/>';
            print '<div class="e_post">';
            print $enquiry_name;
            print '</div>';
            // print '<br />';
            print '<div class="e_check">【メールアドレス】</div><br/>';
            print '<div class="e_post">';
            print $enquiry_email;
            print '</div>';
            // print '<br />';
            print '<div class="e_check">【電話番号】</div><br/>';
            print '<div class="e_post">';
            print $enquiry_phone;
            print '</div>';
            // print '<br />';
            print '<div class="e_check">【お問い合わせ内容】</div><br/>';
            print '<div class="e_post_last">';
            print nl2br($enquiry_message);
            print '</div>';
            // print '<br />';
            print '<input class="e_btn" type="button" onclick="history.back()" value="戻る">';
            print '<input  class="e_btn" type="submit" value="送信" >';
            print '</div>';
            print '</form>';
            
            print '<input type="hidden" name="name" value="'.$enquiry_name.'">';
            print '<input type="hidden" name="email" value="'.$enquiry_email.'">';
            print '<input type="hidden" name="phone" value="'.$enquiry_phone.'">';
            print '<input type="hidden" name="message" value="'.$enquiry_message.'">';
        
        ?>
        
        </div>
        <!-----------map------------------->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3344.092481934753!2d130.6576318151405!3d33.054031977116225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3540ffdcaa0f532d%3A0x7a0b2d546998a0aa!2z5bmz5bGx5rip5rOJIOaXpeW4sOOCiuOCueODkSDjg5Xjg63jg7zjg6k!5e0!3m2!1sen!2sau!4v1600249681480!5m2!1sen!2sau" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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
