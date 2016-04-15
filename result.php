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
                    <div class="form-group col-md-offset-1 col-md-3">
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
                            Type :
                            <select name="bookingtype" class="form-control">
                                <option value="hotelroom">Hotel Room </option>
                                <option value="meeetingroom">Meeting Room</option>
                            </select>
                               
                                
                            </div>
                        <div class="form-group col-md-2">
                                <button type="submit" class="btn btn-m" name="checkroom"> Check Rooms </button>
                        </div>
                    </form>
    </div>
    <hr>
    <?php
    	//for each result
    	echo '<form name="book" method="post" action="processbooking.php">';
    	echo '<div class="row">';
    		echo '<div class="col-sm-3">';
    			echo '<img src="img/room/single.png" class="img-responsive" alt="">';
    		echo '</div>';
    		echo '<div class="col-sm-4">';
    			echo '<p><label> SINGLE </label></p>';
    			echo '<b>Description </b><br /> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia minuti firme desperantes vix sempiternum sentiri possunt, philosophia permanentes, sentit careret.';
    		echo '</div>';
    		echo '<div class="col-sm-3">';
    			//use jquery to update price
    			echo ' <br /> <br /><b>Price</b> <br /> Rp 200.000,-/night<br /><br />';
    			echo '<b>Quantity</b> <br />';
    			echo '<select>
    				<option value="1"> 1 </option>
    				<option value="1"> 2 </option>
    				<option value="1"> 3 </option>
    				<option value="1"> 4 </option>
    				<option value="1"> 5 </option>
    				</select>';
    		echo '</div>';
    		echo '<div class="col-sm-2">';
    			//processbooking
    			echo ' <br /> <br /><button type="submit" class="btn btn-m" name="book"> Book </button>';
    		echo '</div>';
    	echo '</div>';
    	echo '</form>';
    	echo '<hr>';

    	    	echo '<form name="book" method="post" action="processbooking.php">';
    	echo '<div class="row">';
    		echo '<div class="col-sm-3">';
    			echo '<img src="img/room/double.png" class="img-responsive" alt="">';
    		echo '</div>';
    		echo '<div class="col-sm-4">';
    			echo '<p><label> DOUBLE </label></p>';
    			echo '<b>Description </b><br /> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia minuti firme desperantes vix sempiternum sentiri possunt, philosophia permanentes, sentit careret.';
    		echo '</div>';
    		echo '<div class="col-sm-3">';
    			//use jquery to update price
    			echo ' <br /> <br /><b>Price</b> <br /> Rp 400.000,-/night<br /><br />';
    			echo '<b>Quantity</b> <br />';
    			echo '<select>
    				<option value="1"> 1 </option>
    				<option value="1"> 2 </option>
    				<option value="1"> 3 </option>
    				<option value="1"> 4 </option>
    				<option value="1"> 5 </option>
    				</select>';
    		echo '</div>';
    		echo '<div class="col-sm-2">';
    			//processbooking
    			echo ' <br /> <br /><button type="submit" class="btn btn-m" name="book"> Book </button>';
    		echo '</div>';
    	echo '</div>';
    	echo '</form>';
    	echo '<hr>';

    	    	echo '<form name="book" method="post" action="processbooking.php">';
    	echo '<div class="row">';
    		echo '<div class="col-sm-3">';
    			echo '<img src="img/room/executive.png" class="img-responsive" alt="">';
    		echo '</div>';
    		echo '<div class="col-sm-4">';
    			echo '<p><label> EXECUTIVE </label></p>';
    			echo '<b>Description </b><br /> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia minuti firme desperantes vix sempiternum sentiri possunt, philosophia permanentes, sentit careret.';
    		echo '</div>';
    		echo '<div class="col-sm-3">';
    			//use jquery to update price
    			echo ' <br /> <br /><b>Price</b> <br /> Rp 600.000,-/night<br /><br />';
    			echo '<b>Quantity</b> <br />';
    			echo '<select>
    				<option value="1"> 1 </option>
    				<option value="1"> 2 </option>
    				<option value="1"> 3 </option>
    				<option value="1"> 4 </option>
    				<option value="1"> 5 </option>
    				</select>';
    		echo '</div>';
    		echo '<div class="col-sm-2">';
    			//processbooking
    			echo ' <br /> <br /><button type="submit" class="btn btn-m" name="book"> Book </button>';
    		echo '</div>';
    	echo '</div>';
    	echo '</form>';
    	echo '<hr>';
    ?>

</div>


<?php include('footer.php'); ?>