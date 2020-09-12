<?php include_once('layouts/header.php') ?>
		<!-- HEADER -->
		<header id="header"> 
			<div class="navbar-fixed">
				<nav class="nav-dark">
					<div class="container">
						<div class="nav-wrapper">
							<a href="" class="brand-logo">
								<img src="<?php $mapper->assets('images/logo.png') ?>" alt="logo" id="nav-logo"> MR.<span class="text-primary-color">CHEF</span>
							</a>
							<a href="#" class="sidenav-trigger" data-target="mobile-nav"><i class="fa fa-bars"></i></a>
							<ul id="nav-mobile" class="right hide-on-med-and-down top-nav">
								<li class="active"><a href="#header">Home</a></li>
								<li><a href="#services">Services</a></li>
								<li><a href="#menu">Menu</a></li>
								<li><a href="#about">About us</a></li>
								<li><a href="#contact">Contact &amp; Reservation</a></li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
			<ul id="mobile-nav" class="sidenav">
				<li><a href="#header">Home</a></li>
				<li><a href="#services">Services</a></li>
				<li><a href="#menu">Menu</a></li>
				<li><a href="#about">About us</a></li>
				<li><a href="#contact">Contact &amp; Reservation</a></li>
				
			</ul>
			<div class="container center showcase">
				<img src="<?php $mapper->assets('images/logo.png') ?>" alt="logo" class="logo">
				<h2 class="header-text"><span>Healthy Foods For</span> <br> <span>Healthy Living</span></h2>
				<a href="#" class="btn btn-primary"><i class="fa fa-utensils"></i> ORDER NOW</a>
				<a href="#" class="btn btn-secondary"><i class="fa fa-calendar"></i> BOOK A TABLE</a>
			</div>
		</header>
		<!-- /HEADER -->
		<!-- SERVICES -->
		<section id="services" class="services">
			<div class="container">
				<h3 class="section-title-light text-center">Our Services</h3>
				<p class="muted-text-light text-center">One step at a time for your favorite food</p>
				<div class="row">
					<div class="col m4">
						<div class="card text-center hoverable z-depth-3">
							<div class="card-image">
								<i class="fa fa-shipping-fast img-services"></i>
							</div>
							<div class="card-content">
								<span class="card-title">Delivery</span>
								<p>We can deliver your fresh, healthy and delicous foods by placing your 
								orders and fill up some delivery information.</p>
							</div>
						</div>
					</div>
					<div class="col m4">
						<div class="card text-center hoverable z-depth-3">
							<div class="card-image">
								<i class="fa fa-calendar-alt img-services"></i>
							</div>
							<div class="card-content">
								<span class="card-title">Book a Table</span>
								<p>Schedule a day to reserve a table and watch our live band. We also offer
								discount for our customers.</p>
							</div>
						</div>
					</div>
					<div class="col m4">
						<div class="card text-center hoverable z-depth-3">
							<div class="card-image">
								<i class="fa fa-utensils img-services"></i>
							</div>
							<div class="card-content">
								<span class="card-title">Catering</span>
								<p>Mark your calendar and make a deal with our catering service. We offer full-service catering for any events.</p>
							</div>
						</div> 
					</div>
				</div>
			</div>
		</section>
		<!-- /SERVICES -->
		<section id="menu" class="menu">
			<div class="container">
				<h3 class="section-title-dark text-center">Discover Healthy Meal</h3>
				<p class="muted-text-dark text-center">One step at a time for your favorite food</p>
				<div class="row">
					<div class="col m4">
						<div class="category-title-box active">
							<span class="category white-text text-center">Starter</span>
						</div>
					</div>
					<div class="col m4">
						<div class="category-title-box">
							<span class="category white-text text-center">Main Course</span>
						</div>
					</div>
					<div class="col m4">
						<div class="category-title-box">
							<span class="category white-text text-center">Drinks &amp; Extras</span>
						</div>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col m4 menu-wrapper">
						<img class="food-img" src="<?php $mapper->assets('images/steak.jpg') ?>" alt="food">
						<div class="food-box">
							<p class="food-name white-text">Pampangas Thick Steak</p>
							<p class="food-info">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
							<button class='btn-order'>Add to order</button>
						</div>
					</div>
					<div class="col m4 menu-wrapper">
						<img class="food-img" src="<?php $mapper->assets('images/steak.jpg') ?>" alt="food">
						<div class="food-box">
							<p class="food-name white-text">Pampangas Thick Steak</p>
							<p class="food-info">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
							<button class='btn-order'>Add to order</button>
						</div>
					</div>
					<div class="col m4 menu-wrapper">
						<img class="food-img" src="<?php $mapper->assets('images/steak.jpg') ?>" alt="food">
						<div class="food-box">
							<p class="food-name white-text">Pampangas Thick Steak</p>
							<p class="food-info">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
							<button class='btn-order'>Add to order</button>
						</div>
					</div>
					<div class="col m4 menu-wrapper">
						<img class="food-img" src="<?php $mapper->assets('images/steak.jpg') ?>" alt="food">
						<div class="food-box">
							<p class="food-name white-text">Pampangas Thick Steak</p>
							<p class="food-info">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
							<button class='btn-order'>Add to order</button>
						</div>
					</div>
					<div class="col m4 menu-wrapper">
						<img class="food-img" src="<?php $mapper->assets('images/steak.jpg') ?>" alt="food">
						<div class="food-box">
							<p class="food-name white-text">Pampangas Thick Steak</p>
							<p class="food-info">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
							<button class='btn-order'>Add to order</button>
						</div>
					</div>
					<div class="col m4 menu-wrapper">
						<img class="food-img" src="<?php $mapper->assets('images/steak.jpg') ?>" alt="food">
						<div class="food-box">
							<p class="food-name white-text">Pampangas Thick Steak</p>
							<p class="food-info">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
							<button class='btn-order'>Add to order</button>
						</div>
					</div>
				</div>
				<hr>
			</div>
		</section>
		<section id="about" class="about">
			<div class="container">
				<h3 class="section-title-light text-center">Who we are</h3>
				<p class="muted-text-light text-center">One step at a time for your favorite food</p>
				<div class="row">
					<div class="col m7 about-wrapper">
						<h4 class="about-header"><i class="fa fa-minus"></i> Our Story</h4>
						<p>The Mr. chef Restaurant was founded in blabla by Mr. IJohn Doe in lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						<h4 class="about-header"><i class="fa fa-minus"></i> Opening Hours</h4>
						<ul>
							<li>MONDAY: 7AM - 8PM</li>
							<li>TUESDAY: 7AM - 8PM</li>
							<li>WEDNESDAY: 7AM - 8PM</li>
							<li>THURSDAY: 7AM - 8PM</li>
							<li>FRIDAY: 7AM - 8PM</li>
							<li>SAT &amp; SUN: <span class="red-text">CLOSED</span></li>
						</ul>
					</div>
					<div class="col m5">
						<img src="<?php $mapper->assets('images/chef-portrait.png') ?>" class="portrait" alt="chef">
					</div>
				</div>
			</div>
		</section>
		<section id="contact" class="contact">
			<div class="container">
				<h3 class="section-title-dark text-center">Contact Us</h3>
				<p class="muted-text-dark text-center">One step at a time for your favorite food</p>
				<div class="row">
					<div class="col m6 reservation-wrapper">
						<p>We offer full-service catering for any event, large or small. We understand your needs and we will cater the food to satisfy the biggerst criteria of them all, both look and taste. Do not hesitate to contact us.</p>
						<p><b>Reserve a table by send as a message.</b></p>
						<div class="input-dark input-field">
							<input id="name" type="text" class="validate">
							<label class="active" for="name">Name</label>
						</div>
						<div class="input-dark input-field">
							<input id="email" type="email" class="validate">
							<label for="email">Email</label>
						</div>
						<div class="input-dark input-field">
							<input id="no-of-guest" type="number" min="0" max="100" class="validate">
							<label class="active" for="no-of-guest">How many people</label>
						</div>
						
						<div class="input-dark input-field">
							<input id="when" type="datetime-local" class="validate">
						</div>
						<div class="input-dark input-field">
							<textarea id="message" class="materialize-textarea"></textarea>
							<label for="message">Message or Special Requirements</label>
						</div>
						
						<button type="submit" name="send" class="btn btn-primary">
						<i class="fa fa-paper-plane"></i> SEND MESSAGE
						</button>
					</div>
					<div class="row">
						<div class="col m6">
							<p>Find us at  245 blk. Alongside Don Roces Avenue Makati City or call us at 05050515-122330</p>
							<p><b>Check our location and come with our ellegant restaurant.</b></p>
							<img src="<?php $mapper->assets('images/map.jpeg') ?>" alt="maps" class="map">
						</div>
					</div>
				</div>
			</section>

<?php include_once('layouts/footer.php') ?>



			
			