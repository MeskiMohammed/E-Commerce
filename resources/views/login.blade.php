@extends('layout.app')
@section('content')
<form action="{{}}" method="post" class="flex flex-col gap-3 ">
    <div>
        <label for="" >login</label><br>
        <input type="text" name="login" class="bg-transparent border-2 rounded mt-2 focus:outline-none px-1">
    </div>
    <div>
        <label for="">password</label><br>
        <input type="text" name="password" class="bg-transparent border-2 rounded mt-2 focus:outline-none px-1">
    </div>
    <div>
        <input type="checkbox" class="mr-2">Stay logged in
    </div>
    <button class="mx-auto lg:mx-0 bg-white text-gray-800 font-bold rounded-full py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">Login</button>
</form>
@endsection