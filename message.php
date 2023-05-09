<?php require_once 'includes/head.php';
if(isset($_GET['message'])){
    $message = $_GET['message'];
}
else{
	$message="Something went wrong";
}

require_once 'includes/navtop.php';
?>
		<div class="standard">
			<h1>Message:</h1>
		<div class='box'>
			<h6>Thanks for signing up!</h6> 
</div>
</div>
<?php require_once 'includes/footer.php';?> 