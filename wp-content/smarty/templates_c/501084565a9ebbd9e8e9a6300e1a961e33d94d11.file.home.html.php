<?php /* Smarty version Smarty-3.1.18, created on 2014-07-30 10:48:10
         compiled from "C:\xampp\htdocs\kircheimkino.com\wp-content\themes\kircheimkino\templates\home.html" */ ?>
<?php /*%%SmartyHeaderCode:2892553d8cd6a3567e5-69808078%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '501084565a9ebbd9e8e9a6300e1a961e33d94d11' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kircheimkino.com\\wp-content\\themes\\kircheimkino\\templates\\home.html',
      1 => 1406717288,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2892553d8cd6a3567e5-69808078',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53d8cd6a393876_23198428',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d8cd6a393876_23198428')) {function content_53d8cd6a393876_23198428($_smarty_tpl) {?><?php if (!is_callable('smarty_block_loop')) include 'C:\\xampp\\htdocs\\kircheimkino.com\\wp-content\\plugins\\copernicus/lib/smarty-plugins\\block.loop.php';
if (!is_callable('smarty_modifier_translate')) include 'C:\\xampp\\htdocs\\kircheimkino.com\\wp-content\\plugins\\copernicus/lib/smarty-plugins\\modifier.translate.php';
if (!is_callable('smarty_function_blog_categories')) include 'C:\\xampp\\htdocs\\kircheimkino.com/wp-content/themes/kircheimkino/lib/smarty-plugins\\function.blog_categories.php';
if (!is_callable('smarty_function_blog_tags')) include 'C:\\xampp\\htdocs\\kircheimkino.com/wp-content/themes/kircheimkino/lib/smarty-plugins\\function.blog_tags.php';
if (!is_callable('smarty_function_dynamic_sidebar')) include 'C:\\xampp\\htdocs\\kircheimkino.com\\wp-content\\plugins\\copernicus/lib/smarty-plugins\\function.dynamic_sidebar.php';
?><section class="main-section blog">
	<div class="blog_list">	
		<section id="main-content">
			<h1>Blog</h1>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array()); $_block_repeat=true; echo smarty_block_loop(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				{include file='blog_loop.html'}
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_loop(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		</section>
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
