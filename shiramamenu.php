
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
                <div class="list-card">
                    <img src="imgs/combo.png" alt="list" name="combo">
                    <a href=""class="list-name">COMBO</a>
                </div>
            </div>
          </div>
        </div>
        </form>

        <div id="food-container">
           <div id="header">
                <h1>MAIN MENU</h1>
            </div>

<!-- RAMEN SECTION -->
            <div id="food-items" class="food-items">
                <div id="ramen">
                    <p id="category-name">RAMEN</p>

                    <div id="item-card">
                            <img src="imgs/menu/ramen/shoyu.png" alt="">
                            <p id="item-code">R1</p>
                            <p id="item-name">Shoyu Ramen</p>
                            <p id="item-price">₱299</p>
                        </div>
                    <div id="item-card">
                            <img src="imgs/menu/ramen/miso.png" alt="">
                            <p id="item-code">R2</p>
                            <p id="item-name">Miso Ramen</p>
                            <p id="item-price">₱349</p>
                    </div>
                    <div id="item-card">
                            <img src="imgs/menu/ramen/hkata.png" alt="">
                            <p id="item-code">R3</p>
                            <p id="item-name">Hakata Ramen</p>
                            <p id="item-price">₱349</p>
                    </div>
                    <div id="item-card">
                            <img src="imgs/menu/ramen/wakayama.png" alt="">
                            <p id="item-code">R4</p>
                            <p id="item-name">Wakayama Ramen</p>
                            <p id="item-price">₱399</p>
                    </div>
                </div>
<!-- SIDES SECTION -->
            <div id="sides">
                <p id="category-name">SIDE DISH</p>

                    <div id="item-card">
                            <img src="imgs/menu/sides/agedashi.png" alt="">
                            <p id="item-code">S1</p>
                            <p id="item-name">Agedashi Tofu</p>
                            <p id="item-price">₱99</p>
                    </div>
                    <div id="item-card">
                            <img src="imgs/menu/sides/tempura.png"alt="">
                            <p id="item-code">S2</p>
                            <p id="item-name">Tempura</p>
                            <p id="item-price">₱99</p>
                    </div>
                    <div id="item-card">
                            <img src="imgs/menu/sides/takoyaki.png" alt="">
                            <p id="item-code">S3</p>
                            <p id="item-name">Takoyaki</p>
                            <p id="item-price">₱99</p>
                    </div>
                    <div id="item-card">
                            <img src="imgs/menu/sides/karaage.png" alt="">
                            <p id="item-code">S4</p>
                            <p id="item-name">Karaage</p>
                            <p id="item-price">₱199</p>
                    </div>
            </div>
<!-- DRINKS SECTION -->                
            <div id="drinks">
                <p id="category-name">DRINKS</p>

                    <div id="item-card">
                            <img src="imgs/menu/drinks/tea.png">
                            <p id="item-code">D1</p>
                            <p id="item-name">Green Tea</p>
                            <p id="item-price">₱49</p>
                    </div>
                    <div id="item-card">
                            <img src= "imgs/menu/drinks/tea2.png"alt="">
                            <p id="item-code">D2</p>
                            <p id="item-name">Oolong Tea</p>
                            <p id="item-price">₱49</p>
                    </div>
                    <div id="item-card">
                            <img src="imgs/menu/drinks/ramune.png">
                            <p id="item-code">D3</p>
                            <p id="item-name">Ramune</p>
                            <p id="item-price">₱79</p>
                    </div>
                    <div id="item-card">
                            <img src="imgs/menu/drinks/sake.png" alt="">
                            <p id="item-code">D4</p>
                            <p id="item-name">Sake</p>
                            <p id="item-price">₱399</p>
                    </div>
            </div>
        </div>
    </div> 
        </div>
        </div>
</body>
</html>