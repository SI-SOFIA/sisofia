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
        include('requestKamar.php');
    ?>

</div>


<?php include('footer.php'); ?>