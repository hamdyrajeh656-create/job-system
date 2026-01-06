<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>إضافة وظيفة</title>
</head>
<body class="bg-light p-4">

<div class="container bg-white p-4 rounded shadow-sm" style="max-width: 500px;">
    <h4 class="mb-4">نشر وظيفة جديدة</h4>
    
    <?php
    if (isset($_POST['add'])) {
        $title = $_POST['title'];
        $company = $_POST['company'];
        $loc = $_POST['location'];
        $desc = $_POST['desc'];

        $sql = "INSERT INTO jobs (job_title, company_name, job_description, job_location) VALUES ('$title', '$company', '$desc', '$loc')";
        if (mysqli_query($conn, $sql)) {
            echo '<div class="alert alert-success">تم النشر بنجاح!</div>';
        }
    }
    ?>

    <form method="POST">
        <input type="text" name="title" class="form-control mb-3" placeholder="مسمى الوظيفة" required>
        <input type="text" name="company" class="form-control mb-3" placeholder="اسم الشركة" required>
        <input type="text" name="location" class="form-control mb-3" placeholder="الموقع">
        <textarea name="desc" class="form-control mb-3" placeholder="وصف الوظيفة" rows="4"></textarea>
        <button type="submit" name="add" class="btn btn-success w-100">نشر الآن</button>
    </form>
</div>

</body>
</html>
