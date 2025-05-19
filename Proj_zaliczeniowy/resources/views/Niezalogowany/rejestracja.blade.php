<x-guest-layout>

    @section('title', 'Strona logowania:')

    @section('content')

    <section>

        <header class="main">
            <h1>Wprowadź dane logowania:</h1>
        </header>

        <div class="row gtr-uniform">
            <div class="col-12">
                <input type="text" name="login" id="id_login" value=null placeholder="Login użytkownika" required>
            </div>
            <x-error name "Login" />

            <div class="col-12">
                <input type="email" name="email" id="id_email" value=null placeholder="Email" required>
            </div>
            <x-error name "Email" />

            <div class="col-12">
                <input type="password" name="pass" id="id_pass" value=null placeholder="Hasło" required>
            </div>
            <x-error name "Password" />

            <div class="col-12">
                <input type="submit" value="Zarejestruj się"/>
            </div>
    
        </div>
    </section>

</x-guest-layout>