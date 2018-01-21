<?php
include('dbconnect.php');
include('review_disp.php');

?>
<html>
    <style>
.button {
    background-color: #fff; /* Green */
    border: none;
    color: white;
    padding: 9px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
    
}


.button5 {
    background-color: white;
    color: black;
    border: 2px solid #556;
}

.button5:hover {
    background-color: #556;
    color: white;
}
</style>
    
<div class="form">		
		<div class="inside_form">
            <h4>REVIEWS</h4>
			<form method='POST' action="">
			  <p style="width:60%">
				
				<textarea name="review" value="" required="true" cols="45" rows="8" maxlength="65525" style="margin: 8px 0px; width: 578px; height: 146px;"></textarea>
			  </p>
			  <p style="width:60%">
				<input class="button button5" type='submit' name='submit' value="Submit"/>
			   </p>
			</form>
		</div>
	</div> 
<?php
	$email ="";
        $date;
	$review="";
    $p_id="";
    $con=mysql_connect("localhost","root","") or die(mysql_error());
	$db=mysql_select_db('clothing',$con)or die(mysql_error());
	if(isset($_POST['submit']))
		{
			$email =$_SESSION['email'];
			$date= date('Y-m-d H:i:s');		
			$review=$_POST['review'];
            $p_id=$_GET['p_ID'];
			$query="INSERT INTO reviews(email,date,review,p_id) value('$email','$date','$review','$p_id')";
        
			if(mysql_query($query))
			{
			echo"<script>alert('Thanks for your review..Your review is helpfull for others')</script>"; 
			}
		} 
getComments($dbcon);
	?>
    
    </html>