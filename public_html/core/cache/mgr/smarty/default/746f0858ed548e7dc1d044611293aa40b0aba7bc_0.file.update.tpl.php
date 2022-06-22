<?php /* Smarty version 3.1.27, created on 2019-08-09 20:01:31
         compiled from "/home/o/ostrou0v/alferov.ostroushko.rf/public_html/manager/templates/default/resource/update.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:5205758825d4da6eb2843f8_52419961%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '746f0858ed548e7dc1d044611293aa40b0aba7bc' => 
    array (
      0 => '/home/o/ostrou0v/alferov.ostroushko.rf/public_html/manager/templates/default/resource/update.tpl',
      1 => 1565368893,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5205758825d4da6eb2843f8_52419961',
  'variables' => 
  array (
    'tvOutput' => 0,
    'hidden' => 0,
    'tv' => 0,
    'onDocFormPrerender' => 0,
    'resource' => 0,
    '_config' => 0,
    'onRichTextEditorInit' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5d4da6eb294894_97181878',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d4da6eb294894_97181878')) {
function content_5d4da6eb294894_97181878 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '5205758825d4da6eb2843f8_52419961';
?>
<div id="modx-panel-resource-div"></div>
<div id="modx-resource-tvs-div"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['tvOutput']->value)===null||$tmp==='' ? '' : $tmp);?>
</div>
<?php
$_from = $_smarty_tpl->tpl_vars['hidden']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['tv'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['tv']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['tv']->value) {
$_smarty_tpl->tpl_vars['tv']->_loop = true;
$foreach_tv_Sav = $_smarty_tpl->tpl_vars['tv'];
?>
    <input type="hidden" id="tvdef<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tv']->value->default_text, ENT_QUOTES, 'UTF-8', true);?>
" />
    <?php echo $_smarty_tpl->tpl_vars['tv']->value->get('formElement');?>

<?php
$_smarty_tpl->tpl_vars['tv'] = $foreach_tv_Sav;
}
?>

<?php echo $_smarty_tpl->tpl_vars['onDocFormPrerender']->value;?>

<?php if ($_smarty_tpl->tpl_vars['resource']->value->richtext && $_smarty_tpl->tpl_vars['_config']->value['use_editor']) {?>
    <?php echo $_smarty_tpl->tpl_vars['onRichTextEditorInit']->value;?>

<?php }

}
}
?>