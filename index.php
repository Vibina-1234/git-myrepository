<?php 
/**
 * Plugin Name:      Example Plugin
 * Plugin URI:        
 * Description:       Handle the basics with this plugin.
 * Version:           1.10.3
 */
 
add_action("admin_menu", "addMenu");
function addMenu()
{
  add_menu_page("Example Options", "Example Options", 4, "example-options", "exampleMenu" );
  add_submenu_page("example-options", "Option 1", "Option 1", 4, "example-option-1", "option1");
}

function exampleMenu()
{
echo <<< 'EOD'
  <h2> Coming Soonqqqq</h2>
EOD;
}

function option1()
{
  echo "Testing";
}


/*	$content = "";
	$content .="<h1>Hello</h1>";
	return $content;

}
add_shortcode('example_form','example_form_plugin');*/

?>