<?php /* Smarty version Smarty-3.1.18, created on 2014-07-02 22:37:35
         compiled from "C:\xampp\htdocs\kircheimkino.com\wp-content\themes\copernicus-start\templates\home.html" */ ?>
<?php /*%%SmartyHeaderCode:1854653b489afd97011-23116903%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9a214d5c7b3e6461f204a2f27cc098da4107fd3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kircheimkino.com\\wp-content\\themes\\copernicus-start\\templates\\home.html',
      1 => 1401691272,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1854653b489afd97011-23116903',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53b489b007a124_42528082',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53b489b007a124_42528082')) {function content_53b489b007a124_42528082($_smarty_tpl) {?><?php if (!is_callable('smarty_block_loop')) include 'C:\\xampp\\htdocs\\kircheimkino.com\\wp-content\\plugins\\copernicus/lib/smarty-plugins\\block.loop.php';
if (!is_callable('smarty_modifier_translate')) include 'C:\\xampp\\htdocs\\kircheimkino.com\\wp-content\\plugins\\copernicus/lib/smarty-plugins\\modifier.translate.php';
if (!is_callable('smarty_function_blog_categories')) include 'C:\\xampp\\htdocs\\kircheimkino.com/wp-content/themes/copernicus-start/lib/smarty-plugins\\function.blog_categories.php';
if (!is_callable('smarty_function_blog_tags')) include 'C:\\xampp\\htdocs\\kircheimkino.com/wp-content/themes/copernicus-start/lib/smarty-plugins\\function.blog_tags.php';
if (!is_callable('smarty_function_dynamic_sidebar')) include 'C:\\xampp\\htdocs\\kircheimkino.com\\wp-content\\plugins\\copernicus/lib/smarty-plugins\\function.dynamic_sidebar.php';
?><section class="main-section blog">
	<div class="blog_list">	
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array()); $_block_repeat=true; echo smarty_block_loop(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			{include file='blog_loop.html'}
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_loop(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	</div><aside>
	<h3><?php echo smarty_modifier_translate("Categories");?>
</h3>
		<ul><?php echo smarty_function_blog_categories(array(),$_smarty_tpl);?>
</ul>
	<h3 class="second"><?php echo smarty_modifier_translate("Tags");?>
</h3>
		<ul><?php echo smarty_function_blog_tags(array(),$_smarty_tpl);?>
</ul>
		<?php echo smarty_function_dynamic_sidebar(array('index'=>"aside"),$_smarty_tpl);?>

	</aside>
</section><?php }} ?>
