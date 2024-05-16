<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @auth
    <p>Congrats, you are logged in</p>
    <form action="laravel-xampp/public/logout" method="POST">
        @csrf
        <button>Log out</button>
    </form>

{{-- CREATE NEW POST --}}
    <div style="border: 3px solid black;">
        <h2>Create a New Post</h2>
        <form action="laravel-xampp/public/create-post" method="POST">
            @csrf
            <input type="text" name="title" placeholder="Post title">
            <br>
            <textarea name="body" cols="50" rows="8" placeholder="Put your content here"></textarea>
            <br>
            <button style="margin: 10px;">Submit Post</button>
        </form>
    </div>

{{-- SHOW ALL POSTS --}}
    <div style="border: 3px solid black">
        <h2>My Posts</h2>
        @foreach ($posts as $post)
            <div style="background-color: #b2f6dc; padding: 10px; margin: 0px;">
                <h3>{{$post['title']}} by {{$post->user->name}}</h3>
                {{$post['body']}}
                <br>
                <p><a href="{{ url('edit-post', ['post' => $post->id]) }}">Edit</a></p>
                <form action="{{ url('delete-post', ['post' => $post->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button>Delete</button>
                </form>
            </div>
        @endforeach
    </div>

    @else
{{-- Register --}}
    <div style="border: 3px solid black;">
        <h2>Register</h2>
        <form action="laravel-xampp/public/register" method="POST">
            @csrf
            <input name="name" type="text" placeholder="name">
            <input name="email" type="text" placeholder="email">
            <input name="password" type="password" placeholder="password">
            <button>Register</button>
        </form>
    </div>
    
{{-- login --}}
    <div style="border: 3px solid black;">
        <h2>Login</h2>
        <form action="laravel-xampp/public/login" method="POST">
            @csrf
            <input name="userName" type="text" placeholder="name">
            <input name="userPassword" type="password" placeholder="password">
            <button>Log in</button>
        </form>
    </div>
    @endauth

</body>
</html>