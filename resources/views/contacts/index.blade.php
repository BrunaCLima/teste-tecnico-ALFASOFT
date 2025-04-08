@extends('layouts.app')

@section('content')
    <h1>Lista de Contatos</h1>
    <a href="{{ route('contacts.create') }}">Adicionar Novo Contato</a>

    <ul>
        @foreach ($contacts as $contact)
            <li>
                <a href="{{ route('contacts.show', $contact->id) }}">{{ $contact->name }}</a>
                |
                <a href="{{ route('contacts.edit', $contact->id) }}">Editar</a>
                <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Excluir</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
