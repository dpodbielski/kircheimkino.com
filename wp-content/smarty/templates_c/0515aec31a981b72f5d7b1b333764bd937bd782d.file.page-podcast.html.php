<?php /* Smarty version Smarty-3.1.18, created on 2014-07-30 10:57:58
         compiled from "C:\xampp\htdocs\kircheimkino.com\wp-content\themes\kircheimkino\templates\page-podcast.html" */ ?>
<?php /*%%SmartyHeaderCode:2400353d8cfb66ea053-18402424%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0515aec31a981b72f5d7b1b333764bd937bd782d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kircheimkino.com\\wp-content\\themes\\kircheimkino\\templates\\page-podcast.html',
      1 => 1406545342,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2400353d8cfb66ea053-18402424',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53d8cfb67270e3_19777486',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d8cfb67270e3_19777486')) {function content_53d8cfb67270e3_19777486($_smarty_tpl) {?><?php if (!is_callable('smarty_block_loop')) include 'C:\\xampp\\htdocs\\kircheimkino.com\\wp-content\\plugins\\copernicus/lib/smarty-plugins\\block.loop.php';
?>This is page-podcast.html
<section id="main-content">
	<h1>Podcast</h1>
	<ul id="podcast-list">
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>'podcasts')); $_block_repeat=true; echo smarty_block_loop(array('name'=>'podcasts'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			{include file='podcasts_loop.html'}
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_loop(array('name'=>'podcasts'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	</ul>
</section><?php }} ?>
