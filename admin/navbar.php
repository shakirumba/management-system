
<style>
	.collapse a{
		text-indent:10px;
	}
	nav#sidebar{
		background: url('assets/uploads/2.png');
	    background-repeat: no-repeat;
	    background-size: cover;
	}
</style>

<nav id="sidebar" class='mx-lt-5 bg-dark' >
		
		<div class="sidebar-list">
				<a href="index.php?page=home" class="nav-item nav-home"><span class='icon-field'><i class="fa fa-home"></i></span> Home</a>
				<a href="index.php?page=audience" class="nav-item nav-audience"><span class='icon-field'><i class="fa fa-th-list"></i></span> Event Audience List</a>
				
				<a  class="nav-item nav-reports" data-toggle="collapse" href="#reportCollpase" role="button" aria-expanded="false" aria-controls="reportCollpase"><span class='icon-field'><i class="fa fa-file"></i></span> Reports <i class="fa fa-angle-down float-right"></i></a>
				<a href="index.php?page=eval" class="nav-item nav-=eval"><span class='icon-field'><i class="fa fa-cogs"></i></span> evaluation</a>
				<div class="collapse" id="reportCollpase">
					<a href="index.php?page=audience_report" class="nav-item nav-audience_report"><span class='icon-field'></span> Audience Report</a>
					<a href="index.php?page=venue_report" class="nav-item nav-venue_report"><span class='icon-field'></span> Venue Report</a>
				</div>
				
				<?php if($_SESSION['login_type'] == 2): ?>
					<a href="index.php?page=eventstaff" class="nav-item nav-events"><span class='icon-field'><i class="fa fa-calendar"></i></span> Events</a>
				
				
			<?php endif; ?>

				<?php if($_SESSION['login_type'] == 1): ?>
					<a href="index.php?page=events" class="nav-item nav-events"><span class='icon-field'><i class="fa fa-calendar"></i></span> Events</a>
				<a href="index.php?page=venue" class="nav-item nav-venue"><span class='icon-field'><i class="fa fa-map-marked-alt"></i></span> Venues</a>
				<a href="index.php?page=booking" class="nav-item nav-booking"><span class='icon-field'><i class="fa fa-th-list"></i></span> Venue Book List</a>
				<a href="index.php?page=users" class="nav-item nav-users"><span class='icon-field'><i class="fa fa-users"></i></span> Users</a>
				<a href="index.php?page=site_settings" class="nav-item nav-site_settings"><span class='icon-field'><i class="fa fa-cogs"></i></span> System Settings</a>
				
			<?php endif; ?>
		</div>

</nav>
<script>
	$('.nav_collapse').click(function(){
		console.log($(this).attr('href'))
		$($(this).attr('href')).collapse()
	})
	$('.nav-<?php echo isset($_GET['page']) ? $_GET['page'] : '' ?>').addClass('active')
</script>
