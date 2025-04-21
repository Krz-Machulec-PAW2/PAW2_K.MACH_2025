<?php
/* Smarty version 5.4.3, created on 2025-04-17 15:21:56
  from 'file:PersonList.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6801007458a811_24690982',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45dde87d8a23beaac43099d31137e68c6e3c857c' => 
    array (
      0 => 'PersonList.tpl',
      1 => 1744896033,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6801007458a811_24690982 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Zadanie_7\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_12259542606801007457a742_39034230', 'title');
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_3994080646801007457ea65_25296833', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block 'title'} */
class Block_12259542606801007457a742_39034230 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Zadanie_7\\app\\views';
?>
Osoby<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_3994080646801007457ea65_25296833 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Zadanie_7\\app\\views';
?>


<section>
    <header class="main">
        <h1>Lista osób:</h1>
    </header>

<div>
<form method="post" class="col-12" action="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
personList">
    <fieldset>
    <input type="text" placeholder="Nazwisko" id="id_SearchSurname" name="SearchSurname" value="<?php echo $_smarty_tpl->getValue('searchForm')->surname;?>
"><br />
    <button type="submit">Filtruj</button>
    </fieldset>
</form>
</div>

<div class="table-wrapper">
    <table>
        <thead>
            <tr>
                <th>Imie</th>
                <th>Nazwisko</th>
                <th>Data urodzenia</th>
                <th>E-mail</th>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('people'), 'p');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('p')->value) {
$foreach0DoElse = false;
?>
                <tr><td><?php echo $_smarty_tpl->getValue('p')["Imie"];?>
</td><td><?php echo $_smarty_tpl->getValue('p')["Nazwisko"];?>
</td><td><?php echo $_smarty_tpl->getValue('p')["Data-Urodzenia"];?>
</td><td><?php echo $_smarty_tpl->getValue('p')["E-Mail"];?>
</td><td><a class="col-12" href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
personEdit&id=<?php echo $_smarty_tpl->getValue('p')['ID_Users'];?>
">Edytuj</a>&nbsp;<a class="col-12" href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
personDelete&id=<?php echo $_smarty_tpl->getValue('p')['ID_Users'];?>
">Usuń</a></td></tr>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>   
        </tbody>
    </table>
</div>

<div class="col-12">
    <a href="<?php echo $_smarty_tpl->getValue('conf')->action_root;?>
personNew">Nowa osoba</a>
</div>

</section>
    <hr class="major" />

<?php
}
}
/* {/block 'content'} */
}
