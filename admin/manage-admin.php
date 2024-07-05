<?php
include('partials/menu.php');
?>

<!---Main Content Section starts--->
<div class="main-content">
    <div class="wrapper">
        <h1>Manage Admin</h1>
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
            <tr>
                <td>1. </td>
                <td>Clifford Mbithuka</td>
                <td>Cliff</td>
                <td>
                     <a href="#" class="btn-secondary">update Admin</a>
                     <a href="#" class="btn-tertiary">delete admin</a>
                    
                </td>
            </tr>
            <tr>
                <td>2. </td>
                <td>Clifford Mbithuka</td>
                <td>Cliff</td>
                <td>
                <a href="#" class="btn-secondary">update Admin</a>
                <a href="#" class="btn-tertiary">delete admin</a>
                </td>
            </tr>
            <tr>
                <td>3 . </td>
                <td>Clifford Mbithuka</td>
                <td>Cliff</td>
                <td>
                <a href="#" class="btn-secondary">update Admin</a>
                <a href="#" class="btn-tertiary">delete admin</a>
                </td>
            </tr>
        </table>
    </div>
</div>
<!---- Main content section Ends--->

<?php
include('partials/footer.php');
?>