@extends('layout.app')
@section('content')
<form action="{{route('users.store')}}" method="post" class="flex flex-col gap-3 ">
    @csrf
    <div class="flex flex-col">
        <div class="flex gap-2">
            <div>
                <label for="nom">nom</label><br>
                <input type="text" name="nom" class="bg-transparent border-2 rounded my-1 focus:outline-none px-1">
            </div>
            <div>
                <label for="prenom">prenom</label><br>
                <input type="text" name="prenom" class="bg-transparent border-2 rounded my-1 focus:outline-none px-1">
            </div>
        </div>
        <div class="flex gap-2">
            <div>
                <label for="adresse">adresse</label><br>
                <input type="text" name="adresse" class="bg-transparent border-2 rounded my-1 focus:outline-none px-1">
            </div>
            <div>
                <label for="ville">ville</label><br>
                <input type="text" name="ville" class="bg-transparent border-2 rounded my-1 focus:outline-none px-1">
            </div>
        </div>
        <div class="flex gap-2">
            <div>
                <label for="email">email</label><br>
                <input type="text" name="email" class="bg-transparent border-2 rounded my-1 focus:outline-none px-1">
            </div>
            <div>
                <label for="tel">tel</label><br>
                <input type="text" name="tel" class="bg-transparent border-2 rounded my-1 focus:outline-none px-1">
            </div>
        </div>
        <div class="flex gap-2">
            <div>
                <label for="password">password</label><br>
                <input type="password" name="password" class="bg-transparent border-2 rounded my-1 focus:outline-none px-1">
            </div>
            <div>
                <label for="confirmpassword">confirm password</label><br>
                <input type="password" name="password_confirmation" class="bg-transparent border-2 rounded my-1 focus:outline-none px-1">
            </div>
        </div>
    </div>
    <button class="mx-auto lg:mx-0 bg-white text-gray-800 font-bold rounded-full py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
        Register
    </button>
</form>
@endsection