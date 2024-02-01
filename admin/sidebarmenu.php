<nav class="navbar navbar-inverse sidebar" role="navigation">
    <div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Admission Provider</a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li class="<?= ($page=='adm_providers')? ' active': ''?>"><a href="displayalldata.php">www.admissionproviders.com  </a></li>
				<li  class="<?= ($page=='the_adm_providers')? ' active': ''?>"><a href="TheAdmProvider.php">www.theadmissionprovider.com </a></li>
				<li  class="<?= ($page=='opne_study')? ' active': ''?>"><a href="Open_study.php">www.openstudy.org.in</a></li> 
				<li  class="<?= ($page=='adm_consultancy')? ' active': ''?>"><a href="AdmConsultancy.php">www.admissionconsultancy.org</a></li>
				<li  class="<?= ($page=='adm_consultant')? ' active': ''?>"><a href="AdmConsultant.php">www.admissionconsultant.org</a></li>
				<li class="<?= ($page=='adm_mantra')? ' active': ''?>"><a href="AdmMantraContact.php">www.admissionmantra.org</a></li>	
				<li  class="<?= ($page=='exam_guidance')? ' active': ''?>"><a href="Exam_Guidance_Enquiry.php">www.examguidance.co.in</a></li>			
				<li  class="<?= ($page=='the_carrer_point')? ' active': ''?>"><a href="TheCarrerPoint.php">www.thecareerpoint.org</a></li>			
				<li  class="<?= ($page=='bangalore')? ' active': ''?>"><a href="Adm_Bangalore.php">www.admissioninbangalore.org</a></li>			
				<li><a href="logout.php" style='background:red; color:white'>Logout</a></li>			
			</ul> 
		</div>
	</div>
</nav>