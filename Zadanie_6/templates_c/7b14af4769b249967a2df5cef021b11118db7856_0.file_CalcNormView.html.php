<?php
/* Smarty version 5.4.3, created on 2025-03-26 16:12:42
  from 'file:C:\xampp\htdocs\Zadanie_4/app/CalcNormView.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67e4196a27f1f8_17924347',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b14af4769b249967a2df5cef021b11118db7856' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Zadanie_4/app/CalcNormView.html',
      1 => 1743001924,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67e4196a27f1f8_17924347 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Zadanie_4\\app';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_84746178167e4196a26c980_93118399', 'title');
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_73320401667e4196a270a56_77534137', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ($_smarty_tpl->getValue('conf')->root_path).("/templates/main.html"), $_smarty_current_dir);
}
/* {block 'title'} */
class Block_84746178167e4196a26c980_93118399 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Zadanie_4\\app';
?>
Standardowy<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_73320401667e4196a270a56_77534137 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Zadanie_4\\app';
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

            
            <?php if (($_smarty_tpl->getValue('messages')->isError())) {?> 
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
