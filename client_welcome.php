<?php
$client_name = "John";

$vehicles = [
  ["plate" => "ABC123", "car" => "Audi A6, 2018", "last_service" => "2025-06-18", "status" => "Completed"],
  ["plate" => "DEF456", "car" => "VW Golf, 2021", "last_service" => "2025-04-02", "status" => "In Progress"]
];

$in_progress = [
  ["vehicle" => "Audi A6", "stage" => "Diagnostics in progress", "tech" => "Ilze Kalnina", "ready" => "Today 17:30"],
  ["vehicle" => "VW Golf 2021", "stage" => "Tire change, Battery check", "tech" => "Battery check", "ready" => "View PDF"]
];

$reminders = [
  "Your Audi A6 is ready for pickup.",
  "Your VW Golf is due for next oil change in 1 month"
];

$contact = "+371 1234 5678";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Welcome Client</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(to right, #f0f4ff, #fcefff);
      font-family: 'Segoe UI', sans-serif;
      padding: 2rem;
    }
    .card-section {
      background: white;
      border-radius: 16px;
      padding: 1.5rem;
      box-shadow: 0 8px 24px rgba(0,0,0,0.05);
      margin-bottom: 2rem;
    }
    h2 {
      font-weight: 700;
      text-align: center;
      margin-bottom: 0.25rem;
    }
    .section-title {
      font-size: 1.2rem;
      font-weight: 600;
      color: #7f00ff;
      margin-bottom: 1rem;
    }
    .status-completed {
      color: green;
      font-weight: 600;
    }
    .status-inprogress {
      color: #7f00ff;
      font-weight: 600;
    }
    .highlight-link {
      color: #7f00ff;
      font-weight: 500;
      text-decoration: none;
    }
    .highlight-link:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

<div class="container">
  <h2>Welcome back, <?= $client_name ?>!</h2>
  <p class="text-center mb-5">Here’s an overview of your vehicles and service activity.</p>

  <div class="card-section">
    <div class="d-flex justify-content-between align-items-center">
      <div class="section-title">My Vehicles</div>
      <a href="#" class="highlight-link">View All</a>
    </div>
    <table class="table table-sm table-bordered align-middle">
      <thead class="table-light">
        <tr><th>Plate</th><th>Car</th><th>Last Service</th><th>Status</th></tr>
      </thead>
      <tbody>
        <?php foreach ($vehicles as $v): ?>
          <tr>
            <td><?= $v['plate'] ?></td>
            <td><?= $v['car'] ?></td>
            <td><?= $v['last_service'] ?></td>
            <td>
              <?php if ($v['status'] === 'Completed'): ?>
                <span class="status-completed">● Completed</span>
              <?php else: ?>
                <span class="status-inprogress">🔧 In Progress</span>
              <?php endif; ?>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

  <div class="card-section">
    <div class="d-flex justify-content-between align-items-center">
      <div class="section-title">Work In Progress</div>
      <a href="#" class="highlight-link">Track Service</a>
    </div>
    <table class="table table-sm table-bordered align-middle">
      <thead class="table-light">
        <tr><th>Vehicle</th><th>Current Stage</th><th>Technician</th><th>Est. Ready</th></tr>
      </thead>
      <tbody>
        <?php foreach ($in_progress as $w): ?>
          <tr>
            <td><?= $w['vehicle'] ?></td>
            <td><?= $w['stage'] ?></td>
            <td><?= $w['tech'] ?></td>
            <td><?= $w['ready'] ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

  <div class="card-section">
    <div class="section-title">Notifications / Reminders</div>
    <ul class="mb-0">
      <?php foreach ($reminders as $r): ?>
        <li><?= $r ?></li>
      <?php endforeach; ?>
    </ul>
  </div>

  <div class="card-section">
    <div class="section-title">Contact Service Center</div>
    <p>📞 <?= $contact ?></p>
  </div>
</div>

</body>
</html>

  <div class="card-section">
    <div class="row g-3">
      <div class="col-md-6">
        <div class="p-3 border border-light rounded shadow-sm h-100 bg-light">
          🚗 <strong>Add a new vehicle</strong><br>
          Register a new car to your garage.
        </div>
      </div>
      <div class="col-md-6">
        <div class="p-3 border border-light rounded shadow-sm h-100 bg-light">
          📅 <strong>Book a service appointment</strong><br>
          Schedule your next visit online.
        </div>
      </div>
      <div class="col-md-6">
        <div class="p-3 border border-light rounded shadow-sm h-100 bg-light">
          ⬇️ <strong>Download maintenance history</strong><br>
          Export past services for your records.
        </div>
      </div>
      <div class="col-md-6">
        <div class="p-3 border border-light rounded shadow-sm h-100 bg-light">
          💬 <strong>Live chat with service rep</strong><br>
          Get help or ask a question in real time.
        </div>
      </div>
      <div class="col-md-6">
        <div class="p-3 border border-light rounded shadow-sm h-100 bg-light">
          💳 <strong>Payments / Invoices</strong><br>
          View unpaid invoices, pay online, and download PDFs.
        </div>
      </div>
      <div class="col-md-6">
        <div class="p-3 border border-light rounded shadow-sm h-100 bg-light">
          ☎️ <strong>Contact Service Center</strong><br>
          Reach out for help or request a callback.
        </div>
      </div>
    </div>
  </div>
