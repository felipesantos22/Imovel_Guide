<div class="col-md-4">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Formulário de Contato</h5>
            <form action="{{ route('send') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Seu nome"
                        required value="Maria">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Seu email"
                        required value="seuemail@example.com">
                </div>
                <div class="form-group">
                    <label for="mensagem">Mensagem</label>
                    <textarea class="form-control" id="mensage" name="mensage" rows="5" placeholder="Sua mensagem" required>Olá...</textarea>
                </div>
                <button type="submit" class="btn btn-primary" style="margin-top: 10px">Enviar</button>
            </form>
        </div>
    </div>
    <div style="margin-top: 10px">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
    </div>
</div>
