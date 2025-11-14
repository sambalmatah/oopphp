<?php 

// require_once 'Produk/InfoProduk.php';
// require_once 'Produk/Produk.php';
// require_once 'Produk/Komik.php';
// require_once 'Produk/Game.php';
// require_once 'Produk/CetakInfoProduk.php';
// require_once 'Produk/User.php';

// require_once 'Service/User.php';

// membuat spl_autoload folder Produk
spl_autoload_register(function( $class ) {
    // App\Produk\User.php = ["App", "Produk", "User"]
    $class = explode('\\', $class); 
    $class = end($class);
    require_once __DIR__ . '/Produk/' . $class . '.php';
});

// membuat spl_autoload folder Service
spl_autoload_register(function( $class ) {
    // App\Produk\User.php = ["App", "Service", "User"]
    $class = explode('\\', $class); 
    $class = end($class);
    require_once __DIR__ . '/Service/' . $class . '.php';
})

?>