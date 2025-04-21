<?php
/* Smarty version 5.4.3, created on 2025-04-17 14:23:25
  from 'file:LoginView.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6800f2bd75e200_65809081',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c179c668a3e2086b30a4334c3a65b69e12e54afd' => 
    array (
      0 => 'LoginView.tpl',
      1 => 1744208203,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
))) {
function content_6800f2bd75e200_65809081 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Zadanie_7\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_18089241006800f2bd715f38_39633598', 'title');
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_177342816800f2bd71a232_03665931', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block 'title'} */
class Block_18089241006800f2bd715f38_39633598 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Zadanie_7\\app\\views';
?>
Logowanie<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_177342816800f2bd71a232_03665931 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Zadanie_7\\app\\views';
?>


<section>
    <h1>Strona logowania:</h1>
    <form action="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
login" method="post">
     <div class="row gtr-uniform">
            <div class="col-12">
                <input type="text" name="login" id="id_login" value="<?php echo $_smarty_tpl->getValue('form')->login;?>
" placeholder="Login użytkownika">
            </div>

            <div class="col-12">
                <input type="password" name="pass" id="id_pass" value="<?php echo $_smarty_tpl->getValue('form')->pass;?>
" placeholder="Hasło">
            </div>

             <div class="col-12">
                <input type="submit" value="Zaloguj się"/>
            </div>
        
        <?php $_smarty_tpl->renderSubTemplate('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    </form>

<?php
}
}
/* {/block 'content'} */
}
