<!------start Include header---->
<?php
include('./mainInclude/header.php')
?>
<!-----end include header------>
<!-----Start Payment Page Banner------>
<div class="container-fluid remove-vid-marg">
    <div class="vid-parent">
        <video playinline autoplay muted loop>
            <source src="video/Thanku.mp4">
</div>
</div>
<!------End Payment page----->
<h1>Payment Status Page</h1>
<!----Start Main Content----->
<div class="container">
<h2 class="text-center my-4">Payment Status</h2>
<form method="post"action="">
<div class="form-group row">
<label class="offset-sm-3 col-form-label">Order ID: </label>
<div>
<input type="text"class="form-control mx-3">
</div>
<div>
<input type="submit"class="btn btn-primary mx-4"value="View">
</div>
</div>
</form>
</div>
<!----start contact us----->
<div  class="container">
<?php
include('./contact.php');
?>
</div>
<!-----end contact us--------->
<!-------start Include footer---->
<?php
include('./mainInclude/footer.php');
?>
<!-------end Include footer---->
