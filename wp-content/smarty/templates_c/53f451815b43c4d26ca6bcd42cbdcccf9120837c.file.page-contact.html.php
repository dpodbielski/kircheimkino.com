<?php /* Smarty version Smarty-3.1.18, created on 2014-07-30 11:00:27
         compiled from "C:\xampp\htdocs\kircheimkino.com\wp-content\themes\kircheimkino\templates\page-contact.html" */ ?>
<?php /*%%SmartyHeaderCode:2828953d8d04b07a123-97157306%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53f451815b43c4d26ca6bcd42cbdcccf9120837c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kircheimkino.com\\wp-content\\themes\\kircheimkino\\templates\\page-contact.html',
      1 => 1406718010,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2828953d8d04b07a123-97157306',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53d8d04b16e368_63516507',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d8d04b16e368_63516507')) {function content_53d8d04b16e368_63516507($_smarty_tpl) {?><?php if (!is_callable('smarty_function_the_content')) include 'C:\\xampp\\htdocs\\kircheimkino.com\\wp-content\\plugins\\copernicus/lib/smarty-plugins\\function.the_content.php';
if (!is_callable('smarty_function_post_meta')) include 'C:\\xampp\\htdocs\\kircheimkino.com\\wp-content\\plugins\\copernicus/lib/smarty-plugins\\function.post_meta.php';
if (!is_callable('smarty_modifier_translate')) include 'C:\\xampp\\htdocs\\kircheimkino.com\\wp-content\\plugins\\copernicus/lib/smarty-plugins\\modifier.translate.php';
?><section class="main-section contact">
	<aside>
		<?php echo smarty_function_the_content(array('html'=>"1"),$_smarty_tpl);?>

		<?php ob_start();?><?php echo smarty_function_post_meta(array('key'=>'address'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1) {?>
		<iframe src="https://maps.google.pl/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=<?php echo smarty_function_post_meta(array('key'=>'address'),$_smarty_tpl);?>
&amp;aq=&amp;ie=UTF8&amp;hq=&amp;hnear=<?php echo smarty_function_post_meta(array('key'=>'address'),$_smarty_tpl);?>
&amp;t=m&amp;z=12&amp;iwloc=near&amp;output=embed" height="345" width="345"></iframe>
		<a href="https://maps.google.pl/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=zurich&amp;aq=&amp;ie=UTF8&amp;hq=&amp;hnear=<?php echo smarty_function_post_meta(array('key'=>'address'),$_smarty_tpl);?>
&amp;t=m&amp;z=12&amp;iwloc=A">View Larger Map</a><?php }?>
	</aside><article>
		<div id="main-content">
			<h1>Kontakt</h1>
			<form action="/wp-admin/admin-ajax.php?action=msb_send_message" class="wdForm">
				<fieldset>
					<input id="name" name="name" type="text" placeholder="<?php echo smarty_modifier_translate("Name");?>
"/>
					<input id="email" name="email" type="text" placeholder="<?php echo smarty_modifier_translate("E-Mail");?>
"/>
					<input id="betreff" name="betreff" type="text" placeholder="<?php echo smarty_modifier_translate("Betreff");?>
"/>
					<textarea id="message" name="message" placeholder="<?php echo smarty_modifier_translate("Text");?>
"></textarea>

					<input type="submit" name="senden" value="<?php echo smarty_modifier_translate("Senden");?>
" />

					<input type="hidden" name="timer" id="timer" value="0">
				</fieldset>
			</form>
		</div>
	</article>
</section>
<?php }} ?>
