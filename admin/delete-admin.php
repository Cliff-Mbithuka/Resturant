<?php
// include constants.php file
include('../config/constants.php');

// 1. Get the ID of Admin to be deleted
echo $id = $_GET['id'];
// 2. create sql Query to delete Admin
$sql = "DELETE FROM tbl_name WHERE id=$id";

// EXECUTE THE QUERY
$res = mysqli_query($conn, $sql);

//check whether the query executed successfully or not 
if ($res == true) {
    // Query executed successfully and admin deleted successfully 
    // echo "Admin Deleted";
    //create session variable to display message
    $_SESSION['delete'] = "<div class='success'>Admin Deleted successfully</div>";
    // Redirect to manage admin page
    header('location:' . SITEURL . 'admin/manage-admin.php');
} else {
    //failed to delete admin
    // echo "Failed to delete Admin";
    $_SESSION['delete'] = "<div class='error'>Failed to delete admin</div>";
    // Redirect to manage admin page
    header('location:' . SITEURL . 'admin/manage-admin.php');
};

//3. Redirect to manage Admin page with message (success/error)
