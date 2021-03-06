<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My BootStrap Theme</title>
    <link rel="icon" href="">
  <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-theme.min.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"> 
</head>
<body>
<header>
    <div class="actionbar hidden-xs">
        <div class="container">
            <div class="row">
               <div class="col-lg-9">
               </div> 
                   <div class="col-lg-3">
                   <a href="#" style="border-right: 1px solid #acacac; color: #acacac">Login</a>
                       <a href="#" style="border-right: 1px solid #acacac; color: #acacac">English</a>
                          <a href="#" style="border-right: 1px solid #acacac; color: #acacac">My Account</a>
                       <a href="#" style="color: #acacac">Cart(0)</a>
               </div>
            </div>
            <br>
        </div>
    </div>
    <nav class="navbar navbar-default">
  <div class="container" style="border-bottom: 1px solid #e7e7e7">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#" style="font-size: 25px; color: black"><strong>SHOPIFY</strong></a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active">                                            <a href="#">Home<span class="sr-only">(current)</span></a></li>
        <!-- in url function you call a route -->
        <li><a href="{{url('addProduct')}}">Add Product</a></li>
        <li><a href="#">Portfolio</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">Login</a></li>
          <li><a href="#">Registration</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" style="border-right: 1px solid #e7e7e7; border-left: 1px solid #e7e7e7"><i class="fas fa-search"></i></a></li>
        <li><a href="#" style="border-right: 1px solid #e7e7e7"><i class="fas fa-share-alt"></i></a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</header>
<section class="banner">
 <div class="container">
<div class="row">
  <div class="col-xs-12">
    <br>
    <div class="image">
<br>
  <h4 class="display-1">Brand New Summer-sale<br> Special dress Now Online</h4>
   <br>
<button type="button" class="button">SHOP IT NOW</button>
   <br><br><br><br><br><br><br>
      </div> </div>
     </div>
      </div>  </section>
       <div class="container">
<div class="row">
   <div class="col-xs-12 col-md-4">
       <img src="images/img1.jpg" class="img-responsive">
   </div>
    <div class="col-xs-12 col-md-4">
         <img src="images/img2.jpg" class="img-responsive">
    </div>
    <div class="col-xs-12 col-md-4">
         <img src="images/img3.jpg" class="img-responsive">
    </div>
     </div>
     <!-- comes from home content -->
   <div class="container">
      @yield('content')
   </div>  
   <!-- comes from home content -->
      <section class="footer" style="background-color: #F7F7F9">
 <div class="container">
<div class="row">
     <div class="col-md-12">
 <div class="col-xs-12 col-md-4">
     <h3>NEED HELP</h3>
        <small class="text-muted"> Call us 24/7 at 1-247--587-888-2323<br>Live Chat</small><br><br>  
        <button type="button" class="btn btn-secondary btn-lg btn-block" style="background-color: #555555; color: #D7D7D7">Email Us</button>
 </div>
 <div class="col-xs-12 col-md-4">
          <h3>NEED HELP</h3>
      <small class="text-muted"> Call us 24/7 at 1-247--587-888-2323<br>Live Chat</small><br><br>
        <button type="button" class="btn btn-secondary btn-lg btn-block" style="background-color: #555555; color: #D7D7D7; border-radius: none">Email Us</button>
 </div>
 <div class="col-xs-12 col-md-4">
 <h3>GET SPECIAL OFFER</h3>
      <small class="text-muted ">Subscribe and get special offer in your inbox.<br>Get up to 90% Discount on our special products.</small><br><br>
   <div class="input-group  hidden-xs">
        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enput your Email Add" name="email"; style="font-size: 20px">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button" style="font-size: 14px; color: black; font-weight: 700px; font-family: fantasy" >></button>
      </span>
      </div>
 </div>
  </div>
    </div>
     </div>
        <br>
     </section>  
    <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
    <script type="application/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>