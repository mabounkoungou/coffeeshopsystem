<?php
    // 1. Define connection variables
    $host = 'localhost';     // or '127.0.0.1'
    $user = 'root';          // default username for local servers
    $password = '';          // default is empty for XAMPP/WAMP
    $dbname = 'coffee'; // replace with your actual database name

    // 2. Create connection
    $conn = new mysqli($host, $user, $password, $dbname);

    // 3. Check connection
    if ($conn->connect_error) {
        die("❌ Connection failed: " . $conn->connect_error);
    } else {
        echo "✅ Connected successfully to the database!";
    }

    // 4. Close connection (optional here)
    $conn->close();
    ?>