<!DOCTYPE html>
<html>
<head>
	<title>Kibet mutai</title>
	<link rel="stylesheet" type="text/css" href="style.css">

	<link rel="preconnect" href="https://fonts.gstatic.com">
  	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
	<!----hero Section start---->

	<div class="hero">
		<nav>
			<h2 class="logo">Ki<span>bet</span></h2>
			<ul>
				<li><a href="">Home</a></li>
				<li><a href="#">About</a></li>
				<li><a href="projects.php">Services</a></li>
				<li><a href="#">Skills</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
			<a href="resume.pdf" class="btn">Download resume</a>
		</nav>

		<div class="content">
			<h4>Hello, my name is</h4>
			<h1>Kibet <span>Mutai</span></h1>
			<h3>I'm a Backend Developer proficient in Python, Django, PHP and Laravel Web framework.</h3>
			<div class="newslatter">
				<form>
					<input type="email" name="email" id="mail" placeholder="Enter Your Email">
					<input type="submit" name="submit" value="Mail Me">
				</form>
			</div>
		</div>
	</div>

	<!----About section start---->
	<section class="about">
		<div class="main">
			<img src="images/black-background-free-wallpaper-for-computer-neon-silhouette-of-wolf-head-in-blue-and-green.jpg">
			<div class="about-text">
				<h2>About Me</h2>
				<h5>Developer <span>& Data Science</span></h5>
				<p>I am a back-end web developer. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem, saepe?</p>
				<button type="button">Let's Talk</button>
			</div>
		</div>
	</section>

	<!-----service section start----------->
	<div class="service">
		<div class="title">
			<h2>projects</h2>
		</div>

		<div class="box">
			<div class="card">
				<i class="fas fa-bars"></i>
				<h5>Laravel</h5>
				<div class="pra">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At molestias consequuntur praesentium, assumenda et mollitia.</p>

					<p style="text-align: center;">
						<a class="button" href="github.com/Kibet-mutai">Read More</a>
					</p>
				</div>
			</div>

			<div class="card">
				<i class="far fa-user"></i>
				<h5>Rental Cars</h5>
				<div class="pra">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum ipsa perspiciatis maiores, dicta provident esse?</p>

					<p style="text-align: center;">
						<a class="button" href="github.com/Kibet-mutai">Read More</a>
					</p>
				</div>
			</div>

			<div class="card">
				<i class="far fa-bell"></i>
				<h5>Library system</h5>
				<div class="pra">
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id corrupti possimus cumque autem explicabo ipsum.</p>

					<p style="text-align: center;">
						<a class="button" href="github.com/Kibet-mutai">Read More</a>
					</p>
				</div>
			</div>
		</div>
	</div>

	<!------Contact Me------>
	<div class="contact-me">
		<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas, veniam.</p>
		<a class="button-two" href="#">Hire Me</a>
	</div>

	<!------footer start--------->
	<footer>
		<p>Kibet Mutai</p>
		<p>Lorem ipsum dolor sit amet.</p>
		<div class="social">
			<a href="#"><i class="fab fa-facebook-f"></i></a>
			<a href="github.com/Kibet-mutai" target="_blank" ><i class="fab fa-github"></i></a>
			<a href="twitter.com/@its_floki" target="_blank"><i class="fab fa-twitter"></i></a>
			<a href="#"><i class="fab fa-whatsapp"></i></a>
		</div>
		<p class="end">CopyRight &copy By Mutai</p>
	</footer>
</body>
</html>