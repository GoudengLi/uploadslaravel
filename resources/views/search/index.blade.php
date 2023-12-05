<x-layout> 
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        h1 {
            color: #333;
        }

        p {
            color: #555;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
            background-color: #fff;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        a {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <h1>Search Results</h1>

    @if ($posts->isEmpty())
        <p>No matching results found.</p>
    @else
        <ul>
            @foreach ($posts as $post)
                <li>
                    <a href="{{ url('/posts/' . $post->slug) }}">{{ $post->title }}</a>
                </li>
            @endforeach
        </ul>
    @endif

</body>
</html></x-layout>   