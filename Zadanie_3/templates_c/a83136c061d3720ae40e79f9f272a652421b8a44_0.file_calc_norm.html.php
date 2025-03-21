<?php
/* Smarty version 5.4.3, created on 2025-03-20 22:41:33
  from 'file:C:\xampp\htdocs\Zadanie_3_2/app/calc_norm.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67dc8b8d05e4a3_61569103',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a83136c061d3720ae40e79f9f272a652421b8a44' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Zadanie_3_2/app/calc_norm.html',
      1 => 1742506811,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67dc8b8d05e4a3_61569103 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Zadanie_3_2\\app';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_122581016867dc8b8d04eda7_32318758', 'title');
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_117862051567dc8b8d052a00_44470220', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "../templates/main.html", $_smarty_current_dir);
}
/* {block 'title'} */
class Block_122581016867dc8b8d04eda7_32318758 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Zadanie_3_2\\app';
?>
Standardowy<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_117862051567dc8b8d052a00_44470220 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Zadanie_3_2\\app';
?>


<section>
    <header class="main">
        <h1>Kalkulator standardowy:</h1>
    </header>

    <form method="post" action="#">
        <div class="row gtr-uniform">
            <div class="col-12">
                <input type="text" name="kwota" id="id_kwota" value="" placeholder="Wartość pierwszej liczby">
            </div>

            <div class="col-12">
                <select name="rodzaj" id="id_rodzaj">
                    <option value="">Rodzaj obliczeń</option>
                    <option value="plus">+</option>
                    <option value="minus">-</option>
                    <option value="mnoz">*</option>
                    <option value="dziel">:</option>
                </select>
            </div>

            <div class="col-12">
                <input type="text" name="length" id="id_length" value="" placeholder="Wartość drugiej liczby">
            </div>

            <div class="col-12">
                <input type="submit" value="Oblicz"/>
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

        <?php if ((true && ($_smarty_tpl->hasVariable('wynik') && null !== ($_smarty_tpl->getValue('wynik') ?? null)))) {?>
	        <h4>Wynik wynosi: <?php echo $_smarty_tpl->getValue('wynik');?>
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
