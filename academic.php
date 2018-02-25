<html>
<head>
	<title>Academic | Sanskar R S School</title>
	<link rel="icon" href="img/logo.png" />
	
	<link href="css/skul.css" rel="stylesheet"/>
	<link href="css/jquery.bxslider.css" rel="stylesheet"/>
	<meta name="viewport" content ="width= device-width, initial-scale= 1">
	<meta name="description" content="Sanskar R S School is a bright and shining star in the galaxy of schools. The educational philosophy at SANSKAR R.S SCHOOL does not prejudice the thinking of children with preset ideas." />
	<meta name="keywords" content="Sanskar R.S School, Sanskar, School, Umesh, Sudhanshu, Aditya, Suman, MNgo, shadows, Bihar Sharif" />
	<meta name="author" content="metatags generator">
	<meta name="robots" content="index, follow">
	<meta name="revisit-after" content="3 month">
	<!-- Sanskar R.S School, Bihar Sharif,  Aditya Suman -->
	
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
	
<!-------------about page background------------>
	<img id="about_back" src="img/acad.jpg"/>
	
<!-------ajax loader---->
	<div class="ajax_box">
	</div>
	
	<div class="ajax_back">
	</div>
	<br><br><br><br>
	
<!-------academic-------->

	<h1 id="results_head">Result Section</h1>
	<div id="results">
		<div class="res_input">
			Class:  <select id="res_class">
					  <option value="play">Play</option>
					  <option value="nur">Nursery</option>
					  <option value="kg">KG</option>
					  <option value="one">1</option>
					  <option value="two">2</option>
					  <option value="three">3</option>
					  <option value="four">4</option>
					  <option value="five">5</option>
					  <option value="six">6</option>
					  <option value="seven">7</option>
					  <option value="eight">8</option>
					  <option value="nine">9</option>
					  <option value="ten">10</option>
					</select>
			
			Section:  <select id="res_sec">
						<option value="a">A</option>
						<option value="b">B</option>
						<option value="c">C</option>
					</select>
			Roll: <input id="res_roll" type="text"/>
			
			<input id="res_show" type="button" value="Submit"/>

			<script type="text/javascript">
				$('#res_show').click(function()
				{
					$('#disp_res').css('display','block');

					var res_class = $('#res_class option:selected').val();
					var res_sec = $('#res_sec option:selected').val();

					res_roll = $('#res_roll').val();
					//alert(res_roll);

					table_name= res_class + "_" +res_sec;
					
					$.post('php/results_db_cname.php', {table_name:table_name}, function(data)
					{
						$('#disp_cname').html(data);
					});


					$.post('php/results_db_data.php', {table_name:table_name, res_roll:res_roll}, function(data)
					{
						$('#disp_data').html(data);
					});


				});

			</script>
		</div>
		<br><br>

		<div id="disp_res">
			<div id="disp_cname">
			</div>

			<div id="disp_data">
			</div>
			<br><br>

			<span style="float: right; font-size: 80%">
				database management system powered by <a style="color:#343434 ; text-decoration: none;" target="_blank" href="http://mngo.in">MNgo</a>
			</span>
		</div>
		<br>

		<div>
			<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- sans5 -->
			<ins class="adsbygoogle"
			     style="display:block"
			     data-ad-client="ca-pub-2635984268902052"
			     data-ad-slot="3606096036"
			     data-ad-format="auto"></ins>
			<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
			</script>
		</div>

	</div>

	<h1 id="rules_head">Rules and Regulations</h1>
	<ul id="rules">
		<div class="zoom_entry">
			<li>Students should address their teachers and all the members of the staff with respect and politeness. They are expected to behave in a gentle manner. They should show respect and politeness to their companion too.</li>
			
			<li>Students who have been absent from class must have the reason for their absence noted into their "Regularity Record". No leave is given without any prior information in writing from the guardian. Grant of leave is entirely up to the Principal.
			No low waist (skirts / trousers) are permitted.Student will refrain from littering and keep the school premises clean</li>
			
			<li>Any unauthorized absence exceeding fifteen calendar days, the defaulter's name will be struck offthe roll and considered withdrawn. No book, periodicals or newspapers of an objectionable nature shall be brought into the school.</li>
			
			<li>Parents and guardians are not allowed to see their children or interview teachers during school hours.</li>
			
			<li>There is no provision for "Reassessment or Promotion on trial".</li>
			
			<li>In all questions Concerned with promotion or failure the Principal's decision is final.</li>
		
			<li>Parent can meet teachers only during parent teacher meetings or on Saturdays. Meetting teachers during school hours is strictly prohibited.</li>
			
			<li>Admission to the school is totally at discretion ofthe management.</li>
			
			<li>Candidates will be listed in the standard after going through an admission test to which they seek admission.\Before withdrawing a student from the school one month's notice should be given and one month's fee in lieu of notice.</li>
			
			<li>NO TRANSFER CERTIFICATE OR LEAVING CERTIFICATE will be issued until all the diaes of the school have been paid in full, with a written application frot., parent or guardian.</li>
			
			<li>The TRANSFER CERTIFICATE will be given free of charge if taken immediately, otherwise, a SEARCH fee of Rs. 250/- will be charge.</li>
			
			<li>NOT WITHSTAND NG ANYTHING IN THIS PROSPECTUS, THE PRINCIPAL MAY AT HIS ABSOLUTE DISCRETION ASK ANY PARENT AT ANY TIME TO TAKE HIS/HER WARD OUT OF THE SCHOOL SHOWING VALID REASONS.</li>
			
			<li>The school fees cover twelve calendar months and may be paid in monthly installments or in advance. Pupils are liable to be charged full fees as long as their names are officially in the record.</li>
		</div>
	</ul>

	<h1 id="extra_head">Extra Curricular Activities</h1>
	<div id="extra">
		<div class="zoom_entry">
			In order to let children exhibit their talent varied opportunities are provided viz.
			<br>
			(a) Class play 
			<br>
			(b) Debates 
			<br>
			(c) Dramatics 
			<br>
			(d) Art and craft 
			<br>
			(e) Cultural shows
			<br>
			Children are also encourages to read voraciously, for which the school, has well equipped library. Children are also
			taken on excursions and picnic, from time to time. All the children are encouraged to take part in both indoor and outdoor
			games, Mass P.T. is a daily feature in school. The curriculum has been framed and the teaching process put into effect in
			such a way that every children receives individual attention. The children are encourage in every possible way to get themselves
			involved in the exciting adventure of learning experience through the triple media of discussion, enquiry and experiment.	
		</div>

		<div>
			<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- sans8 -->
			<ins class="adsbygoogle"
			     style="display:block"
			     data-ad-client="ca-pub-2635984268902052"
			     data-ad-slot="5471865561"
			     data-ad-format="auto"></ins>
			<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
			</script>
		</div>
	</div>
		
	<h1 id="lab_head">Laboratory and Computer Lab Rules</h1>
	<ul id="lab">	
		<div class="zoom_entry">
			<li>Enter the laboratory/computer lab with prior permission of respective Lab Teacher.</li>
		
			<li>Maintain silence in the laboratory/computer lab.</li>
		
			<li>Do not touch any equipment or chemical or computer without teacher's permission. </li>
		</div>
	</ul>
	
	<h1 id="faculty_head">Our Faculity</h1>
	<div id="faculty">
		<div class="zoom_entry">
			Professionally competent, dedicated and committed faculty providers the necessary support. The teachers here are like second mothers, 
			loving, caring and devoted , capable of providing the environment for an all round development.
		</div>
	</div>
	
	<!--<h1 id="medical_head">School Medical Service</h1>
	<div id="medical">
		The school doctor visits the School from time to time. Regular checks are made of Teeth and physical check up 
		of the child and notified to parents in school report.
	</div>-->
	
	<h1 id="adm_head">Admission Process</h1>
	<div id="adm">
		<div class="zoom_entry">
			For admission in any section (Primary,Middle,Secondary) student have to go through a test. 
			Admission is strictly on the basis of marks obtained in admission test. Documents are also required at the time of Admission. 
			<ul>
				<li>Class Play /Nursery
					<ol>
						<li>Copy of Birth Certificate.</li>

						<li>Passport size colour photograph with name of candidates printed on it. </li>
					</ol>
				</li>
				<li>Class KG to Class IX:
					<ol>
						<li>Copy of progress report ofprevious school. </li>

						<li>Copy of Birth Certificate. </li>

						<li>Passport size colour photograph with name of candidates printed on it. </li>
						
						<li>Original T.C. ofprevious School.</li>
					</ol>
				</li>
			</ul>
			
			<h4>For more details visit the school from 9 AM to 3 PM.</h4>
		</div>
	</div>
		
	<h1 id="uniform_head">Uniform System</h1>
	<div id="uniform">
		<div class="zoom_entry">
			<h2>Monday To Thursday</h2>
			<img src="img/Mon-Thurs.jpg"/>
			<br><br>
			
			<h2>Friday To Saturday</h2>
			<img src="img/Fri-Sat.jpg"/>
		</div>
	</div>

	<div>
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<!-- sans7 -->
		<ins class="adsbygoogle"
		     style="display:block"
		     data-ad-client="ca-pub-2635984268902052"
		     data-ad-slot="6239110188"
		     data-ad-format="auto"></ins>
		<script>
		(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
	</div>
	
	
<!-------------footer---------->
	<div class="footer">
	
		<div class="quotes">
			<h2>An Insight</h2>
			<hr>
					<!--
					Education is what remains after one has forgotten everything he learned in school.
					<br><br>
					School is a building which has four walls with tomorrow inside.
					<br><br>
					Our school is a blueprint for the new generation, accurate, specific and a blend of Indian values reinforced by
					our global experience acquired over the years.
					-->
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
	<script type="text/javascript">
				
	/*----------entering animation of academic page-----*/
		$(document).scroll(function()
		{
			var posn_acad = $(document).scrollTop();
			
			
			var posn_rules = $('#rules div').offset().top/4;
			
			if(posn_acad > posn_rules)
			{
				$('#rules div').removeClass('zoom_entry');
			}
			
			
			var posn_extra = $('#extra div').offset().top/1.5;
			
			if(posn_acad > posn_extra)
			{
				$('#extra div').removeClass('zoom_entry');
			}
			
			
			var posn_lab = $('#lab div').offset().top/1.4;
			
			if(posn_acad > posn_lab)
			{
				$('#lab div').removeClass('zoom_entry');
			}
			
			
			var posn_faculty = $('#faculty div').offset().top/1.3;
			
			if(posn_acad > posn_faculty)
			{
				$('#faculty div').removeClass('zoom_entry');
			}
			
			
			var posn_adm= $('#adm div').offset().top/1.2;
			
			if(posn_acad> posn_adm)
			{
				$('#adm div').removeClass('zoom_entry');
			}
			
			
			var posn_uniform= $('#uniform div').offset().top/1.2;
			
			if(posn_acad> posn_uniform)
			{
				$('#uniform div').removeClass('zoom_entry');
			}
		});
	</script>
	
	<script type="text/javascript" src="js/skul.js"></script>
	
</body>
</html>