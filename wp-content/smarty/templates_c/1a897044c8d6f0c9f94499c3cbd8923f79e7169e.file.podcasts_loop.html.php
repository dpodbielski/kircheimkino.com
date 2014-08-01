<?php /* Smarty version Smarty-3.1.18, created on 2014-07-30 10:57:58
         compiled from "C:\xampp\htdocs\kircheimkino.com\wp-content\themes\kircheimkino\templates\podcasts_loop.html" */ ?>
<?php /*%%SmartyHeaderCode:2290553d8cfb67a1207-52392902%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a897044c8d6f0c9f94499c3cbd8923f79e7169e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kircheimkino.com\\wp-content\\themes\\kircheimkino\\templates\\podcasts_loop.html',
      1 => 1406544428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2290553d8cfb67a1207-52392902',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53d8cfb67de292_81469741',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d8cfb67de292_81469741')) {function content_53d8cfb67de292_81469741($_smarty_tpl) {?><?php if (!is_callable('smarty_function_post_meta')) include 'C:\\xampp\\htdocs\\kircheimkino.com\\wp-content\\plugins\\copernicus/lib/smarty-plugins\\function.post_meta.php';
if (!is_callable('smarty_function_the_title')) include 'C:\\xampp\\htdocs\\kircheimkino.com\\wp-content\\plugins\\copernicus/lib/smarty-plugins\\function.the_title.php';
?>	<li> 
		<time><?php echo cp_autoload_get_the_date::function_autoloader(array(),$_smarty_tpl);?>
</time>
		<h2><?php echo smarty_function_post_meta(array('key'=>"pauthor"),$_smarty_tpl);?>
 - <?php echo smarty_function_the_title(array(),$_smarty_tpl);?>
</h2>
		<div class="download"><a href="/download.php?file=/wp-content/uploads/2012/04/2012-04-22-Von-Billig-zu-Unbezahlbar.mp3">download</a></div>
	<div><audio id="player180" src="http://www.kircheimkino.com/wp-content/uploads/2012/04/2012-04-22-Von-Billig-zu-Unbezahlbar.mp3"  controls="controls" preload="none"></audio></div>
	</li>
<?php }} ?>
