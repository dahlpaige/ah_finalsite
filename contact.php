<?php include_once "includes/html_top.php"; ?>
<?php include_once "includes/functions.php"; ?>
<?php include_once "includes/header.php"; ?>

<!----- SECTION ----->
<section>
	<!-- row 1 -->

	<form id="form1" name="form1" method="post" action="contact_action.php">
		<table>
			<tr class="addRecord">
				<td class="form-group">
					<label for="contactFirst">First Name</label>
					<input type="text" class="form-control" name="contactFirst" id="contactFirst" placeholder="First" required>
				</td>
				<td class="form-group">
					<label for="contactLast">Last Name</label>
					<input type="text" class="form-control" name="contactLast" id="contactLast" placeholder="Last" required>
				</td>
			</tr>
			<tr class="addRecord">
				<td class="form-group">
					<label for="contactEmail">Email</label>
					<input type="contactEmail" class="form-control" name="contactEmail" id="contactEmail" placeholder="youremail@email.com" required>
				</td>
				<td class="form-group">
					<label for="contactPhone">Phone #</label>
					<input type="tel" class="form-control" name="contactPhone" id="contactPhone" placeholder="5035551234" required>
				</td>
			</tr>
			<tr class="addRecord">
				<td class="form-group">
					<label for="contactComment">Comment or Question</label>
					<textarea class="form-control" name="contactComment" id="contactComment">Enter text here...</textarea>
				</td>
			</tr>
		</table>
		<button type="submit" class="btn">Submit</button>
	</form>

	<!-- /row 1 -->
</section>
<!----- END ----->


<?php include_once "includes/footer.php"; ?>
