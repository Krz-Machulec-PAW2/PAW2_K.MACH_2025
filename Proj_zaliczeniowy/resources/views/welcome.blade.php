<x-layout>

@section('title','Witaj na stronie!')

@section('content')

<section>
    <header class="main">
        <h1>Witaj na stronie (login użytkownika)!</h1>
    </header>

    <h3>Informacje od administratorów:</h4>

    <p><strong>Na chwilę obecną bez nowin</strong></p>
    <!-- <iframe width="1200" height="720" src = "https://www.youtube.com/embed/s0E5Slqdo1M" frameboarder ="0" allowfullscreen></iframe> -->

    <h3>Podstawowe informacje dotyczące strony:</h4>

    <p> Po zalogowaniu się na stronę użytkownik otrzymuje dostęp do znajdujących się w menu zakładek. W każdej z tych zakładek może on umieścić wedle własnego uznania
        standardowe filmy, oraz shorty z youtube'a. Aby to zrobić trzeba kliknąć znajdujący się na dolnej części strony przycisk "Dodaj element" , który przekieruje 
        użytkownika na stronę, na której będzie musiał on wstawić elementy takie jak numer końcowy filmu, oraz tytuł jaki chce mu nadać(w celu umożliwenia wyszukiwania). 
        Jeżeli wszystkie informacje są poprawne, element ten zostanie dodany do bazy do czasu usunięcia go przez użytkownika i będzie wyświetlany tylko w zakładce, do 
        której został dodany. Ten sam element można dodać do więcej niż 1 zakładki, ale może on znajdować się w zakładce maksymalnie raz. (Między niektórymi fragmentami tekstu
        zostaną umieszczone zrzuty ekranu pokazujące w jaki sposób obsługiwać stronę).
    </p>    
	
</section>

@endsection
</x-layout>