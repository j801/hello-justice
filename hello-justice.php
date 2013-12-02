<?php
/*  
Plugin Name: Hello Justice
Plugin URI: https://github.com/j801/hello-justice
Description: This is just a joke plugin.   
Author: Yuki Okamoto (HN:Justice)      
Version: 1.0
Author URI: http://press.monaca.mobi/                                   
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/                                  

// output message
function hello_justice() 
{  
  echo esc_html('ステルスマーケティングは完璧に。
                 それが僕のジャスティス');
}

// set that function up to execute when action is called
add_action('wp_footer', 'hello_justice');
?>
