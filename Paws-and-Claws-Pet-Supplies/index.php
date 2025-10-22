<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <script type="text/javascript" src="js.js"></script>

  <title>Paws&Claws</title>
  <link rel="stylesheet" type="text/css" href="dashboard_design.css">
      
</head>
<body>
<div class="header">
    <img src="\paws_claws\otherimages\claw-removebg.png">

  <div class="tab">
    <button class="tablinks active" onclick="prod(event, 'home')"><b>HOME</b></button>
    <button class="tablinks" onclick="prod(event, 'dog')"><b>DOGS</b></button>
    <button class="tablinks" onclick="prod(event, 'cat')"><b>CATS</b></button>
    <button class="tablinks" onclick="prod(event, 'bird')"><b>BIRD</b></button>
    <button class="tablinks" onclick="prod(event, 'rept')"><b>REPTILE</b></button>
  </div>
  <div class="icons" style="padding-left: 10%; ">
    <a href="login.html" style="color:white;background-color: #343430; padding:20%; font-size: 1em; border: none; text-decoration: none; border-radius: 10px;"><b><span>LOGIN</span></b></a>
  </div>
  <!-- <div class="icons">
    <p >|</p>
  </div>
  <div class="icons" >
    <a><img src="\paws_claws\otherimages\cart.png" src="" style="height:30px"></a>
  </div>
  <div class="icons" >
    <a src="dash.html"><img src="\paws_claws\otherimages\settings.png"  style="width:25px;"></a>
    
  </div>
  <div class="icons">
    <a><img src="\paws_claws\otherimages\logout.png" name="logout"style="width:30px; padding-right: 2%;"></a>

  </div> -->
  
        
</div>

</div>
<div>
<div id="home" class="tabcontent active">
    <!-- <img class="pic"src="PAWS-removebg.png" style="padding-left: 36%; padding-top: 15%; width: 29vw;"> -->
  <div class="slider-wrapper">
    <div class="slider">
      <img src="\paws_claws\otherimages\WelcomeBanner.jpg" id="slide-1">
      <img src="\paws_claws\otherimages\cat-eatings.jpg" id="slide-2">
      <img src="\paws_claws\otherimages\dogs.jpg" id="slide-3">
      <img src="\paws_claws\otherimages\geck.jpg" id="slide-4">
      <img src="\paws_claws\otherimages\bird-products.jpg" id="slide-5">
      <img src="\paws_claws\otherimages\bird.jpg" id="slide-6">
    </div>
    <div class="slider-nav">
      <a href="#slide-1"></a>
      <a href="#slide-2"></a>
      <a href="#slide-3"></a>
      <a href="#slide-4"></a>
      <a href="#slide-5"></a>
      <a href="#slide-6"></a>
    </div>
    
  </div>
  <div style="text-align: center; margin-left: 10%; letter-spacing: 2px;">
      <h1>Welcome to PAWS&CLAWS</h1>

      <h4>
        We offer the best quality products for somewhat affordable price, we ensure that our products are 100% safe for your fur babies!<br><br>We offer food, necessities, vitamins and supplements for Dogs, Cats, birds and Reptiles.
      </h4>
      <br>
      <br>
      <br>
      <br>
      <h3>About Us</h3>
      <p>Paws&Claws is an online pet supply store established in 2024.<br>We are dedicated in offering quality products from our partnered stores worldwide. </p>
    </div>
</div>


<!--dog-->
<div id="dog" class="tabcontent">
  <br>
  <br>
  <br>
  <br>
  <br>
  <div class="container">
    <div class="product">

      <div class="product-card">
        <h2 class="name">Top Breed Supremo</h2>
        <span class="price">P1500.00</span>
        <a class="popup-btn">view item</a>
        <img src="\paws_claws\items\topbreedadult.jpg" class="product-img">
      </div>
      <div class="popup-view">
        <div class="popup-card">
          <a><i class="fas fa-times close-btn"></i></a>
          <div class="product-img">
            <img src="\paws_claws\items\topbreedadult.jpg">
          </div>
          <div class="info">
            <h2>Top Breed Supremo<br><span>Dog food</span></h2>
            <p>With Omega 3 and Omega 6 fatty acids<br>Net weight: 20kg<br>Stock:
            </p>
            <span class="price">P1500.00</span>
            <a href="#" class="add-cart-btn" onclick="alert('Please Log in first');">Add to Cart</a>
            <a href="#" class="add-cart-btn" onclick="alert('Please Log in first');">Buy now</a>
          </div>
        </div>
      </div>
    </div>

    
   <div class="product">
      <div class="product-card">
        <h2 class="name">Goodboy Original</h2>
        <span class="price">P1660.00</span>
        <a class="popup-btn">view item</a>
        <img src="\paws_claws\items\dogfood_green.jpg" class="product-img">
      </div>
      <div class="popup-view">
        <div class="popup-card">
          <a><i class="fas fa-times close-btn"></i></a>
          <div class="product-img">
            <img src="\paws_claws\items\dogfood_green.jpg">
          </div>
          <div class="info">
            <h2>Goodboy Original<br><span>Dog Food</span></h2>
            <p>Beef, Milk and Egg Flavor
                For Puppy of any breeds and any sizes<br>
                <br>
                Net weight: 5kg<br>Stock:</p>
            <span class="price">P1660.00</span>
            <a href="#" class="add-cart-btn"onclick="alert('Please Log in first');">Add to Cart</a>
            <a href="#" class="add-cart-btn"onclick="alert('Please Log in first');">Buy now</a>

          </div>
        </div>
      </div>
    </div>

    <div class="product">
      <div class="product-card">
        <h2 class="name">Royal Canin Starter</h2>
        <span class="price">P700.00</span>
        <a class="popup-btn">view item</a>
        <img src="\paws_claws\items\dogfood_blue.jpg" class="product-img">
      </div>
      <div class="popup-view">
        <div class="popup-card">
          <a><i class="fas fa-times close-btn"></i></a>
          <div class="product-img">
            <img src="\paws_claws\items\dogfood_blue.jpg">
          </div>
          <div class="info">
            <h2>Royal Canin Starter<br><span>Dog Food</span></h2>
            <p>Dry Food For Dog
              <br>
              <br>
                Complete feed for dogs - For the large breed bitch (from 26 to 44 kg) and her puppies: bitch at the end of gestation and during lactation - Weaning puppies up to 2 months old.
                <br>Net weight: 4kg<br>Stock:
              </p>
            <span class="price">P700.00</span>
            <a href="#" class="add-cart-btn"onclick="alert('Please Log in first');">Add to Cart</a>
            <a href="#" class="add-cart-btn"onclick="alert('Please Log in first');">Buy now</a>
          </div>
        </div>
      </div>
    </div>

    <div class="product">
      <div class="product-card">
        <h2 class="name">Nutrichunks 20kg</h2>
        <span class="price">P1680.00</span>
        <a class="popup-btn">view item</a>
        <img src="\paws_claws\items\dogfood_nutrichunks.jpg" class="product-img">
      </div>
      <div class="popup-view">
        <div class="popup-card">
          <a><i class="fas fa-times close-btn"></i></a>
          <div class="product-img">
            <img src="\paws_claws\items\dogfood_nutrichunks.jpg">
          </div>
          <div class="info">
            <h2>Nutrichunks<br><span>Dog Food</span></h2>
            <p>Maintenance for Adult dogs<br>Net weight: 20kg<br>Stock:</p>
            <span class="price">P1680.00</span>
            <a href="#" class="add-cart-btn"onclick="alert('Please Log in first');">Add to Cart</a>
            <a href="#" class="add-cart-btn"onclick="alert('Please Log in first');">Buy now</a>
          </div>
        </div>
      </div>
    </div>



    <div class="product">
      <div class="product-card">
        <h2 class="name">Goodboy Classic</h2>
        <span class="price">P1250.00</span>
        <a class="popup-btn">view item</a>
        <img src="\paws_claws\items\dogfood5kg.jpg" class="product-img">
      </div>
      <div class="popup-view">
        <div class="popup-card">
          <a><i class="fas fa-times close-btn"></i></a>
          <div class="product-img">
            <img src="\paws_claws\items\dogfood5kg.jpg">
          </div>
          <div class="info">
            <h2>Goodboy Classic<br><span>Dog Food</span></h2>
            <p>Maintenance for Adult Dogs<br>Net weight: 5kg<br>Stock:</p>
            <span class="price">P1250.00</span>
            <a href="#" class="add-cart-btn"onclick="alert('Please Log in first');">Add to Cart</a>
            <a href="#" class="add-cart-btn"onclick="alert('Please Log in first');">Buy now</a>
          </div>
        </div>
      </div>
    </div>

    <div class="product">
      <div class="product-card">
        <h2 class="name">Pet One</h2>
        <span class="price">P900.00</span>
        <a class="popup-btn">view item</a>
        <img src="\paws_claws\items\dogfood_brown.jpg" class="product-img">
      </div>
      <div class="popup-view">
        <div class="popup-card">
          <a><i class="fas fa-times close-btn"></i></a>
          <div class="product-img">
            <img src="\paws_claws\items\dogfood_brown.jpg">
          </div>
          <div class="info">
            <h2>Pet One<br><span>Dog Food</span></h2>
            <p>Natural Flavor<br>Net weight: 5kg<br>Stock:</p>
            <span class="price">P900.00</span>
            <a href="#" class="add-cart-btn"onclick="alert('Please Log in first');">Add to Cart</a>
            <a href="#" class="add-cart-btn"onclick="alert('Please Log in first');">Buy now</a>
          </div>
        </div>
      </div>
    </div>
</div>
<script src="js.js"></script>
</div>


<!--cats-->
<div id="cat" class="tabcontent">
  <br>
  <br>
  <br>
  <br>
  <br>
 <div class="container">
    <div class="product">
      <div class="product-card">
        <h2 class="name">5kg Ideal Catfood</h2>
        <span class="price">P700.00</span>
        <a class="popup-btn">view item</a>
        <img src="\paws_claws\items\5kg_catfood.jpg" class="product-img">
      </div>
      <div class="popup-view">
        <div class="popup-card">
          <a><i class="fas fa-times close-btn"></i></a>
          <div class="product-img">
            <img src="\paws_claws\items\5kg_catfood.jpg">
          </div>
          <div class="info">
            <h2>Ideal Catfood<br><span>Cat Food</span></h2>
            <p>for adult cat<br>28% protein, 12% fat<br>Glossy skin and coat, strong immune system, healthy teeth and gums<br> Net weight: 5kg<br>Stock:</p>
            <span class="price">P1000.00</span>
            <a href="#" class="add-cart-btn"onclick="alert('Please Log in first');">Add to Cart</a>
            <a href="#" class="add-cart-btn"onclick="alert('Please Log in first');">Buy now</a>
          </div>
        </div>
      </div>
    </div>
    <div class="product">
      <div class="product-card">
        <h2 class="name">Maxime Salmon 7kg</h2>
        <span class="price">P900.00</span>
        <a class="popup-btn">view item</a>
        <img src="\paws_claws\items\7kg_salmon_catfood.jpg" class="product-img"> 
      </div>
      <div class="popup-view">
        <div class="popup-card">
          <a><i class="fas fa-times close-btn"></i></a>
          <div class="product-img">
            <img src="\paws_claws\items\7kg_salmon_catfood.jpg">
          </div>
          <div class="info">
            <h2>Maxime Salmon 7kg<br><span>Cat Food</span></h2>
            <p>For kitten and adult cat<br>Salmon Flavor<br>Net weigth: 7kg<br>Stock:</p>
            <span class="price">P900.00</span>
            <a href="#" class="add-cart-btn"onclick="alert('Please Log in first');">Add to Cart</a>
            <a href="#" class="add-cart-btn"onclick="alert('Please Log in first');">Buy now</a>
          </div>
        </div>
      </div>
    </div>
    <div class="product">
      <div class="product-card">
        <h2 class="name">Aozi Dry Cat Food</h2>
        <span class="price">P2000.00</span>
        <a class="popup-btn">view item</a>
        <img src="\paws_claws\items\aozi_catfood.jpg" class="product-img">
      </div>
      <div class="popup-view">
        <div class="popup-card">
          <a><i class="fas fa-times close-btn"></i></a>
          <div class="product-img">
            <img src="\paws_claws\items\aozi_catfood.jpg">
          </div>
          <div class="info">
            <h2>Aozi 20kg<br><span>Cat Food</span></h2>
            <p>Pure organic dry cat food<br>Salmon flavor<br>Net weight: 20kg<br>Stock:</p>
            <span class="price">P2000.00</span>
            <a href="#" class="add-cart-btn"onclick="alert('Please Log in first');">Add to Cart</a>
            <a href="#" class="add-cart-btn"onclick="alert('Please Log in first');">Buy now</a>
          </div>
        </div>
      </div>
    </div>
    <div class="product">
      <div class="product-card">
        <h2 class="name">Special Cat Premium</h2>
        <span class="price">P1300.00</span>
        <a class="popup-btn">view item</a>
        <img src="\paws_claws\items\turkeycat.jpg" class="product-img">
      </div>
      <div class="popup-view">
        <div class="popup-card">
          <a><i class="fas fa-times close-btn"></i></a>
          <div class="product-img">
            <img src="\paws_claws\items\turkeycat.jpg">
          </div>
          <div class="info">
            <h2>Special Cat premium<br><span>Cat Food</span></h2>
            <p>Turkey and chicken flavored dry cat food<br>Net weigth: 7kg<br>Stock:</p>
            <span class="price">P1300.00</span>
            <a href="#" class="add-cart-btn"onclick="alert('Please Log in first');">Add to Cart</a>
            <a href="#" class="add-cart-btn"onclick="alert('Please Log in first');">Buy now</a>
          </div>
        </div>
      </div>
    </div>
    <div class="product">
      <div class="product-card">
        <h2 class="name">Kit Cat Classic</h2>
        <span class="price">P900.00</span>
        <a class="popup-btn">view item</a>
        <img src="\paws_claws\items\Kitkat.jpg" class="product-img">
      </div>
      <div class="popup-view">
        <div class="popup-card">
          <a><i class="fas fa-times close-btn"></i></a>
          <div class="product-img">
            <img src="\paws_claws\items\Kitkat.jpg">
          </div>
          <div class="info">
            <h2>Kit Cat Classic<br><span>Cat Food</span></h2>
            <p>Chicken flavored dry cat food<br>Net weight: 5kg<br>Stock:</p>
            <span class="price">P900.00</span>
            <a href="#" class="add-cart-btn"onclick="alert('Please Log in first');">Add to Cart</a>
            <a href="#" class="add-cart-btn"onclick="alert('Please Log in first');">Buy now</a>
          </div>
        </div>
      </div>
    </div>
    <div class="product">
      <div class="product-card">
        <h2 class="name">Kit Cat Premium</h2>
        <span class="price">P1200.00</span>
        <a class="popup-btn">view item</a>
        <img src="\paws_claws\items\kitcat_salmon.jpg" class="product-img">
      </div>
      <div class="popup-view">
        <div class="popup-card">
          <a><i class="fas fa-times close-btn"></i></a>
          <div class="product-img">
            <img src="\paws_claws\items\kitcat_salmon.jpg">
          </div>
          <div class="info">
            <h2>Kit Cat Premium<br><span>Cat Food</span></h2>
            <p>Salmon flavored dry cat food<br>Net weight: 5kg<br>Stock:</p>
            <span class="price">P1200.00</span>
            <a href="#" class="add-cart-btn"onclick="alert('Please Log in first');">Add to Cart</a>
            <a href="#" class="add-cart-btn"onclick="alert('Please Log in first');">Buy now</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="js.js"></script>
</div>


<!--bird-->
<div id="bird" class="tabcontent">
  <br>
  <br>
  <br>
  <br>
  <br>
  <div class="container">
    <div class="product">

      <div class="product-card">
        <h2 class="name">Triple Crown Canary Mix</h2>
        <span class="price">P1200.00</span>
        <a class="popup-btn">view item</a>
        <img src="\paws_claws\items\25kg_birdfood.jpg" class="product-img">
      </div>
      <div class="popup-view">
        <div class="popup-card">
          <a><i class="fas fa-times close-btn"></i></a>
          <div class="product-img">
            <img src="\paws_claws\items\25kg_birdfood.jpg">
          </div>
          <div class="info">
            <h2>Triple Crown Canary Mix<br><span>Bird Food</span></h2>
            <p>Assorted seeds good for small birds<BR>Net weight: 25kg <br>Stock:
            </p>
            <span class="price">P1200.00</span>
            <a href="#" class="add-cart-btn"onclick="alert('Please Log in first');">Add to Cart</a>
            <a href="#" class="add-cart-btn"onclick="alert('Please Log in first');">Buy now</a>
          </div>
        </div>
      </div>
    </div>

    
   <div class="product">
      <div class="product-card">
        <h2 class="name">Peckish Pellet</h2>
        <span class="price">P500</span>
        <a class="popup-btn">view item</a>
        <img src="\paws_claws\items\pellet_birdfood.jpg" class="product-img">
      </div>
      <div class="popup-view">
        <div class="popup-card">
          <a><i class="fas fa-times close-btn"></i></a>
          <div class="product-img">
            <img src="\paws_claws\items\pellet_birdfood.jpg">
          </div>
          <div class="info">
            <h2>Peckish Pellet<br><span>Bird Food</span></h2>
            <p>Wild Bird Pellets<br>Ideal for mid-range parrots<br>all natural ingredients<br>Net weight: 5kg<br>Stock:</p>
            <span class="price">P500</span>
            <a href="#" class="add-cart-btn"onclick="alert('Please Log in first');">Add to Cart</a>
            <a href="#" class="add-cart-btn"onclick="alert('Please Log in first');">Buy now</a>
          </div>
        </div>
      </div>
    </div>

    <div class="product">
      <div class="product-card">
        <h2 class="name">Wooden Birdhouse</h2>
        <span class="price">P1700.00</span>
        <a class="popup-btn">view item</a>
        <img src="\paws_claws\items\birdhouse.png" class="product-img">
      </div>
      <div class="popup-view">
        <div class="popup-card">
          <a><i class="fas fa-times close-btn"></i></a>
          <div class="product-img">
            <img src="\paws_claws\items\birdhouse.png">
          </div>
          <div class="info">
            <h2>Wooden Birdhouse<br><span>Bird Essentials</span></h2>
            <p>Suitable for small birds<br>Net weight: 0.3kg<br>Stock:</p>
            <span class="price">P1700</span>
            <a href="#" class="add-cart-btn"onclick="alert('Please Log in first');">Add to Cart</a>
            <a href="#" class="add-cart-btn"onclick="alert('Please Log in first');">Buy now</a>
          </div>
        </div>
      </div>
    </div>

    <div class="product">
      <div class="product-card">
        <h2 class="name">Vita Seed Natural</h2>
        <span class="price">P300</span>
        <a class="popup-btn">view item</a>
        <img src="\paws_claws\items\VitaSeed.jpg" class="product-img">
      </div>
      <div class="popup-view">
        <div class="popup-card">
          <a><i class="fas fa-times close-btn"></i></a>
          <div class="product-img">
            <img src="\paws_claws\items\VitaSeed.jpg">
          </div>
          <div class="info">
            <h2>Vita Seed Natural<br><span>Bird Food</span></h2>
            <p>Mixed seeds with added vitamins<br>with Omega-3<br><br>Net weight: 2.21kg<br>Stock:</p>
            <span class="price">P300</span>
            <a href="#" class="add-cart-btn"onclick="alert('Please Log in first');">Add to Cart</a>
            <a href="#" class="add-cart-btn"onclick="alert('Please Log in first');">Buy now</a>
          </div>
        </div>
      </div>
    </div>



    <div class="product">
      <div class="product-card">
        <h2 class="name">Glennwood Seed Mix</h2>
        <span class="price">P450</span>
        <a class="popup-btn">view item</a>
        <img src="\paws_claws\items\Bird-Seed-Mix.jpg" class="product-img">
      </div>
      <div class="popup-view">
        <div class="popup-card">
          <a><i class="fas fa-times close-btn"></i></a>
          <div class="product-img">
            <img src="\paws_claws\items\Bird-Seed-Mix.jpg">
          </div>
          <div class="info">
            <h2>Glennwood Seed Mix<br><span>Bird Food</span></h2>
            <p>All natural, no preservatives<br>Net weight: 1.5kg<br>Stock:</p>
            <span class="price">P450</span>
            <a href="#" class="add-cart-btn"onclick="alert('Please Log in first');">Add to Cart</a>
            <a href="#" class="add-cart-btn"onclick="alert('Please Log in first');">Buy now</a>
          </div>
        </div>
      </div>
    </div>

    <div class="product">
      <div class="product-card">
        <h2 class="name">Kaytee Pro Health</h2>
        <span class="price">P700</span>
        <a class="popup-btn">view item</a>
        <img src="\paws_claws\items\Lovebirdfood.jpg" class="product-img">
      </div>
      <div class="popup-view">
        <div class="popup-card">
          <a><i class="fas fa-times close-btn"></i></a>
          <div class="product-img">
            <img src="\paws_claws\items\Lovebirdfood.jpg">
          </div>
          <div class="info">
            <h2>Kaytee Pro Health<br><span>Bird Food</span></h2>
            <p>Bird seed mix<br>Love bird food<br>Net weigth: 1.36kg<br>Stock:</p>
            <span class="price">P700.00</span>
            <a href="#" class="add-cart-btn"onclick="alert('Please Log in first');">Add to Cart</a>
            <a href="#" class="add-cart-btn"onclick="alert('Please Log in first');">Buy now</a>
          </div>
        </div>
      </div>
    </div>
</div>
<script src="js.js"></script>
</div>
<!--reptile-->
<div id="rept" class="tabcontent">
  <br>
  <br>
  <br>
  <br>
  <br>
   <div class="container">
    <div class="product">

      <div class="product-card">
        <h2 class="name">Exo Terra Gecko Food</h2>
        <span class="price">P600.00</span>
        <a class="popup-btn">view item</a>
        <img src="\paws_claws\items\gecko_food.jpg" class="product-img">
      </div>
      <div class="popup-view">
        <div class="popup-card">
          <a><i class="fas fa-times close-btn"></i></a>
          <div class="product-img">
            <img src="\paws_claws\items\gecko_food.jpg">
          </div>
          <div class="info">
            <h2>Exo Terra Gecko Food<br><span> Reptile Food</span></h2>
            <p>
              Ready to eat<br> 8 packs<br><br>Net weight: 100g<br>Weight per cup: 3.52oz<br>Stock:
            </p>
            <span class="price">P600.00</span>
            <a href="#" class="add-cart-btn"onclick="alert('Please Log in first');">Add to Cart</a>
            <a href="#" class="add-cart-btn"onclick="alert('Please Log in first');">Buy now</a>
          </div>
        </div>
      </div>
    </div>

    
   <div class="product">
      <div class="product-card">
        <h2 class="name">Reptile Lamp 50W</h2>
        <span class="price">P200</span>
        <a class="popup-btn">view item</a>
        <img src="\paws_claws\items\lamp.jpg" class="product-img">
      </div>
      <div class="popup-view">
        <div class="popup-card">
          <a><i class="fas fa-times close-btn"></i></a>
          <div class="product-img">
            <img src="\paws_claws\items\lamp.jpg">
          </div>
          <div class="info">
            <h2>Reptile Lamp 50W<br><span>Reptile Essentials</span></h2>
            <p>50W reptile lamp<br>Light is very important to reptiles and the recreation of light from their native habitat can help to vastly improve their mood, reducing stress.<br>Stock:</p>
            <span class="price">P200</span>
            <a href="#" class="add-cart-btn"onclick="alert('Please Log in first');">Add to Cart</a>
            <a href="#" class="add-cart-btn"onclick="alert('Please Log in first');">Buy now</a>
          </div>
        </div>
      </div>
    </div>

    <div class="product">
      <div class="product-card">
        <h2 class="name">Dried Mealworms</h2>
        <span class="price">P400.00</span>
        <a class="popup-btn">view item</a>
        <img src="\paws_claws\items\Mealworm.jpg" class="product-img">
      </div>
      <div class="popup-view">
        <div class="popup-card">
          <a><i class="fas fa-times close-btn"></i></a>
          <div class="product-img">
            <img src="\paws_claws\items\Mealworm.jpg">
          </div>
          <div class="info">
            <h2>Mealworm<br><span>Reptile Food</span></h2>
            <p>Brand: no brand<br>All natural ready to eat mealworms<br>Net weight: 2kg<br>Stock:</p>
            <span class="price">P400</span>
            <a href="#" class="add-cart-btn"onclick="alert('Please Log in first');">Add to Cart</a>
            <a href="#" class="add-cart-btn"onclick="alert('Please Log in first');">Buy now</a>
          </div>
        </div>
      </div>
    </div>

    <div class="product">
      <div class="product-card">
        <h2 class="name">Zoo Med Calcium</h2>
        <span class="price">P890</span>
        <a class="popup-btn">view item</a>
        <img src="\paws_claws\items\repti_calcium.jpg" class="product-img">
      </div>
      <div class="popup-view">
        <div class="popup-card">
          <a><i class="fas fa-times close-btn"></i></a>
          <div class="product-img">
            <img src="\paws_claws\items\repti_calcium.jpg">
          </div>
          <div class="info">
            <h2>Zoo Med Calcium<br><span>Reptile Supplement</span></h2>
            <p>Brand: Zoo med<br>Ultrafine precipitated Calcium Carbonate Supplement<br>Net weight: 85g<br>Stock:</p>
            <span class="price">P890</span>
            <a href="#" class="add-cart-btn"onclick="alert('Please Log in first');">Add to Cart</a>
            <a href="#" class="add-cart-btn"onclick="alert('Please Log in first');">Buy now</a>
          </div>
        </div>
      </div>
    </div>



    <div class="product">
      <div class="product-card">
        <h2 class="name">Jurassic Naturals </h2>
        <span class="price">P500</span>
        <a class="popup-btn">view item</a>
        <img src="\paws_claws\items\reptile_sand.jpg" class="product-img">
      </div>
      <div class="popup-view">
        <div class="popup-card">
          <a><i class="fas fa-times close-btn"></i></a>
          <div class="product-img">
            <img src="\paws_claws\items\reptile_sand.jpg">
          </div>
          <div class="info">
            <h2>Jurassic Naturals<br><span>Reptile Essentials</span></h2>
            <p>Brand: Jurassic Naturals<br>100% All natural sand for reptiles<br>Net Weight: 7kg<br>Stock:</p>
            <span class="price">P500</span>
            <a href="#" class="add-cart-btn"onclick="alert('Please Log in first');">Add to Cart</a>
            <a href="#" class="add-cart-btn"onclick="alert('Please Log in first');">Buy now</a>
          </div>
        </div>
      </div>
    </div>

    <div class="product">
      <div class="product-card">
        <h2 class="name">Exo terra Superworm</h2>
        <span class="price">P800</span>
        <a class="popup-btn">view item</a>
        <img src="\paws_claws\items\superworm.jpg" class="product-img">
      </div>
      <div class="popup-view">
        <div class="popup-card">
          <a><i class="fas fa-times close-btn"></i></a>
          <div class="product-img">
            <img src="\paws_claws\items\superworm.jpg">
          </div>
          <div class="info">
            <h2>Exo terra Superworm<br><span>Reptile Food</span></h2>
            <p>Brand: Exo Terra<br>Specialty Reptile food<br>All natural<br>Net weight: 1kg<br>Stock:</p>
            <span class="price">P800.00</span>
            <a href="#" class="add-cart-btn"onclick="alert('Please Log in first');">Add to Cart</a>
            <a href="#" class="add-cart-btn"onclick="alert('Please Log in first');">Buy now</a>
          </div>
        </div>
      </div>
    </div>
</div>
<script src="js.js"></script>
</div>
</div>

<div class="footer">&copy;<span id="year"> </span><span> Paws&Claws. All rights reserved.</span></div>
</div>

</body>
</html>