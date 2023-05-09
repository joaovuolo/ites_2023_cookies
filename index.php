<?php require_once 'includes/head.php';?>



<?php 
require_once 'includes/navtop.php';
?>

				<div class="home_bar">

					<h1>It and Society</h1>

					<h2> An analysis of contemporrary topics over what I have learned in this lecture </h2>

				</div>

				<div class='home'>

                <body style="font-family:roboto">
		<h3 id="greeting">Welcome to our website! Take a look at our new articles:</h3>
		<a href="article_1.php">
		<div class='box'>
			<h2>Privacy in the Internet Age</h2> 
			<p>Navigating the Complex Landscape of Online Privacy to Protect Personal Information and Empower Users</p>
			<div class="img">
<img src="images/article1.jpg">
</div>

		</div>
</a>
<a href="article_2.php">
<div class='box'>
			<h2>The Future of Work</h2> 
			<p>Embracing Technological Advancements and Shifting Paradigms for a New World of Work</p>
			<div class="img">
<img src="images/article2.jpg">
</div>
		</div>
</a>
<a href="article_3.php">
<div class='box'>
			<h2>The Metaverse</h2> 
			<p>Exploring the Boundless Potential and Ethical Considerations of a Virtual Universe</p>
			<div class="img">
<img src="images/article3.jpg">
</div>
		</div>
</a>
</body>
</div>         

				<?php require_once 'includes/footer.php';?> 
				<script>
var name_user = Cookies.get("name_user")
if(name_user){
	document.getElementById('greeting').innerHTML = "Welcome to our website, "+name_user+"! Take a look at our new articles:"
}
	</script>