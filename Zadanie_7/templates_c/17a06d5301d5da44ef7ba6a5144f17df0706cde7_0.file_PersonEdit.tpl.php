<?php
/* Smarty version 5.4.3, created on 2025-04-17 14:45:05
  from 'file:PersonEdit.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6800f7d1f1d1b5_85172234',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17a06d5301d5da44ef7ba6a5144f17df0706cde7' => 
    array (
      0 => 'PersonEdit.tpl',
      1 => 1744805743,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
))) {
function content_6800f7d1f1d1b5_85172234 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Zadanie_7\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_14886661906800f7d1f131d7_66912699', 'title');
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_5826531346800f7d1f17c59_91442712', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block 'title'} */
class Block_14886661906800f7d1f131d7_66912699 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Zadanie_7\\app\\views';
?>
Dodaj osobę<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_5826531346800f7d1f17c59_91442712 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Zadanie_7\\app\\views';
?>


<section>
    <header class="main">
        <h1>Dodaj osobę:</h1>
    </header>

    <form method="post" action="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
personSave">
        <div class="row gtr-uniform">
            <div class="col-12">
                <input type="text" name="name" id="id_name" value="<?php echo $_smarty_tpl->getValue('form')->name;?>
" placeholder="Imie osoby">
            </div>

            <div class="col-12">
                <input type="text" name="surname" id="id_surname" value="<?php echo $_smarty_tpl->getValue('form')->surname;?>
" placeholder="Nazwisko osoby">
            </div>

            <div class="col-12">
                <input type="text" name="birthdate" id="id_birthdate" value="<?php echo $_smarty_tpl->getValue('form')->birthdate;?>
" placeholder="Data urodzenia">
            </div>

            <div class="col-12">
                <input type="text" name="email" id="id_email" value="<?php echo $_smarty_tpl->getValue('form')->email;?>
" placeholder="E-mail">
            </div>

            <div class="col-12">
                <input type="submit" value="Dodaj osobę"/>
            </div>

            <div class="col-12">
                <a href="<?php echo $_smarty_tpl->getValue('conf')->action_root;?>
personList">Powrót</a>
            </div>

            
        <?php $_smarty_tpl->renderSubTemplate('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>


        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->getValue('form')->id;?>
">
    </form>
</section>
    <hr class="major" />

<?php
}
}
/* {/block 'content'} */
}
