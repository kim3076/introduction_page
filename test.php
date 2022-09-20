
<?php
function card($imageLink, $tagList, $name, $buttonLink) {
  echo "
    <div class=\"card\">
    <img src=$imageLink>
    <span class=\"tag\">$tagList[0]</span>
    <span class=\"tag\">$tagList[1]</span>
    <br>
    <div class=\"name\">
      $name
    </div>
    <a href=$buttonLink>
      <button>Click to learn more!</button>
    </a>
  </div>
";
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="main.css">
    <title>Jungmin's Profile</title>
    <style media="screen">
    <?php include 'style.css'; ?>
    </style>
  </head>
  <body>
    <?php
    echo "
      <h1><a href=\"test.php\">Jungmin Kim</a></h1>
      <h4><a href=\"main.php\">Change</a></h4>
      ";
     ?>
    <div class="cards">
      <?php
        card("images/sheep.jpg", array("2020", "Jesus"), "Christian", "test.php?id=Christian");
        card("images/food.jpg", array("Rice", "Meat"), "Eater", "test.php?id=Eater");
        card("images/softwareEngineer.jpg", array("Java", "PHP"), "Engineer\n", "test.php?id=Engineer");
        card("images/pianist.jpg", array("Major", "Cellist"), "Pianist", "test.php?id=Pianist");
        card("images/traveler.webp", array("USA","China"), "Traveler", "test.php?id=Traveler");
        card("images/board.jpg", array("Yours", "Share"), "B.B.D", "test.php?id=B.B.D");
       ?>
    </div>

    <ol>
    <?php
      $i=0;
      if(isset($_GET['id'])) {
        $id = $_GET['id'];
        if(strcmp($_GET['id'], "B.B.D") == 0) {
          if(isset($_GET['option'])) {
            $option = $_GET['option'];
            echo "<a  id=\"update\" href=\"update.php?id=B.B.D&option=$option\">Update</a>";

            echo "<a  id=\"delete\" href=\"delete_process.php?id=B.B.D&option=$option\">Delete</a>";

          } else {
            echo "<a  id=\"create\" href=\"create.php\">Create</a>";


          }
        }
        $list = scandir('./data/'.$_GET['id']);
        echo "<p id=\"idIs\">$id</p>";
        while($i < count($list)) {
          if($list[$i]!='.' && $list[$i] != '..') {
            echo "<li><a href=\"test.php?id=$id&option=$list[$i]\">$list[$i]\n</a></li>\n";
          }
            $i = $i+1;
        }
      } else {
        echo "Text will be shown here!";
      }
      ?>
      </ol>

      <p id="content">
      <?php
        echo $_GET['option'].'<br><br>';
      ?>
      </p>

      <p id="contentIs2">
      <?php
        echo file_get_contents("data/".$_GET['id']."/".$_GET['option']);
      ?>
      </p>















  </body>
</html>
