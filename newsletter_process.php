<?php
$name=$_POST["name"];
$email=$_POST["email"];
?>
<script type="text/javascript">var name_cookies = "<?= $name ?>";</script>

<script src="https://cdn.jsdelivr.net/npm/js-cookie@3.0.5/dist/js.cookie.min.js"></script>


<script type="text/javascript" src="script_cookies.js"></script>

<form id="form" action="message.php?message=Thanks%for%singing%up!.php" method="post" autocomplete="off"enctype="multipart/form-data">
<input type="hidden" name="name" id="name" value="<?=$name?>">
<input type="hidden" name="email" id="email" value="<?=$email?>">
</form>
<script type="text/javascript">
    document.getElementById('form').submit(); // SUBMIT FORM
</script>
<?php
   

?>

