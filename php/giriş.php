<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "proje21";

// Veritabanı bağlantısını yap
$bağlan = mysqli_connect($servername, $username, $password, $database);

// Bağlantı hatası varsa hata mesajı göster ve işlemi sonlandır
if (!$bağlan) {
    die("Bağlantı hatası: " . mysqli_connect_error());
}


// Formdan gelen verileri güvenli bir şekilde al
$GirişEmail = isset($_POST['GirişEmail']) ? mysqli_real_escape_string($bağlan, $_POST['GirişEmail']) : '';
$GirişŞifresi = isset($_POST['GirişŞifresi']) ? mysqli_real_escape_string($bağlan, $_POST['GirişŞifresi']) : '';

// Veritabanında kullanıcıyı kontrol et
$sorgu = "SELECT * FROM kullanicilar WHERE kullanici_eposta = ? AND kullanici_sifre = ?";
$stmt = $bağlan->prepare($sorgu);

if ($stmt === false) {
    die('Prepare hatası: ' . htmlspecialchars($bağlan->error));
}

$stmt->bind_param("ss", $GirişEmail, $GirişŞifresi);
$stmt->execute();
$result = $stmt->get_result();

echo "Email: $GirişEmail<br>";
print_r($result);
echo "Şifre: $GirişŞifresi<br>";

if ($result->num_rows > 0) {
    // Başarılı giriş durumunda yönlendir
    header("Location: /proje%202/Anasayfa.html");
    exit();
} else {
    // Başarısız giriş durumunda hata mesajı göster
    echo "Invalid email or password.";
    // Yönlendirme yapmadan önce bu mesajı gösterin
    header("Refresh: 2; url=giriş.html"); // 2 saniye bekledikten sonra giriş.html'e yönlendirir
    exit();
}

// Nesneleri kapat
$stmt->close();
$bağlan->close();

?>
