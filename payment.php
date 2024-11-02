<?php
session_start();
include("db.php");

if($_SERVER['REQUEST_METHOD']=="POST"){
	$NIC=$_POST['NIC'];
	$cardNumber=$_POST['cardNumber'];
	$expiryDate=$_POST['expiryDate'];

    $query="INSERT INTO pay(NIC,cardNumber,expiryDate) values('$NIC','$cardNumber','$expiryDate')";

    if(!empty($NIC)&& !empty($cardNumber)&& !empty($expiryDate)){
       
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
            <div class="payment-wrapper">
                <div class="payment-left">
                    <div class="payment-header">
                        <div class="payment-header-icon"><i class="ri-flashlight-fill"></i></div>
                        <div class="payment-header-title">Only your appoiment Payments. You shoud use appoiment's NIC number.</div>
                    </div>
                    <div class="payment-content">
                        <div class="payment-body">
                            <div class="payment-plan">
                                <div class="payment-plan-type">RS</div>
                                <div class="payment-plan-info">
                                    <div class="payment-plan-info-name">All charges</div>
                                    <div class="payment-plan-info-price">Rs.2000.00 Doctor charges</div>
                                </div>
            
                            </div>
                            <div class="payment-summary">
                                <div class="payment-summary-item">
                                    <div class="payment-summary-name">SMS fee</div>
                                    <div class="payment-summary-price">+ Rs.50.00</div>
                                </div>
                                <div class="payment-summary-item">
                                    <div class="payment-summary-name">Tax</div>
                                    <div class="payment-summary-price">+ Rs.350.00</div>
                                </div>
                                <div class="payment-summary-divider"></div>
                                <div class="payment-summary-item payment-summary-total">
                                    <div class="payment-summary-name">Total</div>
                                    <div class="payment-summary-price">Rs.2400.00</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="payment-right">
                    <form method="post" action="payment.php"  class="payment-form">
                        <h1 class="payment-title">Payment Details</h1>
                        <div class="payment-method">
                            
                            <label for="method-1" class="payment-method-item">
                                <img src="payment/images/visa.png">
                            </label>
                            
                            <label for="method-2" class="payment-method-item">
                                <img src="payment/images/mastercard.png">
                            </label>
                        </div>
                        <div class="payment-form-group">
                            <input type="int" placeholder=" " class="payment-form-control" id="NIC" name ="NIC">
                            <label for="NIC"  class="payment-form-label ">Only appoiment NIC number</label>
                        </div>
                        <div class="payment-form-group">
                            <input type="text" placeholder=" " class="payment-form-control" id="cardNumber" name="cardNumber">
                            <label for="cardNumber"  class="payment-form-label ">Card Number</label>
                        </div>
                        <div class="payment-form-group-flex">
                            <div class="payment-form-group">
                                <input type="text"  class="payment-form-control" id="expiryDate" name="expiryDate" >
                                <label for="expiryDate"  class="payment-form-label">Expiry Date MM/YYYY</label>
                            </div>
                            <div class="payment-form-group">
                                <input type="text" class="payment-form-control" id="cvv">
                                <label for="cvv" class="payment-form-label ">CVV</label>
                            </div>
                        </div>
                        <button type="submit" class="payment-form-submit-button"><i class="ri-wallet-line"></i> Pay</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>