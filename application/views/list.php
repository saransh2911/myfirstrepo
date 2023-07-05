<!DOCTYPE html>
<html lang="en">
<head>
    <title>CRUD Application </title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
</head>
<body>
    <div class = " navbar navbar-dark bg-dark">
        <div class="container ">
            <a href = "#" class= "navbar-brand">Crud Application</a>
        </div>
    </div>
    <div class="container" style="padding-top: 10px;">

    <div class="row">
        <div class ="col-md-12">
            <div class ="row">
                <div class="col-6"><h3>View users</h3>

                </div>
                <div class="col-6 text right">
                    <a href="<?php echo base_url().'index.php/user/create';?>" class="btn btn-primary"> Create</a>
                </div>
            </div>  
            <hr>   
        </div>  
    </div>  
    <div class="row">
        <div clas="col-md-12">
            <table class="table table-striped">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                <?php  if(!empty($users)){ foreach($users as $user){?>
                <tr>
                    <td><?php echo $user['user_id']?></td>
                    <td><?php echo $user['name']?></td>
                    <td><?php echo $user['email']?></td>
                    <td>
                        <a href ="<?php echo base_url().'index.php/user/edit/'.$user['user_id'] ?>" class="btn btn-primary">Edit</a>
                    </td>
                    <td>
                        <a href ="<?php echo base_url().'index.php/user/delete/'.$user['user_id']?>" class="btn btn-danger">Delete</a>
                    </td>    
                </tr>
                <?php }} else {?>
                <tr>
                    <td colspan="5"> Records Not Found</td>
                </tr>
                <?php }?> 
            </table>      
        </div>
    </div>

    
</div>
</body>
</html> 