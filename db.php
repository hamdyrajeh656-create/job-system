<?php
$host = "mysql-1d7fed74-hamdyrajeh656-4284.i.aivencloud.com";
$port = "26059";
$user = "avnadmin";
$pass = "ضع_كلمة_المرور_هنا"; // اضغط على كلمة المرور في موقع Aiven لنسخها وضعها هنا
$db   = "defaultdb";

// الاتصال مع تفعيل SSL (مطلوب في Aiven)
$conn = mysqli_init();
mysqli_ssl_set($conn, NULL, NULL, NULL, NULL, NULL);
if (!mysqli_real_connect($conn, $host, $user, $pass, $db, $port, NULL, MYSQLI_CLIENT_SSL)) {
    die("فشل الاتصال: " . mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8mb4");
?>
