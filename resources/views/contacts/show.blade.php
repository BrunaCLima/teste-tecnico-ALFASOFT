<!-- resources/views/contacts/show.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Detalhes do Contato</h1>

    <p><strong>Nome:</strong> {{ $contact->name }}</p>
    <p><strong>Contato:</strong> {{ $contact->contact }}</p>
    <p><strong>Email:</strong> {{ $contact->email }}</p>

    <a href="{{ route('contacts.edit', $contact->id) }}">Editar</a>

    <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display:inline">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Tem certeza que deseja deletar?')">Deletar</button>
    </form>

    <br><br>
    <a href="{{ route('contacts.index') }}">Voltar para lista</a>
@endsection
