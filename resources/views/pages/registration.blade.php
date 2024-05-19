@extends('layouts.layout')

@section('content')

<main class="main mt-2 p-5" style="display: flex; justify-content: center;">

    <form method="post" action="{{route('registration.store')}}" style="border: 2px solid dodgerblue; border-radius: 10px" class="p-5">
        @csrf


        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Ваше Имя</label>
            <input placeholder="@error('name') {{$message}} @enderror" type="text" name="name" class="form-control {{ $errors->has('name') ? 'border border-danger' : '' }}" id="exampleInputEmail1" autofocus aria-describedby="emailHelp" value="{{old('name')}}">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Ваша почта</label>
            <input placeholder="@error('email') {{$message}} @enderror" type="email" name="email" class="form-control {{ $errors->has('email') ? 'border border-danger' : '' }}" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('email')}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Пароль</label>
            <input placeholder="@error('password') {{$message}} @enderror" type="password" name="password" class="form-control {{ $errors->has('password') ? 'border border-danger' : '' }}" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Подтверждение пароля</label>
            <input placeholder="@error('password_confirmation') {{$message}} @enderror" type="password" name="password_confirmation" class="form-control {{ $errors->has('password_confirmation') ? 'border border-danger' : '' }}" id="exampleInputPassword1">
        </div>

        <button type="submit" class="btn btn-primary w-100">Регистрация</button>
    </form>
</main>

@endsection
