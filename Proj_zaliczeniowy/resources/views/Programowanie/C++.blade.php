<x-layout>

    @section('title','Strona o programowaniu:')
    
    @section('content')
    
    <section>
        <header class="main">
            <h1>Strona o programowaniu w C++:</h1>
        </header>

        <x-video-display :videos="$videos" />

        <x-video-insert :cat="$cat" /> 
        
    </section>
    
    @endsection
    </x-layout>