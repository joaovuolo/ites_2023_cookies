<?php require_once 'includes/head.php';?>
<script src="https://cdn.jsdelivr.net/npm/js-cookie@3.0.5/dist/js.cookie.min.js"></script>
<script>
function accepted() {
    Cookies.set("accepted","true",{expires: 1});
    window.location = "index.php";
}   
</script>


<?php 
require_once 'includes/navtop.php';
?>
		<div class="accept">
		<div class="standard">
			<h1>Privacy statement </h1>
		<div class='box'>
			<h6>By accepting this statement, I declare to be aware that my IP Address, my active inpus (name and address) and my actions in this website are being collected and stored in a database. This information is being collected only for educational purposes and will be deleted right after the class.</h6> 
            <button type="button" onclick="accepted();">Accept</button>
</div>		
</div>
</div>				

