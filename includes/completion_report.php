<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Completion Report - PitManage</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      margin: 0;
      padding: 2rem;
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(to right, #f0f4ff, #fcefff);
    }
    .main-card {
      background: white;
      border-radius: 20px;
      box-shadow: 0 20px 50px rgba(0, 0, 0, 0.07);
      padding: 2.5rem;
      max-width: 1000px;
      margin: auto;
    }
    h2 {
      font-weight: 700;
      color: #2d2d2d;
    }
    .badge-complete {
      background: linear-gradient(to right, #7f00ff, #e100ff);
      color: white;
      padding: 6px 16px;
      border-radius: 999px;
      font-weight: 500;
    }
    .section-title {
      font-size: 1.25rem;
      margin-top: 2rem;
      color: #7f00ff;
      font-weight: 600;
    }
    table {
      font-size: 0.95rem;
    }
    .table th {
      background: #f5f5ff;
    }
    .summary td {
      text-align: right;
    }
    .summary td:first-child {
      text-align: left;
    }
    .rounded-box {
      background: #f9f9ff;
      border-radius: 12px;
      padding: 1rem 1.5rem;
    }
  </style>
</head>
<body>

<div class="main-card">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Completion Report</h2>
    <span class="badge-complete">COMPLETED</span>
  </div>

  <div class="row mb-4">
    <div class="col-md-6">
      <div class="rounded-box">
        <h6 class="text-muted mb-1">Client Info</h6>
        <p class="mb-1"><strong>John Doe</strong><br>
           john@example.com<br>
           +371 12345678</p>
      </div>
    </div>
    <div class="col-md-6 text-md-end">
      <div class="rounded-box">
        <h6 class="text-muted mb-1">Vehicle Info</h6>
        <p class="mb-1">Audi A6, 2018 (ABC123)<br>
           VIN: WAUZZZ4G9CN123456<br>
           186,000 km<br>
           Drop-off: 2025-06-18 09:30<br>
           Pick-up: 2025-06-18 17:45</p>
      </div>
    </div>
  </div>

  <div class="section-title">Services Performed</div>
  <table class="table table-bordered table-sm">
    <thead>
      <tr><th>#</th><th>Service</th><th>Technician</th><th>Time (h)</th><th>Price (€)</th></tr>
    </thead>
    <tbody>
      <tr><td>1</td><td>Diagnostics</td><td>Ilze Kalnina</td><td>0.5</td><td>25.00</td></tr>
      <tr><td>2</td><td>Engine oil change</td><td>Janis Berzins</td><td>0.5</td><td>30.00</td></tr>
      <tr><td>3</td><td>Brake pad replacement</td><td>Janis Berzins</td><td>1.0</td><td>45.00</td></tr>
    </tbody>
  </table>

  <div class="section-title">Parts Used</div>
  <table class="table table-bordered table-sm">
    <thead>
      <tr><th>#</th><th>Part</th><th>Qty</th><th>Unit (€)</th><th>Total (€)</th></tr>
    </thead>
    <tbody>
      <tr><td>1</td><td>Engine Oil (5W-30)</td><td>4L</td><td>10.00</td><td>40.00</td></tr>
      <tr><td>2</td><td>Brake Pads (Front)</td><td>1 set</td><td>60.00</td><td>60.00</td></tr>
    </tbody>
  </table>

  <div class="section-title">Technician Notes</div>
  <ul>
    <li>Fault code P0420 found (catalyst below threshold)</li>
    <li>Brake pads worn below 15%, replaced</li>
    <li>Oil slightly contaminated — change interval: 10,000 km</li>
  </ul>

  <div class="section-title">Cost Summary</div>
  <table class="table summary w-50 ms-auto">
    <tr><td>Labour Total:</td><td>€100.00</td></tr>
    <tr><td>Parts Total:</td><td>€100.00</td></tr>
    <tr><td>VAT (21%):</td><td>€42.00</td></tr>
    <tr class="fw-bold"><td>Grand Total:</td><td>€242.00</td></tr>
  </table>

  <div class="text-end mt-4">
    <p><strong>Client Signature:</strong> ___________________</p>
    <p><strong>Date:</strong> ___________________</p>
  </div>
</div>

</body>
</html>
