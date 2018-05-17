@extends('layouts.content')

@section('title', 'New Customer')

@section('block-content')
<ul class="nav nav-tabs">
  
  <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
  <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>

</ul>

<div class="tab-content">


  <div id="home" class="tab-pane fade in active">
    <h3>HOME</h3>
    <p>Some content.</p>
  </div>


  <div id="menu1" class="tab-pane fade">
    <h3>Menu 1</h3>
    <p>Some content in menu 1.</p>
  </div>

</div>
@endsection
