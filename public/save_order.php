<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $required_fields = ['company_name', 'product_name', 'target_marketing', 'product_type', 'ad_type', 'price'];
    foreach ($required_fields as $field) {
        if (!isset($_POST[$field]) || empty(trim($_POST[$field]))) {
            echo json_encode(['status' => 'error', 'message' => 'Field ' . $field . ' is required.']);
            exit();
        }
    }

    $_SESSION['order_details'] = [
        'company_name' => $_POST['company_name'],
        'product_name' => $_POST['product_name'],
        'target_marketing' => $_POST['target_marketing'],
        'product_type' => $_POST['product_type'],
        'ad_type' => $_POST['ad_type'],
        'price' => $_POST['price']
    ];

    echo json_encode(['status' => 'success']);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request']);
}
exit();
