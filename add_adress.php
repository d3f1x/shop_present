<?
session_start();
if (isset($_SESSION['login']) && isset($_SESSION['adminmode'])) {
    $new_adress = $_POST['new_adress'];
    file_put_contents('files/all_adresses.txt', $new_adress . "\n", FILE_APPEND);
    echo '<script>location.href="cabinet.php"</script>';
} else
    header('Location:index.php');
?>