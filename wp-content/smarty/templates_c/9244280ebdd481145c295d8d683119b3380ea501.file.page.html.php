<?php /* Smarty version Smarty-3.1.18, created on 2014-07-08 18:28:41
         compiled from "C:\xampp\htdocs\kircheimkino.com\wp-content\themes\copernicus-start\templates\page.html" */ ?>
<?php /*%%SmartyHeaderCode:563653bc3859402821-49140600%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9244280ebdd481145c295d8d683119b3380ea501' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kircheimkino.com\\wp-content\\themes\\copernicus-start\\templates\\page.html',
      1 => 1401691272,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '563653bc3859402821-49140600',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53bc38594b99d3_77455308',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53bc38594b99d3_77455308')) {function content_53bc38594b99d3_77455308($_smarty_tpl) {?><?php if (!is_callable('smarty_function_the_content')) include 'C:\\xampp\\htdocs\\kircheimkino.com\\wp-content\\plugins\\copernicus/lib/smarty-plugins\\function.the_content.php';
if (!is_callable('smarty_function_the_post')) include 'C:\\xampp\\htdocs\\kircheimkino.com\\wp-content\\plugins\\copernicus/lib/smarty-plugins\\function.the_post.php';
if (!is_callable('smarty_function_list_pages')) include 'C:\\xampp\\htdocs\\kircheimkino.com\\wp-content\\plugins\\copernicus/lib/smarty-plugins\\function.list_pages.php';
if (!is_callable('smarty_function_dynamic_sidebar')) include 'C:\\xampp\\htdocs\\kircheimkino.com\\wp-content\\plugins\\copernicus/lib/smarty-plugins\\function.dynamic_sidebar.php';
?><section class="main-section">
	<article>
		<?php echo smarty_function_the_content(array('html'=>1),$_smarty_tpl);?>

	</article><aside>
		<ul>
			<?php ob_start();?><?php echo smarty_function_the_post(array('key'=>'post_parent'),$_smarty_tpl);?>
<?php $_tmp7=ob_get_clean();?><?php if ($_tmp7) {?>
				<?php ob_start();?><?php echo smarty_function_the_post(array('key'=>'post_parent'),$_smarty_tpl);?>
<?php $_tmp8=ob_get_clean();?><?php echo smarty_function_list_pages(array('id'=>'submenu','child_of'=>$_tmp8),$_smarty_tpl);?>

			<?php } else { ?>
				<?php ob_start();?><?php echo cp_autoload_the_id::function_autoloader(array(),$_smarty_tpl);?>
<?php $_tmp9=ob_get_clean();?><?php echo smarty_function_list_pages(array('id'=>'submenu','child_of'=>$_tmp9),$_smarty_tpl);?>

			<?php }?>
		</ul>
		<?php echo smarty_function_dynamic_sidebar(array('index'=>"aside"),$_smarty_tpl);?>

	</aside>
</section>
<?php }} ?>
