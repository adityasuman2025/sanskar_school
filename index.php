<?php
	
	$ip = $_SERVER["REMOTE_ADDR"];
	date_default_timezone_set('Asia/Kolkata');
	$time = date ("H:i:s", time());
	$date = date ("d M Y", time());
	
	
	$handleip =fopen('ip.txt', 'a');
	$handlecnt= fopen('count.txt', 'r');
	$currentcnt= fread($handlecnt, 1342177);
	fwrite($handleip, "$currentcnt :---> \t \t $ip  \t \t Time :--> \t $time \t \t Date:--> \t $date \n");
	
	
	$newcnt= $currentcnt + 1;
	$handlecnt= fopen('count.txt', 'w');
	fwrite($handlecnt, $newcnt);
?>

<html>
<head>
	<title>Sanskar R S School</title>
	<meta name="viewport" content ="width= device-width, initial-scale= 1">
	<meta name="description" content="Sanskar R S School is a bright and shining star in the galaxy of schools. The educational philosophy at SANSKAR R.S SCHOOL does not prejudice the thinking of children with preset ideas." />
	<meta name="keywords" content="Sanskar R.S School, Sanskar, School, Umesh, Sudhanshu, Aditya, Suman, MNgo, shadows, Bihar Sharif" />
	<meta name="author" content="metatags generator">
	<meta name="robots" content="index, follow">
	<meta name="revisit-after" content="3 month">
	<!-- Sanskar R.S School, Bihar Sharif,  Aditya Suman -->
	
	<link rel="icon" href="img/logo.png" />
	
	<link href="css/skul.css" rel="stylesheet"/>
	<link href="css/jquery.bxslider.css" rel="stylesheet"/>
	
	<script type="text/javascript" src="js/jquery.js"></script>

	<!--google adds------>
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
      (adsbygoogle = window.adsbygoogle || []).push({
        google_ad_client: "ca-pub-2635984268902052",
        enable_page_level_ads: true
      });
    </script>

	
</head>
<body>
	
<!---preloader-------->
	<div class="preloader">
	</div>
	<script type="text/javascript">
		$('.preloader').load('shadows.html');	
	</script>
	
	
<!---computer menu_bar---------->
	<div class="menu_bar">
		<img class="title_bar_logo" src="img/logo.png"/>
		
		<ul id="menu">
			<li id="menu_li"><a href="index.php">HOME</a></li>
			<li id="menu_li"><a href="about.html">ABOUT US</a></li>
			<li id="menu_li"><a href="gallery.html">GALLERY</a></li>
			<li id="menu_li"><a href="academic.php">ACADEMIC</a>
				<ul id="menu_li_ul">
					<li><a href="academic.php#results_head">Result Section</a></li>
					<li><a href="academic.php#rules_head">Rules & Regulations</a></li>
					<li><a href="academic.php#extra_head">Extra Curricular Activities</a></li>
					<li><a href="academic.php#lab_head">Library & Labs</a></li>
					<li><a href="academic.php#faculty_head">Faculty</a></li>
					<li><a href="academic.php#adm_head">Admission Process</a></li>
					<li><a href="academic.php#uniform_head">Uniform System</a></li>
				</ul>
			</li>
			<!--<li class="notes_button" id="menu_li"><a>Note</a></li>-->
			<li id="menu_li"><a href="contact.php">CONTACT US</a></li>
		</ul>
		
	</div>
	
<!---mobile menu_bar---------->
	<div class="mob_menu_bar">
		<img class="mob_bar_logo" src="img/logo.png"/>
		
		<div class="mob_menu_nav">
			<img class="mob_menu_pic" src="img/menu_mob.png">
		</div>
		
	</div>

	<ul class="mob_menu visib">
		<li><a href="index.php">Home</a></li>
		<li><a href="about.html">About Us</a></li>
		<li><a href="gallery.html">Gallery</a></li>
		<li id="acad_button"><a>Academic ></a>
			<ul class="visib">
				<li><a href="academic.php#results_head">Result Section</a></li>
				<li><a href="academic.php#rules_head">Rules & Regulations</a></li>
				<li><a href="academic.php#extra_head">Extra Curricular Activities</a></li>
				<li><a href="academic.php#lab_head">Library & Labs</a></li>
				<li><a href="academic.php#faculty_head">Faculty</a></li>
				<li><a href="academic.php#adm_head">Admission Process</a></li>
				<li><a href="academic.php#uniform_head">Uniform System</a></li>
			</ul>
		</li>
		<!--<li class="notes_button" id="menu_li"><a>Note</a></li>-->
		<li><a href="contact.php">Contact Us</a></li>
	</ul>
	
		
<!--------school title---------->
	<div class="title">
		<img src="img/sanskar.png">
		<div>
			Municipal Corporation Reg. No = TLB00640/00/2016
			|
			School Code = 10270311105
		</div>
	</div>
	
<!--------school image slider---------->
	<div>
		<ul class="slider">
			<li><img src="img/banner/1.jpg"/></li>
			<li><img src="img/banner/2.jpg"/></li>
			<li><img src="img/banner/3.jpg"/></li>
			<li><img src="img/banner/4.jpg"/></li>
			<li><img src="img/banner/5.jpeg"/></li>
		</ul>
	</div>
	

<!--------ajax loader---------->		
	<div class="ajax_box">
	</div>
	
	<div class="ajax_back">
	</div>
	
<!-------index page content-------->

	<h1 class="skul_title top_entry">Welcome To SANSKAR R.S SCHOOL</h1>
	<br>
	
	<div class="skul bottom_entry">
		
		<img src="img/skul.jpg">
		<br>
		<div>
			The school is a co-education English medium CBSE School is situated in large area amidst quiet, peaceful, natural environment 
			and ideal for education. It is not only cater to the needs of the capital city but the country at large. It lays emphasis on 
			spiritual and moral education with secular base. In their striving for knowledge. Students are provided with ample opportunities 
			to develop their talents.
			<br>
			The aim of the school is to provide an existing & enthusiastic environment where innovativeness & creativity grow.
			As it suggests the school endeavors to provide international standard education (VIDYA) based on Indian cultural values 
			(SANSKAR) & upholding Indian traditions, synergising its rich cultural heritage with modern world.
			<br>
			The institution has a distinctive life style blending oriental and the modern with a rich fabric for our cultural heritage, 
			believing that the youth of the nation are trustees of its poserity. The object is to turnout young men and women with a 
			keen sense of discipline and responsibility, initiative and self reliance, intergrity and loyality reinforced by patriotism 
			and pratical based on normal values.
		</div>
	</div>
	<br>
	
	<div>
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<!-- sans1 -->
		<ins class="adsbygoogle"
		     style="display:block"
		     data-ad-client="ca-pub-2635984268902052"
		     data-ad-slot="3615858412"
		     data-ad-format="auto"></ins>
		<script>
		(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
	</div>

	<div class="direct_msg right_entry">
		<h2>From the Director's Desk</h2>
		<img src="img/director.jpeg"/>
		<div class="direct_cont">
			The role of this institution is to provide learning opportunities for children in the best possible way. The educational philosophy 
			at Sanskar R.S School does not prejudice the thinking of children with preset ideals. The school has an atmosphere of warmth, beauty 
			and creativity where children can flourish. We identify, nurture and enrich giftedness in each child through continuous 
			innovative learning to bring out the best in him/her. We treat our young pupils as individuals and aim for them to develop 
			competence and resourcefulness, social conscience, moral courage and true zest for life.
		</div>
	</div>
	<br>
	
	<div class="prin_msg left_entry">
		<h2>From the Principal's Desk</h2>
		<img src="img/principal.jpg"/>
		<div class="prin_cont">
			The aim of the school is to help the child for harmonious development and to explain the talents and powers og his/her personal 
			nature to provide intincts to create favourable condition for the free expression of his/her ideas or interest and to provide 
			favourable environment for all around development of the child.
			<br>
			The institute has a distinctive life style blending oriental and the modern with a rich fabric for our cultural heritage, believing 
			that the youth of the nation are trustees of its posterity.
		</div>
	</div>
	<br>
	
	<div>
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<!-- sans2 -->
		<ins class="adsbygoogle"
		     style="display:block"
		     data-ad-client="ca-pub-2635984268902052"
		     data-ad-slot="7088199568"
		     data-ad-format="auto"></ins>
		<script>
		(adsbygoogle = window.adsbygoogle || []).push({});
		</script>

	</div>

	<div class="disc top_entry">
		<h2>Discipline of the school</h2>
		<div class="disc_cont">
			Every student must abide the discipline of the school regarding punctuality in school, uniform, performance level, school work, 
			transport, general behaviour, courtesy and payment od dues.
			<br>
			No damage in any way be caused to the school property and every student is expected to maintain it.
			Every student is expected to obeserve and maintain discipline whether be in morning assembly, in classrooms, in playground, in library. It 
			must be seen and reflected in every walk and talk that the HIGH STANDARDS OF THE INSTITUTE ARE MAINTAINED.
		</div>
	</div>
	<br>
	
	<div id="notes" class="top_entry">
		<h2>Importanat notes for guardians</h2>

		Special attention is given to the students to ensure a high Standard of morality, discipline and wholesome development.
		<br>
		Parents and guardians are requested to co-operate the school authorities. 
		<br><br>
		. By instructing their wards to be regular and punctual in attendance. 
		<br>
		. By seeing that their wards are diligent at their home work and lessons. 
		<br>
		. By insisting on neatness and cleanliness in their text book, exercise. 
		<br>
		. Books and personal appearance. 
		<br>
		. By occasionally interviewing the Principal to discuss the progress of their ward/wards. 
		<br><br>

		<h2>Regulatory Record</h2>
		
		<u>Absence in class</u> :- Staying away from school without leave is not tolerated except when the cause 
		is illness or unforeseen circumstances. After an absence from class, he/she must bring the reasons duly entered and 
		signed by the guardian in the regularity record. Nat-he of the pupils who have been absent from the school for a considerable 
		period without permission are liable to the struck off the roll and may not be re-admitted.
	</div>
	<br>
	<div>
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<!-- sans3 -->
		<ins class="adsbygoogle"
		     style="display:block"
		     data-ad-client="ca-pub-2635984268902052"
		     data-ad-slot="4490914241"
		     data-ad-format="auto"></ins>
		<script>
		(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
	</div>
	
	<!--div id="quotes">
		<div>
		</div>
		<li>.</li>
		<li>
			
		</li>
		<li>There is no elevator to success. You have to take the stairs.</li>
	</div-->
	
<!-------------footer---------->
	<div class="footer">
	
		<div class="quotes">
			<h2>An Insight</h2>
			<hr>
			The educational philosophy at SANSKAR R.S SCHOOL does not prejudice the thinking of children with preset ideas and is to provide learning 
			opportunities for the children in the best possible way. 
			The aim of the school is to help the child for harmonious development and to explain the talents and powers of his/her personal 
			nature to provide instincts to create favourable condition for the free expression of his/her ideas or interests.
			<br><br>
		</div>
		
		<div class="address">
			<h2>Contacts</h2>
			<hr>
			Sanskar R.S School
			<br>
			Bihar Sharif - 803118, Nalanda
			<br>		
			Bihar
			<br>
			Mobile: +91-9905205599
			<br>
			Email: contact@sanskarschools.in 
			<br>
			Website: sanskarschools.in
		</div>
		
		<div class="web_address">
			<h2>Follow Us</h2>
			<hr>
			<p><a href="https://www.facebook.com/Sanskarrsschool/" target="_blank"> <img src="img/facebook.png"> Facebook </a></p>
			
			<p><a href="#" target="_blank"> <img src="img/twitter.png"> Twitter </a></p>
		</div>
		
	</div>
	
	<div class="final_footer">
			<span>copyright &copy 2017 Sanskar R.S School | </span>
			
			All Right Reserved | 
			
			<span id="mngo">site designed and developed by: <a class="aditya_sign" target="_blank" href="http://www.mngo.in/aditya.php">Aditya Suman</a></span>
	</div>
	
	
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.bxslider.js"></script>
	<script type="text/javascript" src="js/skul.js"></script>
	<script type="text/javascript">
		/*-----slideshow---*/
		$('.slider').bxSlider(
		{
			mode: 'horizontal',
			auto: true
		});
		
		$(window).on('load', function()
			{ 
				$('.preloader').delay(1000).slideUp('slow'); // will fade out the white DIV that covers the website. 
			});
			
	</script>
</body>
</html>

<?php
	fclose($handlecnt);
	fclose($handleip);	
?>