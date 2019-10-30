


<form action="" method="post" style="padding:80px;">

<b>Search for an Item:</b>
<input type="text" name="new_cat" required/> 
<input type="submit" name="search_cat" value="search Item" /> 

</form>

<?php 
include("includes/db.php"); 

	if(isset($_POST['search_cat'])){
	
	$new_cat = $_POST['new_cat'];
	
	$search_cat = "select * from categories where cat_title='$new_cat'";

	$result = mysqli_query($con, $search_cat); 
	
	if($result){
	
	echo "<script>alert('Item has been found in the Database')</script>";
	echo "<script>window.open('index.php?view_cats','_self')</script>";
	}
    
    else
    {
        echo "<script>alert('Enter Correct Item')</script>";
    }
}

?>


