<?php
include('partials/menu.php');
?>
<div class="main-content">
    <div class="wrapper">
        <h1>Add Admin</h1>

        <br><br>
        <?php 
if(isset($_SESSION['add']))// checking whether the session is set or not
{
    echo $_SESSION['add'];
    unset($_SESSION['add']); // removing session message
};
?>
<br/>
<br/>

        <form action="" method="post">

            <table class="tbl-30">
                <tr>
                    <td>Full Name:</td>
                    <td><input type="text" name="full_name" placeholder="Enter your name"></td>
                </tr>
                <tr>
                    <td>UserName: </td>
                    <td>
                        <input type="text" name="username" placeholder="Your Username">
                    </td>
                </tr>
                <tr>
                    <td>Password: </td>
                    <td>
                        <input type="password" name="password" placeholder="Your password">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Admin" class="btn-secondary  ">
                    </td>
                </tr>
            </table>

        </form>
    </div>
</div>


<?php
include('partials/footer.php');
?>

<?php
//provess the value from form and save it in database
//check whether the submit button is clicked or not
if (isset($_POST['submit'])) {
    // button clicked
    //    echo  "button clicked";

    //Get data from the form
    $full_name = $_POST['full_name'];
    $username = $_POST['username'];
    $password = md5($_POST['password']); // password encryption with md5

    //SQL Query to save data in the database
    $sql = "INSERT INTO tbl_name SET
    full_name='$full_name',
    username='$username',
    password='$password'
    ";

    // Executing Query and saving data into database
    $res = mysqli_query($conn, $sql) ;

    // check whether the (Query is executed) data is inserted or not and display appropriate message
    if($res == TRUE){
//  echo 'Data inserted';
//create session variable to display message
$_SESSION['add'] = 'Admin Added Successfully';
// Redirect page Manage Admin
header("location:".SITEURL.'admin/manage-admin.php');
    }else{
// echo 'failed to insert Data';
//create session variable to display message
$_SESSION['add'] = 'failed to add admin';
// Redirect page to Add Admin
header("location:".SITEURL.'admin/add-admin.php');
    }

}
?>