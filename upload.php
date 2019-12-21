<!-- 
TABLE CREATION QUARY:

CREATE TABLE `image_slider_` (
  `id` int(11) NOT NULL,
  `file_name` text COLLATE utf8_unicode_ci NOT NULL,
  `uploaded_on` datetime NOT NULL DEFAULT current_timestamp(),
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
);

ALTER TABLE `image_slider_`
  ADD PRIMARY KEY (`id`);
  
ALTER TABLE `image_slider_`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;


-->


<?php 
	include('connection.php');

	if(@$_POST['Upload']){

		$file = $_FILES['image'];
		$file_name = $file['name'];
		$file_type = $file ['type'];
		$file_size = $file ['size'];
		$file_path = $file ['tmp_name'];

		echo 'Uploading code started';
		if($file_name!="" && ($file_type="image/jpeg"||$file_type="image/png"||$file_type="image/gif")&& $file_size<=1614400){
echo 'if approved started';
			if(move_uploaded_file ($file_path,'sliders/'.$file_name)){

				$query=mysqli_query($conn,"Insert into image_slider_(file_name)values('$file_name')");
			}

			if($query==true)
			{
			    echo '<script>alert("Image Inserted into Database")</script>';
			    echo '<script>window.location = "sliderimageupload.php";</script>';
			}
		}
		else{
			echo '<script>alert("Select JPEG, PNG or GIF file,")</script>';
			echo '<script>window.location = "sliderimageupload.php";</script>';
		}

		echo 'Uploading code Ended';
	}
?>