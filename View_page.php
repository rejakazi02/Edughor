<?php 

$con=mysqli_connect("localhost","root","","edughor");
if (!$con) {
	echo "database connection error";
}

$view_query = "SELECT * FROM create_post";
$query_result = mysqli_query($con,$view_query);


?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  float: left;
  text-align: center;
  font-family: arial;
  margin-right: 30px;
  margin-bottom: 30px;
  width: 30%;
 

}
.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
</head>
<body>

<h2 style="text-align:center">User post Card</h2>


<?php 

if ($query_result) {
	
	while($rows = mysqli_fetch_assoc($query_result)){
	$post_title = $rows['post_title'];
	$post_description = $rows['post_description'];
	$post_type = $rows['post_type'];
	$image = $rows['image'];
	?>


	<div class="card">
  <img src="images/<?php echo $image; ?>" alt="" style="width:300px;height:250px;">
  <h1><?php echo $post_type; ?></h1>
  <p class="title"><?php echo $post_description; ?></p><br><br>
  
</div>





		
	<?php }
}


 ?>

</body>
</html>