<x-layout>

    @section('title','Strona o gotowaiu')
    
    @section('content')
    
    <section>
        <header class="main">
            <h1>Strona o gotowaniu ryb:</h1>
        </header>

        <x-video-display :videos="$videos" />

        <x-video-insert :cat="$cat" /> 
        
    </section>
    
    @endsection
    </x-layout>