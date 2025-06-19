<?php
$plate = $_GET['plate'] ?? 'ABC123';
$vehicles = [
  "ABC123" => [
    "make" => "Audi", "model" => "A6", "year" => "2018",
    "vin" => "WAUZZZ4G9CN123456", "mileage" => "86,000 km", "next_service" => "2025-12",
    "services" => [["date" => "2025-06-18", "service" => "Oil Change", "amount" => "€75.00"]]
  ],
  "DEF456" => [
    "make" => "VW", "model" => "Golf", "year" => "2021",
    "vin" => "WVWZZZ1KZAW123456", "mileage" => "52,000 km", "next_service" => "2025-10",
    "services" => [["date" => "2025-04-02", "service" => "Tire Rotation", "amount" => "€40.00"]]
  ]
];

$v = $vehicles[$plate] ?? null;
?>
<?php if ($v): ?>
  <div>
    <strong><?= $v['year'] ?> <?= $v['make'] ?> <?= $v['model'] ?></strong><br>
    VIN: <?= $v['vin'] ?><br>
    Mileage: <?= $v['mileage'] ?><br>
    Next Service: <?= $v['next_service'] ?>
    <hr>
    <strong>Recent Services</strong>
    <ul>
      <?php foreach ($v['services'] as $s): ?>
        <li><?= $s['date'] ?> — <?= $s['service'] ?> (<?= $s['amount'] ?>)</li>
      <?php endforeach; ?>
    </ul>
  </div>
<?php else: ?>
  <p>No data found for plate <?= htmlspecialchars($plate) ?></p>
<?php endif; ?>
