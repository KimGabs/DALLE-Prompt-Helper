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
    <h1>Dashboard</h1>
    <div style="border: 3px solid black;">
        <h2>Create a New Parameter</h2>
        <form action="laravel-xampp/public/create-parameter" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" name="param_name" placeholder="Parameter Name">
                <select name="param_type" id="paramType">
                    <option value="0" selected>---</option>
                    @foreach (config('parameters.types') as $key => $value)
                        <option value="{{ $key }}">{{ $value }}</option>
                    @endforeach            
                </select>
            <input type="file" name="param_image_path" id="input_image">
            <button style="margin: 10px;" id="submit-btn">Submit Parameter</button>
        </form>
    </div>
    {{-- Show Created Parameters --}}
    <div style="border: 3px solid black;">
        <h2>Parameters</h2>
        @foreach ($parameters as $parameter)
            <div style="background-color: #b2f6dc; padding: 10px; margin: 0px; border: 2px solid black">
                <p>Name: {{$parameter['param_name']}} || {{ config('parameters.types.' . $parameter->param_type) }} ||
                    <a href="{{ url('edit-parameter', ['parameter' => $parameter->id]) }}">Edit</a>
                </p>
                <form action="{{ url('delete-parameter', ['parameter' => $parameter->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button>Delete</button>
                </form>
            </div>
        @endforeach
    </div>
</body>
</html>