<?php /* Smarty version Smarty-3.1.18, created on 2014-07-30 11:01:39
         compiled from "C:\xampp\htdocs\kircheimkino.com\wp-content\themes\kircheimkino\templates\header.html" */ ?>
<?php /*%%SmartyHeaderCode:2526053d8d093a037a7-82860871%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76574792cfa7b3b6ad96cc990016f9e55e99e3fd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kircheimkino.com\\wp-content\\themes\\kircheimkino\\templates\\header.html',
      1 => 1406716591,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2526053d8d093a037a7-82860871',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53d8d093a40831_67232120',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d8d093a40831_67232120')) {function content_53d8d093a40831_67232120($_smarty_tpl) {?><?php if (!is_callable('smarty_function_nav_menu')) include 'C:\\xampp\\htdocs\\kircheimkino.com\\wp-content\\plugins\\copernicus/lib/smarty-plugins\\function.nav_menu.php';
if (!is_callable('smarty_block_loop')) include 'C:\\xampp\\htdocs\\kircheimkino.com\\wp-content\\plugins\\copernicus/lib/smarty-plugins\\block.loop.php';
?><div class="page-wrap">
	<aside>
		<nav id="main-nav">
			<?php echo smarty_function_nav_menu(array('location'=>"aside"),$_smarty_tpl);?>

		</nav>
		<h2>Adresse</h2>
		<address><strong>Kirche im Kino</strong><br />Kino Linde<br />5400 Baden</address>
		<p><a href="mailto:info@kircheimkino.com">info@kircheimkino.com</a><br />0041 56 288 02 10</p>
	</aside>

	<header>
		<a href="<?php echo cp_autoload_home_url::function_autoloader(array(),$_smarty_tpl);?>
" id="logo">Kirche im Kino</a>
		<div id="next-event">
			<h2>Nächster Sonntag</h2>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>'events')); $_block_repeat=true; echo smarty_block_loop(array('name'=>'events'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				{include file='events_loop.html'}
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_loop(array('name'=>'events'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		</div>
	</header>

<?php }} ?>
