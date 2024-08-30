{{-- views/animais/cadastrar.blade.php --}}

@extends('base')

@section('titulo', 'Cadastrar | Animais para adoção')

@section('conteudo')
<p>Preencha o formulário</p>

@if($errors->any())
<div>
    <h4>Deu ruim</h4>
    @foreach($errors->all() as $erro)
        <p>{{ $erro }}</p>
    @endforeach
</div>  
@endif

{{-- <form method="post" action="{{ route('usuarios.gravar') }}">
    @csrf
    <input type="text" name="name" placeholder="Nome" value="{{ old('name') }}">
    <br>
    <input type="email" name="email" placeholder="E-mail" value="{{ old('email') }}">
    <br>
    <input type="text" name="username" placeholder="Username" value="{{ old('username') }}">
    <br>
    <input type="password" name="password" placeholder="Senha" value="{{ old('password') }}">
    <br>
    Admin
    <select name="admin">
        <option value="0">Não</option>
        <option value="1">Sim</option>
    </select>
    <br>
    <input type="submit" value="Gravar">
</form>
@endsection --}}
 <div class="flex flex-wrap">
                    <div class="w-full lg:w-1/2 my-6 pr-0 lg:pr-2">
                        <p class="text-xl pb-6 flex items-center">
                            <i class="fas fa-list mr-3"></i> Cadastrar usuario
                        </p>
                        <div class="leading-loose">
                            <form class="p-10 bg-white rounded shadow-xl" method="post" action="{{ route('usuarios.gravar') }}">
                             @csrf
                                <div class="">
                                    <label class="block text-sm text-gray-600" for="name">Nome</label>
                                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded"  name="nome" type="text"  placeholder="Name" aria-label="Name" value="{{ old('name') }}">
                                </div>
                                <div class="mt-2">
                                    <label class="block text-sm text-gray-600" for="email">Email</label>
                                    <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" name="email" type="email" placeholder="Email" aria-label="Email" value="{{ old('email') }}">
                                </div>
                                <div class="mt-2">
                                    <label class=" block text-sm text-gray-600" for="username">username</label>
                                    <input class="w-full px-5 py-4 text-gray-700 bg-gray-200 rounded"  type="text" name="username"  placeholder="Username" aria-label="Username" value="{{ old('username') }}">
                                 <div class="mt-2">
                                    <label class="block text-sm text-gray-600" for="email">Senha</label>
                                    <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" name="password" type="password" placeholder="Senha" aria-label="Senha" value="{{ old('password') }}">
                                </div>
                                <div class="mt-2">
                                    <label class=" block text-sm text-gray-600" for="message">Admin</label>
                                    <select name="admin">
                                    <option value="0">Não</option>
                                    <option value="1">Sim</option>
                                    </select>
                                </div>
                                
                                <div class="mt-6">
                                    <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    @endsection