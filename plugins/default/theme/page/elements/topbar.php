<?php
	if(ossn_isLoggedin()){		
		$hide_loggedin = "hidden-xs hidden-sm";
	}
?>
<!-- ossn topbar -->
<style>
	@media only screen and (max-width:768px){
		.hide_in_mobile{
			  display:none;
		}
	}
</style>
<div class='hide_in_mobile'>
<div class="topbar">
	<div class="container">
		<div class="row">
			<div class="col-md-5 left-side left">
            	<a class="sitename" href="<?php echo ossn_site_url();?>"><?php echo ossn_site_settings('site_name'); ?></a>
				<?php if(ossn_isLoggedin()){ ?>
				<div class="topbar-menu-left site-name">
                    <?php echo ossn_view_form('search', array(
								'component' => 'OssnSearch',
								'class' => 'ossn-search',
								'autocomplete' => 'off',
								'method' => 'get',
								'security_tokens' => false,
								'action' => ossn_site_url("search"),
					), false);
				?>
				</div>
				<?php } ?>
			</div>
            <div class="col-md-4">
                	<div class="topbar-userdata">
                    	<img src="<?php echo ossn_loggedin_user()->iconURL()->smaller;?>" />
                       <span class="name"style='color:white;'><a href='<?php echo ossn_loggedin_user()->profileURL(); ?>'style='color:white;'><?php echo ossn_loggedin_user()->fullname;
						?></a></span>
                        <span class="homelink"><a href="<?php echo ossn_site_url();?>home"><?php echo ossn_print('home');?></a></span>
                    </div>            
            </div>
			<div class="col-md-3 text-right right-side">
				<div class="topbar-menu-right">

					<li class="ossn-topbar-dropdown-menu">
						<div class="dropdown">
						<?php
							if(ossn_isLoggedin()){						
								echo ossn_plugin_view('output/url', array(
									'role' => 'button',
									'data-toggle' => 'dropdown',
									'data-target' => '#',
									'text' => '<i class="fa fa-sort-desc"></i>',
								));									
								echo ossn_view_menu('topbar_dropdown'); 
							}
							?>
						</div>
					</li>                
					<?php
						if(ossn_isLoggedin()){
							echo ossn_plugin_view('notifications/page/topbar');
						}
						?>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- ./ ossn topbar -->
<!-- ossn topbar -->
<style>
	@media only screen and (min-width:768px){
		.hide_in_desktop{
			  display:none;
		}
	}
</style>
<div class='hide_in_desktop'>
<!-- ossn topbar -->
<div class="topbar">
	<div class="container">
		<div class="row">
			<div class="col-md-2 left-side left">
				
			</div>
			<div class="col-md-7 site-name text-center <?php echo $hide_loggedin;?>">
				<span><a href="<?php echo ossn_site_url();?>"><?php echo ossn_site_settings('site_name');?></a></span>
			</div>
			<div class="col-md-3 text-right right-side">
				<div class="topbar-menu-right">
					<li class="ossn-topbar-dropdown-menu">
						<div class="dropdown">
						<?php
							if(ossn_isLoggedin()){						
								echo ossn_plugin_view('output/url', array(
									'role' => 'button',
									'data-toggle' => 'dropdown',
									'data-target' => '#',
									'text' => '<i class="fa fa-sort-desc"></i>',
								));									
								echo ossn_view_menu('topbar_dropdown'); 
							}
							?>
						</div>
					</li>                
					<?php
						if(ossn_isLoggedin()){
							echo ossn_plugin_view('notifications/page/topbar');
						}
						?>
				</div>
			</div>
		</div>
	</div>
       </div>
	</div>
<!-- ./ ossn topbar -->
