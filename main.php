<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <style media="screen">
      <?php include 'style2.css'; ?>
    </style>
    <title>Jungmin's profile</title>
  </head>
  <body>
    <h1>Jungmin Kim</h1>
    <a href="test.php" id="dMode">
      Different Mode
    </a>
    <br>
    <br>
    <hr>

    <h4>What is her identity?</h4>

    <div class="step1">
      <ol>
        <?php
        $list = scandir('./data/');
        $i =0;
        while($i < count($list)) {
          if($list[$i] != '.') {
            if($list[$i] != '..') {
              echo "<li><a href=\"main.php?id=$list[$i]\">$list[$i]\n</a></li>\n";
            }
          }
          $i = $i+1;
        }
        ?>
      </ol>
    </div>



    <div class="step2">
      <ol>
        <?php
        $i=0;
        if(isset($_GET['id'])) {
          $idName = $_GET['id'];
          $list2 = scandir('./data/'.$_GET['id']);
          while($i < count($list2)) {
            if($list2[$i]!='.') {
              if($list2[$i]!='..') {
                echo "<li><a href=\"main.php?id=$idName&option=$list2[$i]\">$list2[$i]\n</a></li>\n";
              }
            }
            $i = $i+1;
          }
        } else {
          echo "Select one of the options above\n";
        }
        ?>
      </ol>
    </div>


    <div class="step3">
      <?php
      echo file_get_contents("data/".$_GET['id']."/".$_GET['option']);
      ?>
    </div>
  </body>
</html>
