<div class="container-fluid">
	<form action="" id="manage-register">
		<input type="hidden" name="id" value="<?php echo isset($id) ? $id :'' ?>">
		<input type="hidden" name="event_id" value="<?php echo isset($_GET['event_id']) ? $_GET['event_id'] :'' ?>">
		<div class="form-group">
		<label for="" class="control-label"><b>Data Privacy Agreement</b></label>
			<label for="" class="control-label">By signing this REGISTRATION FORM, you hereby allow/authorize UPH Calamba Campus and their authorized personnel to gather and process your personal information (name, email address, contact number, and school) specifically for the purpose of DOCUMENTATION. All information gathered in this form will be kept secured and confidential or a period of THREE (3) YEARS from the collection date and will be destroyed by means of shredding and/or file deletion after the prescribed retention period of THREE (3) YEARS in accordance with Republic At 10173 or the Data Privacy Act of 2012 of the Republic of the Philippines.</label>
			<div class="form-group">
			<label for="" class="control-label"><b>Proof of Authorization</b></label>
		</div>
		<div>
			<input type="radio" name="auth" value="authorization" /> I hereby authorize UPHSD Calamba Student Affairs Office to use, process and store my information for alumni activity registration purposes only.
		</div>
			<label for="" class="control-label">Full Name</label>
			<input type="text" class="form-control" name="name"  value="<?php echo isset($name) ? $name :'' ?>" required>
		</div>
		<div class="form-group">
			<label for="" class="control-label">Address</label>
			<textarea cols="30" rows = "2" required="" name="address" class="form-control"><?php echo isset($address) ? $address :'' ?></textarea>
		</div>
		<div class="form-group">
			<label for="" class="control-label">Email</label>
			<input type="email" class="form-control" name="email"  value="<?php echo isset($email) ? $email :'' ?>" required>
		</div>
		<div class="form-group">
			<label for="" class="control-label">Contact #</label>
			<input type="text" class="form-control" name="contact"  value="<?php echo isset($contact) ? $contact :'' ?>" required>
		</div>
		<div class="form-group">
			<label for="" class="control-label">School</label>
			<input type="text" class="form-control" name="school"  value="<?php echo isset($school) ? $school :'' ?>" required>
		</div>

		<div class="form-group">
		<label for="course">Course:</label>
        <select name="course" id="course">
            <option value="">--- Select your course ---</option>
            <option value="BS in Medical Technology" selected>BS in Medical Technology</option>
            <option value="BS in Nursing" >BS in Nursing</option>
            <option value="BS in Occupational Therapy">BS in Occupational Therapy</option>
			<option value="BS in Pharmacy" >BS in Pharmacy</option>
			<option value="BS in Physical Therapy" >BS in Physical Therapy</option>
			<option value="BS in Radiologic Technology" >BS in Radiologic Technology</option>
			<option value="BS in Architecture" >BS in Architecture</option>
			<option value="AB in Communication" >AB in Communication</option>
			<option value="AB in Psychology" >AB in Psychology</option>
			<option value="BS in Accountancy" >BS in Accountancy</option>
			<option value="BS in Business Administration" >BS in Business Administration</option>
			<option value="BS in Entrepreneurship" >BS in Entrepreneurship</option>
			<option value="BS in Criminology" >BS in Criminology</option>
			<option value="BS in Civil Engineering" >BS in Civil Engineering</option>
			<option value="BS in Computer Engineering" >BS in Computer Engineering</option>
			<option value="BS in Electrical Engineering" >BS in Electrical Engineering</option>
			<option value="BS in Electronics Engineering" >BS in Electronics Engineering</option>
			<option value="BS in Industrial Engineering" >BS in Industrial Engineering</option>
			<option value="BS in Mechanical Engineering" >BS in Mechanical Engineering</option>
			<option value="BS in Computer Science" >BS in Computer Science</option>
			<option value="BS in Information Technology" >BS in Information Technology</option>
			<option value="BS in Hospitality Management" >BS in Hospitality Management</option>
			<option value="BS in Tourism Management" >BS in Tourism Management</option>
			<option value="Bachelor of Elementary Education" >Bachelor of Elementary Education</option>
			<option value="Bachelor of Secondary Education" >Bachelor of Secondary Education</option>
			<option value="Agricultural Crops Production NCI" >Agricultural Crops Production NCI</option>
			<option value="Animal Production NCII" >Animal Production NCII</option>
			<option value="Commercial Cooking / Cookery NCII" >Commercial Cooking / Cookery NCII</option>
			<option value="Computer Hardware Servicing NCII" >Computer Hardware Servicing NCII</option>
			<option value="Food and Beverages Services NCII" >Food and Beverages Services NCII</option>
			<option value="Housekeeping NCII" >Housekeeping NCII</option>
			<option value="Medical Transcription NCII" >Medical Transcription NCII</option>
			<option value="Shielded Metal Arc Welding (SMAW) NCII" >Shielded Metal Arc Welding (SMAW) NCII</option>
        </select>
		</div>
		
		<div>
        <label for="year">Year Level:</label>
        <select name="year" id="year">
            <option value="">--- Year Level ---</option>
            <option value="1st Year" selected>1st Year</option>
            <option value="2nd Year" >2nd Year</option>
            <option value="3rd Year" >3rd Year</option>
			<option value="4th Year" >4th Year</option>
			<option value="5th Year" >5th Year</option>
        </select>
        </div>

		<div>
			<label for="" class="control-label">Do you agree to attend the event?</label>
			<input type="radio" name="option" value="Yes" /> Yes
  			<input type="radio" name="option" value="No" /> No
		</div>

	</form>
</div>
<script>
	 $('.datetimepicker').datetimepicker({
	      format:'Y/m/d H:i',
	      startDate: '+3d'
	  })
	$('#manage-register').submit(function(e){
		e.preventDefault()
		start_load()
		$('#msg').html('')
		$.ajax({
			url:'admin/ajax.php?action=save_register',
			data: new FormData($(this)[0]),
		    cache: false,
		    contentType: false,
		    processData: false,
		    method: 'POST',
		    type: 'POST',
			success:function(resp){
				if(resp==1){
					alert_toast("Registration Request Sent.",'success')
						end_load()
						uni_modal("","register_msg.php")

				}
			}
		})
	})
</script>