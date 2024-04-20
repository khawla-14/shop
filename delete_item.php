<?php
// Read JSON file
$jsonFile = 'plates.json';
$jsonData = file_get_contents($jsonFile);
$plates = json_decode($jsonData, true);

// Get plate name from request
$data = json_decode(file_get_contents('php://input'), true);
$plateNameToDelete = $data['plateName'];

// Find plate in array and remove it
foreach ($plates as $key => $plate) {
  if ($plate['name'] === $plateNameToDelete) {
    unset($plates[$key]);
    break;
  }
}

// Rewrite JSON file
file_put_contents($jsonFile, json_encode($plates));

// Send response
header('Content-Type: application/json');
echo json_encode(['success' => true]);
?>
