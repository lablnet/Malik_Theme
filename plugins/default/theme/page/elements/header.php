<style>
	header {
    background-color: #73087f;
    border-bottom: 1px solid #41d1f2;
    color: #fff;
    z-index: 1;
    padding: 5px;
    height: 85px;
	}
	.sitename-header {
    	font-size: 30px;
    font-weight: bold;
    		margin-top: 15px;
	}
	header label {
		    font-size: 12px;
	}
	header input[type='password'],
	header input[type='text']{
			    padding: 3px 10px !important;
    		color: #000 !important;
			    margin-bottom: 2px !important;
	}
	header a {
		    font-size: 12px;
    color: #fff;
	}
	header input[type='submit']{
		        margin-top: 25px!important;
    padding: 3px 8px !important;
	    background: #718dc7 !important;
	}
@media only screen and (max-width: 767px) {
   #hide_in_mobile{
	   display:none;
   }
    }
	@media only screen and (min-width:768px){
		#show_in_mobile{
			  display:none;
		}
	}
	#show_in_mobile{
		float:right;
		margin-top:6px;
	}
</style>
<header>	
		<div class="container">
        	<div class="col-md-6">
            	<div class="sitename-header">
                	<a class="sitename" href="<?php echo ossn_site_url();?>"><?php echo  ossn_site_settings('site_name');?></a>
                </div>
            </div>	
			<div id='hide_in_mobile'>
            <div class="col-md-6">
            	<?php echo ossn_view_form('login', array(
            			'id' => 'ossn-login',
           				'action' => ossn_site_url('action/user/login'),
 		 	      	));
				?>
            </div>
			</div>
			<div id='show_in_mobile'>
			<button class='btn btn-primary'><a href='<?php echo ossn_site_url("login");?>'>login</a></button>
			</div>
        </div>
</header>
