<?php
/* Smarty version 5.4.3, created on 2025-04-09 15:50:10
  from 'file:CalcView.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67f67b12a21d38_59169691',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '239454fc5af609a204a11d856b01e2e00aec765f' => 
    array (
      0 => 'CalcView.tpl',
      1 => 1744206605,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
))) {
function content_67f67b12a21d38_59169691 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Zadanie_6\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_83356079067f67b12a14d62_19830311', 'title');
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_138650129567f67b12a19163_70736379', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block 'title'} */
class Block_83356079067f67b12a14d62_19830311 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Zadanie_6\\app\\views';
?>
Kredytowy<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_138650129567f67b12a19163_70736379 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Zadanie_6\\app\\views';
?>


<section>
    <header class="main">
        <h1>Kalkulator kredytowy:</h1>
    </header>

    <form method="post" action="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
calcOblicz">
        <div class="row gtr-uniform">
            <div class="col-12">
                <input type="text" name="kwota" id="id_kwota" value="<?php echo $_smarty_tpl->getValue('form')->kwota;?>
" placeholder="Wartość kredytu">
            </div>

            <div class="col-12">
                <input type="text" name="length" id="id_length" value="<?php echo $_smarty_tpl->getValue('form')->length;?>
" placeholder="Długość trwania kredytu">
            </div>

            <div class="col-12">
                <input type="text" name="stopa" id="id_stopa" value="<?php echo $_smarty_tpl->getValue('form')->stopa;?>
" placeholder="Wysokość stopy procentowej">
            </div>

            <div class="col-12">
                <input type="submit" value="Oblicz miesięczną stawkę kredytu"/>
            </div>

            
        <?php $_smarty_tpl->renderSubTemplate('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

        <?php if ((true && (true && null !== ($_smarty_tpl->getValue('rata')->rata_mies ?? null)))) {?>
	        <h4>Wynik wynosi: <?php echo $_smarty_tpl->getValue('rata')->rata_mies;?>
</h4>
        <?php }?>

    </form>
</section>
    <hr class="major" />

<?php
}
}
/* {/block 'content'} */
}
