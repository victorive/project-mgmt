	
	<nav class="navbar navbar-expand-md navbar-light bg-light">
		    <a href="#" class="navbar-brand">
		    	<i> Proj<span>.</span>Mngt</i>
			</a>

		    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
		        <span class="navbar-toggler-icon"></span>
		    </button>

		    <div class="collapse navbar-collapse" id="navbarCollapse">
		    	<div class="ml-auto d-flex mr-5">
			        <div class="navbar-nav">
			            <a href="profile.php" class="nav-item nav-link"><?=$fullname;?></a>
			         
			        </div>
			      
		    	</div>
		    </div>
		</nav>
		<div class="wrapper d-flex align-items-stretch">
				<nav id="sidebar">
					<div class="custom-menu" style="z-index: 1;">
						<button type="button" id="sidebarCollapse" class="btn btn-primary">
				          <i class="fa fa-bars"></i>
				          <span class="sr-only">Toggle Menu</span>
				        </button>
			        </div>
					<div class="p-4 pt-5">
		        <ul class="list-unstyled components mb-5">
		          <li class="active">
		            <a href="dashboard.php">Home</a>
		          </li>
		          <li>
		              <a href="notifications.php">Notification</a>
		          </li>

		          <li>
	              <a href="profile.php">Profile</a>
		          </li>

		          <li class="mt-4">
		              <p >Project-space--</p>
		          </li>

		          <li>
		              <a href="addProject.php" ><i>Add project</i></a>
		          </li>
		         

		          <li>
	              <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Projects</a>
	              <ul class="collapse list-unstyled" id="pageSubmenu">
	              	<?php 
					    global $ConnectingDB;
					    $sql = "SELECT * FROM projects
					    WHERE createdby = '$UserId' ORDER BY projectID desc";
					    $stmtloan = $ConnectingDB->query($sql);
					                    
						while ($DataRows = $stmtloan->fetch()) {
					    	$projectID = $DataRows['projectID'];
					    	$projectname = $DataRows['projectName'];
					    	$datecreated = $DataRows['datecreated'];
					?>
						<li>
							<a href="projecttasks.php?project=<?= $projectID;?>"><?php echo $projectname;?></a>
						</li>
					<?php }?>	
	                
	              </ul>
		          </li>
		          
		          <li>
	              <a href="../logout.php">Logout</a>
		          </li>
		        </ul>


		        <div class="footer" style="position:absolute;bottom:0;">
		        	<p>
						Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
					</p>
		        </div>

		      </div>
	    	</nav>