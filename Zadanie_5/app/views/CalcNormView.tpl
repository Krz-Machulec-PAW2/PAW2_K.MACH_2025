{extends file="main.tpl"}

{block name=title}Standardowy{/block}

{block name=content}

<section>
    <header class="main">
        <h1>Kalkulator standardowy:</h1>
    </header>

    <form method="post" action="{$conf->action_root}calcNormCompute">
        <div class="row gtr-uniform">
            <div class="col-12">
                <input type="text" name="kwota" id="id_kwota" value="{$form->kwota}" placeholder="Wartość pierwszej liczby">
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
                <input type="text" name="length" id="id_length" value="{$form->length}" placeholder="Wartość drugiej liczby">
            </div>

            <div class="col-12">
                <input type="submit" value="Oblicz"/>
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

        {if isset($wyn->wynik)}
	        <h4>Wynik wynosi: {$wyn->wynik}</h4>
        {/if}
    </form>
</section>
    <hr class="major" />

{/block}