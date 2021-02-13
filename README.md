# Workshop DILO x UNLA

# APP UNLA MOVIE STREAMING

## ⚠️ IKUTI CARA DIBAWAH UNTUK INSTALASI CODEIGNITER

### Cara import database

Oh iya disini saya menyimpan juga mentahan databasenya, ada di dalam folder **database** , nanti teman teman bisa import ke localnya masing masing, akan panjang jika dijelaskan tutorialnya disini, teman teman bisa coba search di google **cara import database mysql**

### Setting database di codeigniter

1. buka file application/config/database.php
2. cari kode berikut di file tersebut ( ada dipaling bawah )

```PHP
  $db['default'] = array(
    'dsn'	=> '',
    'hostname' => *'localhost'*,
    'username' => *'root'*,
    'password' => *''*,
    'database' => *'db_unla_movie'*,
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => FALSE,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt' => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
  );
```

3. ubah kode bagian **hostname**, **username**, **password** dan **database** lalu sesuaikan dengan configurasi kalian

## Screenshot Aplikasi

![Tampilan Halaman Home](/screenshots/halaman-home.png)

![Tampilan Halaman Add](/screenshots/halaman-add.png)

![Tampilan Halaman Watch](/screenshots/halaman-watch.png)
