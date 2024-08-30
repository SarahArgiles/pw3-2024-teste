{{-- resources/views/animais/index.blade.php --}}

@extends('base')

@section('titulo', 'Animais para adoção')

@section('conteudo')
<p> 
   <a href="{{ route('animais.cadastrar') }}" class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" ><i class="fas fa-plus mr-3"></i>Cadastrar animal</a>
</p>
<p>Veja nossa lista de animais para adoção</p>
 <div class="w-full mt-12">
                    <p class="text-xl pb-3 flex items-center">
                        <i class="fas fa-list mr-3"></i> Table Example
                    </p>
                    <div class="bg-white overflow-auto">
                        <table class="text-left w-full border-collapse"> <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
                            <thead>
                                <tr>
                                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Nome</th>
                                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Idade</th>
                                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Apagar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($animais as $animal)
                                <tr class="hover:bg-grey-lighter">
                                    <td class="py-4 px-6 border-b border-grey-light">{{ $animal['nome'] }}</td>
                                    <td class="py-4 px-6 border-b border-grey-light"> {{ $animal['idade'] }}</td>
                                    <td class="py-4 px-6 border-b border-grey-light "><a class=" inline-block px-3 py-1 font-semibold text-red-900 leading-tight inset-0 bg-red-200 opacity-50 rounded-full" href="{{ route('animais.apagar', $animal['id']) }}">Apagar</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @endsection
                    </div>

{{-- <table border="1">class="bg-indigo-500 opacity-100
    <tr>
        <th>Nome</th>
        <th>Idade</th>
    </tr>

    @foreach ($animais as $animal)
    <tr>
        <td>{{ $animal['nome'] }}</td>
        <td>{{ $animal['idade'] }}</td>
        <td><a href="{{ route('animais.apagar', $animal['id']) }}">Apagar</a></td>
    </tr>
    @endforeach

</table>
@endsection --}}