<style>
  a{
    font-family: Bookman Old Style;
  }
</style>

<nav class="navbar navbar-inverse" id="HomeNav" id="cartNav">
    <div class="container-fluid">
      <ul class="nav navbar-nav">
        <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        <li><a href="about.php"><span class="glyphicon glyphicon-exclamation-sign"></span> About</a></li>
        <li><a href="contact.php"><span class="glyphicon glyphicon-earphone"></span> Contact</a></li>
        <li style="width:300px;left:10px;top:10px;"><input type="text" class="form-control" id="search"></li>
        <li style="top:10px;left:20px;"><button class="btn btn-primary" id="search_btn">Search</button></li>
      </ul>

      <ul class="nav navbar-nav navbar-right"> 
        <li><a href="admin_login.php">Admin Login</a></li>
        <li> 
            <a href="login_form.php"><span class="glyphicon glyphicon-log-in"></span>Login</a>
            <div id="login"></div>
       </li>

        <li>
          <a href="customer_registration.php?register=1"><span class="glyphicon glyphicon-user"></span>Sign In</a>
          <div id="signup_form"></div>
        </li>
        
        </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Cart<span class="badge">0</span></a>
          <div class="dropdown-menu" style="width:400px;">
            <div class="panel panel-success">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-md-3">Sl.No</div>
                  <div class="col-md-3">Product Image</div>
                  <div class="col-md-3">Product Name</div>
                  <div class="col-md-3">Price in $.</div>
                </div>
              </div>
              <div class="panel-body">
                <div id="cart_product"></div>
              </div>
              <div class="panel-footer"></div>
            </div>
          </div>
        </li>
      </ul>



    </div>
  </nav>
