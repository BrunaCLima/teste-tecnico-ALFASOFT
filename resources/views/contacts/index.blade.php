<!-- resources/views/contacts/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Lista de Contatos</h1>

    <a href="{{ route('contacts.create') }}">Adicionar Contato</a>

    <ul>
        @foreach($contacts as $contact)
            <li>
                <strong>{{ $contact->name }}</strong> - {{ $contact->contact }} - {{ $contact->email }}
                <a href="{{ route('contacts.show', $contact->id) }}">Ver</a>
                <a href="{{ route('contacts.edit', $contact->id) }}">Editar</a>

                <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Tem certeza que deseja deletar?')">Deletar</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
