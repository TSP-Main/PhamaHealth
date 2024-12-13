<?php include "../private/settings.php";


include PATH."include/headerhtml.php"
 ?>
  <body>
  	<?php include PATH."include/header.php"; ?> 
    
<div class="about_screen">
<section class="banner_1 d-inline-flex align-items-center" style="background-image: url(<?php echo URL?>images/banner-4.jpg);">
	<div class="container">
		<h3 class="title_h3">About Us</h3>
	</div>
</section>
<section class="about_pharma_health">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-sm-5 mobile-hide">
				<img src="<?php echo URL?>images/heart.png">
			</div>
			<div class="col-sm-7">
				<h5 class="title_h5">Welcome to Pharmacinta</h5>
				<h3 class="title_h3">Empowering community pharmacies to offer 
a wide range of prescription medications without requiring GP appointments</h3>
				<p>We are partnering with local independent pharamcies acoss the UK to provide fast & 
convenient access to prescription medicitions with the support of our clinical team. 
This will take the pressure off NHS GPs; enabling community pharmacies to provide 
additional services that is faster than any comparable online service</p>
<ul class="list_option_1">
	<li>Affordable Healthcare </li>
	<li>Accessible Treatments</li>
	<li>Safety Uncompromised</li>
	<li>Local Pharmacies</li>
	<li>Caring Pharmacists</li>
	<li>Fast & Efficient</li>
</ul>
			</div>
		</div>
	</div>
</section>
<section class="our_vision">
	<div class="container">
		<div class="our_vision_in">
			<div class="row">
				<div class="col-sm-7 pe-5">
				  <h2 class="title_h2">Our Vision</h2>
					<div>
					  <p>Our mission at Pharmacinta is to empower independent community pharmacies to play a more active role in community healthcare by providing them with a cutting-edge clinical prescribing platform that enables them to offer prescription medications through private electronic prescriptions to their patients. We are dedicated to bridging primary healthcare access by positioning local pharmacies as trusted healthcare partners, delivering enhanced patient care, strengthening pharmacy-patient relationships, and creating new revenue opportunities in a competitive healthcare landscape. </p>
					 <p>Moreover, our service strengthens the competitive position of community pharmacies against online-only pharmacies. With same-day medication collection and established patient relationships, community pharmacies hold distinct advantages. The pharmacy-patient relationship is often second only to that of doctors, and our service enables pharmacies to leverage this trust by providing patients with a convenient, reliable, and cost-effective alternative to solely online services.</p>
		          </div>
					
					
				</div>
				<div class="col-sm-5">
					<img class="w100p" src="<?php echo URL?>images/vision.jpg">
				</div>
			</div>
		</div>
		<div class="our_vision_in">
			<div class="row">
				<div class="col-sm-7 order-2 ps-5">
					<h2 class="title_h2">Our Partner Pharmacies</h2>
					<p>We are currently rolling out our service with partner pharmacies, starting with our first cohort in London. Over the next six months, we anticipate rapid growth and aim to expand our availability to most major cities across the UK.</p>
					<a href="<?php echo URL?>partner-pharmacy" class="btn btn-danger btn-lg d-inline-flex align-items-center ps-5 pe-5 mt-3">View All Partner Pharmacies</a>
				</div>
				<div class="col-sm-5 mobile-hide">
					<img class="w100p" src="<?php echo URL?>images/logos_img.jpg">
				</div>
			</div>
		</div>
	</div>
</section>
 
<section class="our_team">

	<div class="container wow fadeInUp" data-wow-delay="0.5s">

		<h2 class="title_h2 text-center">Our Clinical Team</h2>

		<div class="owl-carousel-2 owl-carousel">

        

        

        <?php $sqlCTeam="select * from tbl_clinical_team where team_status=1 order by team_id"; 

		

		$resCTeam=$database->get_results($sqlCTeam);

		for ($r=0;$r<count($resCTeam);$r++)

		{

			$rowCTeam=$resCTeam[$r];

		

		?>

			<div class="item">

				<div class="our_team_box">

					<a href="<?php echo URL?>about-us#team"><img src="<?php echo URL?>classes/timthumb.php?src=<?php echo URL?>images/team/<?php echo $rowCTeam['team_image']?>&w=400&h=300&zc=1"></a>

					<h3><?php echo $rowCTeam['team_name']?></h3>

					<h6><?php echo $rowCTeam['team_designation']?></h6>

				</div>

			</div>

			

		<?php } ?>	

		</div>

	</div>

</section>

<section class="regulatory_details">
	<div class="container">
		<!--<h2 class="title_h2 text-center">Regulatory Details</h2>-->
		<div class="row">
			<div class="col-sm-6">
				<div class="regulatory_details_box">
					<h3 class="title_h3">Company Information</h3>
					<p>The website pharmahealth.co.uk is operated by Pro UK Health Ltd. It is a company registered in England and Wales under company number 13323297. </p>
					<h6>Registered Company Address:</h6>

					<p>14/2G Docklands Business Centre <br>
					10-16 Tiller Road <br>
					London <br>
					E14 8PX
					</p>
					<h6><a href="<?php echo URL?>contact-us">Contact us</a></h6>


				</div>
			</div>
			<div class="col-sm-6">
				<div class="regulatory_details_box">
					<h3 class="title_h3">Regulation</h3>
					<p class="mb-3">PharmaHealth and it's Clinicians are regulated by the following regulatory bodies:</p>
<p class="mb-3"><img class="w100p" src="<?php echo URL?>images/care_logo.png"><br>
	<span>CQC :</span> Pro UK Health Ltd t/a PharmaHealth is regulated by the Care Quality Commission (CQC), Location ID: 1-11457399511. <br>Our clinicians are regulated by the following regulatory bodies:</p>
	<p class="mb-3"><img class="w100p" src="<?php echo URL?>images/gphc.png"><br>
		<span>GPhC : </span>Our Pharmacist Prescribors and Partner Pharmacies are regulated by the General Pharmaceutical Council (GPhC).</p>
	<p class="mb-3"><img class="w100p" src="<?php echo URL?>images/logos_img.jpg"><br>
		<span>GMC : </span>Our Doctors are regulated by the General Medical Council (GMC).</p>
	<p class="mb-3"><a href="<?php echo URL?>regulations" class="btn btn-danger btn-sm float-end">Read More</a>			  </p>
				</div>
			</div>
			<!--<div class="col-sm-4">
				<div class="regulatory_details_box">
					<h3 class="title_h3">Contact Us</h3>
					<p class="mb-3">Medicines & Healthcare products Regulatory 
Agency regulates medicines and medical 
devices in the UK.</p>
<h5>Contact Pharma Health</h5>
<p class="mb-3">10 South Colonnade, Canary Wharf, 
London E14 4PU</p>
<p class="mb-2">Email: <span>help@pharmahealth.co.uk</span></p>
<p class="mb-2">Telephone: <span>020 3080 6000</span></p> 
<p class="mb-2">Fax: <span>020 3118 9803</span></p> 
<p class="mb-2">Website: <br>
<span>http://pharmahealth.com</span></p> 

<a href="#" class="btn btn-danger btn-sm float-end">Read More</a>
				</div>
			</div>-->
		</div>
	</div>
</section>
 

</div>


<section class="our-company">
	<div class="container">
		<ul class="owl-carousel-4 our_logos owl-carousel">
			<li class="item"><img src="<?php echo URL?>images/logo_01.png"></li>
			<li class="item"><img src="<?php echo URL?>images/logo_02.png"></li>
			<li class="item"><img src="<?php echo URL?>images/logo_03.png"></li>
			<li class="item"><img src="<?php echo URL?>images/logo_01.png"></li>
			<li class="item"><img src="<?php echo URL?>images/logo_02.png"></li>
			<li class="item"><img src="<?php echo URL?>images/logo_03.png"></li>
		</ul>
	</div>
</section>
<?php include PATH."include/footer.php"; ?> 