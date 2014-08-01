<?php /* Smarty version Smarty-3.1.18, created on 2014-07-08 18:28:41
         compiled from "C:\xampp\htdocs\kircheimkino.com\wp-content\themes\copernicus-start\templates\footer.html" */ ?>
<?php /*%%SmartyHeaderCode:1841353bc38594f6a65-97672841%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3198e177dacbd510b8aa895a5315b9fc08484000' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kircheimkino.com\\wp-content\\themes\\copernicus-start\\templates\\footer.html',
      1 => 1401691272,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1841353bc38594f6a65-97672841',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53bc3859533af1_67750057',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53bc3859533af1_67750057')) {function content_53bc3859533af1_67750057($_smarty_tpl) {?><?php if (!is_callable('smarty_function_page_menu')) include 'C:\\xampp\\htdocs\\kircheimkino.com\\wp-content\\plugins\\copernicus/lib/smarty-plugins\\function.page_menu.php';
if (!is_callable('smarty_function_dynamic_sidebar')) include 'C:\\xampp\\htdocs\\kircheimkino.com\\wp-content\\plugins\\copernicus/lib/smarty-plugins\\function.dynamic_sidebar.php';
if (!is_callable('smarty_modifier_translate')) include 'C:\\xampp\\htdocs\\kircheimkino.com\\wp-content\\plugins\\copernicus/lib/smarty-plugins\\modifier.translate.php';
if (!is_callable('smarty_function_language_menu')) include 'C:\\xampp\\htdocs\\kircheimkino.com/wp-content/themes/copernicus-start/lib/smarty-plugins\\function.language_menu.php';
if (!is_callable('smarty_block_loop')) include 'C:\\xampp\\htdocs\\kircheimkino.com\\wp-content\\plugins\\copernicus/lib/smarty-plugins\\block.loop.php';
?></div>
<footer>
	<div class="menu"><?php echo smarty_function_page_menu(array('id'=>'footer'),$_smarty_tpl);?>
</div>
	<section>
		<article>
		<?php echo smarty_function_dynamic_sidebar(array('index'=>"footer_contact"),$_smarty_tpl);?>

		</article>
		<article>
		<h3><?php echo smarty_modifier_translate("Select language");?>
</h3><ul class="languages"><?php echo smarty_function_language_menu(array(),$_smarty_tpl);?>
</ul>
		</article>
		<article>
		<h3><?php echo smarty_modifier_translate("Find us on");?>
</h3><ul class="social"><?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>'social')); $_block_repeat=true; echo smarty_block_loop(array('name'=>'social'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<li>
				<a href="{post_meta key="link"}" title="{the_title}" target="_blank">{image id={get_post_thumbnail_id} w=38 h=38 f="png" q=95 zc=1 alt={the_title}}</a>
			</li>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_loop(array('name'=>'social'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</ul>
		</article>
		<article>
		<?php echo smarty_function_dynamic_sidebar(array('index'=>"footer_copyrights"),$_smarty_tpl);?>

		</article>
	</section>
</footer><?php }} ?>
