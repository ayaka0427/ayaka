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
   
   
   <?php 
        $enquiry_name = $_POST['name'];
        $enquiry_email = $_POST['email'];
        $enquiry_phone = $_POST['phone'];
        $enquiry_message = $_POST['message'];
   
        $enquiry_name = htmlspecialchars($enquiry_name,ENT_QUOTES,'UTF-8');
        $enquiry_email = htmlspecialchars($enquiry_email,ENT_QUOTES,'UTF-8');
        $enquiry_phone = htmlspecialchars($enquiry_phone,ENT_QUOTES,'UTF-8');
        $enquiry_message = htmlspecialchars($enquiry_message,ENT_QUOTES,'UTF-8');   
       
          $maintext = '';
          $maintext .= "メールフォームよりお問い合わせがありました。<br />";
          $maintext .= "【お名前】<br />";
          $maintext .= $enquiry_name. "<br />";
          $maintext .= "【メールアドレス】<br />";
          $maintext .= $enquiry_email. "<br />";
          $maintext .= "【電話番号】<br />";
          $maintext .= $enquiry_phone. "<br />";
          $maintext .= "【お問い合わせ内容】<br />";
          $maintext .= $enquiry_message. "<br />";
      
          mb_language("Japanese");
          mb_internal_encoding("UTF-8");
          
          
          $mail_to = "amkr.ayk@gmail.com";
        //   $mail_to = $enquiry_email;
          $mail_subject = "メールフォームよりお問い合わせ";
          $mail_body = $maintext;
          $mail_header = "from:info@spa-flora.com";
          
          $mailsend = mb_send_mail($mail_to, $mail_subject, $mail_body, $mail_header);
       
          if($mailsend == true) {
              print '<div class="e_done_title">お問い合わせ完了</div>';
              print '<div class="e_done">';
              print '<p class="e_thanks">お問い合わせありがとうございます。<br />お問い合わせいただいた内容につきましては<br />近日中にお返事させていただきます。</p><br />';
              print '</div>';
          }
          else {
              print 'エラーが発生しました。 <br />';
          }
      
        
    ?>
    <!---<div id="enquiry_check">
     
            <header class="enquiry_check">お問い合わせ内容確認</header>
    
        <input id="return" type="button" onclick="history.back()" value="戻る">
        <input id="submit" type="button" value="送信">
    </form>
     </div>---->
    
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

