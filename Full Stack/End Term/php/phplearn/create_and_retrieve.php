<?php
// Cookie name and value
$cookie_name = "user";
$cookie_value = "John Doe";

// Set the cookie
if (!isset($_COOKIE[$cookie_name])) {
    // The cookie will expire in 30 days
    $cookie_expiration = time() + (30 * 24 * 60 * 60); 

    // Set the cookie
    setcookie($cookie_name, $cookie_value, $cookie_expiration, "/"); // '/' means the cookie is available in the entire domain

    // Inform the user that the cookie has been set
    echo "Cookie named '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $cookie_value;
} else {
    // Retrieve the cookie
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}
?>
