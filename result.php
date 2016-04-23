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
                            <input type="date" class="form-control" name="checkindate" value="<?php echo $_GET["checkindate"]; ?>" required/>
                        
                        </div>
                    </div>
                   
                    
                        <div class="form-group col-md-3">
                            Check Out :
                            <div class='input-group date'>
                                 <span class="input-group-addon">
                                    <span class="fa fa-calendar"></span>
                                </span>
                                <input type="date" class="form-control" name="checkoutdate" value="<?php echo $_GET["checkoutdate"]; ?>" required/>
                                
                            </div>
                        </div>
                        <div class="form-group col-md-2">
                            Type :
                            <select name="bookingtype" class="form-control">
                                <option value="hotelroom">Hotel Room </option>
                                <option value="meetingroom">Meeting Room</option>
                            </select>
                               
                                
                            </div>
                        <div class="form-group col-md-2">
                                <button type="submit" class="btn btn-m"> Check Rooms </button>
                        </div>
                    </form>
    </div>

    <?php
        if ($_GET["bookingtype"] == 'hotelroom'){
            include('requestKamar.php');
        }
        elseif ($_GET["bookingtype"] == 'meetingroom') {
            include('requestmeeting.php');
        }
    ?>

</div>


<?php include('footer.php'); ?>