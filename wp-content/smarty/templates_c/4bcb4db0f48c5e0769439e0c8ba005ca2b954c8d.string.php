<?php /* Smarty version Smarty-3.1.18, created on 2014-07-09 10:36:35
         compiled from "4bcb4db0f48c5e0769439e0c8ba005ca2b954c8d" */ ?>
<?php /*%%SmartyHeaderCode:983953bd1b3366ff39-82294926%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4bcb4db0f48c5e0769439e0c8ba005ca2b954c8d' => 
    array (
      0 => '4bcb4db0f48c5e0769439e0c8ba005ca2b954c8d',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '983953bd1b3366ff39-82294926',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'post' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53bd1b336acfc1_58377495',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53bd1b336acfc1_58377495')) {function content_53bd1b336acfc1_58377495($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_translate')) include 'C:\\xampp\\htdocs\\kircheimkino.com\\wp-content\\plugins\\copernicus/lib/smarty-plugins\\modifier.translate.php';
if (!is_callable('smarty_function_topid')) include 'C:\\xampp\\htdocs\\kircheimkino.com/wp-content/themes/kircheimkino/lib/smarty-plugins\\function.topid.php';
if (!is_callable('smarty_function_the_title')) include 'C:\\xampp\\htdocs\\kircheimkino.com\\wp-content\\plugins\\copernicus/lib/smarty-plugins\\function.the_title.php';
?>
			<?php if ($_smarty_tpl->tpl_vars['post']->value->post_type=='post') {?><span><?php echo smarty_modifier_translate("Blog");?>
</span>
			<?php } elseif ($_smarty_tpl->tpl_vars['post']->value->post_type=='news') {?><?php echo smarty_modifier_translate("News");?>

			<?php } elseif ($_smarty_tpl->tpl_vars['post']->value->post_type=='gallery') {?><?php echo smarty_modifier_translate("Gallery");?>

			<?php } else { ?><?php ob_start();?><?php echo smarty_function_topid(array(),$_smarty_tpl);?>
<?php $_tmp6=ob_get_clean();?><?php echo smarty_function_the_title(array('id'=>$_tmp6),$_smarty_tpl);?>
<?php }?>
			<?php }} ?>
