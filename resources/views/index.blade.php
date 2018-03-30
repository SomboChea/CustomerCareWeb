
@extends('admin.master.header')

@auth()
    <h1>Authenticated</h1>
@endauth()

@guest()
    <h1>Guest</h1>
@endguest()

@section('admin.master.footer')