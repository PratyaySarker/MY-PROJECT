
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"">
  <link href="style.css">
  <script src="main.js"></script>
  <style >

  .sidenav {
    height: 100%;
    margin-top:0;
    width: 260px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 4;
    background-color: #111;
    overflow-x: hidden;
    padding-top: 20px;
    font-family: Bookman Old Style;
}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 20px;
    color: #818181;
    display: block;
    border: none;
    background: none;
    width: 100%;
    text-align: left;
    cursor: pointer;
    outline: none;
    font-size: 15px;
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
    color: #FF7A7A;
}
.dropdown-container {
    display: none;
    background-color: #262626;
    padding-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
    float: right;
    padding-right: 8px;
}
.logo{
  width: 18.6vw;
  height: 21vh;
}
#get_category{
  margin-left: 3%;
}
</style>

</head>
<body>
  <nav class="navbar navbar -default navbar-left" id="navbar">

      <div class="sidenav">
          <img src="product_images/logo.png" class="logo">
          <div class="row">
            <div id="get_category"></div>
         <!--   <div id="get_brand"> </div> -->
          </div>
      </div>
         <!-- <h3 style="color: red"><span class="glyphicon glyphicon-menu-hamburger"></span>Categories</h3> --> 

         
          <!--menu items -->
<!--
          <a href="categories/women.php">Women</a>
          <a href="categories/men.php">Men</a>
          <a href="categories/kids.php">Kids</a>
          <a href="categories/smartphone.php">Smart Phone & Accessories</a>
          <a href="categories/health&beauty.php">Health & Beauty</a>
          <a href="categories/books.php">Books</a>
          <a href="categories/jewelry.php">Jewelery and watches</a>
          <a href="categories/electronics.php">Electronics</a>
-->
      
       
 </nav>
<!--
    <script>
    /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
      dropdown[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
          dropdownContent.style.display = "none";
        } else {
          dropdownContent.style.display = "block";
        }
      });
    }
    </script>
  -->
</body>
</html>





