
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shirama - Menu</title>

    <link rel="stylesheet" href="shiramamenu.css">
    <script src="jquery/jquery.min.js"></script>
    
</head>

<body>
    
<form action = " " method=" POST">
    <div id="banner">
        <div class="brand-logo">
            <img src="imgs/logo/stroke.png">
    <p> Shirama </p>
  </div>
  <div id = "displayChoice" > </div>

    </div>
    <div id="container" class="container">
        <div id="menu">
     
          <div class="menu-item">
            <div id="category-list">
           
                <div class="list-card" name = "ramen" >
                    <img src="imgs/ramen.png" alt="list">
                    <a href=""class="list-name" >RAMEN</a>
                </div>
                <div class="list-card">
                    <img src="imgs/side.png" alt="list" name="side">
                    <a href=""class="list-name">SIDE DISH</a>
                </div>
                <div class="list-card">
                    <img src="imgs/drinks.png" alt="list" name="drinks">
                    <a href=""class="list-name">DRINKS</a>
                </div>
        
           
            <?php
					$where = "";
					if(isset($_GET['category']))
					{
						$catid=$_GET['category'];
						$where = " WHERE product.categoryid = $catid";
					}
					$sql="select * from product left join category on category.categoryid=product.categoryid $where order by product.categoryid asc, productname asc";
					$query=$conn->query($sql);
					while($row=$query->fetch_array()){
						?>
          </div>
        </div>
        </form>

        <div id="food-container">
           <div id="header">
                <h1>MAIN MENU</h1>
                <div class="util">
                    <button class="fa fa-cart-plus" id="cart-plus">0 Items</button>
                </div>
            </div>

            <!-- RAMEN SECTION -->
            <div id="food-items" class="food-items">
                <div id="ramen">
                    <p id="category-name">RAMEN</p>

                        <div id="item-card">
                            <div id="card-top">
                                <i class="fa fa-plus add-to-cart"></i>
                            </div>
                                <img src="imgs/MENU.png" alt="">
                                <p id="item-name">Hakata Ramen</p>
                                <p id="item-price">Price: ₱99</p>
                        </div>
                        <div id="item-card">
                            <div id="card-top">
                                <i class="fa fa-plus add-to-cart"></i>
                            </div>
                                <img src="imgs/MENU.png" alt="">
                                <p id="item-name">Hakata Ramen</p>
                                <p id="item-price">Price: ₱99</p>
                        </div>
                        <div id="item-card">
                            <div id="card-top">
                                <i class="fa fa-plus add-to-cart"></i>
                            </div>
                                <img src="imgs/MENU.png" alt="">
                                <p id="item-name">Hakata Ramen</p>
                                <p id="item-price">Price: ₱99</p>
                        </div>
                        <div id="item-card">
                            <div id="card-top">
                                <i class="fa fa-plus add-to-cart"></i>
                            </div>
                                <img src="imgs/MENU.png" alt="">
                                <p id="item-name">Hakata Ramen</p>
                                <p id="item-price">Price: ₱99</p>
                        </div>
                        <div id="item-card">
                            <div id="card-top">
                                <i class="fa fa-plus add-to-cart"></i>
                            </div>
                                <img src="imgs/MENU.png" alt="">
                                <p id="item-name">Hakata Ramen</p>
                                <p id="item-price">Price: ₱99</p>
                        </div> 
                </div>
            
            <div id="sides">
                <p id="category-name">SIDE DISH</p>

                    <div id="item-card">
                        <div id="card-top">
                            <i class="fa fa-plus add-to-cart"></i>
                        </div>
                            <img src="imgs/MENU.png" alt="">
                            <p id="item-name">Tempura</p>
                            <p id="item-price">Price: ₱99</p>
                    </div>
                    <div id="item-card">
                        <div id="card-top">
                            <i class="fa fa-plus add-to-cart"></i>
                        </div>
                            <img src="imgs/MENU.png" alt="">
                            <p id="item-name">Tempura</p>
                            <p id="item-price">Price: ₱99</p>
                    </div>
                    <div id="item-card">
                        <div id="card-top">
                            <i class="fa fa-plus add-to-cart"></i>
                        </div>
                            <img src="imgs/MENU.png" alt="">
                            <p id="item-name">Tempura</p>
                            <p id="item-price">Price: ₱99</p>
                    </div>
                    <div id="item-card">
                        <div id="card-top">
                            <i class="fa fa-plus add-to-cart"></i>
                        </div>
                            <img src="imgs/MENU.png" alt="">
                            <p id="item-name">Tempura</p>
                            <p id="item-price">Price: ₱99</p>
                    </div>
                    <div id="item-card">
                        <div id="card-top">
                            <i class="fa fa-plus add-to-cart"></i>
                        </div>
                            <img src="imgs/MENU.png" alt="">
                            <p id="item-name">Tempura</p>
                            <p id="item-price">Price: ₱99</p>
                    </div>
            </div>
                
            <div id="drinks">
                <p id="category-name">DRINKS</p>

                    <div id="item-card">
                        <div id="card-top">
                            <i class="fa fa-plus add-to-cart"></i>
                        </div>
                            <img src="imgs/MENU.png" alt="">
                            <p id="item-name">Tea</p>
                            <p id="item-price">Price: ₱99</p>
                    </div>
                    <div id="item-card">
                        <div id="card-top">
                            <i class="fa fa-plus add-to-cart"></i>
                        </div>
                            <img src="imgs/MENU.png" alt="">
                            <p id="item-name">Tea</p>
                            <p id="item-price">Price: ₱99</p>
                    </div>
                    <div id="item-card">
                        <div id="card-top">
                            <i class="fa fa-plus add-to-cart"></i>
                        </div>
                            <img src="imgs/MENU.png" alt="">
                            <p id="item-name">Tea</p>
                            <p id="item-price">Price: ₱99</p>
                    </div>
                    <div id="item-card">
                        <div id="card-top">
                            <i class="fa fa-plus add-to-cart"></i>
                        </div>
                            <img src="imgs/MENU.png" alt="">
                            <p id="item-name">Tea</p>
                            <p id="item-price">Price: ₱99</p>
                    </div>
                    <div id="item-card">
                        <div id="card-top">
                            <i class="fa fa-plus add-to-cart"></i>
                        </div>
                            <img src="imgs/MENU.png" alt="">
                            <p id="item-name">Tea</p>
                            <p id="item-price">Price: ₱99</p>
                    </div>
            </div>

                
            </div>

        </div> 
        </div>
        </div>

    <script src = main.js></script>
</body>
</html>