<x-layout>
    <x-form.setting heading="Manage Posts">
       <style>
    .custom-table {
        width: 100%;
        border-collapse: collapse;
        overflow: hidden;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        margin: 1em 0;
        overflow: hidden;
    }

    .custom-table th,
    .custom-table td {
        padding: 12px 15px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    .custom-table th {
        background-color: #f8f8f8;
        font-weight: bold;
        text-transform: uppercase;
        font-size: 0.9em;
    }

    .custom-table td {
        background-color: #fff;
    }

    .custom-table a {
        color: #3490dc;
        text-decoration: none;
        transition: color 0.3s ease-in-out;
    }

    .custom-table a:hover {
        color: #2779bd;
    }

    .custom-table button {
        background: none;
        border: none;
        color: #9a9a9a;
        cursor: pointer;
        font-size: 0.9em;
        text-decoration: underline;
        transition: color 0.3s ease-in-out;
    }

    .custom-table button:hover {
        color: #7a7a7a;
    }
</style>

<div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="custom-table">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th class="text-right">Edit</th>
                            <th class="text-right">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td>
                                    <a href="/posts/{{ $post->slug }}">
                                        {{ $post->title }}
                                    </a>
                                </td>
                                <td class="text-right">
                                    <a href="/admin/posts/{{ $post->id }}/edit" class="text-blue-500 hover:text-blue-600">Edit</a>
                                </td>
                                <td class="text-right">
                                    <form method="POST" action="/admin/posts/{{ $post->id }}">
                                        @csrf
                                        @method('DELETE')
                                        <button class="text-xs text-gray-400">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
    </x-form.setting>
</x-layout>