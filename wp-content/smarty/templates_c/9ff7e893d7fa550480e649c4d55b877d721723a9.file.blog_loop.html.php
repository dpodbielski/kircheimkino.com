<?php /* Smarty version Smarty-3.1.18, created on 2014-07-02 22:37:36
         compiled from "C:\xampp\htdocs\kircheimkino.com\wp-content\themes\copernicus-start\templates\blog_loop.html" */ ?>
<?php /*%%SmartyHeaderCode:2489653b489b0764170-10716680%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ff7e893d7fa550480e649c4d55b877d721723a9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kircheimkino.com\\wp-content\\themes\\copernicus-start\\templates\\blog_loop.html',
      1 => 1401691272,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2489653b489b0764170-10716680',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'terms' => 0,
    'term' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53b489b1393871_11072209',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53b489b1393871_11072209')) {function content_53b489b1393871_11072209($_smarty_tpl) {?><?php if (!is_callable('smarty_function_the_title')) include 'C:\\xampp\\htdocs\\kircheimkino.com\\wp-content\\plugins\\copernicus/lib/smarty-plugins\\function.the_title.php';
if (!is_callable('smarty_function_image')) include 'C:\\xampp\\htdocs\\kircheimkino.com\\wp-content\\plugins\\copernicus/lib/smarty-plugins\\function.image.php';
if (!is_callable('smarty_modifier_translate')) include 'C:\\xampp\\htdocs\\kircheimkino.com\\wp-content\\plugins\\copernicus/lib/smarty-plugins\\modifier.translate.php';
if (!is_callable('smarty_modifier_replace')) include 'C:\\xampp\\htdocs\\kircheimkino.com\\wp-content\\plugins\\copernicus\\lib\\smarty\\plugins\\modifier.replace.php';
if (!is_callable('smarty_function_the_terms')) include 'C:\\xampp\\htdocs\\kircheimkino.com/wp-content/themes/copernicus-start/lib/smarty-plugins\\function.the_terms.php';
if (!is_callable('smarty_function_the_content')) include 'C:\\xampp\\htdocs\\kircheimkino.com\\wp-content\\plugins\\copernicus/lib/smarty-plugins\\function.the_content.php';
?><article>
	<h2><a href="<?php echo cp_autoload_get_permalink::function_autoloader(array(),$_smarty_tpl);?>
"><?php echo smarty_function_the_title(array(),$_smarty_tpl);?>
</a></h2>
	<a href="<?php echo cp_autoload_get_permalink::function_autoloader(array(),$_smarty_tpl);?>
"><?php ob_start();?><?php echo cp_autoload_get_post_thumbnail_id::function_autoloader(array(),$_smarty_tpl);?>
<?php $_tmp6=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_the_title(array(),$_smarty_tpl);?>
<?php $_tmp7=ob_get_clean();?><?php echo smarty_function_image(array('id'=>$_tmp6,'w'=>800,'h'=>250,'q'=>95,'zc'=>1,'alt'=>$_tmp7),$_smarty_tpl);?>
</a>
	<div class="blog_info">
	<div class="blog_date"><?php echo cp_autoload_get_the_date::function_autoloader(array(),$_smarty_tpl);?>
</div><?php ob_start();?><?php echo cp_autoload_the_tags::function_autoloader(array(),$_smarty_tpl);?>
<?php $_tmp8=ob_get_clean();?><?php if ($_tmp8) {?><div class="blog_tag">
	<?php echo smarty_modifier_translate("Tags");?>
: <?php ob_start();?><?php echo cp_autoload_the_tags::function_autoloader(array(),$_smarty_tpl);?>
<?php echo smarty_modifier_replace(ob_get_clean(),'Tags:','')?></div><?php }?><?php ob_start();?><?php echo cp_autoload_the_id::function_autoloader(array(),$_smarty_tpl);?>
<?php $_tmp9=ob_get_clean();?><?php echo smarty_function_the_terms(array('taxonomy'=>'category','id'=>$_tmp9,'assign'=>'terms'),$_smarty_tpl);?>
<?php if ($_smarty_tpl->tpl_vars['terms']->value) {?><div class="blog_category">
    <?php echo smarty_modifier_translate("Categories");?>
: 
        <?php  $_smarty_tpl->tpl_vars['term'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['term']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['terms']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['term']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['term']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['term']->key => $_smarty_tpl->tpl_vars['term']->value) {
$_smarty_tpl->tpl_vars['term']->_loop = true;
 $_smarty_tpl->tpl_vars['term']->iteration++;
 $_smarty_tpl->tpl_vars['term']->last = $_smarty_tpl->tpl_vars['term']->iteration === $_smarty_tpl->tpl_vars['term']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['br']['last'] = $_smarty_tpl->tpl_vars['term']->last;
?>
          <a href="<?php echo $_smarty_tpl->tpl_vars['term']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['term']->value['name'];?>
</a><?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['br']['last']) {?>, <?php }?>
        <?php } ?>
        </div><?php }?>
	</div>
	<?php echo smarty_function_the_content(array('html'=>"1",'excerpt'=>"1"),$_smarty_tpl);?>

	<a href="<?php echo cp_autoload_get_permalink::function_autoloader(array(),$_smarty_tpl);?>
" class="read_more"><?php echo smarty_modifier_translate("read more");?>
</a>
</article><?php }} ?>
