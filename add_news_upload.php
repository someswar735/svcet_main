<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $date = $_POST['date'];
    $heading = $_POST['heading'];
    $description = $_POST['description'];
    $news_category = $_POST['news_category'];
    $website_link = $_POST['website_link'];
    $password = $_POST['password'];
    $image = $_FILES['image'];

    // Validate password (example: static password)
    $valid_password = "somu"; // Replace with your actual password
    if ($password !== $valid_password) {
        echo "Invalid password.";
        exit;
    }

    // Handle file upload
    $upload_dir = 'uploads/';
    if (!file_exists($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }

    if ($image['error'] == 0) {
        $image_path = $upload_dir . basename($image['name']);
        move_uploaded_file($image['tmp_name'], $image_path);
    } else {
        $image_path = null;
    }

    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = ""; // Replace with your MySQL password
    $dbname = "test"; // Replace with your database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert data into the database
    $sql = "INSERT INTO news_upload (date, heading, description, news_category, website_link, image_path, password)
            VALUES ('$date', '$heading', '$description', '$news_category', '$website_link', '$image_path', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "News uploaded successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    echo "Invalid request.";
}
?>
