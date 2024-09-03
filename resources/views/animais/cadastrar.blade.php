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
            <div class="flex flex-wrap">
            <div class="w-full  my-6 pr-0 ">
                        <p class="text-xl pb-6 flex items-center">
                            <i class="fas fa-list mr-3"></i> Cadastre seu animal
                        </p>
                        <div class="leading-loose">
                            <form class="p-10 bg-white rounded shadow-xl" method="post" enctype="multipart/form-data" action="{{ route('animais.gravar') }}">
                            @csrf
                                <div class="">
                                    <label class="block text-sm text-gray-600" for="name">Name</label>
                                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="name" name="nome" type="text"  placeholder="Nome do animal" aria-label="Nome" value="{{ old('nome') }}">
                                </div>
                                <div class="mt-2">
                                    <label class="block text-sm text-gray-600" for="email">Idade</label>
                                    <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded"  name="idade" type="number" placeholder="Idade do animal" aria-label="Idade" value="{{ old('idade') }}">
                                </div>
                                 <div class="mt-2">
                                    <label class="block text-sm text-gray-600" for="email">Imagem</label>
                                    <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" id="imagem"  name="imagem" type="file" placeholder="Imagem" aria-label="Idade" value="{{ old('imagem') }}">
                                </div>
                                <div class="mt-6">
                                    <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" value="Gravar" type="submit">Gravar</button>
                                </div>
                            </form>
                            
                        </div>
                    </div>
                    @endsection

{{-- <form method="post" action="{{ route('animais.gravar') }}">
    @csrf
    <input type="text" name="nome" placeholder="Nome" value="{{ old('nome') }}">
    <br>
    <input type="number" name="idade" placeholder="Idade" value="{{ old('idade') }}">
    <br>
    <input type="submit" value="Gravar">
</form>
@endsection --}}