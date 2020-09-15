<?php
  include 'header.php';
?>

<?php
session_start();

if(isset($_SESSION['shoes']) && isset($_POST['id'])){
  $shoes = $_SESSION["shoes"];
  $shoes[count($shoes)]=$_POST["id"];
  $_SESSION["shoes"] = $shoes;

} else if (!isset($_SESSION['shoes']) && isset($_POST['id'])){
  $shoes = [];
  $shoes[0] = $_POST['id'];
  $_SESSION['shoes'] = $shoes;
} else if (!isset($_SESSION['shoes']) && !isset($_POST['id'])){
  $_SESSION['shoes'] = [];
}



?>
<?php
  include 'databaseconfig.php';

?>
	
<div class="side" style="height:;">
  <ul style="padding-left: 10px;" class="nav flex-column">
    <li class="nav-item">
      <a class="nav-link black " href="#" style="font-size: 25px;color: #00bd40 !important;">Categories</a>
      </li>

      <li><hr class="linesize"></li>

      <li>
      <ul >

        <li class="noStyle" >
          <a class="nav-link black running" href="#">Running</a>
        </li>

        <li class="noStyle" >
          <a class="nav-link black football" href="#">Football</a>
        </li>

        <li class="noStyle" >
          <a class="nav-link black basketball" href="#">Basketball</a>
        </li>

        <li class="noStyle">
          <a class="nav-link black lifestyle" href="#">Lifestyle</a>
        </li>

        <li class="noStyle" >
          <a class="nav-link black skateboarding" href="#">Skateboarding</a>
        </li>
      </ul>
    </li>

    <li><hr class="linesize"></li>

    <li class="nav-item">
      <a class="nav-link black" href="#" style="font-size: 25px;color: #00bd40 !important;">Brands</a>
    </li>

    <li class="nav-item">
        <a class="nav-link black nike" href="#">Nike</a>
    </li>

    <li class="nav-item">
        <a class="nav-link black adidas" href="#">adidas</a>
    </li>

    <li class="nav-item">
        <a class="nav-link black puma" href="#">Puma</a>
    </li>

    <li class="nav-item">
        <a class="nav-link black jordan" href="#">Jordan</a>
    </li>

    <li><hr class="linesize"></li>

    <li class="nav-item">
      <a class="nav-link black" href="#" style="font-size: 25px;color: #00bd40 !important;">Gender</a>
    </li>

    <li class="nav-item">
        <a class="nav-link black men" href="#">Men</a>
    </li>

    <li class="nav-item">
        <a class="nav-link black women" href="#">Women</a>
    </li>

    <li class="nav-item">
        <a class="nav-link displayAll" href="#">Undo all Filters</a>
    </li>
  
  </ul>
</div>



		<div class="maincard">

      <form method="post" action="lalee.php">

      <?php
  $query1 = "SELECT * FROM shoe_stock";
  $query2 = "SELECT * FROM images";
  $query = "SELECT * FROM shoe_stock JOIN images USING (id)";

  $result=mysqli_query($conn,$query);
while($row = mysqli_fetch_array($result)){
  $_SESSION['varname'] = $row['name'];
      echo "<div class=\"card\">\n";
      echo "<img style='height:265px;width:100%;' class='card-img-top cardimg' src=".$row['image'].">\n";
      echo "<div class=\"card-body\">\n";
      echo "<input type='text' value='".$row['name']."'name='name' id='name' readonly>\n";
      echo "<input type='text' value='".$row['brand']."'name='brand' id='brand' readonly>\n";
      echo "<input type='text' value='".$row['type']."'name='type' id='category' readonly>\n";
      echo "<input type='text' value='".$row['gender']."'name='gender' id='gender' readonly>\n";
      echo "<input type='text' value='".$row['price']."'name='price' readonly>\n";
      echo "</div>";
      echo '<button type="submit" value="'.$row['id'].'name="id" class="added" >Add To Cart</button>';
    
    echo "</div>";
  }
  ?>

  </form>

</div>

		

<?php
  include 'footer.php';
?> 

<script type="text/javascript">
  
  var $cards = document.getElementsByClassName("card");
  $cards.toString().split(",");


function removeF(){
  for (var i = 0; i <= $cards.length; i++) {

    if($($cards[i]).children().children('#gender').val() === "F"){
      $($cards[i]).hide();
    }
    if($($cards[i]).children().children('#gender').val() === "M"){
      $($cards[i]).show();
    }
  }
  $(".skateboarding").removeClass("green");
    $(".men").addClass("green");
    $(".women").removeClass("green");
    $(".nike").removeClass("green");
    $(".adidas").removeClass("green");
    $(".puma").removeClass("green");
    $(".jordan").removeClass("green");
    $(".running").removeClass("green");
    $(".basketball").removeClass("green");
    $(".lifestyle").removeClass("green");
    $(".football").removeClass("green");
}


function removeM(){
  for (var i = 0; i <= $cards.length; i++) {

    if($($cards[i]).children().children('#gender').val() === "M"){
      $($cards[i]).hide();
    }

    if($($cards[i]).children().children('#gender').val() === "F"){
      $($cards[i]).show();
    }
  }
  $(".skateboarding").removeClass("green");
    $(".men").removeClass("green");
    $(".women").addClass("green");
    $(".nike").removeClass("green");
    $(".adidas").removeClass("green");
    $(".puma").removeClass("green");
    $(".jordan").removeClass("green");
    $(".running").removeClass("green");
    $(".basketball").removeClass("green");
    $(".lifestyle").removeClass("green");
    $(".football").removeClass("green");
}

function keepNike(){
  for (var i = 0; i <= $cards.length; i++) {

    if($($cards[i]).children().children('#brand').val() !== "Nike"){
      $($cards[i]).hide();
    }

    if($($cards[i]).children().children('#brand').val() === "Nike"){
      $($cards[i]).show();
    }
  }
  $(".skateboarding").removeClass("green");
    $(".men").removeClass("green");
    $(".women").removeClass("green");
    $(".nike").addClass("green");
    $(".adidas").removeClass("green");
    $(".puma").removeClass("green");
    $(".jordan").removeClass("green");
    $(".running").removeClass("green");
    $(".basketball").removeClass("green");
    $(".lifestyle").removeClass("green");
    $(".football").removeClass("green");
}

function keepJordan(){
  for (var i = 0; i <= $cards.length; i++) {

    if($($cards[i]).children().children('#brand').val() !== "Jordan"){
      $($cards[i]).hide();
    }

    if($($cards[i]).children().children('#brand').val() === "Jordan"){
      $($cards[i]).show();
    }
  }
  $(".skateboarding").removeClass("green");
    $(".men").removeClass("green");
    $(".women").removeClass("green");
    $(".nike").removeClass("green");
    $(".adidas").removeClass("green");
    $(".puma").removeClass("green");
    $(".jordan").addClass("green");
    $(".running").removeClass("green");
    $(".basketball").removeClass("green");
    $(".lifestyle").removeClass("green");
    $(".football").removeClass("green");
}

function keepAdidas(){
  for (var i = 0; i <= $cards.length; i++) {

    if($($cards[i]).children().children('#brand').val() !== "adidas"){
      $($cards[i]).hide();
    }

    if($($cards[i]).children().children('#brand').val() === "adidas"){
      $($cards[i]).show();
    }
  }
  $(".skateboarding").removeClass("green");
    $(".men").removeClass("green");
    $(".women").removeClass("green");
    $(".nike").removeClass("green");
    $(".adidas").addClass("green");
    $(".puma").removeClass("green");
    $(".jordan").removeClass("green");
    $(".running").removeClass("green");
    $(".basketball").removeClass("green");
    $(".lifestyle").removeClass("green");
    $(".football").removeClass("green");
}

function keepPuma(){
  for (var i = 0; i <= $cards.length; i++) {

    if($($cards[i]).children().children('#brand').val() !== "Puma"){
      $($cards[i]).hide();
    }

    if($($cards[i]).children().children('#brand').val() === "Puma"){
      $($cards[i]).show();
    }
  }
  $(".skateboarding").removeClass("green");
    $(".men").removeClass("green");
    $(".women").removeClass("green");
    $(".nike").removeClass("green");
    $(".adidas").removeClass("green");
    $(".puma").addClass("green");
    $(".jordan").removeClass("green");
    $(".running").removeClass("green");
    $(".basketball").removeClass("green");
    $(".lifestyle").removeClass("green");
    $(".football").removeClass("green");
}

function keepRunning(){
  for (var i = 0; i <= $cards.length; i++) {

    if($($cards[i]).children().children('#category').val() !== "Running"){
      $($cards[i]).hide();
    }

    if($($cards[i]).children().children('#category').val() === "Running"){
      $($cards[i]).show();
    }
  }
  $(".skateboarding").removeClass("green");
    $(".men").removeClass("green");
    $(".women").removeClass("green");
    $(".nike").removeClass("green");
    $(".adidas").removeClass("green");
    $(".puma").removeClass("green");
    $(".jordan").removeClass("green");
    $(".running").addClass("green");
    $(".basketball").removeClass("green");
    $(".lifestyle").removeClass("green");
    $(".football").removeClass("green");
}

function keepFootball(){
  for (var i = 0; i <= $cards.length; i++) {

    if($($cards[i]).children().children('#category').val() !== "Football"){
      $($cards[i]).hide();
    }

    if($($cards[i]).children().children('#category').val() === "Football"){
      $($cards[i]).show();
    }
  }
  $(".skateboarding").removeClass("green");
    $(".men").removeClass("green");
    $(".women").removeClass("green");
    $(".nike").removeClass("green");
    $(".adidas").removeClass("green");
    $(".puma").removeClass("green");
    $(".jordan").removeClass("green");
    $(".running").removeClass("green");
    $(".basketball").removeClass("green");
    $(".lifestyle").removeClass("green");
    $(".football").addClass("green");
}

function keepBasketball(){
  for (var i = 0; i <= $cards.length; i++) {

    if($($cards[i]).children().children('#category').val() !== "Basketball"){
      $($cards[i]).hide();
    }

    if($($cards[i]).children().children('#category').val() === "Basketball"){
      $($cards[i]).show();
    }
  }
  $(".skateboarding").removeClass("green");
    $(".men").removeClass("green");
    $(".women").removeClass("green");
    $(".nike").removeClass("green");
    $(".adidas").removeClass("green");
    $(".puma").removeClass("green");
    $(".jordan").removeClass("green");
    $(".running").removeClass("green");
    $(".basketball").addClass("green");
    $(".lifestyle").removeClass("green");
    $(".football").removeClass("green");
}

function keepLifestyle(){
  for (var i = 0; i <= $cards.length; i++) {

    if($($cards[i]).children().children('#category').val() !== "Lifestyle"){
      $($cards[i]).hide();
    }

    if($($cards[i]).children().children('#category').val() === "Lifestyle"){
      $($cards[i]).show();
    }
  }
  $(".skateboarding").removeClass("green");
    $(".men").removeClass("green");
    $(".women").removeClass("green");
    $(".nike").removeClass("green");
    $(".adidas").removeClass("green");
    $(".puma").removeClass("green");
    $(".jordan").removeClass("green");
    $(".running").removeClass("green");
    $(".basketball").removeClass("green");
    $(".lifestyle").addClass("green");
    $(".football").removeClass("green");
}

function keepSkateboarding(){
  for (var i = 0; i <= $cards.length; i++) {

    if($($cards[i]).children().children('#category').val() !== "Skateboarding"){
      $($cards[i]).hide();
    }

    if($($cards[i]).children().children('#category').val() === "Skateboarding"){
      $($cards[i]).show();
    }
  }
    $(".skateboarding").addClass("green");
    $(".men").removeClass("green");
    $(".women").removeClass("green");
    $(".nike").removeClass("green");
    $(".adidas").removeClass("green");
    $(".puma").removeClass("green");
    $(".jordan").removeClass("green");
    $(".running").removeClass("green");
    $(".basketball").removeClass("green");
    $(".lifestyle").removeClass("green");
    $(".football").removeClass("green");
}

$(".men").on('click',removeF)
$(".women").on('click',removeM);
$(".nike").on('click',keepNike);
$(".adidas").on('click',keepAdidas);
$(".puma").on('click',keepPuma);
$(".jordan").on('click',keepJordan);

$(".running").on('click',keepRunning);
$(".lifestyle").on('click',keepLifestyle);
$(".basketball").on('click',keepBasketball);
$(".skateboarding").on('click',keepSkateboarding);
$(".football").on('click',keepFootball);


function displayAll(){
   var r = confirm("You are about to remove all filters. Do you want to proceed?");
   if(r===true){
     for (var i = 0; i <= $cards.length; i++) {
      $($cards[i]).show();
     }
    }
    $(".skateboarding").removeClass("green");
    $(".men").removeClass("green");
    $(".women").removeClass("green");
    $(".nike").removeClass("green");
    $(".adidas").removeClass("green");
    $(".puma").removeClass("green");
    $(".jordan").removeClass("green");
    $(".running").removeClass("green");
    $(".basketball").removeClass("green");
    $(".lifestyle").removeClass("green");
    $(".football").removeClass("green");
}

$(".displayAll").on('click',displayAll);

$(".added").on('click',function(){
  alert("Shoe added into the cart.");
});

</script>

</html>