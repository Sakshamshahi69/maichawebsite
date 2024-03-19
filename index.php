<?php 
include 'setting.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>purchase</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
<div class="card" style="width:500px">
    <img src="pay.png" alt="" class="card-img-top" >
    <div class="card-body">
        <div class = "card-title">Safe and sound</div>

    </div>

</div>


<form action="https://uat.esewa.com.np/epay/main" method="POST">
    <input value="100" name="tAmt" type="hidden">
    <input value="90" name="amt" type="hidden">
    <input value="5" name="txAmt" type="hidden">
    <input value="2" name="psc" type="hidden">
    <input value="3" name="pdc" type="hidden">
    <input value="EPAYTEST" name="scd" type="hidden">
    <input value="<?php echo $pid ?>" name="pid" type="hidden">
    <input value="http://merchant.com.np/page/esewa_payment_success?q=su" type="hidden" name="su">
    <input value="http://merchant.com.np/page/esewa_payment_failed?q=fu" type="hidden" name="fu">
    <input value="Pay via esewa" type="submit" class="btn btn-primary" style=" cursor: pointer;
    font-weight: bolder;
    color: #ffffff;
    padding: 10px 25px;
    border: 1px solid #fff7f7;
    background-color: greenyellow;
    border-radius: 30px;
    transition: 0.3s;">
    </form>


 <!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>   
</body>
</html>