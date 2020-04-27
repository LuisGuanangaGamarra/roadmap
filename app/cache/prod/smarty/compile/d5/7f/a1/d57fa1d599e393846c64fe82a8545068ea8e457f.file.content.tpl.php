<?php /* Smarty version Smarty-3.1.19, created on 2019-09-06 18:59:03
         compiled from "/var/www/html/roadmakshop/admin723ek0usy/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2601159325d7290573994a2-30367202%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd57fa1d599e393846c64fe82a8545068ea8e457f' => 
    array (
      0 => '/var/www/html/roadmakshop/admin723ek0usy/themes/default/template/content.tpl',
      1 => 1508789956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2601159325d7290573994a2-30367202',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5d72905739ac35_53427989',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d72905739ac35_53427989')) {function content_5d72905739ac35_53427989($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
