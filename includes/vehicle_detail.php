<?php
$plate = $_GET['plate'] ?? 'Unknown';
$vehicle_data = [
  "ABC123" => [
    "year" => 2020,
    "make" => "Audi",
    "model" => "A6",
    "vin" => "WAUZZZ4G9CN123456",
    "mileage" => "86,200 km",
    "next_service" => "2025-12",
    "services" => [
      ["date" => "2025-06-18", "service" => "Oil Change", "amount" => "€75.00"],
      ["date" => "2025-02-01", "service" => "Brake Pads", "amount" => "€120.00"]
    ]
  ],
  "DEF456" => [
    "year" => 2021,
    "make" => "VW",
    "model" => "Golf",
    "vin" => "WVWZZZ1KZAW123456",
    "mileage" => "52,000 km",
    "next_service" => "2025-10",
    "services" => [
      ["date" => "2025-04-02", "service" => "Tire Rotation", "amount" => "€40.00"]
    ]
  ]
];

$v = $vehicle_data[$plate] ?? null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Vehicle Detail</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { background: linear-gradient(to right, #f8f9ff, #ede7f6); font-family: sans-serif; padding: 2rem; }
    .vehicle-card { background: white; border-radius: 16px; padding: 2rem; box-shadow: 0 5px 20px rgba(0,0,0,0.05); }
    .vehicle-img { max-width: 100%; border-radius: 12px; }
    .info-label { font-weight: 500; }
    .section-title { font-weight: 600; margin-top: 2rem; font-size: 1.2rem; }
  </style>
</head>

<body style="background: radial-gradient(circle at top left, #f4f4ff, #fef9ff); font-family: 'Segoe UI', sans-serif; padding: 2rem;">

<div class="container">
  <div class="vehicle-card border rounded-4 shadow p-4 bg-white" style="max-width: 1000px; margin:auto;">
    <?php if (!$v): ?>
      <h4>Vehicle not found</h4>
    <?php else: ?>
    <div class="row g-4">
      <div class="col-md-4 text-center mb-3">
        <img src="https://cdn.pixabay.com/photo/2015/01/19/13/51/car-604019_1280.jpg" class="vehicle-img" alt="Car">
        <div class="d-grid gap-2">
          <button class="btn btn-outline-secondary">🗂️ Service History</button>
          <button class="btn btn-outline-secondary">📅 Schedule Service</button>
          <button class="btn btn-outline-secondary">📝 View Inspection Report</button>
        </div>
      </div>
      <div class="col-md-8">
        <h2 class="fw-bold mb-3"><?= $v['year'] ?> <?= $v['make'] ?> <?= $v['model'] ?></h3>
        <p><strong>VIN:</strong> <?= $v['vin'] ?><br>
           <br><strong>Mileage:</strong> <?= $v['mileage'] ?><br>
           <br><strong>Next Service:</strong> <?= $v['next_service'] ?></p>

        <h5 class="mt-4 fw-bold text-dark">Recent Services</h5>
        <table class="table table-sm table-bordered rounded shadow-sm mt-3">
          <thead><tr><th>Date</th><th>Service</th><th>Amount</th></tr></thead>
          <tbody>
            <?php foreach ($v['services'] as $s): ?>
              <tr><td><?= $s['date'] ?></td><td><?= $s['service'] ?></td><td><?= $s['amount'] ?></td></tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
    <?php endif; ?>
  </div>
</div>
</body>
</html>

<style>
  .vehicle-img {
    border-radius: 12px;
    width: 100%;
    object-fit: cover;
  }
  .btn-outline-secondary {
    border-radius: 10px;
    font-weight: 500;
    padding: 10px;
  }
  .btn-outline-secondary:hover {
    background: #ecebff;
    border-color: #7f00ff;
  }
</style>
