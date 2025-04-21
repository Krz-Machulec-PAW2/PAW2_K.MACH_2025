{extends file="main.tpl"}

{block name=title}Dodaj osobę{/block}

{block name=content}

<section>
    <header class="main">
        <h1>Dodaj osobę:</h1>
    </header>

    <form method="post" action="{$conf->action_url}personSave">
        <div class="row gtr-uniform">
            <div class="col-12">
                <input type="text" name="name" id="id_name" value="{$form->name}" placeholder="Imie osoby">
            </div>

            <div class="col-12">
                <input type="text" name="surname" id="id_surname" value="{$form->surname}" placeholder="Nazwisko osoby">
            </div>

            <div class="col-12">
                <input type="text" name="birthdate" id="id_birthdate" value="{$form->birthdate}" placeholder="Data urodzenia">
            </div>

            <div class="col-12">
                <input type="text" name="email" id="id_email" value="{$form->email}" placeholder="E-mail">
            </div>

            <div class="col-12">
                <input type="submit" value="Dodaj osobę"/>
            </div>

            <div class="col-12">
                <a href="{$conf->action_root}personList">Powrót</a>
            </div>

            
        {include file='messages.tpl'}


        <input type="hidden" name="id" value="{$form->id}">
    </form>
</section>
    <hr class="major" />

{/block}