<x-layout title="Novo usuário">
    <form method="post" class="mt-3">
        @csrf
        <div class="row justify-content-center">
            <div class="form-group col-5">
                <label for="name" class="form-label">Nome</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="form-group col-5 mt-2">
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
                <button class="btn btn-primary mt-3">Registrar</button>
            </div>
        </div>
    </form>
</x-layout>