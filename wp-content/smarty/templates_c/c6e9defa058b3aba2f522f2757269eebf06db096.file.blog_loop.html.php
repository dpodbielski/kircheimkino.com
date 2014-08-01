<?php /* Smarty version Smarty-3.1.18, created on 2014-07-30 10:48:10
         compiled from "C:\xampp\htdocs\kircheimkino.com\wp-content\themes\kircheimkino\templates\blog_loop.html" */ ?>
<?php /*%%SmartyHeaderCode:825953d8cd6a40d995-06752133%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6e9defa058b3aba2f522f2757269eebf06db096' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kircheimkino.com\\wp-content\\themes\\kircheimkino\\templates\\blog_loop.html',
      1 => 1404990079,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '825953d8cd6a40d995-06752133',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53d8cd6a44aa25_25216477',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d8cd6a44aa25_25216477')) {function content_53d8cd6a44aa25_25216477($_smarty_tpl) {?><?php if (!is_callable('smarty_function_the_title')) include 'C:\\xampp\\htdocs\\kircheimkino.com\\wp-content\\plugins\\copernicus/lib/smarty-plugins\\function.the_title.php';
if (!is_callable('smarty_function_image')) include 'C:\\xampp\\htdocs\\kircheimkino.com\\wp-content\\plugins\\copernicus/lib/smarty-plugins\\function.image.php';
if (!is_callable('smarty_function_the_content')) include 'C:\\xampp\\htdocs\\kircheimkino.com\\wp-content\\plugins\\copernicus/lib/smarty-plugins\\function.the_content.php';
?>	<article>
		<h2><?php echo smarty_function_the_title(array(),$_smarty_tpl);?>
</h2>
		<?php ob_start();?><?php echo cp_autoload_get_post_thumbnail_id::function_autoloader(array(),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_the_title(array(),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php echo smarty_function_image(array('id'=>$_tmp1,'alt'=>$_tmp2),$_smarty_tpl);?>

		<?php echo smarty_function_the_content(array('html'=>"1",'excerpt'=>"1"),$_smarty_tpl);?>

		<time><?php echo cp_autoload_get_the_date::function_autoloader(array(),$_smarty_tpl);?>
</time>
		<div class="author"><?php echo cp_autoload_get_the_author::function_autoloader(array(),$_smarty_tpl);?>
</div>
		<hr />
	</article><?php }} ?>
