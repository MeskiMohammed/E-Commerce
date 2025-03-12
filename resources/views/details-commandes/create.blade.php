@extends('adminLayout.app')
@section('adminContent')
<form action="{{route('detailscommande.store')}}" method="post">
    @csrf
    <input type="text" name="" id="">


</form>
@endsection