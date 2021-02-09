@extends('layouts.main-layout')

@section('content')

		<form action="{{ route('employee-store')}}" method="POST">
        @csrf
        @method('POST')

        <label for="name">Name</label>
        <input name="name" type="text">

        <label for="lastname">Lastname</label>
        <input name="lastname" type="text">

        <label for="dateofBirth">Date of Birth</label>
        <input name="dateofBirth" type="text">

        <input type="submit" value="CREATE">
 </form>
	
@endsection