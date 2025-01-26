// MySQL modülünü içe aktar
const mysql = require('mysql');
const express = require('express');
const bodyParser = require('body-parser');

// Veritabanı bağlantısı için konfigürasyon ayarları
const connection = mysql.createConnection({
    host: 'localhost',    // MySQL sunucusunun adresi
    user: 'root', // MySQL kullanıcı adı
    password: 'root',    // MySQL şifresi
    database: 'proje2' // Kullanılacak veritabanı adı
});

// Express uygulamasını oluştur
const app = express();

// JSON ve URL kodlu verileri işlemek için bodyParser kullan
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: true }));

// Kullanıcı giriş isteğini işle
app.post('/giris', (req, res) => {
    const { email, sifre } = req.body; // Formdan gelen e-posta ve şifre bilgisini al

    // Veritabanında kullanıcıyı sorgula
    connection.query('SELECT * FROM kullanicilar WHERE kullanicı_eposta = ? AND kullanicı_şifre = ?', [email, sifre], (error, results, fields) => {
        if (error) {
            // Sorguda hata olursa hata mesajı döndür
            return res.status(500).json({ error: 'Veritabanı hatası' });
        }

        // Kullanıcı bulunamazsa hata döndür
        if (results.length === 0) {
            return res.status(401).json({ error: 'E-posta veya şifre yanlış' });
        }

        // Kullanıcı bulunursa başarılı yanıt döndür
        res.status(200).json({ message: 'Giriş başarılı' });
    });
});

// Sunucuyu belirtilen portta başlat
const PORT = 3000;
app.listen(PORT, () => {
    console.log(`Sunucu ${PORT} portunda çalışıyor...`);
});
