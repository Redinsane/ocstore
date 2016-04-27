<?php
include 'init.php';
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1; 
$perPage = isset($_GET['per-page']) && $_GET['per-page'] <= 50 ? (int)$_GET['per-page'] : 5;
$perPage = 5;
$start = ($page > 1) ? ($page * $perPage) - $perPage : 0;

$ads = $pdo->prepare("SELECT SQL_CALC_FOUND_ROWS id, title, description, price FROM ads LIMIT :start, :pp");
$ads->bindParam(':pp', $perPage, PDO::PARAM_INT);
$ads->bindParam(':start', $start, PDO::PARAM_INT);
$ads->execute();

$ads = $ads->fetchAll(PDO::FETCH_ASSOC);

$total = $pdo->query("SELECT FOUND_ROWS() as total")->fetch()['total'];
$pages = ceil($total / $perPage);
$t = "\"";
?>
