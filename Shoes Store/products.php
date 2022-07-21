<html>
<link rel="stylesheet" href="css/Shoes.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="sty6lesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/home.css">

<body class="w3-content" style="max-width:200%">
  <nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width:250px" id="mySidebar">
    <div class="w3-container w3-display-container w3-padding-16">
      <a href="home.html"><img src="./pictureSho/logo.jpeg" style="width: 85%;"></a>
    </div>
    <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold">
      <a href="Reviews.html"  class="w3-bar-item w3-button w3-padding">Reviews</a>
    <a href="Contact.html" class="w3-bar-item w3-button w3-padding">Contact</a>
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding"
      onclick="document.getElementById('newsletter').style.display='block'">Newsletter</a>
    <a href="#footer" class="w3-bar-item w3-button w3-padding">Subscribe</a>
  </nav>

  <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold">
    <a href="Reviews.html">Reviews</a>
    <a onclick="myAccFunc()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn">
      Shoes <i class="fa fa-caret-down"></i>
    </a>
    <div id="demoAcc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
      <a href="#" class="w3-bar-item w3-button w3-light-grey"><i class="fa fa-caret-right w3-margin-right"></i>For
        men</a>
      <a href="#" class="w3-bar-item w3-button">To be continued</a>
    </div>
  </div>
  <a href="Contact.html" class="w3-bar-item w3-button w3-padding">Contact</a>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding"
    onclick="document.getElementById('newsletter').style.display='block'">Newsletter</a>
  </nav>



  

  <?php
$con=mysqli_connect("localhost","root","","shoesstore");

$result= mysqli_query($con, "SELECT * FROM products");

mysqli_close($con);
?>





  <section class="card">
    <!--המוצרים -->
    <br />
    <br />
    <?php $cnt=0 ?>
    <?php while($rows = mysqli_fetch_array($result)){  ?>
    <?php  if($cnt%3==0){
                echo  "<div class=product-container>";
              }?>



    <div>

      <div class="row">
        <div class="column">
          <!--התמונה של כל מוצר-->
          <img <?php echo " src=" .$rows['images'] ?> style="width:100%" float="w3-left">
        </div>



        <div class="product-info">
          <!--התיאור של המוצר עצמו-->
          <h2 class="product-brand">
            <?php echo $rows['prodcutType'] ?>
          </h2>
          <p class="product-short-des">
            <?php echo $rows['productDescription'] ?>
          </p>
          <p>
            <?php echo $rows['actualPrice']."₪" ?>
          <p><a href="CreditCard.html" class="w3-button w3-black w3-padding-large w3-large">Buy Now</a></p>
          </a>
        </div>




      </div>
    </div>



    <?php $cnt=$cnt+1; ?>

    <?php  if($cnt%3==0){
              echo  "</div>";
            }?>



    <?php }; ?>

  </section>
















  