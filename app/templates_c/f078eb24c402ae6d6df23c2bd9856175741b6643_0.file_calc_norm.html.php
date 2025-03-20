<?php
/* Smarty version 5.4.3, created on 2025-03-20 22:07:54
  from 'file:C:\xampp\htdocs\Zadanie_3_2/app/calc_norm.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67dc83aa4d3ad3_77911371',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f078eb24c402ae6d6df23c2bd9856175741b6643' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Zadanie_3_2/app/calc_norm.html',
      1 => 1742504738,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67dc83aa4d3ad3_77911371 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Zadanie_3_2\\app';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_76918675467dc83aa4c4788_63391938', 'title');
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_34481424767dc83aa4c7dc8_62123497', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "../templates/main.html", $_smarty_current_dir);
}
/* {block 'title'} */
class Block_76918675467dc83aa4c4788_63391938 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Zadanie_3_2\\app';
?>
Kredytowy<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_34481424767dc83aa4c7dc8_62123497 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Zadanie_3_2\\app';
?>


<section>
    <header class="main">
        <h1>Kalkulator kredytowy:</h1>
    </header>

    <form method="post" action="#">
        <div class="row gtr-uniform">
            <div class="col-12">
                <input type="text" name="kwota" id="id_kwota" value="" placeholder="Wartość kredytu">
            </div>

            <div class="col-12">
                <input type="text" name="length" id="id_length" value="" placeholder="Długość trwania kredytu">
            </div>

            <div class="col-12">
                <input type="text" name="stopa" id="id_stopa" value="" placeholder="Wysokość stopy procentowej">
            </div>

            <div class="col-12">
                <input type="submit" value="Oblicz miesięczną stawkę kredytu"/>
            </div>

            <?php if ((true && ($_smarty_tpl->hasVariable('messages') && null !== ($_smarty_tpl->getValue('messages') ?? null)))) {?>
            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('messages')) > 0) {?> 
                <h4>Wystąpiły błędy: </h4>
                <ol>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('messages'), 'msg');
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
        <?php }?>

        <?php if ((true && ($_smarty_tpl->hasVariable('rata_mies') && null !== ($_smarty_tpl->getValue('rata_mies') ?? null)))) {?>
	        <h4>Miesięczna rata kredytu wynosi: <?php echo $_smarty_tpl->getValue('rata_mies');?>
 zł</h4>
        <?php }?>
    </form>
</section>
    <hr class="major" />

<?php
}
}
/* {/block 'content'} */
}
