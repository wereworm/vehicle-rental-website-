<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<head>

<title> practice </title>

<body background="https://image.ibb.co/n6ugQA/Screen-Shot-2018-11-10-at-6-18-26-PM.png" style="width:900px;height:742px;">


<!-- Add something here to fix trademark -->
<meta charset="utf-8">



</head>

<body>

	<div class="row">
		<div class="columns medium-6 medium-push-6">
			<img src="https://cdn2.rcstatic.com/images/rc-guides/rentalcar1.jpeg" width="800" height="250">
			<h1 class="collapse">
				Vehicle Rental Company
			</h1>
			<p class="text-medium show-for-medium-up">
				Get rates, availability and best deals.
			</p>
		</div>
		<div>
			<form method=post action="welcome/book">
				&nbsp;Name: <input id="name1" type="text" name="name1" style="width: 200px">

				<table border="0" cellpadding="0" cellspacing="2">
					<tr>
						<td colspan="2">
							Source:
							<input type="text" id="txtSource" name="txtSource" style="width: 200px" />
							<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script>
							<script type="text/javascript">
								google.maps.event.addDomListener(window, 'load', function () {
									var places = new google.maps.places.Autocomplete(document.getElementById(
										'txtPlaces'));
									google.maps.event.addListener(places, 'place_changed', function () {
										var place = places.getPlace();
										var address = place.formatted_address;
										var latitude = place.geometry.location.lat();
										var longitude = place.geometry.location.lng();
										var mesg = "Address: " + address;
										mesg += "\nLatitude: " + latitude;
										mesg += "\nLongitude: " + longitude;
										alert(mesg);
									});
								});
							</script>


							&nbsp; Destination:
							<input type="text" id="txtDestination" name="txtDestination" style="width: 200px" />
							<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script>
							<script type="text/javascript">
								google.maps.event.addDomListener(window, 'load', function () {
									var places = new google.maps.places.Autocomplete(document.getElementById(
										'txtPlaces'));
									google.maps.event.addListener(places, 'place_changed', function () {
										var place = places.getPlace();
										var address = place.formatted_address;
										var latitude = place.geometry.location.lat();
										var longitude = place.geometry.location.lng();
										var mesg = "Address: " + address;
										mesg += "\nLatitude: " + latitude;
										mesg += "\nLongitude: " + longitude;
										alert(mesg);
									});
								});
							</script>

		</div>


		<div class="row">
			<div class="small-6 medium-4 columns">
				<p>Pick Up Date:

					<input id="date1" data-alt-format="false" data-val-required="Please select a valid date within the next 11 months."
					 maxlength="10" name="PickupDate" placeholder="mm/dd/yyyy" type="text" value="" /> </p>
			</div>
			<div class="small-6 medium-4 columns">
				Pick Up Time
				<select id="time1" name="PickupTime">
					<option value="">Select</option>
					<option value="12:00 midnight">12:00 midnight</option>
					<option value="1:00 am">1:00 am</option>
					<option value="2:00 am">2:00 am</option>
					<option value="3:00 am">3:00 am</option>
					<option value="4:00 am">4:00 am</option>
					<option value="5:00 am">5:00 am</option>
					<option value="6:00 am">6:00 am</option>
					<option value="7:00 am">7:00 am</option>
					<option value="8:00 am">8:00 am</option>
					<option value="9:00 am">9:00 am</option>
					<option value="10:00 am">10:00 am</option>
					<option value="11:00 am">11:00 am</option>
					<option value="12:00 noon">12:00 noon</option>
					<option value="1:00 pm">1:00 pm</option>
					<option value="2:00 pm">2:00 pm</option>
					<option value="3:00 pm">3:00 pm</option>
					<option value="4:00 pm">4:00 pm</option>
					<option value="5:00 pm">5:00 pm</option>
					<option value="6:00 pm">6:00 pm</option>
					<option value="7:00 pm">7:00 pm</option>
					<option value="8:00 pm">8:00 pm</option>
					<option value="9:00 pm">9:00 pm</option>
					<option value="10:00 pm">10:00 pm</option>
					<option value="11:00 pm">11:00 pm</option>
				</select>
			</div>

			<p class="text-medium show-for-medium-up">
				Please select vehicle type to get the rates.
			</p>

			<div block" style="width: 500px; height: 100px">

				<input type="image" name="SUV" onclick="GetRoute(0.62)" src="https://c4d709dd302a2586107d-f8305d22c3db1fdd6f8607b49e47a10c.ssl.cf1.rackcdn.com/thumbnails/stock-images/b6db2a65edece9c093d722af0b49e0dc.png"
				 border="0" alt="Submit" style="width: 150px;" /> &nbsp; &nbsp;
				<input type="image" name="AUDI" onclick="GetRoute(0.83)" src="https://di-uploads-pod6.dealerinspire.com/landrovernorthscottsdale/uploads/2017/10/2017-Land-Rover-Range-Rover.png"
				 border="0" alt="Submit" style="width: 150px;" class="divider" /> &nbsp; &nbsp;
				<input type="image" name="BMW" onclick="GetRoute(0.95)" src="https://www.cstatic-images.com/car-pictures/xl/USC70FOT11EA021001.png"
				 border="0" alt="Submit" style="width: 150px;" class="divider" />

			</div>

			<div>
				<h2 id="1"> </h2>
				<h2 id="2"> </h2>
				<h2 id="3" style="color:Red;"> </h2>

			</div>
			<p>
				<button type="submit" onclick=getcon() class="btn btn-primary" style="height:50px;width:200px">Confirm</button></p>

			<script>
				function getcon() {
					time1 = document.getElementById("time1").value;
					name1 = document.getElementById("name1").value;
					date1 = document.getElementById("date1").value;

					document.getElementById("3").innerHTML = "Hi " + name1 +
						". Your booking has been confirmed and your vehicle will be ready for pickup on " + date1 +
						" at " + time1;
				}
			</script>
			<tr>
				<td colspan="2">
					<div id="dvDistance">
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<div id="dvMap" style="width: 500px; height: 500px">
					</div>
				</td>
				<td>
					<div id="dvPanel" style="width: 500px; height: 500px">
					</div>
				</td>
			</tr>
			</table>


		</div>
		</form>

	</div>

	</div>



	</form>
	</div>
	</div>
	</div>
	</div>

	<div class="row">
		</table>


		<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script>
		<script type="text/javascript">
			var source, destination;
			var directionsDisplay;
			var directionsService = new google.maps.DirectionsService();
			google.maps.event.addDomListener(window, 'load', function () {
				new google.maps.places.SearchBox(document.getElementById('txtSource'));
				new google.maps.places.SearchBox(document.getElementById('txtDestination'));
				directionsDisplay = new google.maps.DirectionsRenderer({
					'draggable': true
				});
			});

			function GetRoute(rate) {
				var Dallas = new google.maps.LatLng(32.7763, -96.7969);
				var mapOptions = {
					zoom: 7,
					center: Dallas
				};
				map = new google.maps.Map(document.getElementById('dvMap'), mapOptions);
				directionsDisplay.setMap(map);
				directionsDisplay.setPanel(document.getElementById('dvPanel'));

				//*********DIRECTIONS AND ROUTE**********************//
				source = document.getElementById("txtSource").value;
				destination = document.getElementById("txtDestination").value;

				var request = {
					origin: source,
					destination: destination,
					travelMode: google.maps.TravelMode.DRIVING
				};
				directionsService.route(request, function (response, status) {
					if (status == google.maps.DirectionsStatus.OK) {
						directionsDisplay.setDirections(response);
					}
				});

				//*********DISTANCE AND DURATION**********************//
				var service = new google.maps.DistanceMatrixService();
				service.getDistanceMatrix({
					origins: [source],
					destinations: [destination],
					travelMode: google.maps.TravelMode.DRIVING,
					unitSystem: google.maps.UnitSystem.IMPERIAL,
					avoidHighways: false,
					avoidTolls: false
				}, function (response, status) {
					if (status == google.maps.DistanceMatrixStatus.OK && response.rows[0].elements[0].status !=
						"ZERO_RESULTS") {
						var distance = response.rows[0].elements[0].distance.text;
						var duration = response.rows[0].elements[0].duration.text;
						var dvDistance = document.getElementById("dvDistance");
						dvDistance.innerHTML = "";
						var x = rate;
						//  var y = distance.match(/\d+/g).map(Number);

						y = distance.slice(0, -3);

						y = y.replace(/(^,)|(,$)/g, "")




						document.getElementById("2").innerHTML = "Distance: " + y + " Miles";
						document.getElementById("2").innerHTML = "Distance: " + distance;

						document.getElementById("1").innerHTML = "Total Cost with Insurance: $" + y * x;
						//            document.getElementById("3").innerHTML = "Duration: "+ duration;



					} else {
						alert("Unable to find the distance via road.");
					}
				});
			}
		</script>


</body>








































	<!-- <title>Dushyant Dubaria</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/jquery-ui.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/styles.css">
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-ui.theme.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/script.js"></script>
</head>
<body>
<div id="header">
	
</div>
<div class="container">
	<div class="row">
		<p>Please fill the following form to book a  ticket</p>
	</div>
	<div class="row">
	<form action="/welcome/book" method="POST">
	  <div class="form-group">
		<label for="exampleInputEmail1">Email address</label>
		<input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
	  </div>
	  <div class="form-group">
		<label for="passengers">Number of passengers</label>
		<select class="form-control" name="passengers" id="passengers">
		  <option>1</option>
		  <option>2</option>
		  <option>3</option>
		  <option>4</option>
		</select>
	  </div>
	  <div class="form-group">
	  	<label for="departure">Departure date</label>
	  	<input type="text" id="datepicker" name="departure">
	  </div>
	  <button type="submit" class="btn btn-primary">Submit</button>
</form>
	</div>
	</div>
	</div>
	</div>
	<div class="row">
                <h5><i>...    You either die a hero or you live long enough to see yourself become the villain.</h5>
	</i></div>
        <div class="row">
		
	<div class="row">
                <h5><i>......    It's not about money, it's about sending a message. Remember everything burns away!!!</h5>
	</i></div>
        <div class="row">

</form>
	</div>
</div>

</body> -->
</html>

 
