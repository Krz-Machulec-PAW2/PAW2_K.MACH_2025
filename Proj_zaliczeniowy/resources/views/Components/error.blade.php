@props(['name'])

@error($name)
<ol> {{ $message }} </ol>
@enderror