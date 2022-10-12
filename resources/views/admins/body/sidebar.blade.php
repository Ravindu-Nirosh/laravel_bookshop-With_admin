@php
$prifix =Request::route()->getPrefix();
$route=Route::current()->getName();

@endphp


<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">	
		
        <div class="user-profile">
			<div class="ulogo">
				 <a href="index.html">
				  <!-- logo for regular state and mobile devices -->
					 <div class="d-flex align-items-center justify-content-center">					 	
						  <img src="../images/logo-dark.png" alt="">
						  <h3><b>Lassana</b> BookShop Admin</h3>
					 </div>
				</a>
			</div>
        </div>
      
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">  
		  
		<li  class="{{($route=='Admin.Dashboard')? 'active':''}}">
          <a href="{{route('Admin.Dashboard')}}">
            <i data-feather="pie-chart"></i>
			<span>Dashboard</span>
          </a>
        </li>  
		
        <li class="treeview {{($route=='all.brand')? 'active':''}}" >
          <a href="" >
            <i data-feather="message-circle"></i>
            <span>Category</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{($route=='all.brand')? 'active':''}}"><a href="{{route('all.brand')}}"><i class="ti-more"></i> All Categories</a></li>
            <li class="{{($route=='all.sub.brand')? 'active':''}}"><a href="{{route('all.sub.brand')}}"><i class="ti-more"></i> Sub Categories</a></li>
          
          </ul>
        </li> 
		  
        <li class="treeview {{($prifix == '/product')?'active':''}}" >
          <a href="#">
            <i data-feather="mail"></i> <span>Products</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{($route=='add-product')? 'active':''}}"><a href="{{route('add-product')}}"><i class="ti-more"></i>Add Product</a></li>
            <li class="{{($route=='manage-product')? 'active':''}}"><a href="{{route('manage-product')}}"><i class="ti-more"></i>Mange Product</a></li>
            
          </ul>
        </li>

        <li class="treeview {{($prifix == '/slider')?'active':''}}" >
          <a href="#">
            <i data-feather="mail"></i> <span>Slider</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{($route=='mange-slider')? 'active':''}}"><a href="{{route('mange-slider')}}"><i class="ti-more"></i>Mange Slider</a></li>
           
          </ul>
        </li>

        <li class="treeview {{($prifix == '/order')?'active':''}}" >
          <a href="#">
            <i data-feather="mail"></i> <span>Orders</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{($route=='mange-order')? 'active':''}}"><a href="{{route('mange-order')}}"><i class="ti-more"></i>Mange Orders</a></li>
           
          </ul>
        </li>
		
		
        <li class="treeview">
         
        </li> 		  
		 
        
		  
        <li class="treeview">
          
          
        </li>
		
		<li class="treeview">
          
			
		  </ul>
        </li>  
		  
        
        
      </ul>
    </section>
	
	<div class="sidebar-footer">
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings" aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
		<!-- item-->
		<a href="mailbox_inbox.html" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="ti-email"></i></a>
		<!-- item-->
		<a href="" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ti-lock"></i></a>
	</div>
  </aside>