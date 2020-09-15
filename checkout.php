<?php
  // include 'header.php';
    session_start();
    if(isset($_SESSION['shoes'])){
      $shoes = $_SESSION['shoes'];
    }
      include 'databaseconfig.php';


?>





<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shopping Cart</title>

    <link rel="stylesheet" href="checkout.css" media="screen" title="no title" charset="utf-8">
    <script src="https://code.jquery.com/jquery-2.2.4.js" charset="utf-8"></script>
    <meta name="robots" content="noindex,follow" />

    <!------------------------------------------------------------------------------------------------------------------------------------------------------>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

     <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!--Font Awesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!------------------------------------------------------------------------------------------------------------------------------------------------------>

  </head>
  <body>

    <nav class ="navbar navbar-default navbar-fixed-top" id="navbarL" style="background-image:linear-gradient(to bottom,#00251a,#004d40 100%);">

      <nav class ="container">

  <!--Brand Name-->
        <ul class="navbar-header " id = "logo">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-pairadox" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
          <a href="../project.php" class="navbar-brand"><span><img src="Pair-adox.png" style="width: 132px;"></span></a>
        </ul>

    <div class="collapse navbar-collapse" id="bs-navbar-pairadox">

    <!--Left side Navbar-->
        <ul class="nav navbar-nav"  id="hello">
          <li><a href="aboutus.php">About us</a></li>
          <li><a href="lalee.php">Collection</a></li>
          <li><a href="timeline.php">History</a></li>
        </ul>

    <!--Right side Navbar-->
        <ul class="nav navbar-nav navbar-right" id="navBarR" >

         
          
  </li>

</ul>
</div>
</nav>
</nav>



    <div class="shopping-cart">
      <?php
              foreach($shoes as $x => $x_value) {
                  $query3 = "SELECT * FROM shoe_stock WHERE id = ".$x_value."";
                  $query4 = "SELECT * FROM images";
                  $query = "SELECT * FROM shoe_stock JOIN images USING (id) WHERE id = ".$x_value."";

                  $result=mysqli_query($conn,$query);

                  while($row = mysqli_fetch_array($result)){
                    echo '<div class="item">
                            <div class="buttons">
                              <span class="delete-btn"></span>
                              <span class="like-btn"></span>
                            </div>

                            <div class="image">
                              <img src='.$row["image"].' style="width:100px;"/>
                            </div>

                            <div class="description">
                              <span>'.$row["name"].'</span>
                              <span>'.$row["brand"].'</span>
                              <span>'.$row["name"].'</span>
                            </div>

                            <div class="quantity">
                              <button class="plus-btn" type="button" name="button">
                                <img src="plus.svg" alt="" />
                              </button>
                              <input type="text" name="name" value="1">
                              <button class="minus-btn" type="button" name="button">
                                <img src="minus.svg" alt="" />
                              </button>
                            </div>

                            <div class="total-price" id = "price">'.$row['price'].'</div>
                          </div>';
                  }
                }
      ?>

      <div class="total">
        <span>Total Price:</span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <span>$ </span><span class="display-total"></span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <a class= "payment" href="confirmOrder.php">Proceed to Payment</a>
      </div>

      
    </div>


    <!--------------------------- Footer ------------------------------>

      <div class="footer">
        <hr class="clearfix w-100 d-md-none pb-3">

        <div class="col-md-4 mb-md-0 mb-3">
          <img style="width:300px; padding-top: 15px; " src="Pair-adox.png">

        </div>

        <!-- Grid column -->
        <div class="col-md-4 mb-md-0 mb-3">


            <ul class="list-unstyled">
              <li>
                <a href="#" class="fa fa-phone white"><span class=
                  "hel">&nbsp+92&nbsp329&nbsp9563783</span></a>
              </li><br>
              <li>
                <a href="#" class="fa fa-map-marker white"><span class=
                  "hel"> &nbspIslamabad &nbsp|&nbsp Dubai</span></a>
              </li><br>
            </ul>

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 mb-md-0 mb-3 ">

            <!-- Links -->

            <ul class="list-unstyled">
              <li>
                <a href="#" class="fa fa-facebook white"> <span class=
                  "hel"> &nbsp Pairadox</span></a>
              </li><br>
              <li>
                <a href="#" class="fa fa-instagram white"><span class=
                  "hel">&nbsp pair-adox</span></a>
              </li><br>

              <li>
                <a href="#" class="fa fa-google white"><span class=
                  "hel">&nbsp pair-adox@gmail.com</span></a>
              </li><br>
            </ul>

          </div>

          <div style="padding-top: 8%" class="footer-copyright text-center py-3">© 2018 Copyright:
            <a href="#" class="white"> pair-adox.com</a>
          </div>
        <!-- Copyright -->
    </div> 

    <!----------------------------------- Footer ---------------------------------------->


    <script type="text/javascript">

      $(".delete-btn").click(function(){

        $(this).parent().parent().remove();

        total();
        goodFooter();

        });

      $('.minus-btn').on('click', function(e) {
    		e.preventDefault();
    		var $this = $(this);
    		var $input = $this.closest('div').find('input');
    		var value = parseInt($input.val());

        if(value!= 0){
          $orgPrice = parseInt($this.parent().parent().children('.total-price').text())/value;
        }

    		if (value > 1) {
    			value = value - 1;
    		} else {
    			value = 0;
    		}

        $input.val(value);

        $totalPrice = $orgPrice * value
        console.log($this.parent().parent().children('.total-price').text());

        $this.parent().parent().children('.total-price').text($totalPrice);

        total();

    	});

    	$('.plus-btn').on('click', function(e) {
    		e.preventDefault();
    		var $this = $(this);
    		var $input = $this.closest('div').find('input');
    		var value = parseInt($input.val());

        if(value!= 0){
          $orgPrice = parseInt($this.parent().parent().children('.total-price').text())/value;
        }

    		if (value < 100) {
      		value = value + 1;
    		} else {
    			value =100;
    		}

    		$input.val(value);
        
        $totalPrice = $orgPrice * value
        console.log($this.parent().parent().children('.total-price').text());

        $this.parent().parent().children('.total-price').text($totalPrice);

        total();

    	});

      $('.like-btn').on('click', function() {
        $(this).toggleClass('is-active');
      });

      function total(){
        var x = document.getElementsByClassName("total-price");
        var $xy = 0;
        for (var i=0 ; i <= x.length - 1; i++) {
          $xy += parseInt($(x[i]).text());
        }
        $(".display-total").text($xy);

      }

      var x = document.getElementsByClassName("total-price");
        var $xy = 0;
        for (var i=0 ; i <= x.length - 1; i++) {
          $xy += parseInt($(x[i]).text());
        }
        $(".display-total").text($xy);


        function goodFooter(){
          var $items = document.getElementsByClassName("item");
          
          if($items.length === 2){
            $(".footer").addClass("goodFooter");
          }
        }

        goodFooter();

    </script>
  </body>
</html>
