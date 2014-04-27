<style>
	body{ background-repeat:no-repeat}
</style>
<?php
	include("menu.php");
	include("cn.php");
	function show_customers()
		{
			$sr = 1;
			$query = "select * FROM master_customers order by name";
			$run = mysql_query($query);
			while($row = mysql_fetch_assoc($run))
			{
			?>
            	<tr>
                	<td>
                    	<?php echo $sr;?>
                    </td>
                    <td>
                    	<?php echo $row['name'];?>
                    </td>
                    <td>
                    	<?php
						if($row['status'] == "Y")
						{
							echo "<font style='color:green'>Active</font>";
						}
						else
						{
							echo "<font style='color:red'>Inactive</font>";
						}
						?>
                    </td>
                     <td>
                    	<a href="edit_customer.php?op=del&id=<?php echo $row['id'];?>&st=<?php echo $row['status'];?>">
                        	Edit
                        </a>
                    </td>
                    <td>
                    	<a href="customer.php?op=del&id=<?php echo $row['id'];?>&st=<?php echo $row['status'];?>">
                        	Delete
                        </a>
                    </td>
                </tr>
            <?php
			$sr++;
			}
		}//Function Show Ends
		
		function create_customer()
		{
		?>
        <table align="center" border="2" style="margin-top:20px;">
        <form action="customer.php?op=save" method="post">
        	<tr>
            	<td align="right">
                	Customer Name : 
                </td>
                <td>
                	<input type="text" name="cname" />
                </td>
            </tr>
            <tr>
            	<td colspan="2" align="center">
                	<input type="submit" value="Save Custome" />
                </td>
            </tr>	
        </form>
        </table>
        <?php		
		}
if(isset($_GET['op']))
{
	$op = $_GET['op'];
	if($op == "new")
	{
		create_customer();
	}
	if($op == "save")
	{
		$cname = $_POST['cname'];
		$savequery = "INSERT INTO master_customers (name)  VALUES ('$cname')";
		mysql_query($savequery);
		header("location:customer.php");
	}
	if($op == "del")
	{
		$id = $_GET['id'];
		$status = $_GET['st'];
		if($status == 'Y')
		{
			$setstatus = 'N';
		}
		if($status == 'N')
		{
			$setstatus = 'Y';
		}
		$upquery = "UPDATE master_customers SET status = '$setstatus' WHERE id = '$id'";
		mysql_query($upquery);
		header("location:customer.php");
	}
}
?>
<table align="center" border="2" style="margin-top:15px;">
	<tr>
    	<td colspan="4">
	        <center>
        	<h2> Customer List </h2>
           	</center>
            <a href="customer.php?op=new">
            	Create New
            </a>
        </td>
    </tr>
    <tr>
    	<td align="center">
        	Sr.
        </td>
        <td align="center">
        	Customer Name
        </td>
        <td align="center">
        	Status
        </td>
          <td align="center">
        	Edit
        </td>
        <td align="center">
        	Delete
        </td>
    </tr>
    <?php
		show_customers();
	?>
</table>