<!DOCTYPE html>
<html style="border-width: 0px;">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> BrewBasket</title>

		<!-- Code for font awesome cdn -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- Code for linking css file -->
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Alkatra:wght@400;500&display=swap" rel="stylesheet">

	<!-- Code for linking css file -->
</head>
<body>

<!-- Header Section -->

<header class="header">
	<a href="#" class="logo"><i class="fa fa-coffee" aria-hidden="true"> </i>BrewBasket
</a>

<nav class="navbar">
<a href="#Store Front">Store Front</a> 
<a href="#Qualities">Qualities</a> 
<a href="#Inventory">Inventory</a> 
<a href="#Assortments">Assortments</a> 
<a href="#Feedback">Feedback</a> 


</nav>

<div class="icons">
	<div class="fa fa-bars" id="menu-btn"></div>
	<div class="fa fa-search" id="search-btn"></div>
	<div class="fa fa-shopping-cart" id="cart-btn"></div>
	<div class="fa fa-user" id="login-btn"></div>
</div>

<form class="search-form">
	<input type="search" id="search-box"placeholder= "Search Field">
	<label for="search-box"class="fa fa-search"></label>
</form>


<div class="shopping-cart">
	<div class="box">
		<i class="fa fa-trash"></i> 
		<img src="image/cart-img-2.png">
		<div class="content">
			<h3>Onion</h3>
			<span class="price">£4.99/-</span>
			<span class="Amount">Amt : 1</span>
		</div>
	</div>

	<div class="box">
		<i class="fa fa-trash"></i>
		<img src="image/cart-img-1.png">
		<div class="content">
			<h3>Watermelon</h3>
			<span class="price">£3.99/-</span>
			<span class="Amount">Amt : 4</span>
		</div>
	</div>

<div class="Total">	Total : £8.98/-</div>
<a href="#" class="btn">Checkout</a>


</div>



<form action="#" class="login-form">
	<h3>Login Back</h3>
	<input type="text" name="username" placeholder="your username here" class="box">
	<input type="password" placeholder="your password here" class="box">

<p>Forgot password? <a href="#"class="link" onclick="message()" >Click Here </a>

	<script>
	function message()
	{
		alert("Please contact BrewBasket at brewbasket@gmail.com")
	}
</script>



<p>Dont have an account? <a href="register.php">Create Here</p></a> 



	<input type="Submit" value="Login" class="btn">
</form>



</header>

<!-- Header Section -->



<!--Banner Section -->

<section class="StoreFront" id= "Store Front">
	<div class="content">
		<h3>Freshly <span>Brewed </span>  Authentic Goods</h3>
		<p><e>Welcome to our online grocery store! We offer a wide selection of high-quality groceries and household essentials at affordable prices. Our products are carefully curated to meet the needs of our customers, whether you're looking for fresh produce, pantry staples, or specialty items.</p></e>

		<a href="#" class="btn"> Grab your items</a>

	</div>
	
</section>

<!--Qualities Section -->

<section class="Qualities" id="Qualities">
	<h1 class="heading"> Top <span>Traits</span> We Offer</h1>

<div class="box-container">
	<div class="box">
		<img src="image/feature-img-1.png">
		<h3>Pure And Pesticide-Free</h3>
		<p>Our commitment to organic farming means that our produce is free from harmful pesticides and chemicals, and our meats are raised without antibiotics or hormones.</p>
		<a href="#" class="btn">View More</a>
	</div>

	<div class="box">
		<img src="image/feature-img-3.png">
		<h3>Payment by Cash or Card</h3>
		<p>We are pleased to offer our customers the convenience of both cash and credit card payments at our online grocery store. Whether you prefer to pay with physical currency or through electronic means, we have you covered. </p>
		<a href="#" class="btn">View More</a>
	</div>
</div>


</section>

<!--Inventory Section -->

<section class="Inventory" id="Inventory">
	<h1 class="heading"> Our <span>Inventory </span> </h1>


<section class="inventory-slider-v1">
	<div class="inventory-items">
		<div class="inventory-item">
			<div class="inventory-item-img">
				<img src="image/product-1.png">
			</div>
			<div class="inventory-item-desc">
				<h1>Tangerines (Korea) </h1>
				<div class="price">£2.99/kg- </div>
				<div class="starts"><i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half"></i><br>
					<a href="" class="btn">Add to cart</a>
				</div>
			</div>
		</div>
		<div class="inventory-item">
			<div class="inventory-item-img">
				<img src="image/product-2.png">
			</div>
			<div class="inventory-item-desc">
				<h1>Red Onions (Iran)</h1>
				<div class="price">£3.99/kg- </div>
				<div class="starts"><i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i><br>
					<a href="" class="btn">Add to cart</a>
				</div>
			</div>
		</div>
		<div class="inventory-item">
			<div class="inventory-item-img">
				<img src="image/product-3.png">
			</div>
			<div class="inventory-item-desc">
				<h1>Lamb Steak (Kenya)  </h1>
				<div class="price">£20.99/kg-</div>
				<div class="starts"><i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half"></i><br>
					<a href="" class="btn">Add to cart</a>
				</div>
			</div>
		</div>
		<div class="inventory-item">
			<div class="inventory-item-img">
				<img src="image/product-4.png">
			</div>
			<div class="inventory-item-desc">
				<h1>Cabbage (Pakistan)</h1>
				<div class="price">£4.99/kg- </div>
				<div class="starts"><i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i><br>
				<a href="" class="btn">Add to cart</a>
				</div>
			</div>
		</div>
		<div class="inventory-item">
			<div class="inventory-item-img">
				<img src="image/product-5.png">
			</div>
			<div class="inventory-item-desc">
				<h1>Baby Potatoes (Somalia)</h1>
				<div class="price">£2.99/kg- </div>
				<div class="starts"><i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-half"></i><br>
				<a href="" class="btn">Add to cart</a>
				</div>
			</div>
		</div>
		<div class="inventory-item">
			<div class="inventory-item-img">
				<img src="image/product-6.png">
			</div>
			<div class="inventory-item-desc">
				<h1>Organic Avacadoes (Italy)</h1>
				<div class="price">£1.99/kg- </div>
				<div class="starts"><i class="fa fa-star"></i>
				<i class="fa fa-star-half"></i><br>
				<a href="" class="btn">Add to cart</a>
				</div>
			
		</div>
	</section>






</section>
<!--Inventory Section -->

<!--Assortments Section -->

<section class="Assortments" id="Assortments">
	<h1 class="heading"> Our <span>Assortments </span> </h1>


	<div class="box-container">
		<div class="box">
			<img src="image/cat-1.png">
			<h1>Cruciferous, Leafy, Nightshade & Allium, Vegetables</h1>
			<p>Discounts upto 40%</p>
			<a href="#" class="btn"> Purchase Now </a>
		</div>
        

        <div class="box-container">
		<div class="box">
			<img src="image/cat-2.png">
			<h1>Tropical, Pome, Citrus & Succulent, Fruits</h1>
			<p>Discounts upto 20%</p>
			<a href="#" class="btn"> Purchase Now </a>
		</div>


		</div>
</section>
<!--Assortments Section -->
















<!--Feedback Section -->


<section class="Feedback" id="Feedback">
	<h1 class="heading"> Customer <span> Feedback </span> </h1>


	<div class="box-container">
		<div class="box">
			<img src="image/pic-3.png">
			<p>"I recently ordered some groceries from this online store and I have to say, I was blown away by how easy the process was! The website was user-friendly and I was able to find everything I needed quickly. I also appreciated the wide variety of products available, including some hard-to-find items that I haven't been able to locate at my local grocery store!"</p>
			<h3>Alice Johnson</h3>
			

			
		</div>

		 <div class="box-container">

		<div class="box">
			<img src="image/pic-4.png">
			<p>"I was a little hesitant to order groceries online, but I decided to give it a try with this online store and I'm so glad I did! The process was smooth and easy, and I was impressed with the selection of products available. I received regular updates on the status of my order, which was reassuring. When my order arrived, I was pleased to find that all of the products were carefully packaged and arrived in great condition!"</p>
			<h3>Grace Kim</h3>
			





























		</div>
	</div>
	
</section>

<!--Feedback Section -->

<!--Footer Section -->

<section class="footer">
	<div class="box-container">
		<div class="box1">
		<h3> BrewBasket <i class="fa fa-coffee"></i></h3>
		<p>Looking for more ways to stay connected with us? Look no further than our social media pages! Follow us on Facebook, Twitter, and Instagram to stay up-to-date on all of our latest news, promotions, and behind-the-scenes content. Our social media handles are prominently displayed on our website, making it easy for you to click and follow.</p>
		</div>
		</div>

		<div class="share">
			<a href="https://www.facebook.com" class="fa fa-facebook"></a>
			<a href="https://twitter.com/?lang=en" class="fa fa-twitter"></a>
			<a href="https://www.instagram.com/" class="fa fa-instagram"></a>
			<a href="https://www.snapchat.com/en-US" class="fa fa-snapchat"></a>
		</div>
	



<div class="one">
		<h3>Contact Info</h3>
		<a href="#"class="links"> <i class="fa fa-phone">+9719856245</i></a><br><br>
		<a href="#"class="links"> <i class="fa fa-envelope">brewbasket@gmail.com</i></a><br><br>
		<a href="#"class="links"> <i class="fa fa-map-marker">Dubai,UAE</i></a><br><br>
		</div>


		<div class="oneone">
		<h3>Easy Links</h3>
		<a href="#"class="links"><i class="fa fa-hand-o-right">Storefront </i></a><br><br>
		<a href="#"class="links"> <i class="fa fa-hand-o-right">Inventory</i></a><br><br>
		<a href="#"class="links"> <i class="fa fa-hand-o-right">Assortments</i></a><br><br>
		<a href="#"class="links"> <i class="fa fa-hand-o-right">Feedback</i></a><br><br>
		<a href="#"class="links"> <i class="fa fa-hand-o-right">Qualities</i></a><br><br>
		</div>

	<div class="new">
		<h3>Newsletter</h3>
		<p>Subscribe for latest updates</p>
		<input type="email"placeholder="Enter your Email" class="email">
		<input type="submit" value="Subscribe" class="btn">
		<br>
		<br>
		<img src="image/payment.png">
		
		</div>




<img class="animated-gif" src="C:\xampp\htdocs\grocery\image\gif-1.gif" >


<img class="animated-giff" src=
"C:\xampp\htdocs\grocery\image\gif-2.gif">















	</div>
</section>









<!--Footer Section -->




















<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>


</body>
</html>

<?php

