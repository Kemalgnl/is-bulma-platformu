const mysql = require('mysql');

const connection = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: 'root',
    database: 'proje2'
});

connection.connect((err) => {
    if (err) {
        console.error('Veritabanına bağlanırken hata: ' + err.stack);
        return;
    }
    console.log('Veritabanına bağlandı.');
});

module.exports = connection;
