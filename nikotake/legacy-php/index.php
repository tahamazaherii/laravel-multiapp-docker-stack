<?php

// تنظیمات اتصال به دیتابیس
$host = 'mysql';
$dbname = 'shared_db';
$username = 'user';
$password = 'secret'; // اگر پسورد نداری، اینجا خالی بگذار

// اتصال به دیتابیس با استفاده از PDO
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // تنظیمات برای فعال کردن استثناها
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // ایجاد کوئری برای درج داده
    $sql = "INSERT INTO brands (name) VALUES (:name)";

    // آماده کردن کوئری
    $stmt = $pdo->prepare($sql);

    // مقداردهی به پارامترها
    $stmt->bindParam(':name', $name);

    // داده‌ها
    $name = 'bbbbbbb';  // نام برند

    // اجرای کوئری
    $stmt->execute();

    // نمایش پیام موفقیت
    echo "Brand created successfully.";

} catch (PDOException $e) {
    // نمایش خطا در صورت وجود
    echo "Error: " . $e->getMessage();
}

// بستن اتصال
$pdo = null;

?>
