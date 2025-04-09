<?php
/* Smarty version 5.4.3, created on 2025-04-09 11:43:54
  from 'file:messages.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67f6415ac83d33_48256373',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c99ca0e91cf347b6151e20aae6ff32424e089edf' => 
    array (
      0 => 'messages.tpl',
      1 => 1744191313,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67f6415ac83d33_48256373 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Zadanie_6\\app\\views\\templates';
if (($_smarty_tpl->getValue('messages')->isError())) {?> 
                <h4>Wystąpiły błędy: </h4>
                <ol>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('messages')->getErrors(), 'msg');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('msg')->value) {
$foreach0DoElse = false;
?>
                <li><?php echo $_smarty_tpl->getValue('msg');?>
</li>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </ol>
            <?php }?>
        

            <?php if (($_smarty_tpl->getValue('messages')->isInfo())) {?>
	            <h4>Informacje: </h4>
	            <ol>
	            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('messages')->getInfos(), 'inf');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('inf')->value) {
$foreach1DoElse = false;
?>
	            <li><?php echo $_smarty_tpl->getValue('inf');?>
</li>
	            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
	            </ol>
            <?php }
}
}
