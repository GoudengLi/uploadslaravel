<x-layout>
<style>
    body {
        font-family: 'Arial', sans-serif;
        margin: 20px;
        background-color: #f4f4f4;
    }

    form {
        margin-bottom: 20px;
    }

    input[type="file"] {
        margin-bottom: 10px;
    }
 
    .back-btn {
        display: inline-block;
        padding: 10px 15px;
        background-color: #007bff;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        margin-top: 10px;
    }

    .file-info {
        margin-top: 10px;
        background-color: #fff;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    .file-info img {
        max-width: 100%;
        height: auto;
        margin-top: 10px;
    }
</style>

@if(!empty($id))
    <div class="file-info">
        <a href="{{ url('/storage/' . $path) }}" style="color: #333; font-weight: bold;">
            {{ $id }} {{ $originalName }}
        </a>
        <br>
        @if(substr($mimeType, 0, 5) == 'image')
            <img src="{{ url('/storage/' . $path) }}">
        @endif
    </div>
@endif

<a href="{{ url('/') }}" class="back-btn">Back to see posts</a>

@isset($id)
    <div class="file-info">
        <p><strong>view picture information here</strong></p>
        {{ $id }}<br>
        {{ $path }}<br>
        {{ $originalName }}<br>
        {{ $mimeType }}
    </div>
@endisset
</x-layout>