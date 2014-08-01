<?php /* Smarty version Smarty-3.1.18, created on 2014-08-01 07:30:53
         compiled from "C:\Program Files (x86)\wamp\www\kircheimkino.com\wp-content\themes\kircheimkino\templates\header.html" */ ?>
<?php /*%%SmartyHeaderCode:3213253db422d3b2fb0-06916040%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c1c66ebd8464941af96243a81d206c3dda49c90' => 
    array (
      0 => 'C:\\Program Files (x86)\\wamp\\www\\kircheimkino.com\\wp-content\\themes\\kircheimkino\\templates\\header.html',
      1 => 1406716590,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3213253db422d3b2fb0-06916040',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53db422d3f19b1_21918815',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53db422d3f19b1_21918815')) {function content_53db422d3f19b1_21918815($_smarty_tpl) {?><?php if (!is_callable('smarty_function_nav_menu')) include 'C:\\Program Files (x86)\\wamp\\www\\kircheimkino.com\\wp-content\\plugins\\copernicus/lib/smarty-plugins\\function.nav_menu.php';
if (!is_callable('smarty_block_loop')) include 'C:\\Program Files (x86)\\wamp\\www\\kircheimkino.com\\wp-content\\plugins\\copernicus/lib/smarty-plugins\\block.loop.php';
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
