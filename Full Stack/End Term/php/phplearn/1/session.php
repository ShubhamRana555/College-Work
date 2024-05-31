To create a web page that maintains a session in PHP, you need to use the `session_start()` function to begin the session and then store and retrieve session variables as needed.

Here's a step-by-step guide to creating a simple web page that uses PHP sessions:

### Step 1: Start the Session

First, create a file named `session_start.php` to initialize the session and set a session variable.

```php
<?php
// Start the session
session_start();

// Set session variables
$_SESSION["username"] = "JohnDoe";
$_SESSION["email"] = "john@example.com";

echo "Session variables are set.";
?>
```

### Step 2: Access the Session Variables

Next, create a file named `session_access.php` to access and display the session variables.

```php
<?php
// Start the session
session_start();

// Access session variables
if (isset($_SESSION["username"]) && isset($_SESSION["email"])) {
    echo "Username: " . $_SESSION["username"] . "<br>";
    echo "Email: " . $_SESSION["email"];
} else {
    echo "No session variables are set.";
}
?>
```

### Step 3: Destroy the Session

Create a file named `session_destroy.php` to destroy the session and unset the session variables.

```php
<?php
// Start the session
session_start();

// Destroy the session
session_unset(); // Unset all session variables
session_destroy(); // Destroy the session

echo "Session destroyed.";
?>
```

### Step 4: Create an HTML Page to Navigate Between These Actions

Finally, create an HTML page with links to each of these PHP scripts to demonstrate session management.

```html
<!DOCTYPE html>
<html>
<head>
    <title>PHP Session Management</title>
</head>
<body>
    <h1>PHP Session Management Example</h1>
    <ul>
        <li><a href="session_start.php">Start Session</a></li>
        <li><a href="session_access.php">Access Session Variables</a></li>
        <li><a href="session_destroy.php">Destroy Session</a></li>
    </ul>
</body>
</html>
```

### Explanation

1. **Starting the Session**: The `session_start.php` script initializes the session and sets two session variables (`username` and `email`).
2. **Accessing Session Variables**: The `session_access.php` script checks if the session variables are set and then displays their values.
3. **Destroying the Session**: The `session_destroy.php` script unsets all session variables and destroys the session.
4. **HTML Navigation**: The HTML page provides links to each PHP script, allowing you to start the session, access session variables, and destroy the session.

### Running the Example

1. **Set Up a PHP Server**: Ensure you have a local server setup (like XAMPP, WAMP, or a similar PHP development environment) to run these PHP scripts.
2. **Place Files in Web Root**: Save the PHP scripts and the HTML file in your web server's document root (e.g., `htdocs` in XAMPP).
3. **Access the HTML File**: Open the HTML file in your browser to navigate and test the session management.

This simple example demonstrates how to create, access, and destroy sessions in PHP, providing a foundation for more complex session management tasks in web applications.