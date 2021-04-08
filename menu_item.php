<?php
    include("Auth.php");
    include("header.php");
    include("getmenu.php");
?>
<div class="container">
	 
         <br>
    <table class="table table-bordered">
    	<thead>
    		<tr><th colspan="4">Menu List</th></tr>
    		<tr>
    			<th>Id</th>
    			
    			<th>Menu</th>
    			<th>Price</th>
    	</thead>
    	<tbody><?php foreach($items as $item) :	 ?>
    		<tr>
    		    <td><?php echo $item["id"]; ?></td>
    		    
    		    <td><?php echo $item["title"]; ?></td>
    		    <td><?php echo $item["item_price"]; ?></td>
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
	#myModal{
		margin-top: 200px;
		/*width: 700px;*/
	}
</style>