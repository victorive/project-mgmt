	
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
		              <a href="users.php">Users</a>
		          </li>

		          <li>
		              <a href="assignees.php">Assignees</a>
		          </li>

		          <li>
		              <a href="#ordermenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Task Requests</a>
		              <ul class="collapse list-unstyled" id="ordermenu">
		                <li>
		                    <a href="requestedoffers.php">Pending requests</a>
		                </li>
		                <li>
		                    <a href="acceptedoffers.php">Accepted tasks</a>
		                </li>

		                <li>
		                    <a href="declinedoffers.php">Declined Tasks</a>
		                </li>
		               
		              </ul>
		          </li>



		          <li>
		              <a href="projects.php" ><i>Projects</i></a>
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