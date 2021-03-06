<div id="sidebar">
	<div class="panel-group" id="accordion">
		<div class="panel panel-default">
		  	<a href="{{ URL::to('/') }}">
			    <div class="panel-heading">
			        <i class="icon-desktop"></i></span> Dashboard   
			    </div>  
		    </a>
		</div>
				
		<div class="panel panel-default">
		  	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
			    <div class="panel-heading">
			        <i class="icon-credit-card"></i> Sell    
			    </div>
			</a>
		    <ul class="list-group panel-collapse collapse" id="collapseTwo">
			  <li ><a href="#" class="list-group-item">Current Sale</a></li>
			  <li ><a href="#" class="list-group-item">Retrieve Sale</a></li>
			  <li ><a href="#" class="list-group-item">Close Register</a></li>
			</ul>
		</div>

		<div class="panel panel-default">
		  	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
			    <div class="panel-heading">
			        <i class="icon-archive"></i> Products    
			    </div>
			</a>
		    <ul class="list-group panel-collapse collapse" id="collapseThree">
				<li ><a href="{{ Url::to('/all-products') }}" class="list-group-item"> All Products</a></li>
				<li ><a href="{{ Url::to('/add-products') }}" class="list-group-item"> Add Products</a></li>
				<li ><a href="#" class="list-group-item">Stock Control</a>	</li>
				<li ><a href="#" class="list-group-item">Price Books</a></li>
				<li><a href="#" class="list-group-item">Types</a></li>			  
				<li><a href="#" class="list-group-item">Brands</a></li>
				<li><a href="#" class="list-group-item">Tags</a></li>
			</ul>
		    
		</div>

		<div class="panel panel-default">
		  	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
			    <div class="panel-heading">
			        <i class="icon-user"></i> Customers    
			    </div>
			</a>
		    <ul class="list-group panel-collapse collapse" id="collapseFour">
		    	<li ><a href="{{ Url::to('/all-customers') }}" class="list-group-item"> All Customers</a></li>
				<li ><a href="{{ Url::to('/add-customer') }}" class="list-group-item"> Add Customer</a></li>
		    </ul>
		</div>
		
		<div class="panel panel-default">
		  	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
			    <div class="panel-heading">
			        <i class="icon-group"></i> Employees    
			    </div>
			</a>
		    <ul class="list-group panel-collapse collapse" id="collapseFive">
		    	<li ><a href="#" class="list-group-item"> All Employees</a></li>
				<li ><a href="#" class="list-group-item"> Add Employee</a></li>
		    </ul>
		</div>

		<div class="panel panel-default">
		  	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
			    <div class="panel-heading">
			        <i class="icon-user"></i> Suppliers    
			    </div>
			</a>
		    <ul class="list-group panel-collapse collapse" id="collapseSix">
		    	<li ><a href="{{ Url::to('/all-suppliers') }}" class="list-group-item"> All Suppliers</a></li>
				<li ><a href="{{ Url::to('/add-supplier') }}" class="list-group-item"> Add Supplier</a></li>
		    </ul>
		</div>

		<div class="panel panel-default" id="report">
		  	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">
			    <div class="panel-heading">
			        <i class="icon-file-text"></i> Reports    
			    </div>
			</a>
		    <ul class="list-group panel-collapse collapse" id="collapseSeven">
				<li >
					<a class="list-group-item accordion-toggle"  data-toggle="collapse" data-parent="#collapseSeven" href="#report1"> 
					Product Reports
					</a>

					<ul class="list-group collapse" id="report1">
					  <li class="list-group-item"><a href="#"><i class="icon-circle-arrow-right"></i> report</a></li>
					  <li class="list-group-item"><a href="#"><i class="icon-circle-arrow-right"></i> report</a></li>
					</ul>
				</li>
				<li >
					<a class="list-group-item accordion-toggle"  data-toggle="collapse" data-parent="#collapseSeven" href="#report2"> 
					Sales Reports
					</a>

					<ul class="list-group collapse" id="report2">
					  <li class="list-group-item"><a href="#"><i class="icon-circle-arrow-right"></i> report</a></li>
					  <li class="list-group-item"><a href="#"><i class="icon-circle-arrow-right"></i> report</a></li>
					</ul>
				</li>

				<li >
					<a class="list-group-item accordion-toggle"  data-toggle="collapse" data-parent="#collapseSeven" href="#report3"> 
					Stock Reports
					</a>

					<ul class="list-group collapse" id="report3">
					  <li class="list-group-item"><a href="#"><i class="icon-circle-arrow-right"></i> report</a></li>
					  <li class="list-group-item"><a href="#"><i class="icon-circle-arrow-right"></i> report</a></li>
					</ul>
				</li>
			</ul>
		    
		</div>
	</div>
</div>



