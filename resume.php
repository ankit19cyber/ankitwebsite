	<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Security-Policy" content="default-src 'self' 'unsafe-inline' fonts.googleapis.com cdnjs.cloudflare.com * ;">
    <meta http-equiv="X-Frame-Options" content="deny">
    <meta http-equiv="Strict-Transport-Security" content="max-age=63072000;">
    <meta http-equiv="X-Content-Type-Options" content="nosniff">
    <meta http-equiv="Feature-Policy" content="unoptimized-images self;">
    <meta name="referrer" content="no-referrer, strict-origin-when-cross-origin">
	<title>Resume</title>
	<link rel="stylesheet" type="text/css" href="css_style.css">
 	 	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body oncontextmenu = "return false;">
<?php 
ini_set("display_errors",0);
    // include('header.php');
$message = preg_replace('/[^-a-zA-Z0-9! _]/', '', $_GET['message']);
?>
	<div class="container">
		<aside>
			<img class="personal-img" alt="personal image"src="Corp_pp.jpg">
			<h2 class="person-name"> Reuben Matthew Janipalli</h2>
			<ul class="personal-details">
				<li> <i class="fas fa-user-tie"></i> IT Pre-sales and Solution Engineer</br></li>
				<li> <i class="fas fa-globe-asia"></i> Saskatoon, S7K 4T2</li>
				<li> <i class="fas fa-inbox"></i> reubenmatthew.j@gmail.com</li>
				<li> <i class="fas fa-phone"></i> +1-306-880-2963</li>
				<li> <i class="fa-brands fa-linkedin"></i> <a href=https://www.linkedin.com/in/reubenmatthewj> linkedin.com/reubenmatthewj </a></li>
			</ul>

			<hr>
			<h2 class="head-section"><i class="fa-solid fa-certificate"></i> Certifications</h2>
			<ul class="details-list">
				<li>
					Microsoft Certified Azure Fundamentals</li>
				<li>		
					Amazon Web Services Cloud Practioner</li>
				<li>Veeam Certified Engineer</li>
				
				</li>
			</ul>
			<hr>
			<h2 class="head-section"><i class="fas fa-language"></i> Languages </h2>
			<ul class="details-list">
				<li> 
				English
				</li>
				<li>
				Hindi				
				</li>
				<li>
				Telugu
				</li>
				
			</ul>
			<div  class="head-section">
				<h3>Please leave Contact Details</h3>
				<form action="submit.php" method="POST">
				<div class="form">
				<label>Name</label><br>
				<input type="text" name = "name" id="name">
				</div>
				
				<div class="form">
				<label>Email Address</label><br>
				<input type="text" name = "email" id="Email">
				</div>
				
				<div class="form">
				<label>Phone Number</label><br>
				<input type="text" name = "phone" id="Phone"><br>
				<button type="reset">Reset</button>
				<button type="Sumit" onclick="validation();">Submit</button>
				</div>
				</form>
                <div><p><?php if($message != ''){ echo $message; }?></p></div>
				</div>
		</aside>

		<main>
			<section id="first-section">
				<h2 class="head-section"><i class="fas fa-gem"></i> Skills & Abilities</h2>
				<div class="data-details">
				<ui  class="data-details">
					<li>Backup & Recovery, Presales/Solution Architect, Customer Advisor, Customer Success Story</li> 
					<li>Virtualization, Business Continuity, Whiteboard Storyteller, Cloud, Customer Relationship</li>
					<li>Customer training, Technical training</li>
					<li>Expert in convincing customers,proposing customer proper solution and seasoned presales engineer</b></li> 
					<li>Excellent oral and written communications</li>
					<li>Quick learner skilled in team building and leadership qualities</li>	
					<li>Experienced in working with management to achieve organizational goals</li>	
				</ui>	
				</div>
				

			<section id="second-section" >
				<h2 class="head-section"><i class="fas fa-briefcase"></i> Work Experience </h2>
				<div class="data-details">
					<h3>Freelancer Consultant</h3>
					<span><i class="fas fa-calendar-alt"></i> Jan 2021 - <span>Dec 2021</span></span>
									
					<h3>Sales Engineer / Veritas Technologies Pvt Ltd(Mumbai)</h3>
					<span><i class="fas fa-calendar-alt"></i> April 2020 - <span>Dec 2020</span></span>
						
					<h3>Sales Engineer / Veeam Software India Pvt Ltd(Mumbai)</h3>
					<span><i class="fas fa-calendar-alt"></i> Nov 2016 - <span> April 2020</span></span>
						
					<h3>Solution Architect / Frontier Business Systems Pvt Ltd(Mumbai)</h3>
					<span><i class="fas fa-calendar-alt"></i> Jan 2016 - <span>Nov 2016</span></span>
					
					<h3>Deputy Manager Pre-sales / Ingrammicro India Pvt Ltd Pvt Ltd(Mumbai)</h3>
					<span><i class="fas fa-calendar-alt"></i> Jan 2014 - <span>May 2015</span></span>
					
					<h3>Technical Support Engineer / Softcell Technologies Pvt Ltd(Mumbai)</h3>
					<span><i class="fas fa-calendar-alt"></i> July 2010 - <span>Dec 2013</span></span>
					
				</div>
			
			</section>

			<section>
				<h2 class="head-section"><i class="fas fa-user-graduate"></i> Education </h2>
				<div class="data-details">
					<h3>Post Graduation in Cyber-Security / Saskatchewan Polytechnic</h3>
					<span><i class="fas fa-calendar-alt"></i>Jan 2022 - <span>Dec 2022</span></span>
					
					<h3>Bachelor of Engineer in Information Technologies / University of Mumbai</h3>
					<span><i class="fas fa-calendar-alt"></i>June 2006 - <span>May 2010</span></span>
					
					<h3>HSC / Central Board of Secondary Education</h3>
					<span><i class="fas fa-calendar-alt"></i>April 2005 - <span>March 2006</span></span>
				
					<h3>SSC / Central Board of Secondary Education</h3>
					<span><i class="fas fa-calendar-alt"></i>April 2003 - <span>March 2004</span></span>
				</div>
			</section>
			<button type="button" onclick="displayDate();">Click for Date</button>
	<p id="showDate"></p>
	
	</div>
	


	<script>
	document.onkeydown = function(e) {
            if (e.ctrlKey && (e.keyCode === 67 ||e.keyCode === 85 || e.keyCode ===  73)) {
                return false;
            } else {
                return true;
            }
    };
    $(document).keypress("u",function(e) {
        if(e.ctrlKey){
         return false;
        }
        else{
            return true;
        }
    });

		function displayDate() {
		//	let date = datetime();
			document.getElementById("showDate").innerHTML = Date();
		}
		
		function validation(){
			var email = document.getElementById("Email").value;
			var emailRE = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
			var name = document.getElementById("name").value;
			var mobile = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/;
			var Phone = document.getElementById("Phone").value;
			
			if(name == ''){
				alert("Please add name!!");
				return false;
			} else if(mobile.test(Phone) == false){
				alert("Try Phone Number again!!");
				return false;
			} else if(emailRE.test(email) == false){
				alert("Try Email again!!");
				return false;
			}

		}
		

		</script>
		


	
</body>
</html>
