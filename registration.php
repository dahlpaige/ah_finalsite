<?php include_once "includes/html_top.php"; ?>
<?php include_once "includes/functions.php"; ?>
<?php include_once "includes/header.php"; ?>

<!----- SECTION ----->
<section>

	<!-- row 1-->
	<div class="row">
		<!-- col 1 -->
		<div class="col-sm">
			<img src="images/run.jpg">
		</div>
		<!-- /col 1 -->

		<!-- col 2 -->
		<div class="col-sm">
			<img src="images/racing.jpg">
		</div>
		<!-- /col 2 -->

		<!-- col 3 -->
		<div class="col-sm">
			<img src="images/swim.jpg">
		</div>
		<!-- /col 3 -->
	</div>
	<!-- /row 1 -->
</section>
<!----- END ----->



<!----- SECTION ----->
<section>
	<!-- row 1 -->

	<form id="form1" name="form1" method="post" action="registration_action.php">
		<table>
			<tr class="addRecord">
				<td class="form-group">
					<label for="position">Athlete or Volunteer</label>
					<select name="position" id="position" class="form-control required">
        <option>Athlete</option>
		  <option>Volunteer</option>
      </select>
				</td>
			</tr>
			<tr class="addRecord">
				<td class="form-group">
					<label for="firstname">First Name</label>
					<input type="text" class="form-control" name="firstname" id="firstname" placeholder="First">
				</td>
				<td class="form-group">
					<label for="lastname">Last Name</label>
					<input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last">
				</td>
			</tr>
			<tr class="addRecord">
				<td class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" name="email" id="email" placeholder="youremail@email.com" required>
				</td>
				<td class="form-group">
					<label for="phone">Phone # (please follow the format below)</label>
					<input type="tel" class="form-control" name="phone" id="phone" placeholder="5035551234" required>
				</td>
			</tr>
			<tr class="addRecord">
				<td class="form-group">
					<label for="eventSat">Saturday Events</label>
					<select name="eventSat" id="eventSat" class="form-control">
						<option selected disabled>Choose an event...</option>
        <option>Long Course Triathlon</option>
		  <option>Olympic Triathlon</option>
						<option>10K</option>
						<option>Half Marathon</option>
						<option>No Event</option>
      </select>
				</td>
				<td class="form-group">
					<label for="eventSun">Sunday Events</label>
					<select name="eventSun" id="eventSun" class="form-control">
						<option selected disabled>Choose an event...</option>
        <option>Sprint Triathlon</option>
		  <option>Try-A-Tri</option>
						<option>Splash n Dash</option>
						<option>No Event</option>
      </select>
				</td>
			</tr>
		</table>
		<button type="submit" class="btn">Register</button>
	</form>

	<!-- /row 1 -->
</section>
<!----- END ----->

<?php include_once "includes/footer.php"; ?>
