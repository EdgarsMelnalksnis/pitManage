<?php
$client_name = "John";
$vehicles = [
  ["plate" => "ABC123", "car" => "Audi A6, 2018", "last_service" => "2025-06-18", "status" => "Completed"],
  ["plate" => "DEF456", "car" => "VW Golf, 2021", "last_service" => "2025-04-02", "status" => "In Progress"]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Client Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(to right, #f0f4ff, #fef9ff);
      font-family: 'Segoe UI', sans-serif;
      padding: 2rem;
    }
    .section-title {
      font-size: 1.25rem;
      font-weight: bold;
      margin: 2rem 0 1rem;
    }
    .card-section {
      margin-bottom: 2rem;
    }
    .action-card {
      border-radius: 12px;
      background: #ffffff;
      padding: 1rem;
      text-align: center;
      box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
      transition: transform 0.2s ease;
    }
    .action-card:hover {
      transform: translateY(-3px);
    }
    .vehicle-detail {
      display: none;
      background: #fff;
      border: 1px solid #dee2e6;
      border-radius: 12px;
      padding: 1rem;
      box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }
    .clickable-row {
      cursor: pointer;
    }
    .clickable-row:hover {
      background-color: #f0f4ff;
    }
  </style>
</head>
<body>
<div class="container">
  <h2 class="text-center mb-4">Welcome back, <?= $client_name ?>!</h2>

  <div class="section-title">Your Vehicles</div>
  <table class="table table-bordered bg-white rounded shadow-sm">
    <thead class="table-light">
      <tr><th>Plate</th><th>Car</th><th>Last Service</th><th>Status</th></tr>
    </thead>
    <tbody>
      <?php foreach ($vehicles as $v): ?>
        <tr class="clickable-row" onclick="toggleVehicle('<?= $v['plate'] ?>')">
          <td><?= $v['plate'] ?></td>
          <td><?= $v['car'] ?></td>
          <td><?= $v['last_service'] ?></td>
          <td><?= $v['status'] ?></td>
        </tr>
        <tr id="row-<?= $v['plate'] ?>" style="display:none;">
          <td colspan="4">
            <div id="detail-<?= $v['plate'] ?>" class="vehicle-detail text-muted small">
              Loading details for <?= $v['plate'] ?>...
            </div>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

  <div class="section-title">What would you like to do?</div>
  <div class="row g-3">
    <div class="col-md-4"><div class="action-card">🚗 Add a new vehicle</div></div>
    <div class="col-md-4"><div class="action-card">📅 Book a service appointment</div></div>
    <div class="col-md-4"><div class="action-card">📄 Download maintenance history</div></div>
    <div class="col-md-4"><div class="action-card">💬 Live chat with service rep</div></div>
    <div class="col-md-4"><div class="action-card">💳 Payments / Invoices</div></div>
    <div class="col-md-4"><div class="action-card">📞 Contact Service Center</div></div>
  </div>
</div>

<script>
function toggleVehicle(plate) {
  const row = document.getElementById("row-" + plate);
  const detail = document.getElementById("detail-" + plate);

  if (row.style.display === "none") {
    row.style.display = "table-row";
    if (!detail.dataset.loaded) {
      fetch("vehicle_detail_snippet.php?plate=" + plate)
        .then(res => res.text())
        .then(html => {
          detail.innerHTML = html;
          detail.dataset.loaded = true;
        }).catch(err => {
          detail.innerHTML = "<span class='text-danger'>Failed to load vehicle details.</span>";
        });
    }
  } else {
    row.style.display = "none";
  }
}
</script>
</body>
</html>
