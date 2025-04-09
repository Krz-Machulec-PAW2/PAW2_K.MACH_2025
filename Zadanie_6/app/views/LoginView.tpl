{extends file="main.tpl"}

{block name=title}Logowanie{/block}

{block name=content}

<section>
    <h1>Strona logowania:</h1>
    <form action="{$conf->action_url}login" method="post">
     <div class="row gtr-uniform">
            <div class="col-12">
                <input type="text" name="login" id="id_login" value="{$form->login}" placeholder="Login użytkownika">
            </div>

            <div class="col-12">
                <input type="password" name="pass" id="id_pass" value="{$form->pass}" placeholder="Hasło">
            </div>

             <div class="col-12">
                <input type="submit" value="Zaloguj się"/>
            </div>
        
        {include file='messages.tpl'}
    </form>

{/block}