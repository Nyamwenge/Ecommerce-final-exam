
  <?php
    $db = mysqli_connect('localhost','root','','Electronics');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nkozi Electronics</title>
</head><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>  
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" 
 integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="index.css">
<script src="homepage.js"></script>
<body width="100%">  
          
  <div class="main">
    <div class="TopMost"><img src="logo.jpg" width="60px" height="65px"> &nbsp; &nbsp;<font color="rgba 0 0 0 0" id="formatting">
      N</font> <div class="" id="formatting">
      kozi </div>&nbsp; &nbsp;
    <font color="rgba 0 0 0 0" id="formatting">
        E</font> <div id="formatting">lectronics </div><div class="Account">
          <nav class="navbar navbar-expand-sm navbar-light bg-white">
          <div class="container-fluid">
            
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
              <ul class="navbar-nav me-auto  ">
                <li class="nav-item" id="user" >
                  <a class="nav-link active" aria-current="page" href="#" id="user"><center><i class="fas fa-user-circle fa-2x"></i>
                  </center>
                   <center> <figcaption id="user-account">Account</figcaption></center></a><div class="dropdown-menu" id="account">
                    <form class="px-4 py-3">
                      <div class="mb-3">
                        <label for="exampleDropdownFormEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
                      </div>
                      <div class="mb-3">
                        <label for="exampleDropdownFormPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
                      </div>
                      <div class="mb-3">
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="dropdownCheck">
                          <label class="form-check-label" for="dropdownCheck">
                            Remember me
                          </label>
                        </div>
                      </div>
                      <button type="submit" class="btn btn" id="signin"><a href="index.html">Sign in</a></button>
                    </form>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="register.html" id="create-account">New around here? Sign up</a>
                    <a class="dropdown-item" href="#" id="create-account">Forgot password?</a>
                  </div>
                
                </li>
              </ul>
              
            </div></div>
          </div> <li class="nav-item dropdown" id="order">
            <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown" id="order">More</a>
             <ul class="dropdown-menu" id="mylist">
              <li><a class="dropdown-item" href="#"><i class="far fa-smile"></i>&nbsp;&nbsp;Place your order now</a></li>
               <li><a class="dropdown-item" href="#"><i class="fas fa-sort-amount-up-alt"></i>&nbsp;&nbsp;Track your order </a></li>
               <li><a class="dropdown-item" href="#"> <i class="far fa-heart"></i>&nbsp;&nbsp;Wishlist </a></li>
               <li><a class="dropdown-item" href="#"><i class="fas fa-gifts"></i> &nbsp;&nbsp;Rewards </a></li>
               <li><a class="dropdown-item" href="#"><i class="fas fa-gift"></i>&nbsp;&nbsp;Gift Cards </a></li>
               
          
             </ul></li>
        </nav></div>
        
        
<div class="Navbar"> <nav class="navbar navbar-expand-sm navbar-white">
             
    <div class="collapse navbar-collapse" id="main_nav">
  <ul class="navbar-nav">
    
    <li class="nav-item  active" >
      <a class="nav-link " href="index.html" >  Home</a>
   </li>
   
    <li class="nav-item ">
       <a class="nav-link " href="AboutUs.html">  About Us</a>
       
        
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown" id="cate">  Product Categories</a>
       <ul class="dropdown-menu" id="category">
         <li><a class="dropdown-item" href="Tech Accessories.html"> Tech Accessories</a></li>
         <li><a class="dropdown-item" href="T.vs & Computers.html"> TVs </a></li>
         <li><a class="dropdown-item" href="T.vs & Computers.html#computers">Computers </a></li>
         <li><a class="dropdown-item" href="watches.html"> Speakers and Audio systems</a></li>
         <li><a class="dropdown-item" href="watches.html">Wearable Technology </a></li>
         <li><a class="dropdown-item" href="phones.html"> Cell Phones </a></li>
         <li><a class="dropdown-item" href="cameras.html"> Cameras </a></li>
         <li><a class="dropdown-item" href="networking.html">Wi-Fi & Networking </a></li>
         <li><a class="dropdown-item" href="batteries.html"> Batteries & Calculators </a></li>
         <li><a class="dropdown-item" href="Appliances.html"> Other Home Appliances </a></li>
       </ul></li>
       <li class="nav-item dropdown" >
        <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown" id="cate" >Services </a>
     
          <ul class="dropdown-menu" id="services">
            <li><a class="dropdown-item" href="#" id="services-list"><h5>We offer the following services; </h5></a></li>
            <li><a class="dropdown-item" href="#"  id="services-list"><span>1.</span>&nbsp; Shopping Assistance  </a></li>
            <li><a class="dropdown-item" href="#"  id="services-list"> <span>2.</span>&nbsp;Warranties & Rebates </a></li>
            <li><a class="dropdown-item" href="#" id="services-list"><span>3.</span>&nbsp;Shipping & Delivery </a></li>
            <li><a class="dropdown-item" href="#"  id="services-list"><span>4.</span>&nbsp;System maintenance & Repair </a></li>
            <li><a class="dropdown-item" href="#"  id="services-list"><span>5.</span>&nbsp;Network Installations </a></li>
            <li><a class="dropdown-item" href="#"  id="services-list"><span>6.</span>&nbsp;Software Support</a></li>
            <li><a class="dropdown-item" href="#"  id="services-list"><span>7.</span>&nbsp; Cater for Lost or Damaged Packages </a></li>
          </ul></li>
          </div>
    <li class="nav-item active">
      <a class="nav-link " href="AboutUs.html#contact-us"  id="cate">  Contact Us</a>
       
   </li>
  
</li></li></ul></li></ul>
     <!-- navbar-collapse.// -->
  </nav>

  <div class="input-group">
    <input type="text" class="form-control" placeholder="Search for products & brands" aria-label="Search" 
aria-describedby="btnGroupAddon">
 <div class="input-group-text" id="btnGroupAddon"><i class="fas fa-search" id="search-icon" ></i></div>
</div> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-shopping-cart fa-1.8x text-center" >
    Cart</i></div>
<div class="gridheading"> <p><h2 id="gridheading">Shop by category</h2>
</div>
    <div class="categories"><div class="grid" id="grid">
        <div id="">
        <img src="phone.webp"/>
        <p><a href="Tech Accessories.html">Tech Accessories</a></p>
        </div>
        <div id="">
        <img src="Tvs.webp" />
        <p><a href="T.vs & Computers.html">TVs</a></p>
        </div>
        <div id="">
        <img src="computers.webp" />
        <p><a href="T.vs & Computers.html#computers">Computers</a></p>
        </div>
        <div id="">
          <img src="speakers.webp" />
          <p><a href="Speakers.html">Speakers and Audio systems </a></p>
          </div> <div id="">
            <img src="watch.webp" />
            <p><a href="watches.html">Wearable Technology</a></p>
            </div> <div id="">
              <img src="cellphones.webp" />
              <p><a href="phones.html">Cell Phones</a></p>
              </div>
           <div id="">
            <img src="camera.webp" />
            <p><a href="cameras.html">Cameras</a></p>
            </div>  <div id="">
                <img src="networking-tools.webp"/>
                <p><a href="networking.html">Wi-Fi & Networking</a></p>
                </div>
                <div id="">
                  <img src="batteries.webp" />
                  <p><a href="batteries.html">Batteries & Calculators</a></p>
                  </div>
                  <div id="household">
                    <img src="household.webp" />
                    <p> <a href="Appliances.html"> Home Appliances</a></p>
                    </div>
   </div>
   <div class="indicator">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" data-interval="4000">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="Crazy deals.jpg" class="d-block w-100" alt="">
         
        </div>
        <div class="carousel-item">
          <img src="delivery1.jpg" class="d-block w-100" alt="..." id="delivery">
          <div class="carousel-caption d-none d-md-block">
            <h4>YOU ORDER, WE DELIVER.</h4>
            <p><h5>At your own comfort!!</h5></p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="store one.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h4>YOUR NUMBER ONE ELECTRONICS SHOP</h4>
            <p><h5>Shop with us today!! </h5></p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <div class="discount"><img src="discount1.jpg"><figcaption><center>Shop with us and save an extra <b>25%</b> 
      on your purchase</center></figcaption></div><div class="help-desk">
    <center>  <img src="help desk.jpg" id="delivery"><figcaption>Here to help you get the most
        out of your tech, with expert
        advice on new phones,
        protection plans & more.</figcaption></center>
    </div><p></p>
   </div><div class="last-display">
   <div class="Terms">
    <h6 id="details">*Offer details. Restrictions apply.
      Pricing, promotions and availability may vary by location and at Our Stores.</h6><p>
        <div class="logo-display"><img src="logo.jpg" width="60px" height="50px">&nbsp;&nbsp;<font color="rgba 0 0 0 0">

          <div class="logo-caption">N</font>kozi &nbsp; &nbsp;<font color="rgba 0 0 0 0">E</font>
        lectronics</div></div>
  <p id="last"> Expect more. Pay Less.</p><hr>
  <div class="contacts"> <p id="copyright">© 2021 Nkozi Electronics
  </p></div>  </div>
</div>
</div>
   
</body>
</html>