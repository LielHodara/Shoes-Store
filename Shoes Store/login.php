<head>
<link rel="stylesheet" href="css/login.css">
<link rel="stylesheet" href="css/home.css">
<script src ="js/login.js"></script>
</head>


  <div class="w3-container w3-display-container w3-padding-16">
    <a href="home.html"><img src="./pictureSho/logo.jpeg" style="width: 10%;"></a>
  </div>

<div class="container">
      <div class="row">
        <form method="POST" action="checkuser.php">
        <h2 style="text-align:center">Login with Social Media or Manually</h2>
        <div class="vl">
          <span class="vl-innertext">or</span>
        </div>
  
        <div class="col">
          <a href="#" class="fb btn">
            <i class="fa fa-facebook fa-fw"></i> Login with Facebook
          </a>
          <a href="#" class="twitter btn">
            <i class="fa fa-twitter fa-fw"></i> Login with Twitter
          </a>
          <a href="#" class="google btn">
            <i class="fa fa-google fa-fw"></i> Login with Google+
          </a>
        </div>
  
        <div class="col">
          <div class="hide-md-lg">
            <p>Or sign in manually:</p>
            <form>
          </div>
  
          <input id = "usernameId" type="text" name="emailID"  placeholder="john@example.com" required>
          <input id = "passwordId" type="password" name="pwID" required>    
          <!-- <input class="btn" type="button" value="Login" onclick="login()"> </input> -->
          <button type="sumbit">Login</button>
        </div>
      </div>
    </form>
  </div>
  
  <div class="bottom-container">
    <div class="row">
      <div class="col">
        <a href="signUp.html" style="color:rgb(255, 255, 255)" class="btn">Sign up</a>
      </div>
      <div class="col">
        <a href="#" style="color:white" class="btn">Forgot password?</a>
      </div>
    </div>
  </div>