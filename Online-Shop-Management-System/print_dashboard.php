<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "shop_dp";


$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM files";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KPCS</title>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    

</head>

<body>
    <?php include 'admin_header.php'; ?>

    <div class="container mt-5">
        <h2>Uploaded Files</h2>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>File Name</th>
                    <th>File Size</th>
                    <th>File Type</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Number</th>
                    <th>Address</th>
                    <th>Upload Date</th>
                    <th>Download and Actions</th>
                    <th>Completion Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $file_path = "uploads/" . $row['filename'];
                ?>
                        <tr>
                            <td><?php echo $row['filename']; ?></td>
                            <td><?php echo $row['filesize']; ?> bytes</td>
                            <td><?php echo $row['filetype']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['number']; ?></td>
                            <td><?php echo $row['address']; ?></td>
                            <td><?php echo $row['upload_date']; ?></td>
                            <td>
                                <a href="<?php echo $file_path; ?>" class="btn btn-primary" download>Download</a>
                                <?php
                                if (!$row['completed']) {
                                  
                                    echo '<a href="?id=' . $row['id'] . '&action=mark_completed" class="btn btn-success">Mark as Completed</a>';
                                }
                                ?>
                            </td>
                            <td>
                                <?php
                                if ($row['completed']) {
                                    echo '<span class="badge bg-success">Completed</span>';
                                } else {
                                    echo '<span class="badge bg-warning">Pending</span>';
                                }
                                ?>
                            </td>
                        </tr>
                    <?php
                    }
                } else {
                    ?>
                    <tr>
                        <td colspan="10">No files uploaded yet.</td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <?php
   
    if (isset($_GET['id']) && $_GET['action'] == 'mark_completed') {
        $file_id = $_GET['id'];


        $update_sql = "UPDATE files SET completed = 1 WHERE id = $file_id";
        $conn->query($update_sql);

        header("Location: admin_header.php"); 
        exit();
    }
    ?>
</body>

</html>

<?php
$conn->close();
?>