<?php require_once 'includes/head.php';?>



<?php 
require_once 'includes/navtop.php';
?>
<div class="standard">
    <h1>Sign up to or newsletter!</h1>
<div class="box">
<p> Join our vibrant community and stay up-to-date with the latest insights, tips, and inspiration. Sign up for our blog newsletter today and unlock exclusive content delivered right to your inbox. </p>
<form action="newsletter_process.php" method="post" autocomplete="off"enctype="multipart/form-data">
<div class="all_line_middle">
			<input type="Text" name="name" id="name" placeholder="Name" required>
						</div>
<div class="all_line_middle">
			<input type="email" name="email" id="name" placeholder="Email" required>
						</div>

<input type="submit" value="Submit">
						
			</form>
            </div>
</div>
</body>
</div>


               

				<?php require_once 'includes/footer.php';?> 