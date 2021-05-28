<!DOCTYPE html>
<html lang="en-GB">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">		<!-- viewport visible area webpage -->
					  <!-- fonts imported from google -->
		<link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&family=Lobster&family=Roboto:ital@1&display=swap" rel="stylesheet">
		<link href="https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">	<!-- icons imported fontawesome -->
		<title>A Slice of Plymouth History</title>
		<link href="style.css" rel="stylesheet"/>		<!-- css file -->
		<script src="javascript.js"></script>		<!-- javascript file -->
	</head>
	<body>
		<div class="header">
			<div class="title">
				<a href="index.html" ><span class="italicStyle">"A Slice of Plymouth History"</span></a>
			</div>
			<div class="searchBoxWrapper">
				<div class="searchBox">
					<div class="searchContainer">				<!-- Container Searchbox -->
						<form class="searchContainer" action="https://www.google.com/search" method="GET">
						<input class="search" alt="search" name="q" type="text" placeholder="Google Search" >
						<button class="searchIcon" type="submit" ><i class="icon-search "></i></button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div  class="quote">"All great and honorable actions are accompanied with great difficulties, and must be both met and overcome with answerable courage" - William Bradford 
		</div>
		<div class="body">
			
			<div class="row">	
				<div class="navigator">						<!-- Menu navigator -->
					<div class="titleMenu boldStyle">Menu
					</div>
					<div class="menuContent">
						<ul class="menuList">
							<li class="menuItem hyperlink"><a href="index.html">HomePage</a></li>
							<li class="menuItem hyperlink"><a href="museum.html">Museums </a></li>
							<li class="menuItem hyperlink"><a href="plymouthHoe.html">Plymouth Hoe</a></li>
							<li class="menuItem hyperlink"><a href="theatre.html"> Theatre </a></li>
							<li class="menuItem hyperlink"><a href="map.html">Map</a></li>
							<li class="menuItem is-selected boldStyle">Shopping </li>
						</ul>
					</div>
				</div>

				<div class="contents index">			<!-- Main contents -->
					<div class="titleContents boldStyle"> Shopping
					</div>
					<div class ="shop">										<!-- Main table -->
						<form  method="post" >

							<?php include 'php/firstPageShop.php';?>
							
						</form>	
					</div>																		<!-- Trigger/Open Checkout PAGE 2 -->
					<div>
						<input type="submit" value="Checkout" class="boldStyle spaceT" id="BtnCheckout" onclick="checkClick(1); dataSecondPage();totalShopping()">
							<!-- The Modal -->
							<div id="myModal1" class="modal modal1">
							  <!-- Modal content -->
							    <div class="modal-content">
							   		<div class="modal-header">
								      	<span class="close" onclick="xClick(1)">&times;</span>
								      	<div class="titleContents">Cart
								        </div>
								    </div>
									<div class="modal-body">

										<?php include 'php/secondPageUp.php';?>

									</div>
									<div class="modal-footer">	
										  		<!--Trigger last page n 3 -->
										<button class="confirm boldStyle" onclick="checkClick(2); dataSecondPage()">Confirm</button>
										<button class="back boldStyle" onclick="xClick(1)">Back</button>
									</div>
							    </div>
							</div>	

							  		
							<div id="myModal2" class="modal myModal2">
									  <!-- Modal content -->
								<div class="modal-content">
								    <div class="modal-header">
									    <span class="close" onclick="xClick(2)">&times;</span>
									    <div class="titleContents">Shipment Info
									    </div>
									</div>
									<div class="modal-body alignLeft">
										<form method="post">
											<div class="textContent ">
											  	Full Name :
											  	<input class="shipInfo"alt="Full Name" type="text" placeholder="example: Jim Brown" id="fname" name="fname">
											</div>
											<div class="textContent">
											  	Email : 
											  	<input class="shipInfo" alt="Email" type="text" placeholder="example: cust@gmail.uk.ac" id="email" name="email" >
											</div>
											<div class="textContent">
											  	Address : 
											  	<input class="shipInfo" alt="Address" type="text" placeholder="example: address, PostCode, State" id="address" name="address">
											</div>
											<div class="textContent">
											  	Mobile Number : 
											  	<input class="shipInfo" alt="mobile number" name="mobile" placeholder="example: 012342356" type="text" id="mobile" >
                                                 
											</div>
										</form>
									</div>
									<div class="modal-footer">	<!--Trigger last page n 3 -->
										 <button type="submit" value="Confirm" class="confirm boldStyle" onclick="ValidateName(fname);ValidateEmail(email);ValidateAddress(address); ValidateNumber(mobile); ConfirmShop(3)"> Confirm </button>
										<button class="back boldStyle" onclick="xClick(2)">Back</button>
								  	</div>
								</div>	
							</div>
							        	<!-- Order confirmed -->
						<div id="myModal3" class="modal myModal3">
									  <!-- Modal content -->
							<div class="modal-content">
								<div class="modal-header">
									<div class="titleContents boldStyle"> Order Confirmed <span class="close"><a href="index.html" >&times;</a></span>
									</div>
									
								</div>
												  
								<div class="modal-body alignCenter"> Thank you for shopping with us
								</div>
								<div class="modal-footer">				
									<button class="buttonHomePage boldStyle spaceTB alignCenter"><a href="index.html" > Back to the HomePage </a></button>
								</div>
							</div>
						</div>
									
					</div>
						
					<button class="buttonHomePage boldStyle"><a href="index.html" > Back to the HomePage </a></button>
				</div>
			</div>
			

			<div class="row row--spaceBetween">			<!-- bottom contacts, social and info -->
				<div class="contactWrapper">
					<div class="titleMenuBottom boldStyle">Contacts:</div>
					<div class="fullContactWrapper">
						<div class="joinRow">	
							<div class="typeContact boldStyle">Email:</div>
							<div class="dataContatct">10787166@cityplym.ac.uk</div>
						</div>
						<div class="joinRow">	
							<div class="typeContact boldStyle">Address:</div>
							<div class="dataContatct">Drake Circus, Plymouth, PL4 88A</div>
						</div>
						<div class="joinRow">
							<div class="typeContact boldStyle">Company:</div>
							<div class="dataContatct">University of Plymouth &#169;</div>
						</div>
						<div class="joinRow">
							<div class="typeContact hyperlink boldStyle"><a href="contactForm.html">Ask us a question <-</a></div>
						</div>
					</div>
				</div>
				<div class="socialWrapper">
					<div class="titleMenuBottom boldStyle">Social:</div>
					<div class="fullContactWrapper">
						<div class="joinRow">
							<div class="typeContact">
								<a class="hyperlink" href="https://instagram.com"><i class="icon-instagram"></i>
							</div>
								<div class="dataContact">
								<a class="hyperlink" href="https://instagram.com">Instagram</a>
							</div>
						</div>
						<div class="joinRow">
							<div class="typeContact">
								<a class="hyperlink" href="https://facebook.com"> <i class="icon-facebook"></i>
							</div>
								<div class="dataContact">
								<a class="hyperlink" href="https://facebook.com">Facebook</a>
							</div>
						</div>
						<div class="joinRow">
							<div class="typeContact">
								<a class="hyperlink" href="https://twitter.com"><i class="icon-twitter"></i></a>
							</div>
								<div class="dataContact">
								<a class="hyperlink" href="https://twitter.com">Twitter</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer">				<!-- footer links -->
			<a class="hyperlink" href="sitemap.html" > <b>Sitemap</b> </a>
			<a class="hyperlink" href="cookies.html" ><b>Cookies</b> </a>
			<a class="hyperlink" href="termOfUse.html" > <b>Terms of use</b></a>
		</div>
	</body>
</hmtl>
