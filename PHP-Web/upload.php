<?php

if ($_FILES['image']['error'] !== 0) {
    die('Upload gagal');
}

$filepath = $_FILES['image']['tmp_name'];
$fileSize = filesize($filepath);
$finfo = new finfo();
$filetype = $finfo->file($filepath, FILEINFO_MIME_TYPE);

$allowedTypes = [
    'image/jpeg' => 'jpg',
    'image/png' => 'png'
];

// check error
if ($fileSize > (1024 * 1024)) {
    die('Ukuran file tidak bisa melebihi 1MB');
}
if (!in_array($filetype, array_keys($allowedTypes))) {
    die('Type file harus png atau jpg');
}

// $filename = bin2hex(random_bytes(10));
$filename = basename($filepath);
$extention = $allowedTypes[$filetype];
$dir = __DIR__ . '/image/';
$newFilePath = $dir . $filename .'.'. $extention;

if (is_uploaded_file($filepath)) {
    if (move_uploaded_file($filepath, $newFilePath)) {
        echo 'Upload berhasil';
    } else {
        echo 'Upload gagal';
    }
}
