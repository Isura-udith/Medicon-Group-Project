<?php
session_start();
include("db.php");

if($_SERVER['REQUEST_METHOD']=="POST"){
	$Amount=$_POST['Amount'];
	$itemId=$_POST['itemId'];
	$cname=$_POST['cname'];
    $pnum=$_POST['pnum'];
    $address=$_POST['address'];
    $ZIP=$_POST['ZIP'];
    $cardNumber=$_POST['cardNumber'];
    

    $query="INSERT INTO payorder(Amount,itemId,cname,pnum,address,ZIP,cardNumber) values('$Amount','$itemId','$cname','$pnum','$address','$ZIP','$cardNumber')";

    if(!empty($Amount)&& !empty($itemId)&& !empty($pnum)){
       
        if(mysqli_query($con,$query)){
            echo"<script type='text/javascript'>alert('Sucsuessfully paid')</script>";
            
        }else{
            echo"<<script type='text/javascript'>alert('Error:". mysqli_error($con) ."')<script>";
        } 
       }else{
            echo"<script type='text/javascript'>alert('enter valid info')</script>";
        }
        
        }
        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="payment/colors.css">
    <link rel="stylesheet" href="payment/pay.css">
    <title>Payment Page</title>
</head>
<body>   
    <section class="payment-section">
        <div class="container">
        <form method="post" action="order.php"  class="payment-form">            
            <div class="payment-wrapper">           
                <div class="payment-left">
                    <div class="payment-header">
                        <div class="payment-header-icon"><i class="ri-flashlight-fill"></i></div>
                        <div class="payment-header-title">Medicon Helthcare Pharmasy Servise </div>    
                    </div>
                    <div class="payment-content">
                        <div class="payment-body">
                            <div class="payment-plan">
                                <div class="payment-plan-type">Item</div>
                                <div class="payment-plan-info">

                                <div class="payment-form-group">
                                
                            <input type="number" placeholder=" " class="payment-form-control" id="ZIP" name ="Amount">
                            <label for="Amount"  class="payment-form-label ">Amount Rs.</label>
                        </div>                                    
                                <select name="itemId" class="payment-form-control">
                                        <option value="">Selete item</option>
                                          <option value="d1">Omeo mouth ulcer Rs.200</option>
                                          <option value="d2">Bactimicina Rs.250</option>
                                          <option value="d3">Robitussin Rs.800 </option>
                                          <option value="d4">Trilyn Rs.1500 </option>
                                          <option value="d5">Aceclofenac & Paracetamol Rs.950</option>
                                          <option value="d6">Arnicare Rs.450</option>
                                          <option value="d7">Benadryl Allergy Rs.725</option>
                                          <option value="d8">Benadryl for kids Rs.300</option>
                                          <option value="d9">Dimetapp Rs.398</option>
                                          <option value="d10">Glimsmet-G3 Forte Rs.640</option>
                                          <option value="d11">Aceclofenac Rs.600</option>
                                          <option value="d12">Paracetamol Biogesic Rs320</option>
                                          <option value="d13">Soothing Gel Rs.150</option>
                                          <option value="d14">Cerave Rs.260</option>
                                          <option value="d15">Joint support Rs.200</option>
                                          <option value="d16">Crystone Rs.790</option>
                                    </select>
                                </div>
                            </div><br>
                        </div>
                    </div>                   
                </div>               
                <div class="payment-right">
                    
                        <h1 class="payment-title">Order confirmation</h1>
                        <div class="payment-method">
                            
                            <label for="method-1" class="payment-method-item">
                                <img src="payment/images/visa.png">
                            </label>
                            
                            <label for="method-2" class="payment-method-item">
                                <img src="payment/images/mastercard.png">
                            </label>
                        </div>
                        <div class="payment-form-group">
                            <input type="text" placeholder=" " class="payment-form-control" id="cname" name="cname">
                            <label for="cname"  class="payment-form-label ">Contact name</label>
                        </div>
                        <div class="payment-form-group">
                            <input type="number" placeholder=" " class="payment-form-control" id="pnum" name ="pnum">
                            <label for="pnum"  class="payment-form-label ">Mobile number</label>
                        </div>
                        <div class="payment-form-group">
                            <input type="text" placeholder=" " class="payment-form-control" id="address" name="address">
                            <label for="address"  class="payment-form-label ">Address</label>
                        </div>
                        <div class="payment-form-group">
                            <input type="number" placeholder=" " class="payment-form-control" id="ZIP" name ="ZIP">
                            <label for="ZIP"  class="payment-form-label ">ZIP code</label>
                        </div> 
                        <div class="payment-form-group">
                            <input type="text" placeholder=" " class="payment-form-control" id="cardNumber" name="cardNumber">
                            <label for="cardNumber"  class="payment-form-label ">Card Number</label>
                        </div>
                        <div class="payment-form-group-flex">
                            <div class="payment-form-group">
                                <input type="txt"  class="payment-form-control" id="expiryDate" name="expiryDate" >
                                <label for="expiryDate"  class="payment-form-label">Expiry Date</label>
                            </div>
                            <div class="payment-form-group">
                                <input type="text" class="payment-form-control" id="cvv">
                                <label for="cvv" class="payment-form-label ">CVV</label>
                            </div>
                        </div>
                        <button type="submit" class="payment-form-submit-button"><i class="ri-wallet-line"></i> Pay</button>                   
                </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>