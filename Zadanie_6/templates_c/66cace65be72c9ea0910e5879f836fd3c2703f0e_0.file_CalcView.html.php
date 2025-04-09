<?php
/* Smarty version 5.4.3, created on 2025-04-02 13:42:25
  from 'file:CalcView.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67ed22a1c97e50_28598489',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66cace65be72c9ea0910e5879f836fd3c2703f0e' => 
    array (
      0 => 'CalcView.html',
      1 => 1743594139,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67ed22a1c97e50_28598489 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Zadanie_5\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_179315191867ed22a1c7fd70_18186747', 'title');
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_11656140867ed22a1c852f5_59019140', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.html", $_smarty_current_dir);
}
/* {block 'title'} */
class Block_179315191867ed22a1c7fd70_18186747 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Zadanie_5\\app\\views';
?>
Kredytowy<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_11656140867ed22a1c852f5_59019140 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Zadanie_5\\app\\views';
?>


<section>
    <header class="main">
        <h1>Kalkulator kredytowy:</h1>
    </header>

    <form method="post" action="<?php echo $_smarty_tpl->getValue('conf')->action_root;?>
calcCompute">
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
