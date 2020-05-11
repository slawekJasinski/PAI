<?php
$conn = mysqli_connect('localhost', 'wikomp_gr1','BDWsB2021','wikomp_gr1');
if (mysqli_connect_errno()) {
    echo "Błąd połączenia z bazą: " . mysqli_connect_error();
    exit();
}
mysqli_set_charset($conn, 'utf8');
?>