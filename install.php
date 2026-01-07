<?php
include 'db.php';

$sql = "CREATE TABLE IF NOT EXISTS jobs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    job_title VARCHAR(255) NOT NULL,
    company_name VARCHAR(255) NOT NULL,
    job_description TEXT NOT NULL,
    job_location VARCHAR(100),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";

if (mysqli_query($conn, $sql)) {
    echo "<h1>✅ تم إنشاء جدول الوظائف بنجاح!</h1>";
    echo "<a href='index.php'>انتقل للرئيسية</a>";
} else {
    echo "خطأ في إنشاء الجدول: " . mysqli_error($conn);
}
?>
