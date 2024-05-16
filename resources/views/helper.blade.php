<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('js/app.js') }}"></script>

    <title>Document</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('resources') }}">Resources</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
            @auth
                @if(auth()->user()->hasRole('admin'))
                    <li><a href="{{ route('dashboard') }}">Admin Dashboard</a></li>
                @endif
            @endauth
        </ul>
    </nav>
    @auth
        <p>Congrats, you are logged in</p>
        <form action="laravel-xampp/public/logout" method="POST">
            @csrf
            <button>Log out</button>
        </form>
    @else
    {{-- login --}}
    <div style="border: 3px solid black;">
        <h2>Login</h2>
        <span>password: opensesame1</span>
        <form action="laravel-xampp/public/login" method="POST">
            @csrf
            <input name="userName" type="text" placeholder="name">
            <input name="userPassword" type="password" placeholder="password">
            <button>Log in</button>
        </form>
    </div>

    @endauth
    <form action="">
        <div class="container">
            <h1>DALL-E Prompt Helper</h1>
            {{-- <label for="userInput">User Input:</label> --}}
            <textarea id="userInput" name="userInput" placeholder="Input main idea here" rows="6" cols="80"></textarea>
            <br>
            {{-- <label for="readOnlyInput">Read-Only Input:</label> --}}
            <textarea id="readOnlyInput" name="readOnlyInput" placeholder="Output prompt" rows="6" cols="80" readonly></textarea>
        </div>
        <div>
            {{-- Parameters --}}
            <label for="camera:proximity">Camera: proximity</label>
            <select name="camera:proximity" class="parameters">
                <option value="" selected>--select--</option>
                @foreach(App\Models\Parameter::where('param_type', 1)->get() as $parameter)
                    <option value="{{ $parameter->param_name }}">{{ $parameter->param_name }}</option>
                @endforeach
            </select>
            
            <label for="camera:position">Camera: position</label>
            <select name="camera:position" class="parameters">
                <option value="" selected>--select--</option>
                @foreach(App\Models\Parameter::where('param_type', 2)->get() as $parameter)
                    <option value="{{ $parameter->param_name }}">{{ $parameter->param_name }}</option>
                @endforeach
            </select>
            <label for="camera:lens">Camera: lens</label>
            <select name="camera:lens" class="parameters">
                <option value="" selected>--select--</option>
                @foreach(App\Models\Parameter::where('param_type', 3)->get() as $parameter)
                    <option value="{{ $parameter->param_name }}">{{ $parameter->param_name }}</option>
                @endforeach
            </select>
        </div>
    </form>
</body>
</html>