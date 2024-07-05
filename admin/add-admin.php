<?php
include('partials/menu.php');
?>
<div class="main-content">
    <div class="wrapper">
        <h1>Add Admin</h1>

        <br><br>


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
if(isset($_POST['submit'])){
    // button clicked
//    echo  "button clicked";

//Get data from the form

echo $full_name = $_POST['full_name'];
echo $username = $_POST['username'];
echo $password = $_POST['password'];
}
?>