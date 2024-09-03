<?php

// test expire cookie, jika di server kita set expire-nya kurang dari waktu GMT tapi lebih dari waktu
// saat ini di local komputer
// Hasil: kalau di PHP tidak perlu terlalu difikirkan, karena format expire yang diminta adalah unixtimestamp,
// dan php akan mengkonvertnya secara internal, yaitu dengan timezone GMT, walaupun kita set timezone
// default server bukan GMT.

// Walaupun dari server timezone nya adalah GMT,
// tetapi dibrowser akan secara otomatis menyesuaikan, misalnya jika kita set expire dari cookie adalah 1 menit,
// jadi waktu di GMT misalnya adalah 03 Sep 2024 11:58:00 jadi expire-nya adalah
// 03 Sep 2024 11:59:00 GMT. Jadi browser akan secara otomatis menyesuaikan, misalnya di browser client
// timezonenya adalah GMT +07:00, maka expirenya adalah 1 menit dari waktu berdasarkan timezone
// yang ada dibrowser.

// Jika menggunakan nodejs, karena tidak seperti di PHP yang akan secara internal mengkonvert, maka sebaiknya set expire nya dalam timezone GMT
setcookie("X-BELAJAR-COOKIE", "Reza Sariful Fikri", time()+60);
header("location: show-cookie.php");
