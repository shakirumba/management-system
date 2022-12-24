<?php include('db_connect.php');?>

<div class="container-fluid">
<style>
	input[type=checkbox]
{
  /* Double-sized Checkboxes */
  -ms-transform: scale(1.5); /* IE */
  -moz-transform: scale(1.5); /* FF */
  -webkit-transform: scale(1.5); /* Safari and Chrome */
  -o-transform: scale(1.5); /* Opera */
  transform: scale(1.5);
  padding: 10px;
}
</style>
	<div class="col-lg-12">
		<div class="row mb-4 mt-4">
			<div class="col-md-12">
				
			</div>
		</div>
		<div class="row">
			<!-- FORM Panel -->

			<!-- Table Panel -->
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<b>Evaluation List</b>
						
					</div>
					<div class="card-body">
						
						<table class="table table-bordered table-condensed table-hover">
							<thead>
								<tr>
									<th class="text-center">#</th>
									<th class="">Event Information</th>
									<th class="">Evaluation Information</th>
									
									
								</tr>
							</thead>
							<tbody>
								<?php 
								$i = 1;
								$registering = $conn->query("SELECT a.*,e.event,e.payment_type,e.type,e.amount,e.schedule from evaluation a inner join events e on e.id = a.event_id");
								while($row=$registering->fetch_assoc()):
									
								?>
								<tr>
									
									<td class="text-center"><?php echo $i++ ?></td>
									<td class="">
										 <p>Event: <b><?php echo ucwords($row['event']) ?></b></p>
										 <p><small>Schedule: <b><?php echo date("M d,Y h:i A",strtotime($row['schedule'])) ?></b></small></p>
										 <p><small>Type: <b><?php echo $row['type']  == 1 ? "Public Event" : "Private Event" ?></small></b></p>
										 <p><small>Fee: <b><?php echo $row['payment_type']  == 1 ? "Free" : number_format($row['amount'],2) ?></small></b></p>
									</td>
									<td class="">
										 
										 <p><small>School: <b><?php echo  ucwords($row['school']) ?></b></small></p>
										 <p><small>Course: <b><?php echo  ucwords($row['course']) ?></b></small></p>
										 <p><small>Year level: <b><?php echo  ucwords($row['year']) ?></b></small></p>
                                         <p><small>OBJECTIVES </small></p>
                                         <p><small>Clear: <b><?php echo  ucwords($row['ob1']) ?></b></small></p>
                                         <p><small>Relevant: <b><?php echo  ucwords($row['ob2']) ?></b></small></p>
                                         <p><small>Attainable: <b><?php echo  ucwords($row['ob3']) ?></b></small></p>
                                         <p><small>PROGRAM </small></p>
                                         <p><small>The flow of the program is well-organized: <b><?php echo  ucwords($row['p1']) ?></b></small></p>
                                         <p><small>The program starts and ends promptly: <b><?php echo  ucwords($row['p2']) ?></b></small></p>
                                         <p><small>The content of the program is enriching: <b><?php echo  ucwords($row['p3']) ?></b></small></p>
                                         <p><small>SPEAKER </small></p>
                                         <p><small>Knowledgeable of the topic: <b><?php echo  ucwords($row['s1']) ?></b></small></p>
                                         <p><small>Clearly explained the concepts discussed: <b><?php echo  ucwords($row['s2']) ?></b></small></p>
                                         <p><small>Encouraged participation: <b><?php echo  ucwords($row['s3']) ?></b></small></p>
                                         <p><small>ORGANIZERS </small></p>
                                         <p><small>Well-prepared: <b><?php echo  ucwords($row['o1']) ?></b></small></p>
                                         <p><small>Accommodating: <b><?php echo  ucwords($row['o2']) ?></b></small></p>
                                         <p><small>Efficient: <b><?php echo  ucwords($row['o3']) ?></b></small></p>
                                         <p><small>AUDIENCE:  </small></p>
                                         <p><small>Punctual: <b><?php echo  ucwords($row['a1']) ?></b></small></p>
                                         <p><small>Well-behaved: <b><?php echo  ucwords($row['a2']) ?></b></small></p>
                                         <p><small>Actively involved: <b><?php echo  ucwords($row['a3']) ?></b></small></p>
                                         <p><small>MATERIALS: </small></p>
                                         <p><small>Adequate: <b><?php echo  ucwords($row['m1']) ?></b></small></p>
                                         <p><small>Suitable: <b><?php echo  ucwords($row['m2']) ?></b></small></p>
                                         <p><small>Relevant/ useful : <b><?php echo  ucwords($row['m3']) ?></b></small></p>
										 
									</td>
									
									
								</tr>
								<?php endwhile; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- Table Panel -->
		</div>
	</div>	

</div>
<style>
	
	td{
		vertical-align: middle !important;
	}
	td p{
		margin: unset
	}
	img{
		max-width:100px;
		max-height: :150px;
	}
</style>
<script>
	$(document).ready(function(){
		$('table').dataTable()
	})
	$('#new_register').click(function(){
		uni_modal("New Entry","manage_register.php")
	})
	
	$('.edit_register').click(function(){
		uni_modal("Manage register Details","manage_register.php?id="+$(this).attr('data-id'))
		
	})
	$('.delete_register').click(function(){
		_conf("Are you sure to delete this Person?","delete_register",[$(this).attr('data-id')])
	})

	function delete_register($id){
		start_load()
		$.ajax({
			url:'ajax.php?action=delete_register',
			method:'POST',
			data:{id:$id},
			success:function(resp){
				if(resp==1){
					alert_toast("Data successfully deleted",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
			}
		})
	}
</script>