<x-layout title="Login">
    <form method="post" class="mt-3">
        @csrf
        <div class="row justify-content-center mb-3">
            <div class="form-group col-5">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" name="email" id="email" class="form-control">
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="form-group col-5 mt-2">
                <label for="password" class="form-label">Senha</label>
                <input type="password" name="password" id="password" class="form-control">
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-5">
                <button class="btn btn-primary mt-3">Entrar</button>
                <a href="{{ route('users.create') }}" class="btn btn-secondary mt-3">Registrar</a>
            </div>
        </div>
        
    </form>
</x-layout>