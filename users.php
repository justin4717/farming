<?php
    include("Auth.php");
    include("header.php");
    include("get_user.php");
?>
<div class="container">
	 <table class="table table-bordered">
    	<thead>
    		<tr><th colspan="5">Users</th></tr>
    		<tr>
    			<th>Id</th>
    			
    			<th>Name</th>
    			<th>Email</th>
    			<th>Phone</th>
    			<th>User</th>

    	</thead>
    	<tbody><?php foreach($items as $item) :	 ?>
    		<tr>
    		    <td><?php echo $item["reg_id"]; ?></td>
    		    
    		    <td><?php echo $item["name"]; ?></td>
    		    <td><?php echo $item["email"]; ?></td>
    		    <td><?php echo $item["phone"]; ?></td>
    		    <td><?php echo $item["user_type"]; ?></td>
    		</tr>
    		<?php endforeach ; ?>
    	</tbody>
    </table>	

    <br>
         
</div>
<style type="text/css">
	th{
		text-align: center;
	}
	td{
		text-align: center;
	}
	input{width: }
</style>