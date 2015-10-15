<?php

add_action( 'admin_menu', 'qlinks_add_admin_menu' );
add_action( 'admin_init', 'qlinks_settings_init' );
add_action( 'admin_bar_menu', 'modify_admin_bar', 1999);

function modify_admin_bar( $wp_admin_bar ){
  
  /* get folder for department */ 
	$pos =  strripos(home_url(), "/");
	$dept_name = $pos ? substr(home_url(), $pos + 1) : '';
  
  $args = array(
		'id'    => 'quick_links',
		'title' => '<i class="dashicons-before dashicons-nametag"></i> Quick Links',
		'href'  => '/'. $dept_name . '/wp-admin/admin.php?page=quick_links',		
		'meta'	=> array(
					'title' => 'Quick Links',
					)
		
	);
	$wp_admin_bar->add_node( $args );
}

function qlinks_add_admin_menu() 
{ 

	add_menu_page( 
		'Quick Links', 
		'Quick Links', 
		'manage_options', 
		'quick_links', 
		'qlinks_options_page',
		'dashicons-nametag',
		3 
	);

}

function qlinks_settings_init() 
{ 

	register_setting( 
		'quick_links', 
		'qlinks_settings', 
		'quick_links_validate_input'
	);	

	add_settings_section(
		'qlinks_quick_links_section', 
		__( 'Home page quick links section', 'wordpress' ), 
		'qlinks_settings_section_callback', 
		'quick_links'
	);

	// 1. quick links
	add_settings_field( 
		'qlinks_title_1', 
		__( 'Title 1', 'wordpress' ), 
		'qlinks_title_1_render', 
		'quick_links', 
		'qlinks_quick_links_section',
		array('label_for' => 'qlinks_title_1')
	);	
	add_settings_field( 
		'qlinks_url_1', 
		__( 'URL 1', 'wordpress' ), 
		'qlinks_url_1_render', 
		'quick_links', 
		'qlinks_quick_links_section',
		array('label_for' => 'qlinks_url_1')
	);
	add_settings_field( 
		'qlinks_target_1','<br /><hr />','qlinks_target_1_render', 'quick_links', 'qlinks_quick_links_section'
	);
	

	// 2. quick links
	add_settings_field( 
		'qlinks_title_2', 
		__( 'Title 2', 'wordpress' ), 
		'qlinks_title_2_render', 
		'quick_links', 
		'qlinks_quick_links_section',
		array('label_for' => 'qlinks_title_2')		
	);
	add_settings_field( 
		'qlinks_url_2', 
		__( 'URL 2', 'wordpress' ), 
		'qlinks_url_2_render', 
		'quick_links', 
		'qlinks_quick_links_section',
		array('label_for' => 'qlinks_url_2')
	);
	add_settings_field( 
		'qlinks_target_2','<br /><hr />','qlinks_target_2_render', 'quick_links', 'qlinks_quick_links_section'
	);
	
	// 3. quick links
	add_settings_field( 
		'qlinks_title_3', 
		__( 'Title 3', 'wordpress' ), 
		'qlinks_title_3_render', 
		'quick_links', 
		'qlinks_quick_links_section',
		array('label_for' => 'qlinks_title_3')
	);	
	add_settings_field( 
		'qlinks_url_3', 
		__( 'URL 3', 'wordpress' ), 
		'qlinks_url_3_render', 
		'quick_links', 
		'qlinks_quick_links_section',
		array('label_for' => 'qlinks_url_3')
	);
	add_settings_field( 
		'qlinks_target_3','<br /><hr />','qlinks_target_3_render', 'quick_links', 'qlinks_quick_links_section'
	);
	
	// 4. quick links
	add_settings_field( 
		'qlinks_title_4', 
		__( 'Title 4', 'wordpress' ), 
		'qlinks_title_4_render', 
		'quick_links', 
		'qlinks_quick_links_section',
		array('label_for' => 'qlinks_title_4')		
	);	
	add_settings_field( 
		'qlinks_url_4', 
		__( 'URL 4', 'wordpress' ), 
		'qlinks_url_4_render', 
		'quick_links', 
		'qlinks_quick_links_section',
		array('label_for' => 'qlinks_url_4')
	);
	add_settings_field( 
		'qlinks_target_4','<br /><hr />','qlinks_target_4_render', 'quick_links', 'qlinks_quick_links_section'
	);

	// 5. quick links
	add_settings_field( 
		'qlinks_title_5', 
		__( 'Title 5', 'wordpress' ), 
		'qlinks_title_5_render', 
		'quick_links', 
		'qlinks_quick_links_section',
		array('label_for' => 'qlinks_title_5') 
	);	
	add_settings_field( 
		'qlinks_url_5', 
		__( 'URL 5', 'wordpress' ), 
		'qlinks_url_5_render', 
		'quick_links', 
		'qlinks_quick_links_section',
		array('label_for' => 'qlinks_url_5')
	);
	add_settings_field( 
		'qlinks_target_5','<br /><hr />','qlinks_target_5_render', 'quick_links', 'qlinks_quick_links_section'
	);

	// 6. quick links
	add_settings_field( 
		'qlinks_title_6', 
		__( 'Title 6', 'wordpress' ), 
		'qlinks_title_6_render', 
		'quick_links', 
		'qlinks_quick_links_section',
		array('label_for' => 'qlinks_title_6') 
	);	
	add_settings_field( 
		'qlinks_url_6', 
		__( 'URL 6', 'wordpress' ), 
		'qlinks_url_6_render', 
		'quick_links', 
		'qlinks_quick_links_section',
		array('label_for' => 'qlinks_url_6')
	);
	add_settings_field( 
		'qlinks_target_6','<br /><hr />','qlinks_target_6_render', 'quick_links', 'qlinks_quick_links_section'
	);
	
	// 7. quick links
	add_settings_field( 
		'qlinks_title_7', 
		__( 'Title 7', 'wordpress' ), 
		'qlinks_title_7_render', 
		'quick_links', 
		'qlinks_quick_links_section',
		array('label_for' => 'qlinks_title_7') 		
	);
	add_settings_field( 
		'qlinks_url_7', 
		__( 'URL 7', 'wordpress' ), 
		'qlinks_url_7_render', 
		'quick_links', 
		'qlinks_quick_links_section',
		array('label_for' => 'qlinks_url_7')
	);
	add_settings_field( 
		'qlinks_target_7','<br /><hr />','qlinks_target_7_render', 'quick_links', 'qlinks_quick_links_section'
	);

	// 8. quick links	
	add_settings_field( 
		'qlinks_title_8', 
		__( 'Title 8', 'wordpress' ), 
		'qlinks_title_8_render', 
		'quick_links', 
		'qlinks_quick_links_section',
		array('label_for' => 'qlinks_title_8')  
	);
	add_settings_field( 
		'qlinks_url_8', 
		__( 'URL 8', 'wordpress' ), 
		'qlinks_url_8_render', 
		'quick_links', 
		'qlinks_quick_links_section',
		array('label_for' => 'qlinks_url_8')
	);
	add_settings_field( 
		'qlinks_target_8','<br /><hr />','qlinks_target_8_render', 'quick_links', 'qlinks_quick_links_section'
	);
	// 9. quick links
	add_settings_field( 
		'qlinks_title_9', 
		__( 'Title 9', 'wordpress' ), 
		'qlinks_title_9_render', 
		'quick_links', 
		'qlinks_quick_links_section',
		array('label_for' => 'qlinks_title_9')  
	);	
	add_settings_field( 
		'qlinks_url_9', 
		__( 'URL 9', 'wordpress' ), 
		'qlinks_url_9_render', 
		'quick_links', 
		'qlinks_quick_links_section',
		array('label_for' => 'qlinks_url_9')
	);
	add_settings_field( 
		'qlinks_target_9','<br /><hr />','qlinks_target_9_render', 'quick_links', 'qlinks_quick_links_section'
	);
}


function qlinks_title_1_render()
{ 

	$options = get_option( 'qlinks_settings' );
	?>	
	<input type='text' name='qlinks_settings[qlinks_title_1]' id='qlinks_title_1' class="regular-text" value='<?php echo $options['qlinks_title_1']; ?>'>
	<?php

}
function qlinks_url_1_render()
{ 

	$options = get_option( 'qlinks_settings' );
	?>	
	<input type='text' name='qlinks_settings[qlinks_url_1]' id='qlinks_url_1' class="regular-text" value='<?php echo $options['qlinks_url_1']; ?>'>
	<?php

}
function qlinks_target_1_render()
{ 

	$options = get_option( 'qlinks_settings' );
	?>	
	<input type="checkbox" name="qlinks_settings[qlinks_target_1]" id='qlinks_target_1' value='yes' <?php echo ($options[qlinks_target_1]=='yes')? 'checked="checked"': ''; ?> > <label for="qlinks_target_1">Open Target in New Window</label>
	<hr />	
	<?php

}


function qlinks_title_2_render() 
{ 

	$options = get_option( 'qlinks_settings' );
	?>
	<input type='text' name='qlinks_settings[qlinks_title_2]' id='qlinks_title_2' class="regular-text" value='<?php echo $options['qlinks_title_2']; ?>'>
	<?php

}

function qlinks_url_2_render()
{ 

	$options = get_option( 'qlinks_settings' );
	?>	
	<input type='text' name='qlinks_settings[qlinks_url_2]' id='qlinks_url_2' class="regular-text" value='<?php echo $options['qlinks_url_2']; ?>'>
	<?php

}
function qlinks_target_2_render()
{ 

	$options = get_option( 'qlinks_settings' );
	?>	
	<input type="checkbox" name="qlinks_settings[qlinks_target_2]" id='qlinks_target_2' value='yes' <?php echo ($options[qlinks_target_2]=='yes')? 'checked="checked"': ''; ?> > <label for="qlinks_target_2">Open Target in New Window</label>
	<hr />	
	<?php

}


function qlinks_title_3_render() 
{ 

	$options = get_option( 'qlinks_settings' );
	?>
	<input type='text' name='qlinks_settings[qlinks_title_3]' id='qlinks_title_3' class="regular-text" value='<?php echo $options['qlinks_title_3']; ?>'>
	<?php

}
function qlinks_url_3_render()
{ 

	$options = get_option( 'qlinks_settings' );
	?>	
	<input type='text' name='qlinks_settings[qlinks_url_3]' id='qlinks_url_3' class="regular-text" value='<?php echo $options['qlinks_url_3']; ?>'>
	<?php

}
function qlinks_target_3_render()
{ 

	$options = get_option( 'qlinks_settings' );
	?>	
	<input type="checkbox" name="qlinks_settings[qlinks_target_3]" id='qlinks_target_3' value='yes' <?php echo ($options[qlinks_target_3]=='yes')? 'checked="checked"': ''; ?> > <label for="qlinks_target_3">Open Target in New Window</label>
	<hr />	
	<?php

}

function qlinks_title_4_render()
{ 

	$options = get_option( 'qlinks_settings' );
	?>
	<input type='text' name='qlinks_settings[qlinks_title_4]' id='qlinks_title_4' class="regular-text" value='<?php echo $options['qlinks_title_4']; ?>'>
	<?php

}

function qlinks_url_4_render()
{ 

	$options = get_option( 'qlinks_settings' );
	?>	
	<input type='text' name='qlinks_settings[qlinks_url_4]' id='qlinks_url_4' class="regular-text" value='<?php echo $options['qlinks_url_4']; ?>'>
	<?php

}
function qlinks_target_4_render()
{ 

	$options = get_option( 'qlinks_settings' );
	?>	
	<input type="checkbox" name="qlinks_settings[qlinks_target_4]" id='qlinks_target_4' value='yes' <?php echo ($options[qlinks_target_4]=='yes')? 'checked="checked"': ''; ?> > <label for="qlinks_target_4">Open Target in New Window</label>
	<hr />	
	<?php

}

function qlinks_title_5_render()
{ 

	$options = get_option( 'qlinks_settings' );
	?>
	<input type='text' name='qlinks_settings[qlinks_title_5]' id='qlinks_title_5' class="regular-text" value='<?php echo $options['qlinks_title_5']; ?>'>
	<?php

}

function qlinks_url_5_render()
{ 

	$options = get_option( 'qlinks_settings' );
	?>	
	<input type='text' name='qlinks_settings[qlinks_url_5]' id='qlinks_url_5' class="regular-text" value='<?php echo $options['qlinks_url_5']; ?>'>
	<?php

}
function qlinks_target_5_render()
{ 

	$options = get_option( 'qlinks_settings' );
	?>	
	<input type="checkbox" name="qlinks_settings[qlinks_target_5]" id='qlinks_target_5' value='yes' <?php echo ($options[qlinks_target_5]=='yes')? 'checked="checked"': ''; ?> > <label for="qlinks_target_5">Open Target in New Window</label>
	<hr />	
	<?php

}

function qlinks_title_6_render()
{ 

	$options = get_option( 'qlinks_settings' );
	?>
	<input type='text' name='qlinks_settings[qlinks_title_6]' id='qlinks_title_6' class="regular-text" value='<?php echo $options['qlinks_title_6']; ?>'>
	<?php

}

function qlinks_url_6_render()
{ 

	$options = get_option( 'qlinks_settings' );
	?>	
	<input type='text' name='qlinks_settings[qlinks_url_6]' id='qlinks_url_6' class="regular-text" value='<?php echo $options['qlinks_url_6']; ?>'>
	<?php

}
function qlinks_target_6_render()
{ 

	$options = get_option( 'qlinks_settings' );
	?>	
	<input type="checkbox" name="qlinks_settings[qlinks_target_6]" id='qlinks_target_6' value='yes' <?php echo ($options[qlinks_target_6]=='yes')? 'checked="checked"': ''; ?> > <label for="qlinks_target_6">Open Target in New Window</label>
	<hr />	
	<?php

}

function qlinks_title_7_render()
{ 

	$options = get_option( 'qlinks_settings' );
	?>
	<input type='text' name='qlinks_settings[qlinks_title_7]' id='qlinks_title_7' class="regular-text" value='<?php echo $options['qlinks_title_7']; ?>'>
	<?php

}

function qlinks_url_7_render()
{ 

	$options = get_option( 'qlinks_settings' );
	?>	
	<input type='text' name='qlinks_settings[qlinks_url_7]' id='qlinks_url_7' class="regular-text" value='<?php echo $options['qlinks_url_7']; ?>'>
	<?php

}
function qlinks_target_7_render()
{ 

	$options = get_option( 'qlinks_settings' );
	?>	
	<input type="checkbox" name="qlinks_settings[qlinks_target_7]" id='qlinks_target_7' value='yes' <?php echo ($options[qlinks_target_7]=='yes')? 'checked="checked"': ''; ?> > <label for="qlinks_target_7">Open Target in New Window</label>
	<hr />	
	<?php

}


function qlinks_title_8_render()
{ 

	$options = get_option( 'qlinks_settings' );
	?>
	<input type='text' name='qlinks_settings[qlinks_title_8]' id='qlinks_title_8' class="regular-text" value='<?php echo $options['qlinks_title_8']; ?>'>
	<?php

}

function qlinks_url_8_render()
{ 

	$options = get_option( 'qlinks_settings' );
	?>	
	<input type='text' name='qlinks_settings[qlinks_url_8]' id='qlinks_url_8' class="regular-text" value='<?php echo $options['qlinks_url_8']; ?>'>
	<?php

}

function qlinks_target_8_render()
{ 

	$options = get_option( 'qlinks_settings' );
	?>	
	<input type="checkbox" name="qlinks_settings[qlinks_target_8]" id='qlinks_target_8' value='yes' <?php echo ($options[qlinks_target_8]=='yes')? 'checked="checked"': ''; ?> > <label for="qlinks_target_8">Open Target in New Window</label>
	<hr />
	<?php

}

function qlinks_title_9_render()
{ 

	$options = get_option( 'qlinks_settings' );
	?>
	<input type='text' name='qlinks_settings[qlinks_title_9]' id='qlinks_title_9' class="regular-text" value='<?php echo $options['qlinks_title_9']; ?>'>
	<?php

}
function qlinks_url_9_render()
{ 

	$options = get_option( 'qlinks_settings' );
	?>	
	<input type='text' name='qlinks_settings[qlinks_url_9]' id='qlinks_url_9' class="regular-text" value='<?php echo $options['qlinks_url_9']; ?>'>
	<?php

}
function qlinks_target_9_render()
{ 

	$options = get_option( 'qlinks_settings' );
	?>	
	<input type="checkbox" name="qlinks_settings[qlinks_target_9]" id='qlinks_target_9' value='yes' <?php echo ($options[qlinks_target_9]=='yes')? 'checked="checked"': ''; ?> > <label for="qlinks_target_9">Open Target in New Window</label>
	<hr />
	<?php

}


function qlinks_settings_section_callback()
{ 

	//echo __( 'This section description', 'wordpress' );
	//echo '<pre>'.print_r($_POST,1).'</pre>';
	//if($_POST['']){}

}


function qlinks_options_page()
{ 
	
	//echo '<pre>'.print_r($options,1).'</pre>';
	?>
	<form action='options.php' method='post'>
		
		<h2>Quick Links</h2>
		
		<?php
		settings_fields( 'quick_links' );
		do_settings_sections( 'quick_links' );
		submit_button();
		?>
		
	</form>
	<?php

}

function quick_links_validate_input($input) 
{	
	foreach( $input as $key => $value )
	{	
		$input[$key] = apply_filters( 'quick_links_validation_' . $key, $value );
	}	
	return $input;
}

add_filter( 'quick_links_validation_qlinks_title_1', 'validate_qlinks_title' );
add_filter( 'quick_links_validation_qlinks_title_2', 'validate_qlinks_title' );
add_filter( 'quick_links_validation_qlinks_title_3', 'validate_qlinks_title' );
add_filter( 'quick_links_validation_qlinks_title_4', 'validate_qlinks_title' );
add_filter( 'quick_links_validation_qlinks_title_5', 'validate_qlinks_title' );
add_filter( 'quick_links_validation_qlinks_title_6', 'validate_qlinks_title' );
add_filter( 'quick_links_validation_qlinks_title_7', 'validate_qlinks_title' );
add_filter( 'quick_links_validation_qlinks_title_8', 'validate_qlinks_title' );
add_filter( 'quick_links_validation_qlinks_title_9', 'validate_qlinks_title' );
function validate_qlinks_title( $text )
{
	wp_filter_nohtml_kses($text);
	$text = strtoupper( $text );
	return wp_kses( $text, array('"','&','quote'));	
}

add_filter( 'quick_links_validation_qlinks_url_1', 'validate_qlinks_url' );
add_filter( 'quick_links_validation_qlinks_url_2', 'validate_qlinks_url' );
add_filter( 'quick_links_validation_qlinks_url_3', 'validate_qlinks_url' );
add_filter( 'quick_links_validation_qlinks_url_4', 'validate_qlinks_url' );
add_filter( 'quick_links_validation_qlinks_url_5', 'validate_qlinks_url' );
add_filter( 'quick_links_validation_qlinks_url_6', 'validate_qlinks_url' );
add_filter( 'quick_links_validation_qlinks_url_7', 'validate_qlinks_url' );
add_filter( 'quick_links_validation_qlinks_url_8', 'validate_qlinks_url' );
add_filter( 'quick_links_validation_qlinks_url_9', 'validate_qlinks_url' );
function validate_qlinks_url( $url ) 
{
	$regex = "/^(http|https|ftp):\/\/([A-Z0-9][A-Z0-9_-]*(?:\.[A-Z0-9][A-Z0-9_-]*)+):?(\d+)?\/?/i";    
	$is_url = (bool)preg_match($regex, $url);
	
	if(	$is_url === true	)
	{
		return esc_url( $url );	
	} 
	
	wp_filter_nohtml_kses($url);
	$text = strtoupper( $url );
	return wp_kses( $url, array('/','&','?','='));		
	
	
}

// displays on Home page in the quick links section.
function quick_links_section()
{
	
	//get saved data	
	if ( !$qlinks_options = get_option( 'qlinks_settings' ) )
	{
	   
	   $qlinks_options = array();
	   
	}
	
	
	if(!empty($qlinks_options['qlinks_url_1']) && !empty($qlinks_options['qlinks_title_1']))
	{
	?>
	<a href="<?php echo $qlinks_options['qlinks_url_1']; ?>" title="<?php echo $qlinks_options['qlinks_title_1']; ?>" target="<?php echo ($qlinks_options['qlinks_target_1']=='yes')?'_blank':'_self'; ?>"><button class="btn btn-primary" style="width: 100%; margin-bottom: 5px;" type="button"><?php echo $qlinks_options['qlinks_title_1']; ?></button></a>
	<?php
	}	
	
	if(!empty($qlinks_options['qlinks_url_2']) && !empty($qlinks_options['qlinks_title_2']))
	{
	?>
		<a href="<?php echo $qlinks_options['qlinks_url_2']; ?>" title="<?php echo $qlinks_options['qlinks_title_2']; ?>" target="<?php echo ($qlinks_options['qlinks_target_2']=='yes')?'_blank':'_self'; ?>"><button class="btn btn-primary" style="width: 100%; margin-bottom: 5px;" type="button"><?php echo $qlinks_options['qlinks_title_2']; ?></button></a>
	<?php
	}
	
	if(!empty($qlinks_options['qlinks_url_3']) && !empty($qlinks_options['qlinks_title_3']))
	{
	?>
		<a href="<?php echo $qlinks_options['qlinks_url_3']; ?>" title="<?php echo $qlinks_options['qlinks_title_3']; ?>" target="<?php echo ($qlinks_options['qlinks_target_3']=='yes')?'_blank':'_self'; ?>"><button class="btn btn-primary" style="width: 100%; margin-bottom: 5px;" type="button"><?php echo $qlinks_options['qlinks_title_3']; ?></button></a>
	<?php
	}
	
	if(!empty($qlinks_options['qlinks_url_4']) && !empty($qlinks_options['qlinks_title_4']))
	{
	?>
		<a href="<?php echo $qlinks_options['qlinks_url_4']; ?>" title="<?php echo $qlinks_options['qlinks_title_4']; ?>" target="<?php echo ($qlinks_options['qlinks_target_4']=='yes')?'_blank':'_self'; ?>"><button class="btn btn-primary" style="width: 100%; margin-bottom: 5px;" type="button"><?php echo $qlinks_options['qlinks_title_4']; ?></button></a>
	<?php
	}
	
	if(!empty($qlinks_options['qlinks_url_5']) && !empty($qlinks_options['qlinks_title_5']))
	{
	?>
		<a href="<?php echo $qlinks_options['qlinks_url_5']; ?>" title="<?php echo $qlinks_options['qlinks_title_5']; ?>" target="<?php echo ($qlinks_options['qlinks_target_5']=='yes')?'_blank':'_self'; ?>"><button class="btn btn-primary" style="width: 100%; margin-bottom: 5px;" type="button"><?php echo $qlinks_options['qlinks_title_5']; ?></button></a>
	<?php
	}
	
	if(!empty($qlinks_options['qlinks_url_6']) && !empty($qlinks_options['qlinks_title_6']))
	{
	?>
		<a href="<?php echo $qlinks_options['qlinks_url_6']; ?>" title="<?php echo $qlinks_options['qlinks_title_6']; ?>" target="<?php echo ($qlinks_options['qlinks_target_6']=='yes')?'_blank':'_self'; ?>"><button class="btn btn-primary" style="width: 100%; margin-bottom: 5px;" type="button"><?php echo $qlinks_options['qlinks_title_6']; ?></button></a>
	<?php
	}
	
	if(!empty($qlinks_options['qlinks_url_7']) && !empty($qlinks_options['qlinks_title_7']))
	{
	?>
		<a href="<?php echo $qlinks_options['qlinks_url_7']; ?>" title="<?php echo $qlinks_options['qlinks_title_7']; ?>" target="<?php echo ($qlinks_options['qlinks_target_7']=='yes')?'_blank':'_self'; ?>"><button class="btn btn-primary" style="width: 100%; margin-bottom: 5px;" type="button"><?php echo $qlinks_options['qlinks_title_7']; ?></button></a>
	<?php
	}
	
	if(!empty($qlinks_options['qlinks_url_8']) && !empty($qlinks_options['qlinks_title_8']))
	{
	?>
		<a href="<?php echo $qlinks_options['qlinks_url_8']; ?>" title="<?php echo $qlinks_options['qlinks_title_8']; ?>" target="<?php echo ($qlinks_options['qlinks_target_8']=='yes')?'_blank':'_self'; ?>"><button class="btn btn-primary" style="width: 100%; margin-bottom: 5px;" type="button"><?php echo $qlinks_options['qlinks_title_8']; ?></button></a>
	<?php
	}
	
	if(!empty($qlinks_options['qlinks_url_9']) && !empty($qlinks_options['qlinks_title_9']))
	{
	?>
		<a href="<?php echo $qlinks_options['qlinks_url_9']; ?>" title="<?php echo $qlinks_options['qlinks_title_9']; ?>" target="<?php echo ($qlinks_options['qlinks_target_9']=='yes')?'_blank':'_self'; ?>"><button class="btn btn-primary" style="width: 100%; margin-bottom: 5px;" type="button"><?php echo $qlinks_options['qlinks_title_9']; ?></button></a>
	<?php
	}
}
		
?>