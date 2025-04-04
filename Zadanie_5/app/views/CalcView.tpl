{extends file="main.tpl"}

{block name=title}Kredytowy{/block}

{block name=content}

<section>
    <header class="main">
        <h1>Kalkulator kredytowy:</h1>
    </header>

    <form method="post" action="{$conf->action_root}calcCompute">
        <div class="row gtr-uniform">
            <div class="col-12">
                <input type="text" name="kwota" id="id_kwota" value="{$form->kwota}" placeholder="Wartość kredytu">
            </div>

            <div class="col-12">
                <input type="text" name="length" id="id_length" value="{$form->length}" placeholder="Długość trwania kredytu">
            </div>

            <div class="col-12">
                <input type="text" name="stopa" id="id_stopa" value="{$form->stopa}" placeholder="Wysokość stopy procentowej">
            </div>

            <div class="col-12">
                <input type="submit" value="Oblicz miesięczną stawkę kredytu"/>
            </div>

            
            {if ($messages->isError())} 
                <h4>Wystąpiły błędy: </h4>
                <ol>
                {foreach  $messages->getErrors() as $msg}
                <li>{$msg}</li>
                {/foreach}
                </ol>
            {/if}
        

        {if ($messages->isInfo())}
	        <h4>Informacje: </h4>
	        <ol>
	        {foreach $messages->getInfos() as $inf}
	        {strip}
		        <li>{$inf}</li>
	        {/strip}
	        {/foreach}
	        </ol>
        {/if}

        {if isset($rata->rata_mies)}
	        <h4>Wynik wynosi: {$rata->rata_mies}</h4>
        {/if}

    </form>
</section>
    <hr class="major" />

{/block}