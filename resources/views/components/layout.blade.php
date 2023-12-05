
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Post</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff;
            color: #000;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #000;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        nav {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        nav a {
            text-decoration: none;
            color: #fff;
            margin: 0 10px;
        }

        section {
            padding: 20px;
        }

        footer {
            background-color: #000;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
        h1 {
   
}
    </style>
</head>
<body>


    <nav>
        <div style="position: relative">
            <img src="/storage/img/UGum3i29TfHgCvedan3nVEikvqJxsdm7KMGR7k9J.jpg" alt="Website Logo" style="height: 45px; position:absolute">
            <h1 style="position:absolute;  margin-top: 22px; font-family: 'Special Elite', cursive;
            " >Bereal</h1>
            @auth
                <span>Welcome, {{ auth()->user()->name }}!</span>
                <form method="POST" action="/logout" style="display: inline-block;">
                    @csrf
                    <button type="submit" style="background: none; border: none; color: #3490dc; cursor: pointer;">
                        Log Out
                    </button>
                </form>
                @if(auth()->check() && auth()->user()->id == 7)
    <a href="/admin/posts/publish" class="subscribe-btn">Updates Todays' News</a>
    <a href="/admin/posts">edit posted news</a>
                @endif
                
            @else
                <a href="/register">Register</a> 
                <a href="/login" style="margin-left: 10px;">Log In</a>
            @endauth
            <a href="/index" class="subscribe-btn">Posts</a>
          
        </div>
    </nav>

    <section>
        {{ $slot }}
    </section>

    <footer>
        <h5>Contact the Administrator for Assistance</h5>
        <p>If you encounter any difficulties, feel free to reach out to us.</p>
    
        <form method="POST" action="mailto:1728713277@gmail.com" style="display: flex; justify-content: center; align-items: center;">
            <input type="text" placeholder="type something here" style="padding: 8px; margin-right: 10px;">
            <button type="submit" style="background-color: #3490dc; color: #fff; padding: 8px 15px; border-radius: 5px; cursor: pointer;">
                Contact Administrator
            </button>
        </form>
    </footer>
    <x-flash />

</body>
</html>