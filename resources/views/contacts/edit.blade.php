<!-- resources/views/contacts/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Editar Contato</h1>

    <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nome:</label>
        <input type="text" name="name" value="{{ $contact->name }}" required><br>

        <label>Contato:</label>
        <input type="text" name="contact" value="{{ $contact->contact }}" required><br>

        <label>Email:</label>
        <input type="email" name="email" value="{{ $contact->email }}" required><br>

        <button type="submit">Atualizar</button>
    </form>
@endsection
