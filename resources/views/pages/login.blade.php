
@if ($mensagem = Session::get('erro'))
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
        </form>
    </div>
</body>