<?php include('head.php'); ?>
<?php include('minimalnavigation.php'); ?>

<div class="container">
	<div class="text-center">
	<hr><hr><hr>
	<h2 class="section-heading"> Ready To Be Yours </h2>
	<hr>
	</div>
	<div class="row">
		<form name="checkavailability" action="result.php" method="get">
                    <div class="form-group col-md-offset-2 col-md-3">
                        Check In :
                        <div class='input-group date'>
                            <span class="input-group-addon">
                                <span class="fa fa-calendar"></span>
                            </span>
                            <input type="date" class="form-control" name="checkindate"/>
                        
                        </div>
                    </div>
                   
                    
                        <div class="form-group col-md-3">
                            Check Out :
                            <div class='input-group date'>
                                 <span class="input-group-addon">
                                    <span class="fa fa-calendar"></span>
                                </span>
                                <input type="date" class="form-control" name="checkoutdate" />
                                
                            </div>
                        </div>
                        <div class="form-group col-md-2">
                                <button type="submit" class="btn btn-m" name="checkbutton"> Check </button>
                        </div>
        </form>
    </div>
    <hr>
    <?php
    	//for each result
    	echo '<form name="book" method="post" action="processbooking.php">';
    	echo '<div class="row">';
    		echo '<div class="col-sm-3">';
    			echo 'Picture';
    		echo '</div>';
    		echo '<div class="col-sm-4">';
    			echo 'Room Name <br />';
    			echo 'Description <br />';
    		echo '</div>';
    		echo '<div class="col-sm-3">';
    			//use jquery to update price
    			echo 'Price <br />';
    			echo 'Quantity <br />';
    		echo '</div>';
    		echo '<div class="col-sm-2">';
    			//processbooking
    			echo '<button type="submit" class="btn btn-m" name="book"> Book </button>';
    		echo '</div>';
    	echo '</div>';
    	echo '</form>';
    	echo '<hr>';
    ?>

</div>


<?php include('footer.php'); ?>