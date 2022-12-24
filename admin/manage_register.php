<?php include 'db_connect.php' ?>

<?php
if(isset($_GET['id'])){
$booking = $conn->query("SELECT * from audience where id = ".$_GET['id']);
foreach($booking->fetch_array() as $k => $v){
    $$k = $v;
}
}
?>
<div class="container-fluid">
    <form action="" id="manage-register">
        <input type="hidden" name="id" value="<?php echo isset($id) ? $id :'' ?>">
        <div class="form-group">
            <label for="" class="control-label">Event</label>
            <select name="event_id" id="" class="custom-select select2">
                <option></option>
                <?php 
                $event = $conn->query("SELECT * FROM events order by event asc");
                while($row=$event->fetch_assoc()):
                ?>
                <option value="<?php echo $row['id'] ?>" <?php echo isset($event_id) && $event_id == $row['id'] ? 'selected' : '' ?>><?php echo ucwords($row['event']) ?></option>
            <?php endwhile; ?>
            </select>
        </div>
        <div class="form-group">
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
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="1" id="payment_status" name="payment_status" <?php echo isset($payment_status) && $payment_status == 1 ? "checked" : '' ?>>
              <label class="form-check-label" for="payment_status">
                Paid
              </label>
            </div>
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
        <div class="form-group">
            <label for="" class="control-label">Status</label>
            <select name="status" id="" class="custom-select">
                <option value="0" <?php echo isset($status) && $status == 0 ? "selected" : '' ?>>For Verification</option>
                <option value="1" <?php echo isset($status) && $status == 1 ? "selected" : '' ?>>Confirmed</option>
                <option value="2" <?php echo isset($status) && $status == 2 ? "selected" : '' ?>>Cancelled</option>
            </select>
        </div>
    </form>
</div>

<script>
    $('#manage-register').submit(function(e){
        e.preventDefault()
        start_load()
        $.ajax({
            url:'ajax.php?action=save_register',
            method:"POST",
            data:$(this).serialize(),
            success:function(resp){
                if(resp == 1){
                    alert_toast("Audience Registration successfully updated","success")
                    setTimeout(function(){
                        location.reload()
                    },1500)
                }
            }
        })
    })
</script>