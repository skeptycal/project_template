<?php

echo "Mike's totally ratchet php CLI server\n";
echo "=====================================\n\n";
echo "  ➜ Default command line:\n";
echo "      php -S localhost:8000 -t ~/Sites\n\n";

// router.php
// if (preg_match('/\.(?:png|jpg|jpeg|gif)$/', $_SERVER["REQUEST_URI"])) {
//     return false;    // serve the requested resource as-is.
// } else {
//     echo "<p>Welcome to PHP</p>\n";
// }

// Test and show options ...
phpinfo();

?>
