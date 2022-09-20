
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
<?php
  function beginning() {
    echo "
    <h1><a href=\"test.php\">Jungmin Kim</a></h1>
    <h4><a href=\"main.php\">Change</a></h4>
    <hr>
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
      beginning();
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


    <?php
    $temp = "B.B.D";
    echo "<p id=\"idIs\">$temp</p>";
     ?>

    <ol>
      <?php
        $i=0;
        $list = scandir('./data/B.B.D');
        $idName = "B.B.D";
        while($i < count($list)) {
          if($list[$i]!='.' && $list[$i] != '..') {
            echo "<li><a id=\"contentIs\" href=\"test.php?id=$idName&option=$list[$i]\">$list[$i]\n</a></li>\n";
          }
            $i = $i+1;
        }
      ?>
      </ol>


      <p id="BB">Type something in...
      </p>
      <form class="" action="create_process.php" method="post">
        <p id="BB">
          <input type="text" name="title" style="width: 500px" placeholder="title">
        </p>

        <p id="BB">
          <textarea placeholder="description" name="description" rows="15" cols="65"></textarea>
        </p>

        <p id="BB"><input type="submit"></p>
      </form>













  </body>
</html>
