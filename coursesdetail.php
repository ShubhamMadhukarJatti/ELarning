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
<!----Start course page banner C----->
<div class="container-fluid bg-dark">
<div class="row">
<img src="./image/imges1.jpg"alt="courses"
style="height:500px; width:100%; object-fit:cover;
box-shadow:10px;"/>
</div>
</div>
<!----start main content ----->
<div class="container mt-5">
  <div class="row">
    <div class="col-md-4">
    <img src="./image/images.jpg"class="card-img-top"alt="Guitar"/>
    </div>
      <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Course Name:Learn Guitar Easy Way</h5>
        <p class="card-text">Description:Lorem ipsum dolor sit amet
        consectetur adipisicing elit.Nostrum,provident.</p>
        <p class="card-text">Duration:10 Days</p>
        <form action=""method="post">
  <p class="card-text d-inline">Price: <small><del>&#8377 2000</del></small><span
class="font-weight-bolder">&#8377 200<span></p>
<button type="submit"class="btn btn-primary text-white
font-weight-bolder float-right"name="buy">Buy Now</button>
</form>
</div>
</div>
</div>

<div class="container">
<div class="row">
<table class="table table-bordered table-hover">
<thead>
<tr>
<th scope="col">Lesson No.</th>
<th scope="col">Lesson Name</th>
</tr>
</thead>
<tbody>
<tr>
<th scope="row">1</th>
<td>Introduction</td></tr>
</tbody>
</table>
</div>
</div>
<!-------start Include footer---->
<?php
include('./mainInclude/footer.php');
?>
<!-------end Include footer---->
