<!-- resources/views/contacts/create.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Adicionar Contato</h1>

    <form action="{{ route('contacts.store') }}" method="POST">
        @csrf
        <label>Nome:</label>
        <input type="text" name="name" required><br>

        <label>Contato:</label>
        <input type="text" name="contact" required><br>

        <label>Email:</label>
        <input type="email" name="email" required><br>

        <button type="submit">Salvar</button>
    </form>
@endsection
