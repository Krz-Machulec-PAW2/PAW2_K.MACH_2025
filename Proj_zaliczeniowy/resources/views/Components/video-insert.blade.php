<h2> Tutaj możesz wstawić dodatkowe video: </h2>

<form method ="POST" action="{{  route('video-insert') }}">
    @csrf
    <div class="row gtr-uniform">

        <div class="col-12">
            <input type="text" name="title"  value="Tytuł" placeholder="Podaj tytuł" required>
        </div>
        @error('title')
            <p class="error">{{ $message }}</p>
        @enderror

        <div class="col-12">
            <input type="text" name="code"  value="Kod" placeholder="Kod" required>
        </div>
        @error('code')
            <p class="error">{{ $message }}</p>
        @enderror

        <div class="col-12">
            <select name="type" required>
                <option value="">Rodzaj video</option>
                    <option value="2">Standard</option>
                    <option value="1">Short</option>
            </select>
        </div>

        <input type="hidden" name="VidCat" value="{{ $cat }}">

        <div class="col-12">
            <button type = "submit">Dodaj video</button>
        </div>

        @if (session('success'))
            <h2>{{ session('success') }}
        @endif

    </div>