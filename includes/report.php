<?php
// Normally you would fetch this data from a database.
// This is static mock data for the purpose of preview.

$client_name = "John Doe";
$client_email = "john@example.com";
$client_phone = "+371 98765432";
$car_make = "Audi A6";
$car_plate = "ABC-123";
$car_vin = "WAUZZZ4G9CN123456";
$service_date = "2025-06-18";
$report_number = "SRV-2025-0001";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Service Report - AutoFix Garage</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { background: #f9f9f9; font-family: 'Segoe UI', sans-serif; padding: 2rem; }
    .report-card { background: #fff; border-radius: 10px; padding: 2rem; box-shadow: 0 0 10px rgba(0,0,0,0.05); }
    .section-title { font-size: 1.25rem; margin-top: 1.5rem; border-bottom: 2px solid #ddd; padding-bottom: 0.5rem; }
    .info-label { font-weight: 500; }
    .summary td { text-align: right; }
    .summary td:first-child { text-align: left; }
  </style>
</head>
<body>

<div class="container">
  <div class="report-card">
    <div class="text-center mb-4">
      <img src="logo.png" alt="AutoFix Logo" height="50">
      <h2 class="mt-2">AutoFix Garage</h2>
    </div>

    <div class="row mb-4">
      <div class="col-md-6">
        <p><span class="info-label">Client:</span> <?= $client_name ?><br>
           <span class="info-label">Email:</span> <?= $client_email ?><br>
           <span class="info-label">Phone:</span> <?= $client_phone ?></p>
      </div>
      <div class="col-md-6 text-md-end">
        <p><span class="info-label">Car:</span> <?= $car_make ?> (<?= $car_plate ?>)<br>
           <span class="info-label">VIN:</span> <?= $car_vin ?><br>
           <span class="info-label">Service Date:</span> <?= $service_date ?><br>
           <span class="info-label">Report #:</span> <?= $report_number ?></p>
      </div>
    </div>

    <div class="section-title">Work Done</div>
    <table class="table table-sm table-bordered">
      <thead class="table-light">
        <tr><th>#</th><th>Description</th><th>Time (h)</th><th>Employee</th><th>Price (€)</th></tr>
      </thead>
      <tbody>
        <tr><td>1</td><td>Engine oil change</td><td>0.5</td><td>Janis Berzins</td><td>30.00</td></tr>
        <tr><td>2</td><td>Brake pad replacement (front)</td><td>1.0</td><td>Janis Berzins</td><td>45.00</td></tr>
        <tr><td>3</td><td>Diagnostics</td><td>0.5</td><td>Ilze Kalnina</td><td>25.00</td></tr>
      </tbody>
    </table>

    <div class="section-title">Parts Used</div>
    <table class="table table-sm table-bordered">
      <thead class="table-light">
        <tr><th>#</th><th>Item</th><th>Quantity</th><th>Unit Price (€)</th><th>Total (€)</th></tr>
      </thead>
      <tbody>
        <tr><td>1</td><td>Engine Oil (5W-30)</td><td>4L</td><td>10.00</td><td>40.00</td></tr>
        <tr><td>2</td><td>Brake Pads (Front)</td><td>1 set</td><td>60.00</td><td>60.00</td></tr>
      </tbody>
    </table>

    <div class="section-title">Summary</div>
    <table class="table table-borderless summary">
      <tr><td>Labour Total:</td><td>€100.00</td></tr>
      <tr><td>Parts Total:</td><td>€100.00</td></tr>
      <tr><td>VAT (21%):</td><td>€42.00</td></tr>
      <tr class="fw-bold border-top"><td>Grand Total:</td><td>€242.00</td></tr>
    </table>

    <div class="text-center mt-4">
      <button class="btn btn-outline-primary" onclick="window.print()">Download / Print</button>
    </div>
  </div>
</div>

</body>
</html>
