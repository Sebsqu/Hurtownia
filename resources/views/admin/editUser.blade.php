@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edytuj użytkownika</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('updateUser', ['id' => $user->id]) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="name">Imię</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}" required>
                            </div>

                            <div class="form-group">
                                <label for="surname">Nazwisko</label>
                                <input type="text" name="surname" id="surname" class="form-control" value="{{ $user->surname }}" required>
                            </div>

                            <div class="form-group">
                                <label for="email">Adres email</label>
                                <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}" required>
                            </div>

                            <div class="form-group">
                                <label for="role_id">Rola</label>
                                <select name="role_id" id="role_id" class="form-control" required>
                                    <option value="1" @if($user->role_id == 1) selected @endif>Administrator</option>
                                    <option value="2" @if($user->role_id == 2) selected @endif>Sprzedawca</option>
                                    <option value="3" @if($user->role_id == 3) selected @endif>Użytkownik</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Zapisz zmiany</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
