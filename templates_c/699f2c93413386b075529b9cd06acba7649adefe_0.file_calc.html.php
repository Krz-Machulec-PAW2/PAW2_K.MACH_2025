<?php
/* Smarty version 5.4.3, created on 2025-03-20 23:07:11
  from 'file:C:\xampp\htdocs\Zadanie_3/app/calc.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67dc918f2fcc90_58538733',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '699f2c93413386b075529b9cd06acba7649adefe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Zadanie_3/app/calc.html',
      1 => 1742508376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67dc918f2fcc90_58538733 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Zadanie_3\\app';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_117476682667dc918f2ee8d2_58456690', 'title');
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_32215691967dc918f2f1f18_15236318', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "../templates/main.html", $_smarty_current_dir);
}
/* {block 'title'} */
class Block_117476682667dc918f2ee8d2_58456690 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Zadanie_3\\app';
?>
Kredytowy<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_32215691967dc918f2f1f18_15236318 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Zadanie_3\\app';
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
