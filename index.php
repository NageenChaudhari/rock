<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include 'nav.php';  ?>
    <div class="container">
    <button class="btn btn-success mt-4" onclick="fun()">buy view detial</button>
    <button class="btn btn-success mt-4" onclick="funn()">Sell view detial</button>
       
<div class="row">
<div class="col-sm-12 border border-3">
    <!--<table id="mytable">
    </table> -->
<script>
function fun(){
    location.href = "viewbuy.php";
}
function funn(){
    location.href = "viewsold.php";
}
    </script>


</div>
</div>
<div class="row mt-4">
<div class="col-sm-3">
<div class="card bg-success text-light ">
<h4 class="card-title text-center">Total Profite</h4>
<div class="card-body bg-white">
    <h5 class="card-title text-dark text-center"><?php include 'totalprofit.php'; ?></h5>
    </div>
  </div>
</div>
<div class="col-sm-3">
<div class="card bg-primary text-light ">
<h4 class="card-title text-center">Total Buy Car</h4>
<div class="card-body bg-white">
<h5 class="card-title text-dark text-center"><?php include 'totalbuy.php'; ?></h5>
    </div>
  </div>
</div>
<div class="col-sm-3">
<div class="card bg-primary text-light ">
<h4 class="card-title text-center">Total Sell Car</h4>
<div class="card-body bg-white">
<h5 class="card-title text-dark text-center"><?php include 'totalsell.php'; ?></h5>
    </div>
  </div>
</div>

<div class="col-sm-3">
<div class="card bg-danger text-light ">
<h4 class="card-title text-center">Hold Car</h4>
<div class="card-body bg-white">
<h5 class="card-title text-dark text-center"><?php include 'holdcar.php'; ?></h5>
    </div>
  </div>
</div>

</div>
<div class="row mt-4">
<div class="col-sm-3" >

    <div class="card mx-4" >
<img src="hundai.jpg" height="200px"  class="card-img-top">
<div class="card-body">
    <h5 class="card-title">hyundai </h5>

</div>
    </div>    
</div>

<div class="col-sm-3">

    <div class="card mx-4">
<img src="tata.jpg"  height="200px" class="card-img-top">
<div class="card-body">
    <h5 class="card-title">Tata cars</h5>


</div>
    </div>    
</div>

<div class="col-sm-3">

    <div class="card mx-4">
<img src="maruti.jpg"  height="200px" class="card-img-top">
<div class="card-body">
    <h5 class="card-title">Maruti Suzuki</h5>


</div>
    </div>    
</div>

<div class="col-sm-3">

    <div class="card mx-4">
<img src="mahindra.jpg"  height="200px" class="card-img-top">
<div class="card-body">
    <h5 class="card-title">Mahindra car</h5>


</div>
    </div>    
</div>

</div>

    </div>
    <nav class="bg-dark text-light mt-4">
   <div class="container-fluid">
<p style="text-align:center">used car selled at Sai auto conslatant</p>
   </div>
   </nav>
</body>
</html>