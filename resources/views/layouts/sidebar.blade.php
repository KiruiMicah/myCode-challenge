  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
       
        <div class="pull-left info">
         
        </div>
      </div>
      <br/>

      <!-- search form (Optional) -->
     
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <!-- Optionally, you can add icons to the links -->
        <li class="active">
		<a href=""><i class="glyphicon glyphicon-dashboard"></i> <span>Dashboard</span></a></li>
         
        
        <li class="treeview">
          <a href="#"><i class="glyphicon glyphicon-cog"></i> <span>WBO Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href=" {{url('getinfodata')}}"><i class=" glyphicon glyphicon-th"></i> Load Data from WBO </a> </li>
           
          </ul>
          <ul class="treeview-menu">
            <li><a href="#"><i class="glyphicon glyphicon-plus-sign"></i> Add Details </a> </li>
           
          </ul>
         
        </li>
       
        
      
          <ul class="treeview-menu">
            
            <li><a href="#"><i class="fa fa-circle"></i>  Reports</a> </li>
           
          </ul>
        </li>
        <li><a href="#"><i class="glyphicon glyphicon-user"></i> <span>User management</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>