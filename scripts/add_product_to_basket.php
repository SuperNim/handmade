<?php
$id = $_POST ['product_id'];

session_start();
if (isset($_SESSION ['basket'])) {
    $_SESSION ['basket'][] = $id;
} else {
    $_SESSION ['basket'] = [$id];
}
$result = json_encode($_SESSION ['basket']);
print $result;