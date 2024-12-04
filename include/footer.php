<footer class="footer">

	<div class="container">

		<div class="row">

			<div class="col-sm-3">

				<div class="footer_info">

					<a href="<?php echo URL?>" class="footer_logo">

						<img src="<?php echo URL?>images/Pharmacy-health-final-logo.svg">

					</a>



		<p>14/2G Docklands Business Centre <br>

10-16 Tiller Road <br>

London <br />

E14 8PX <br><a href="<?php echo URL?>contact-us">Contact Us</a></p>

<ul class="social_media">

	<li><a href="#"><img src="<?php echo URL?>images/f_icon.png"></a></li>

	<li><a href="#"><img src="<?php echo URL?>images/t_icon.png"></a></li>

	<li><a href="#"><img src="<?php echo URL?>images/i_icon.png"></a></li>

	<li><a href="#"><img src="<?php echo URL?>images/y_icon.png"></a></li>

</ul>

				</div>

			</div>

			<div class="col-sm-3">

				<div class="footer_links">

					<h3>Online Services</h3>

					<ul>

						<li><a href="#">All Services</a></li>

						<li><a href="#">Blood Tests</a></li>

						<li><a href="#">GP Consultation</a></li>

						<li><a href="#">Travel Vaccination PGDs	</a></li>

						

					</ul>

				</div>

			</div>

			<div class="col-sm-3">

				<div class="footer_links">

					<h3>Pharma Health</h3>

					<ul>

						<li><a href="<?php echo URL?>about-us">About Us</a></li>

						<li><a href="<?php echo URL?>about-us#team">Clinical Team </a></li>

						<li><a href="<?php echo URL?>partner-pharmacy">Partner Pharmacies </a></li>

						

						<li><a href="<?php echo URL?>patient-how-it-works">How it works </a></li>

                        

						

						<li><a href="<?php echo URL?>blogs/listing">Health Blog</a></li>

                        <li><a href="<?php echo URL?>useful-links">Useful Links</a></li>

					</ul>

				</div>

			</div>

			<div class="col-sm-3">

				<div class="footer_links">

					<h3>Customer Service </h3>

					<ul>

						<li><a href="<?php echo URL?>repeat-medication">Repeat Medication Service</a></li>

						

						<li><a href="<?php echo URL?>refunds-and-returns">Refund & Returns</a></li>

						<li><a href="<?php echo URL?>complaints-and-feedback">Complaints & Feedback</a></li> 

					</ul>

				</div>

			</div>

		</div>

	</div>

</footer>

<section class="footer_copy_right text-center">

	<div class="container">

		<p>Copyright &copy; <?php echo date("Y") ?> All Rights Reserved by Pro UK Health Ltd.</p>

		<ul>

			<li><a href="<?php echo URL?>regulations">Regulations</a></li>

			<li><a href="<?php echo URL?>terms-and-conditions">Terms & Conditions</a></li>

			<li><a href="<?php echo URL?>terms-of-sale">Terms of Sale</a></li>

			<li><a href="<?php echo URL?>privacy-policy">Privacy Policy</a></li>

			<li><a href="<?php echo URL?>cookie-policy">Cookie Policy</a></li>

			<li><a href="<?php echo URL?>careers">Careers</a></li>

		</ul>

	</div>

</section>

<script src="https://owlcarousel2.github.io/OwlCarousel2/assets/vendors/jquery.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>

<script src="<?php echo URL?>/js/wow.min.js"></script>

<?php if ($frontPageName=="index.php" || $frontPageName=="pharmacy.php" || $frontPageName=="tdetail.php") { ?>



  <script type="text/javascript">

  	$('.owl-carousel-1').owlCarousel({

    loop:true,

    margin:10,

    responsiveClass:true,

    responsive:{

        0:{

            items:1,

            nav:true

        },

        600:{

            items:2,

            nav:false

        },

        1000:{

            items:2,

            nav:true,

            loop:false

        }

    }

})

  	$('.owl-carousel-2').owlCarousel({

    loop:true,

    margin:20,

    responsiveClass:true,

    responsive:{

        0:{

            items:2,

            nav:true,

            margin:10,

        },

        600:{

            items:3,

            nav:false

        },

        1000:{

            items:4,

            nav:true,

            loop:false

        }

    }

})

  	$('.owl-carousel-3').owlCarousel({

    loop:true,

    margin:20,

    responsiveClass:true,

    responsive:{

        0:{

            items:1,

            nav:true

        },

        600:{

            items:2,

            nav:false

        },

        1000:{

            items:3,

            nav:true,

            loop:false

        }

    }

})



    var wow = new WOW(

            {

              boxClass:     'wow',      // animated element css class (default is wow)

              animateClass: 'animated', // animation css class (default is animated)

              offset:       0,          // distance to the element when triggering the animation (default is 0)

              mobile:       true,       // trigger animations on mobile devices (default is true)

              live:         true,       // act on asynchronously loaded content (default is true)

            }

          );

          wow.init();  

</script>

<?php } ?>



<?php //if ($frontPageName=="index.php" || $frontPageName=="pharmacy.php" || $frontPageName=="patient-how-it-works.php" || $frontPageName=="pharmacy-how-it-works.php" || $frontPageName=="faqs-for-patients.php" || $frontPageName=="faqs-for-pharmacies.php") { ?>

 <script type="text/javascript">

  	$('.owl-carousel-4').owlCarousel({

    loop:true,

    margin:20,

    responsiveClass:true,

    autoplay:true,

    autoplayTimeout:2000,

    responsive:{

        0:{

            items:2,

            nav:false

        },

        600:{

            items:2,

            nav:false

        },

        1000:{

            items:3,

            nav:false,

            loop:true

        }

    }

})



<?php //} ?>





//   	$('.navbar-nav li.dropdown').hover(function() { 

//   $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);

// }, function() {

//   $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);

// });  

  </script>

  

  <script language="javascript">

  function viewCondition(id)

  {

	  $("#showmore_"+id).hide();

	  $("#treat_"+id).show();

  }





  // Select the header element

const header = document.getElementById('header');



// Add an event listener for scrolling

window.addEventListener('scroll', () => {

  if (window.scrollY > 50) {  // Check if scrolled down 50px

    header.classList.add('scrolled');  // Add class

  } else {

    header.classList.remove('scrolled');  // Remove class

  }

});

// Function to check if screen width is less than 767px
function isSmallScreen() {
  return window.innerWidth < 991; 
}

// Function to handle the submenu functionality for smaller screens
function handleMenu() {
  const menuItems = document.querySelectorAll('.navbar-nav.bottom .nav-item');
  const backButton = document.createElement('button');
  backButton.classList.add('back-btn');
  backButton.textContent = 'Back';

  // Function to show submenu and hide other menu items
  function showSubMenu(menuItem) {
    // Hide all menu items except the clicked one
    menuItems.forEach(item => {
      if (item !== menuItem) {
        item.classList.add('hide-menu'); 
      }
    });

    // Show the submenu of the clicked item
    const submenu = menuItem.querySelector('.mobile_only .dropdown-menu');
    if (submenu) {
      submenu.style.display = 'block';
      menuItem.appendChild(backButton);
      backButton.style.display = 'inline-block';
      
      // Add class to the .nav-item.dropdown when submenu is shown
      const dropdownItem = menuItem.closest('.nav-item.dropdown');
      if (dropdownItem) {
        dropdownItem.classList.add('submenu-active');
      }
    }
  }

  // Function to hide submenu and show all menu items
  function hideSubMenu() {
    menuItems.forEach(item => {
      item.classList.remove('hide-menu');
      const submenu = item.querySelector('.mobile_only .dropdown-menu');
      if (submenu) {
        submenu.style.display = 'none';
      }
    });

    // Hide the back button
    backButton.style.display = 'none';

    // Remove the class from .nav-item.dropdown
    document.querySelectorAll('.nav-item.dropdown').forEach(item => {
      item.classList.remove('submenu-active');
    });
  }

  // Add event listener to each menu item for smaller screens
  menuItems.forEach(menuItem => {
    const link = menuItem.querySelector('.navbar-nav.bottom .nav-item .nav-link.dropdown-toggle');
    if (link) {
      link.addEventListener('click', function (event) {
        event.preventDefault();
        const submenu = menuItem.querySelector('.mobile_only .dropdown-menu');
        if (submenu) {
          // If submenu is visible, hide it; otherwise, show it
          if (submenu.style.display === 'block') {
            submenu.style.display = 'none';
            backButton.style.display = 'none';
            menuItems.forEach(item => item.classList.remove('hide-menu'));
          } else {
            showSubMenu(menuItem);
          }
        }
      });
    }
  });

  // Add event listener to the back button to go back to the main menu
  backButton.addEventListener('click', function () {
    hideSubMenu();
  });
}

// Function to re-apply or remove the submenu functionality based on screen width
// function updateMenuBehavior() {
  if (isSmallScreen()) {
    // Apply the submenu functionality if the screen width is less than 767px
    handleMenu();
  } else {
    // Remove any previously applied submenu functionality if the screen is larger
    const backButton = document.querySelector('.back-btn');
    if (backButton) {
      backButton.remove();
    }
    document.querySelectorAll('.navbar-nav.bottom .nav-item').forEach(item => {
      item.classList.remove('hide-menu');
      const submenu = item.querySelector('.mobile_only .dropdown-menu');
      if (submenu) {
        submenu.style.display = 'none';
      }
    });
    // Remove the class from .nav-item.dropdown when resizing
    document.querySelectorAll('.nav-item.dropdown').forEach(item => {
      item.classList.remove('submenu-active');
    });
  }
// }

 
// document.addEventListener('DOMContentLoaded', function () {
//   updateMenuBehavior();

 
//   window.addEventListener('resize', function () {
//     updateMenuBehavior();
//   });
// });



  </script>





  </body>

</html>