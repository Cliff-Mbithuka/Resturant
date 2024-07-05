<?php
include('partials/menu.php');
?>

<!---Main Content Section starts--->
<div class="main-content">
    <div class="wrapper">
        <h1>Manage Admin</h1>
<br/>
<br/>
<?php 
if(isset($_SESSION['add'])){
    echo $_SESSION['add'];
    unset($_SESSION['add']); // removing session message
};
?>
<br/>
<br/>

<!---------Button to Add Admin---->
<a href="add-admin.php" class="btn-primary">Add Admin</a>
<br/>
<br/>

        <table class="tbl-full">
            <tr>
                <th>S.NO</th>
                <th>Full Name</th>
                <th>Username</th>
                <th>Actions</th>
            </tr>
<?php
            // Query to get all Admin
$sql = "SELECT * FROM tbl_name";
// Execute the Query
$res = mysqli_query($conn, $sql);

// check whether the Query is Executed or not
if($res==TRUE){
    //count Rows to check whether we have data in the database or not
    $count = mysqli_num_rows($res);

$sn=1; //create a variable and assign the value

    //check the num of rows 
    if($count> 0){
        //we have data in data base
        while($rows=mysqli_fetch_assoc($res)){
            // using while loop to get all the data from data base
            //while loop will run as long as we have data in the DB

            //Get individual data
            $id=$rows['id'];
            $full_name=$rows['full_name'];
            $username =$rows['username'];

            //display the values in our table
            ?>
<tr>
                <td><?php echo $sn++; ?> </td>
                <td><?php echo $full_name; ?></td>
                <td><?php echo $username; ?></td>
                <td>
                     <a href="#" class="btn-secondary">update Admin</a>
                     <a href="#" class="btn-tertiary">delete admin</a>
                    
                </td>
            </tr>

<?php
        }
    }else{
        // we do not have data in database
    }
}
?>
            
        </table>
    </div>
</div>
<!---- Main content section Ends--->

<?php
include('partials/footer.php');
?>