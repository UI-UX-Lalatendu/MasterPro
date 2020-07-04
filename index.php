<?php
//session_start();
//include('includes/isLogin.php');
//check_login();
?>
<!DOCTYPE html>
<html lang="en">
<!-- doctype Starts Here -->
	<?php include( "includes/doctype.php" ); ?>  
<!-- doctype Ends Here -->

<body>
<!-- header Starts Here -->
<header>
	<?php include( "includes/header.php" ); ?>  
</header>
<!-- header Ends Here -->

<!-- banner Starts Here -->
<section class="banner">
	<?php include( "includes/banner.php" ); ?>  
</section>
<!-- banner Ends Here -->

<!-- About Starts Here -->
<section class="about py-5">
   <div class="container">
     
	  <div class="row">
         <div class="col-sm-7">
			 <div class="row">
			 <div class="col-sm-12 mb-3">
				<?php
					//execute the SQL query and return records
					$result = mysql_query("SELECT * FROM about");
					$row = mysql_fetch_assoc( $result );
						echo "<h2>{$row['heading']}</h2>";
				?>
				</div>
			 
			 <div class="col-sm-12">

			 
		 <?php
			//execute the SQL query and return records
			$result = mysql_query("SELECT * FROM about");
			$row = mysql_fetch_assoc( $result );
				echo "<p>{$row['description']}</p>";
		?>
		</div>
	</div>
		 </div>
		 <div class="col-sm-5">
		 <?php
			//execute the SQL query and return records
			$result = mysql_query("SELECT * FROM about");
			$row = mysql_fetch_assoc( $result );
				echo "<img src='assets/images/about/{$row['image']}' class='img-fluid'>";
		?>
		 </div>
	  </div>
	</div>
</section>
<!-- Courses Ends Here -->

<!-- Results Starts Here -->
<section class="highlights py-5">
	<div class="container">
		<div class="row mb-5">
			<div class="col-sm-12 text-center">
				<h2 class="text-white">Our Courses</h2>
			</div>
		</div>
		<div class="row">

			<?php
				//execute the SQL query and return records
				$result = mysql_query("SELECT * FROM course ");
				while( $row = mysql_fetch_assoc( $result ) ){
				

				echo "<div class='col-sm-4 mb-4'>";
					echo "<div class='card courseBox'>";
					echo "<div class='card-header'><h3>{$row['Title']}</h3></div>";
					echo "<div class='card-body' style='position:relative'>";
						echo "<img src='assets/images/courses/{$row['Image']}' style='height:100px; width:100%;overflow: hidden; '  class='img-fluid'>";	
						echo "<p class='my-3' style='height:100px;overflow: hidden; position: relative;'>{$row['Description']}</p>";
						echo "<a href='#' class='text-right d-block'>Read More</a>";
				
				echo "</div></div></div>";
				}
				?>

				
			
		</div>	
	</div>
</section>
<!-- Results Ends Here -->

<!-- Services Starts Here -->
<section class="smaterial">
   <div class="container">
      <div class="row">
         
      </div> 
   </div>
</section>
<!-- Services Ends Here -->

<!-- Advantage Starts Here -->
<section class="infra">
	<div class="container-fluid">
		<div class="row">
         
		</div> 
	</div>
</section>
<!-- Advantage Ends Here -->

<!-- Solutions Starts Here -->
<section class="amenities">
	<div class="container">
		<div class="row">
         
		</div>
	</div>
</section>
<!-- Solutions Ends Here -->

<!-- Testimonial Starts Here -->
<section class="map">
	<div class="container-fluid">
		<div class="row">
		
		</div> 
	</div>
</section>
<!-- Testimonial Ends Here -->

<!-- header Starts Here -->
<footer>
	<?php include( "includes/footer.php" ); ?>  
</footer>
<!-- footer Ends Here -->


</body>
</html>