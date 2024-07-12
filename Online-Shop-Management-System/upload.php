<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_FILES["file"]) && $_FILES["file"]["error"] == 0) {

        $target_dir = "uploads/";

        $original_filename = basename($_FILES["file"]["name"]);
        $sanitized_filename = preg_replace("/[^a-zA-Z0-9_.]/", "_", $original_filename);

        $target_file = $target_dir . $sanitized_filename;
        $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        $allowed_types = array("jpg", "jpeg", "png", "gif", "pdf");

        if (!in_array($file_type, $allowed_types)) {
            echo "Sorry, only JPG, JPEG, PNG, GIF, and PDF files are allowed.";
        } else {

            if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {

                $filename = $sanitized_filename;
                $filesize = $_FILES["file"]["size"];
                $filetype = $_FILES["file"]["type"];

                // Get user information from the form
                $name = $_POST['name'];
                $email = $_POST['email'];
                $number = $_POST['number'];
                $address = $_POST['address'];


                $db_host = "localhost";
                $db_user = "root";
                $db_pass = "";
                $db_name = "shop_dp";

                $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }


                $sql = "INSERT INTO files (filename, filesize, filetype, name, email, number, address) VALUES 
                        ('$filename', $filesize, '$filetype', '$name', '$email', '$number', '$address')";

                if ($conn->query($sql) === TRUE) {
                    echo "The file $original_filename has been uploaded and the information has been stored in the database.";
                } else {
                    echo "Sorry, there was an error uploading your file and storing information in the database: " . $conn->error;
                }

                $conn->close();
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    } else {
        echo "No file was uploaded.";
    }
}
