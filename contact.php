<?php include 'includes/header.php' ?>
<!--contact start here-->
<div class="contact w3agile">
	<div class="container" style="width: 1270px;"> 
		<div class="contact-main w3l-co">
			<div class="col-md-6 contact-left">
				<div class="contact-top">
					<h2>Contact Info</h2>
					<p></p>
			    </div>
				<div class="conta-1 wthree-co">
					<div class="con-phone">
						<span class="con-ph"> </span>
						<div class="con-para">
							<h6>Phone</h6>
							<p>+91 8930557700</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="conta-2 agile-co">
					<div class="con-address">
						<span class="con-location"> </span>
						<div class="con-para">
							<h6>Address</h6>
							<p> Plot No. 5, Risalu Road, Panipat-132103</p>
						</div>
					</div>
				</div>
			 </div>
			<div class="col-md-6 contact-right w3agile-co">
				<div class="contact-top">
					<h3>Send a Message</h3>
					<!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>-->
				</div>
				<form id="contact_form" method="post" action="form/contact.php" >
						<input type="text" class="shart" name="name" placeholder="NAME">
					 	<input type="text" class="shart" name="email" placeholder="EMAIL">
					 	<input type="text" class="long" name="subject" placeholder="SUBJECT">
				         <textarea name="message" placeholder="MESSAGE"></textarea>
                        <input type="submit" value="Submit">
                       <?php if(isset($_GET['message'])): ?>
                       <div class="alert alert-success"><?= $_GET['message'] ?></div>
                       <?php endif; ?>
				</form>
				
				</div>
		  <div class="clearfix"> </div>
		</div>
		<div class="map agileits-mp">
			<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3477.1095544911245!2d76.99502381509936!3d29.367081282133757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sshivam+handloom+Plot+No.+5%2C+Risalu+Road%2C+Panipat-132103!5e0!3m2!1sen!2sin!4v1532075414548" style="border:0; width:100%;" allowfullscreen=""></iframe>
		</div>
	</div>
</div>
<?php include 'includes/footer.php' ?>
<!--contact end here-->
<!--footer start here
<div class="footer agileits-f">
		<div class="container">
			<div class="col-md-4 footer-grid w3-f">
				<h4><a href="index.html"><img src="images/logosef.png" width="70%" style="margin-top: -13px;margin-bottom: 0px;"></a></h4>
				<p>Shivam Handloom works with expertise to produce beautiful products.</p>
				
				<div class="newsletter w3agile-f">
					<!--<form action="#" method="post">
						<input type="email" name="email" value="Email..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email...';}" required="">
						<input type="submit" value="Subscribe">
					</form				</div>
			</div>
			<div class="col-md-4 footer-grid agileinfo-f">
				<h3>Gallery</h3>
				<div class="footer-grid-left agile-f">
					<a href="images/g6.jpg"><img src="images/g6.jpg" alt=" " class="img-responsive"></a>
				</div>
				<div class="footer-grid-left agile-f">
					<a href="images/g5.jpg"><img src="images/g5.jpg" alt=" " class="img-responsive"></a>
				</div>
				<div class="footer-grid-left agile-f">
					<a href="images/g4.jpg"><img src="images/g4.jpg" alt=" " class="img-responsive"></a>
				</div>
				<div class="footer-grid-left agile-f">
					<a href="images/g3.jpg"><img src="images/g3.jpg" alt=" " class="img-responsive"></a>
				</div>
				<div class="footer-grid-left agile-f">
					<a href="images/g1.jpg"><img src="images/g1.jpg" alt=" " class="img-responsive"></a>
				</div>
				<div class="footer-grid-left agile-f">
	 				<a href="images/g2.jpg"><img src="images/g2.jpg" alt=" " class="img-responsive"></a>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-4 footer-grid wthree-f">
				<h3>Contact Info</h3>
				<ul class="footer-address">
					<li><span class="glyphicon glyphicon-home" aria-hidden="true"></span> 7th Isum Road, Sydney City, Australia. </li>
					<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:info@example.com">info@example.com</a></li>
					<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> +598 256 9850</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!--footer end here-->
