<div class="container-fluid">
	<form action="" id="manage-evaluation">
		<input type="hidden" name="id" value="<?php echo isset($id) ? $id :'' ?>">
		<input type="hidden" name="event_id" value="<?php echo isset($_GET['event_id']) ? $_GET['event_id'] :'' ?>">
		<div class="form-group">
		
		
			
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
        <label for="" class="control-label"><b>Rating scales: 5- Excellent, 4- Very Satisfactory, 3- Satisfactory, 2- Fair, 1- Needs Improvement</b></label><br>
        <label for="" class="control-label"><b>OBJECTIVES</b></label>
		<div>
        
			<label for="" class="control-label">Clear</label><br>
			<input type="radio" name="ob1" value="Excellent" /> 5
  			<input type="radio" name="ob1" value="Very Satisfactory" /> 4
              <input type="radio" name="ob1" value="Satisfactory" /> 3
  			<input type="radio" name="ob1" value="Fair" /> 2
              <input type="radio" name="ob1" value="Needs Improvement" /> 1
  			 
		</div>
        <div>
        
			<label for="" class="control-label">Relevant</label><br>
			<input type="radio" name="ob2" value="Excellent" /> 5
  			<input type="radio" name="ob2" value="Very Satisfactory" /> 4
            <input type="radio" name="ob2" value="Satisfactory" /> 3
  			<input type="radio" name="ob2" value="Fair" /> 2
            <input type="radio" name="ob2" value="Needs Improvement" /> 1
  			 
		</div>
        <div>
        
			<label for="" class="control-label">Attainable</label><br>
			<input type="radio" name="ob3" value="Excellent" /> 5
  			<input type="radio" name="ob3" value="Very Satisfactory" /> 4
            <input type="radio" name="ob3" value="Satisfactory" /> 3
  			<input type="radio" name="ob3" value="Fair" /> 2
            <input type="radio" name="ob3" value="Needs Improvement" /> 1
  			 
		</div>

        <label for="" class="control-label"><b>PROGRAM</b></label>
		<div>
        
			<label for="" class="control-label">The flow of the program is well-organized</label><br>
			<input type="radio" name="p1" value="Excellent" /> 5
  			<input type="radio" name="p1" value="Very Satisfactory" /> 4
            <input type="radio" name="p1" value="Satisfactory" /> 3
  			<input type="radio" name="p1" value="Fair" /> 2
            <input type="radio" name="p1" value="Needs Improvement" /> 1
  			 
		</div>
        <div>
        
			<label for="" class="control-label">The program starts and ends promptly</label><br>
			<input type="radio" name="p2" value="Excellent" /> 5
  			<input type="radio" name="p2" value="Very Satisfactory" /> 4
            <input type="radio" name="p2" value="Satisfactory" /> 3
  			<input type="radio" name="p2" value="Fair" /> 2
            <input type="radio" name="p2" value="Needs Improvement" /> 1
  			 
		</div>
        <div>
        
			<label for="" class="control-label">The content of the program is enriching</label><br>
			<input type="radio" name="p3" value="Excellent" /> 5
  			<input type="radio" name="p3" value="Very Satisfactory" /> 4
            <input type="radio" name="p3" value="Satisfactory" /> 3
  			<input type="radio" name="p3" value="Fair" /> 2
            <input type="radio" name="p3" value="Needs Improvement" /> 1
  			 
		</div>

        <label for="" class="control-label"><b>SPEAKER</b></label>
		<div>
        
			<label for="" class="control-label">Knowledgeable of the topic</label><br>
			<input type="radio" name="s1" value="Excellent" /> 5
  			<input type="radio" name="s1" value="Very Satisfactory" /> 4
            <input type="radio" name="s1" value="Satisfactory" /> 3
  			<input type="radio" name="s1" value="Fair" /> 2
            <input type="radio" name="s1" value="Needs Improvement" /> 1
  			 
		</div>
        <div>
        
			<label for="" class="control-label">Clearly explained the concepts discussed</label><br>
			<input type="radio" name="s2" value="Excellent" /> 5
  			<input type="radio" name="s2" value="Very Satisfactory" /> 4
            <input type="radio" name="s2" value="Satisfactory" /> 3
  			<input type="radio" name="s2" value="Fair" /> 2
            <input type="radio" name="s2" value="Needs Improvement" /> 1
  			 
		</div>
        <div>
        
			<label for="" class="control-label">Encouraged participation</label><br>
			<input type="radio" name="s3" value="Excellent" /> 5
  			<input type="radio" name="s3" value="Very Satisfactory" /> 4
            <input type="radio" name="s3" value="Satisfactory" /> 3
  			<input type="radio" name="s3" value="Fair" /> 2
            <input type="radio" name="s3" value="Needs Improvement" /> 1
  			 
		</div>

        <label for="" class="control-label"><b>ORGANIZERS</b></label>
		<div>
        
			<label for="" class="control-label">Well-prepared</label><br>
			<input type="radio" name="o1" value="Excellent" /> 5
  			<input type="radio" name="o1" value="Very Satisfactory" /> 4
            <input type="radio" name="o1" value="Satisfactory" /> 3
  			<input type="radio" name="o1" value="Fair" /> 2
            <input type="radio" name="o1" value="Needs Improvement" /> 1
  			 
		</div>
        <div>
        
			<label for="" class="control-label">Accommodating</label><br>
			<input type="radio" name="o2" value="Excellent" /> 5
  			<input type="radio" name="o2" value="Very Satisfactory" /> 4
            <input type="radio" name="o2" value="Satisfactory" /> 3
  			<input type="radio" name="o2" value="Fair" /> 2
            <input type="radio" name="o2" value="Needs Improvement" /> 1
  			 
		</div>
        <div>
        
			<label for="" class="control-label">Efficient</label><br>
			<input type="radio" name="o3" value="Excellent" /> 5
  			<input type="radio" name="o3" value="Very Satisfactory" /> 4
            <input type="radio" name="o3" value="Satisfactory" /> 3
  			<input type="radio" name="o3" value="Fair" /> 2
            <input type="radio" name="o3" value="Needs Improvement" /> 1
  			 
		</div>

        <label for="" class="control-label"><b>AUDIENCE (The members of the audience are: )</b></label>
		<div>
        
			<label for="" class="control-label">Punctual</label><br>
			<input type="radio" name="a1" value="Excellent" /> 5
  			<input type="radio" name="a1" value="Very Satisfactory" /> 4
            <input type="radio" name="a1" value="Satisfactory" /> 3
  			<input type="radio" name="a1" value="Fair" /> 2
            <input type="radio" name="a1" value="Needs Improvement" /> 1
  			 
		</div>
        <div>
        
			<label for="" class="control-label">Well-behaved</label><br>
			<input type="radio" name="a2" value="Excellent" /> 5
  			<input type="radio" name="a2" value="Very Satisfactory" /> 4
            <input type="radio" name="a2" value="Satisfactory" /> 3
  			<input type="radio" name="a2" value="Fair" /> 2
            <input type="radio" name="a2" value="Needs Improvement" /> 1
  			 
		</div>
        <div>
        
			<label for="" class="control-label">Actively involved</label><br>
			<input type="radio" name="a3" value="Excellent" /> 5
  			<input type="radio" name="a3" value="Very Satisfactory" /> 4
            <input type="radio" name="a3" value="Satisfactory" /> 3
  			<input type="radio" name="a3" value="Fair" /> 2
            <input type="radio" name="a3" value="Needs Improvement" /> 1
  			 
		</div>
        
        <label for="" class="control-label"><b>MATERIALS</b></label>
		<div>
        
			<label for="" class="control-label">Adequate</label><br>
			<input type="radio" name="m1" value="Excellent" /> 5
  			<input type="radio" name="m1" value="Very Satisfactory" /> 4
            <input type="radio" name="m1" value="Satisfactory" /> 3
  			<input type="radio" name="m1" value="Fair" /> 2
            <input type="radio" name="m1" value="Needs Improvement" /> 1
  			 
		</div>
        <div>
        
			<label for="" class="control-label">Suitable</label><br>
			<input type="radio" name="m2" value="Excellent" /> 5
  			<input type="radio" name="m2" value="Very Satisfactory" /> 4
            <input type="radio" name="m2" value="Satisfactory" /> 3
  			<input type="radio" name="m2" value="Fair" /> 2
            <input type="radio" name="m2" value="Needs Improvement" /> 1
  			 
		</div>
        <div>
        
			<label for="" class="control-label">Relevant/ useful</label><br>
			<input type="radio" name="m3" value="Excellent" /> 5
  			<input type="radio" name="m3" value="Very Satisfactory" /> 4
            <input type="radio" name="m3" value="Satisfactory" /> 3
  			<input type="radio" name="m3" value="Fair" /> 2
            <input type="radio" name="m3" value="Needs Improvement" /> 1
  			 
		</div>


        

	</form>
</div>
<script>
	 $('.datetimepicker').datetimepicker({
	      format:'Y/m/d H:i',
	      startDate: '+3d'
	  })
	$('#manage-evaluation').submit(function(e){
		e.preventDefault()
		start_load()
		$('#msg').html('')
		$.ajax({
			url:'admin/ajax.php?action=save_evaluation',
			data: new FormData($(this)[0]),
		    cache: false,
		    contentType: false,
		    processData: false,
		    method: 'POST',
		    type: 'POST',
			success:function(resp){
				if(resp==1){
					alert_toast("Evaluation Request Sent.",'success')
						end_load()
						uni_modal("","evaluation_msg.php")

				}
			}
		})
	})
</script>
