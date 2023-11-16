@extends('layout.master')

@section('judul')
Buat Account Baru!
@endsection

@section('content')
<h3>Sign Up Form</h3>
<form action="/kirim" method="post">
    @csrf
    <label>First Name:</label><br>
    <input type="text" name="firstname"><br><br>
    <label>Last Name:</label><br>
    <input type="text" name="lastname"><br><br>
    <label>Gender:</label><br>
    <input type="radio" name="gender" value="1"> Male<br>
    <input type="radio" name="gender" value="2"> Female<br>
    <input type="radio" name="gender" value="3"> Other<br><br>
    <label>Nationality:</label><br>
    <select name="negara">
        <option value="indo">Indonesian</option>
        <option value="eng">English</option>
        <option value="my">Malaysia</option>
        <option value="tha">Thailand</option>
    </select><br><br>
    <label>Language Spoken:</label><br>
    <input type="checkbox" name="bahasa" value="Bahasa Indonesia"> Bahasa Indonesia<br>
    <input type="checkbox" name="bahasa" value="English"> English<br>
    <input type="checkbox" name="bahasa" value="Other"> Other<br><br>
    <label>Bio:</label><br>
    <textarea name="massage" rows="10" cols="30"></textarea><br>
    <input type="submit" value="kirim">
</form>
@endsection