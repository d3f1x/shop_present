<?
session_start();
if (isset($_SESSION['login']) && isset($_SESSION['adminmode'])) {
	file_put_contents('files/orderscurrentdates_G7h1y2uYqh2b3T3q.txt', '');
    file_put_contents('files/orderslogins_G7h1y2uYqh2b3T3q.txt', '');
    file_put_contents('files/ordersfullnames_G7h1y2uYqh2b3T3q.txt', '');
    file_put_contents('files/ordersphonenumbers_G7h1y2uYqh2b3T3q.txt', '');
    file_put_contents('files/ordersemails_G7h1y2uYqh2b3T3q.txt', '');
    file_put_contents('files/ordersaddresses_G7h1y2uYqh2b3T3q.txt', '');
    file_put_contents('files/ordersitems_G7h1y2uYqh2b3T3q.txt', '');
    echo '<script>location.href="new_orders.php"</script>';
} else
    header('Location:index.php');
?>