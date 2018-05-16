<?php
/* Template Name: My Meal Data */
?>

<?php
get_header();?>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">


    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h2 class="">Your Meal Plan</h2>
      <p class="lead">Here you can check your daily meal plan.</p>
    </div>

    <div class="container">
    

  <button type="button" class="btn btn-success">Today's Score - 22 </button>

<br>
</br>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Meal Of</th>
        <th scope="col">Your Today's Score</th>
        <th scope="col">Expected number of calories</th>
      </tr>
    </thead>
    <tbody>
     
      <tr class="table-success">
        <th scope="row">jitendra</th>
        <td>22</td>
        <td>35</td>
      </tr>
      
    </tbody>
  </table>

<br>
</br>

<button type="button" class="btn btn-outline-primary">Add Your Meal</button>
</br>

<br>
      <?php 

      $args = array(
      	'post_type' => array('meal' )
      	);
      $the_query = new WP_Query( $args );

	 // The Loop
      if ( $the_query->have_posts() ) {
      	?>
      	<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Text</th>
                <th>Number of Calories</th>
                <th>date</th>
                <th>Time</th>
                <th scope="col">Action</th>

            </tr>
        </thead>
        <tbody>

        <?php 

        while ( $the_query->have_posts() ) {
		$the_query->the_post();?>
		

		<tr>
                <td><?php echo get_the_title();?></td>
              
            	<?php 

            	$key_1_value = get_post_meta( get_the_ID(), 'meal_details_number-of-calories', true );

            	$meal_details_date = get_post_meta( get_the_ID(), 'meal_details_date', true );

            	$meal_details_time = get_post_meta( get_the_ID(), 'meal_details_time', true );
            	
            	?>
                <td><?php echo $key_1_value; ?></td>
                <td><?php echo $meal_details_date; ?></td>
                <td><?php echo $meal_details_time; ?></td>
                <td>Edit Delete</td>


            </tr>
	<?php } ?>    
            <?php 

            wp_reset_postdata();
        } else {
			// no posts found
        }
            ?>
            
        </tbody>
        <tfoot>
            <tr>
                <th>Text</th>
                <th>Number of Calories</th>
                <th>date</th>
                <th>Time</th>
                <th>Action</th>

            </tr>
        </tfoot>
    </table>

<?php get_footer();
?>

<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
    $('#example').DataTable();
} );
</script>