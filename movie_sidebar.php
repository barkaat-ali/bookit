<!-- 
 			<div class="listview_1_of_3 images_1_of_3">
					<h2 style="color:#555;">Films in Theaters</h2>
					
					<?php
          	 $today=date("Y-m-d");
          	$qry2=mysqli_query($con,"select * from  tbl_movie where status='0' order by rand() limit 5");
						
          	  while($m=mysqli_fetch_array($qry2))
                   {
                    ?>
            <div class="content-left">
					<div class="listimg listimg_1_of_2">
					<?php
						
						?>
						 <a href="about.php?id=<?php echo $m['movie_id'];?>"><img src="<?php echo $m['image'];?>"></a>
					</div>
					<div class="text list_1_of_2">
						  <div class="extra-wrap1">
                                         <a href="about.php?id=<?php echo $m['movie_id'];?>" class="link4" style="text-decoration:none; font-size:18px;"><?php echo $m['movie_name'];?></a><br>
                                        <span class="data">Release Date: <?php echo $m['release_date'];?></span><br>
                                        Cast: <Span class="data"><?php echo $m['cast'];?></span><br>
                                        Description: <span" class="color2" style="text-decoration:none;"><?php echo $m['desc'];?></span><br>
                                    </div>
					</div>
					
					<div class="clear"></div>
				</div>
  	    <?php
  	    	}
  	    	?>
					
					
				
				
					
					
				
				
				
				
				</div>		
				<div class="clear"></div>		
			 -->

			 <?php
    
    $sql = "SELECT * FROM tbl_movie where status='0' order by rand() limit 6";
    ?>
<div id="home-section-1" class="movie-show-container">
        
        <h3>Films in Theaters</h3>
		
        
        <div class="movies-container">
		
            <?php
            if ($result = mysqli_query($con, $sql)) {
                if (mysqli_num_rows($result) > 0) {
					
                    for ($i = 0; $i <= 5; $i++) {
                        $row = mysqli_fetch_array($result);
                        echo '<div class="movie-box">';
                        

						?>
						<a href="about.php?id=<?php echo $row['movie_id'];?>">
						<?php
                        echo '<img src="' . $row['image'] . '" alt=" ">';
                        echo '<div class="movie-info ">';
						
                        echo '<h3>' . $row['movie_name'] . '</h3>';
                       
                        echo '</div>';
                        echo '</div>';
						?>
						<a href="about.php?id=<?php echo $m['movie_id'];?>">
						<?php
						
                    }
                    mysqli_free_result($result);
                } else {
                    echo '<h4 class="no-annot">No Booking to our movies right now</h4>';
                }
            } else {
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
            }
    
          // Close connection
		//   mysqli_close($con);
            ?>
			  
        </div>
