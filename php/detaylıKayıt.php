<?php
echo "Hata:1";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proje2"; // Veritabanı adınızı buraya yazın
echo "Hata:2";
// Bağlantı oluştur
$conn = new mysqli($servername, $username, $password, $dbname);
echo "Hata:3";
// Bağlantıyı kontrol et
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

// POST verilerini al
$telNo = $_POST['telNo'];
$ad = $_POST['ad'];
$soyad = $_POST['soyad'];
$pozisyon = $_POST['pozisyon'];
$yas = $_POST['yas'];
$sirket = $_POST['sirketAdı'];
$meslek = $_POST['meslek'];
$yetenekler = $_POST['yetenekler'];
$Hakkında = $_POST['Hakkında'];

// SQL sorgusunu hazırla ve çalıştır
$sql = "INSERT INTO kullanicilar (kullanici_telNo, kullanici_adi, kullanici_soyadi, kullanici_yas, kullanici_sirket, kullanıcı_pozisyon, kullanıcı_hakkında, kullanici_meslek, kullanıcı_yetenekler)
VALUES ('$telNo', '$adi', '$soyadi', '$yas', '$sirketAdı', '$pozisyon', '$Hakkında', '$meslek', '$yetenekler')";

if ($conn->query($sql) === TRUE) {
    // Kayıt başarılı, profil sayfasına yönlendir
    header("Location: file:///C:/xampp/htdocs/proje%202/html/profil.html");
    
} else {
    echo "Hata: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
