<x-layout>

    @section('title','Strona o rozrywce:')
    
    @section('content')
    
    <section>
        <header class="main">
            <h1>Strona z innymi rodzajami video:</h1>
        </header>

        <x-video-display :videos="$videos" />
        <!-- <iframe width="900" height="540" src = https://www.youtube.com/embed/s0E5Slqdo1M frameboarder ="0" allowfullscreen></iframe> -->

        <x-video-insert :cat="$cat" /> 
    </section>
    
    @endsection
    </x-layout>