<?php
/* Smarty version 5.4.3, created on 2025-04-02 17:23:39
  from 'file:CalcNormView.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67ed567bd08427_10705372',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ec78c6810f9a499522cff4661ac9a3397ec12fc' => 
    array (
      0 => 'CalcNormView.tpl',
      1 => 1743601003,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67ed567bd08427_10705372 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Zadanie_5\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_36791562067ed567bceffa2_08423288', 'title');
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_184054303367ed567bcf4d41_63969958', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block 'title'} */
class Block_36791562067ed567bceffa2_08423288 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Zadanie_5\\app\\views';
?>
Standardowy<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_184054303367ed567bcf4d41_63969958 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Zadanie_5\\app\\views';
?>


<section>
    <header class="main">
        <h1>Kalkulator standardowy:</h1>
    </header>

    <form method="post" action="<?php echo $_smarty_tpl->getValue('conf')->action_root;?>
calcNormCompute">
        <div class="row gtr-uniform">
            <div class="col-12">
                <input type="text" name="kwota" id="id_kwota" value="<?php echo $_smarty_tpl->getValue('form')->kwota;?>
" placeholder="Wartość pierwszej liczby">
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
                <input type="text" name="length" id="id_length" value="<?php echo $_smarty_tpl->getValue('form')->length;?>
" placeholder="Wartość drugiej liczby">
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

        <?php if ((true && (true && null !== ($_smarty_tpl->getValue('wyn')->wynik ?? null)))) {?>
	        <h4>Wynik wynosi: <?php echo $_smarty_tpl->getValue('wyn')->wynik;?>
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
