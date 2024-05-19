@extends('layouts.layout')

@section('content')

<main class="main mt-2 p-5" style="display: flex; justify-content: center;">
    <form method="post" action="{{route('login.store')}}" style="border: 2px solid dodgerblue; border-radius: 10px" class="p-5">
        @csrf

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Ваша почта</label>
            <input placeholder="@error('email') {{$message}} @enderror" type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" autofocus>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Пароль</label>
            <input placeholder="@error('password') {{$message}} @enderror" type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>

        @error('err')
            <div class="border border-danger p-2 mb-2 text-danger rounded">{{$message}}</div>
        @enderror

        <button type="submit" class="btn btn-primary w-100">Войти</button>


    </form>
</main>

@endsection
