{extends file="main.tpl"}

{block name=title}Osoby{/block}

{block name=content}

<section>
    <header class="main">
        <h1>Lista osób:</h1>
    </header>

<div>
<form method="post" class="col-12" action="{$conf->action_url}personList">
    <fieldset>
    <input type="text" placeholder="Nazwisko" id="id_SearchSurname" name="SearchSurname" value="{$searchForm->surname}"><br />
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
            {foreach $people as $p}
                {strip}
	                <tr>
		            <td>{$p["Imie"]}</td>
		            <td>{$p["Nazwisko"]}</td>
		            <td>{$p["Data-Urodzenia"]}</td>
                    <td>{$p["E-Mail"]}</td>
		            <td>
		            	<a class="col-12" href="{$conf->action_url}personEdit&id={$p['ID_Users']}">Edytuj</a>
		            	&nbsp;
		            	<a class="col-12" href="{$conf->action_url}personDelete&id={$p['ID_Users']}">Usuń</a>
		            </td>
	                </tr>
                {/strip}
            {/foreach}   
        </tbody>
    </table>
</div>

<div class="col-12">
    <a href="{$conf->action_root}personNew">Nowa osoba</a>
</div>

</section>
    <hr class="major" />

{/block}