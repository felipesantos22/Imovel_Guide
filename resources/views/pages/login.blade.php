{{-- @if ($mensagem = Session::get('erro'))
    {{ $mensagem }}
@endif
<link rel="stylesheet" href="{{ asset('css/login.css') }}" />
<body>
    <div class="login-container">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        @endif
        <h2>Login</h2>
        <form action="{{ route('authenticate') }}" method="POST">
            @csrf
            <input type="text" name="email" placeholder="Email" required/>
            <br />
            <input type="password" name="password" placeholder="Senha" required/>
            <br />
            <input type="submit" value="Login" />
            <a href=""></a>
        </form>
    </div>
</body> --}}

@extends('template')

@section('template')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
    <div class="login">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Login</h5>
                    <form action="{{ route('authenticate') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="email">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="password">
                        </div>
                        <button type="submit" class="btn btn-dark" style="margin-top: 10px">Entrar</button>
                        <div style="margin-top: 10px">
                            <a href="/auth/redirect" style="color:black"><i class="bi bi-github"
                                    style="font-size: 2rem;"></i></a>
                        </div>
                    </form>
                    <br>
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
