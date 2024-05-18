<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('js/app.js') }}"></script>
    <link href="{{ asset('../resources/sass/app.css') }}" rel="stylesheet">
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
    {{-- Create New Parameter --}}
    <div style="border: 3px solid black;">
        <h2>Create a New Parameter</h2>
        <form action="DALLE-Prompt-Helper/public/create-parameter" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" name="param_name" placeholder="Parameter Name" required>
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
        @if (\Session::has('Success'))
            <div class="alert alert-success">
                <ul>
                    <li>{!! \Session::get('Success') !!}</li>
                </ul>
            </div>
        @endif
        @foreach ($parameters as $parameter)
            <div style="background-color: #b2f6dc; padding: 10px; margin: 0px; border-top: 1px solid gray;">
                <p>Name: {{$parameter['param_name']}} || {{ config('parameters.types.' . $parameter->param_type) }} ||
                    <a class='edit-btn' href="javascript:void(0);" data-id="{{ $parameter->id }}" data-name="{{ $parameter['param_name'] }}" data-type="{{ $parameter['param_type'] }}" data-img="{{ $parameter->param_image_path }}">Edit</a>
                </p>
                @if ($parameter->param_image_path)
                    <img style="height: 150px; width: 150px; margin: 4px;" src="{{ asset('../storage/app/public/images/' . $parameter->param_image_path) }}" alt="{{ $parameter['param_name'] }}">
                @else
                
                @endif
                <form action="{{ url('delete-parameter', ['parameter' => $parameter->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button>Delete</button>
                </form>
            </div>
        @endforeach
    </div>
    {{-- Show Edit Modal --}}
    <div class="modal" id="editModal">
        <div class="modal-content">
            <span class="close" id="closeEditModal">&times;</span>
            <h2>Edit Parameter</h2>
            <form id="editForm" method="POST" action="" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="param_name">Parameter Name</label>
                    <input type="text" name="param_name" class="form-control" id="paramName" required>
                </div>
                <div class="form-group">
                    <label for="param_type">Parameter Type</label>
                    <select name="param_type" id="param_TYPE" class="form-control">
                        <option value="0" selected disabled>--Select Parameter--</option>
                        @foreach (config('parameters.types') as $key => $value)
                            <option value="{{ $key }}">{{ $value }}</option>
                        @endforeach            
                    </select>
                </div>
                <div class="form-group">
                    <input type="file" name="param_image" id="param_image">
                    <img id="paramImg" style="height: 150px; width: 150px; margin: 4px;" src="" alt="">
                </div>
                <button type="submit">Save</button>
            </form>
        </div>
    </div>
</body>
</html>