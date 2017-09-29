<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Ryosuke Abe</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="style/basscss.css">
    <link rel="stylesheet" href="style/style.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="./js/jquery.js"></script>
    <script type="text/javascript" src="./js/feedin.js"></script>
    <script type="text/javascript" src="./js/nav.js"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-50923675-2', 'auto');
      ga('send', 'pageview');

    </script>
    <script type="text/javascript">
      $(document).ready(function() {
        $('#accounts').scrollInTurn();
        $('#about').scrollInTurn({
          fadeInSpeed:1000
        });
        $('#publications').scrollInTurn();
        $('#blog').scrollInTurn();
      });
    </script>
    <style>
      .fixed {
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 10000;
      }
    </style>
  </head>
  <body  class="white bg-black center">
    <nav class="clearfix py1 bg-white fixed sm-show">
        <div class="sm-flex center nowrap">
          <div class="flex-auto">
            <a href="#top" class="btn black btn-primary white bg-black navbtn">About Me</a>
          </div>
          <div class="flex-auto">
            <a href="#publications" class="btn white navbtn">Publications</a>
          </div>
          <div class="flex-auto">
            <a href="#blog" class="btn black navbtn">Posts to qiita</a>
          </div>
          <div class="flex-auto">
            <a href="#accounts" class="btn black navbtn">Accounts</a>
          </div>
          <div class="flex-auto">
            <a href="#contact" class="btn black navbtn">Contact</a>
          </div>
      </div>
    </nav>
    <article id="top" class="py4">
    <div id="hoge" style="width: 100%;height: 100%;position:fixed;left: 0;top: 0;z-index: -1;"></div>
    <div id="about" class="clearfix py1 px3">
      <div class="col sm-col-6 col-12 mt4">
        <img src="./img/chike.jpg" alt="chike" width="300px">
      </div>
      <div class="col sm-col-6 col-12 center">
        <h2>Ryosuke Abe</h2>
        <h3>Affiliation</h3>
        <ul style="list-style-type: none; padding:0;">
          <li>Keio Univ. Student of graduate school (Master course of Media and Governance) (2017.4 ~ )</li>
          <li>Keio Univ. Bachelor of Policy Management(2017.3)</li>
          <li>Jun Murai Lab. NECO KGL (2015.9 ~ )</li>
          <li>Fujisawa Kenyukai Captain (2015.4 ~ 2015.11)</li>
          <li>25th Tanabata Festival Web Creater (2014)</li>
          <li><a href="http://lmtc.jp" class="white" style="text-decoration: none;">Layout my Torturechamber</a> Bassist (2015.5 ~ )</li>
        </ul>
        <h3>Interest</h3>
        <ul style="list-style-type: none; padding:0;">
          <li>Global Operating System</li>
          <li>Blockchain</li>
          <li>Digital Currency</li>
          <li>Distributed Autonomous Organization</li>
          <li>Social Network Analytics</li>
          <li>Loud Music</li>
          <li>Kendo</li>
        </ul>
      </div>
    </div>
    <div id="slide" class="py1">
      <h2>Slide</h2>
      <div class="col sm-col-6 col-12 px1">
        <iframe id="slide" src="//www.slideshare.net/slideshow/embed_code/key/vCTdnCEpiqiKvn" width="80%" height="300px"></iframe>
        <h4>Bitcoin: Blockchainとその発展</h4>
      </div>
      <div class="col sm-col-6 col-12 px1">
        <iframe id="slide" src="//www.slideshare.net/slideshow/embed_code/key/Fx8Nsx5lwSYg8w" width="80%" height="300px"></iframe>
        <h4>「通貨」と「信頼」 Bitcoinとはそもそも何か</h4>
      </div>
      <div style="clear:both"></div>
    </div>
    <div id="publications" class="py1">
      <h2>Publications</h2>
      <div class="bg-lighten-1 py1 px3 target" >
      <div class="white left-align" style="text-decoration: none;">
        <h3>パーソナルファブリケーション時代におけるBlockchainを用いた製造情報保存システム</h3>
         <div class="h4">阿部 涼介, 斉藤 賢爾, 村井純</div>
         <div class="h4">マルチメディア,分散,協調とモバイル (DICOMO2017) シンポジウム,(2017)</div>
        </div>
      </div>
    </div>
    <div id="blog" class="py1">
      <h2>Posts to qiita</h2>
      <?php
      $dsn = 'mysql:dbname=xyz;host=localhost';
      $user = 'xyz';
      $password = 'chike072';
      try{
        $dbh = new PDO($dsn, $user, $password);
      }catch (PDOException $e){
        print('Error:'.$e->getMessage());
      die();
      }
      $dbh->query('SET NAMES utf8');
      $sql = 'select * from qiita';
      $stmt = $dbh->query($sql);
      while($item = $stmt->fetch(PDO::FETCH_ASSOC)){
      ?>
      <div class="bg-lighten-1 py1 px3" >
      <a href="<?php echo $item["url"];?>" class="white left-align" style="text-decoration: none;">
        <h3><?php echo $item["title"]; ?></h3>
          <div class="flex">
            <?php for($i = 1;$i<6;$i++){
              $key = "tag".$i;
              if(!empty($item[$key])){
            ?>
            <div class="px1 mr1 bg-white black rounded"><?php echo $item[$key]; ?></div>
            <?php }
                }
             ?>
          </div>
        </a>
      </div>
     <?php } ?>
    </div>
    <div id="accounts" class="px2 py1 center">
      <h2>Accounts</h2>
      <div class="col col-6 px1 target">
        <a href="https://twitter.com/chike0905"><img src="img/twitter.png" alt="Twitter" width="250px"></a>
      </div>
      <div class="col col-6 px1 target">
        <a href="https://github.com/chike0905"><img src="img/github.png" alt="GitHub" width="250px"></a>
      </div>
    </div>
    <div id="contact" class="py2 px3 center">
      <h2>Contact</h2>
      Mail : chike[at]sfc.wide.ad.jp
    </div>
    </article>
    <footer class="clearfix py3">
    <div class="clearfix">
      <div id="copyright" class="px3 right">
        &copy Ryosuke Abe <?php echo date(Y); ?>
      </div>
    </div>
    </footer>
  </body>
  <script type="text/javascript" src="./js/particles.js"></script>
  <script type="text/javascript" src="./js/particlesconf.js"></script>
</html>
