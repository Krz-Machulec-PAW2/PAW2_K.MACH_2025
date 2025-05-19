<div>
    @foreach($videos as $video)
        <h2> {{ $video->Title }} </h2>

        @if( $video->ID_VidType == 2) 
            <iframe width="1280" height="600" src = {{ 'https://www.youtube.com/embed/' . $video->Video_code }} frameborder ="0" allowfullscreen></iframe>
        @elseif($video->ID_VidType == 1)
            <iframe width="450" height="600" src = {{ 'https://www.youtube.com/embed/' . $video->Video_code }} frameborder ="0" allowfullscreen></iframe>
        @endif

        <hr class="major">
    @endforeach
</div>