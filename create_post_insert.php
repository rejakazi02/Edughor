<?php 

$con=mysqli_connect("localhost","root","","edughor");
if (!$con) {
	echo "database connection error";
}


if (isset($_POST['save'])) {
	
	$post_title = $_POST['post_title'];
	$post_description = $_POST['post_description'];
	$post_type = $_POST['post_type'];
	






// for uploading image

   $media = $_FILES['image']['name'];

    $tmp_name = $_FILES['image']['tmp_name'];

    $path='images/'.$media;
    move_uploaded_file($tmp_name,$path);

            

//------------------------------------

	
$insert_query = "INSERT INTO create_post(post_title,post_description,post_type,image) VALUES('$post_title','$post_description','$post_type','$media')";
$result = mysqli_query($con,$insert_query);
if ($result) {
    echo "<script>alert('Your Record Sucessfully Inserted.');window.location.href = 'create_post.html';</script>";

}else{
    echo "error";
}

}


?>