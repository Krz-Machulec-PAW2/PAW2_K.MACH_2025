<x-layout>

    @section('title','Strona o rozrywce:')
    
    @section('content')
    
    <section>
        <header class="main">
            <h1>Strona z muzyką:</h1>
        </header>

        <x-video-display :videos="$videos" />

        <x-video-insert :cat="$cat" /> 
        
    </section>
    
    @endsection
    </x-layout>