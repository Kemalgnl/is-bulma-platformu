<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Kayıt Ol - Adım 2</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Özelleştirilmiş CSS (Dosya yolunu kontrol edin) -->
    <link href="/html/navbar.css" rel="stylesheet">
</head>
<body>
<div class="container" style="width: 30%;">
    <h2 class="mt-5">Detaylı kayıt Aşaması </h2>
    <form action="/php/detayliKayit.php" method="post" id="detaylikayitol">
        <div class="form-group">
            <label for="telNo">Telefon Numarası:</label>
            <input type="text" name="telNo" class="form-control" id="telNo" required>
        </div>
        <div class="form-group">
            <label for="ad">Adı:</label>
            <input type="text" name="ad" class="form-control" id="ad" required>
        </div>
        <div class="form-group">
            <label for="soyad">Soyadı:</label>
            <input type="text" name="soyad" class="form-control" id="soyad" required>
        </div>
        <div class="form-group">
            <label for="pozisyon">Pozisyon:</label>
            <input type="text" name="pozisyon" class="form-control" id="pozisyon">
        </div>
        <div class="form-group">
            <label for="yas">Yaş:</label>
            <input type="number" name="yas" class="form-control" id="yas" required>
        </div>
        <div class="form-group">
            <label for="sirketAdı">Şirket Adı:</label>
            <input type="text" name="sirketAdı" class="form-control" id="sirketAdı">
        </div>
        <div class="form-group">
            <label for="Hakkında">Kendinizi Tanıtın:</label>
            <input type="text" name="Hakkında" class="form-control" id="Hakkında">
        </div>
        <div class="form-group">
            <label for="yetenekler">Yetenekler:</label>
            <input type="text" name="yetenekler" class="form-control" id="yetenekler">
        </div>
        <div class="form-group">
            <label for="meslek">Meslek:</label>
            <input type="text" name="meslek" class="form-control" id="meslek">
        </div>
        <button type="submit" class="btn btn-primary">Kaydı Tamamla</button>
    </form>
</div>
</body>
</html>

<?php

include("bağlanti.php");

?>
