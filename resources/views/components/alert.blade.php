@if (session()->has('success'))
        {{ session('success') }}
        
@endif

@if (session()->has('message'))
        {{ session('message') }}
        
@endif

@if (session()->has('error'))
    
        {{ session('error') }}
        
@endif

@if($errors->any())

    <ul>
        @foreach ($errors->all() as $error )
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif