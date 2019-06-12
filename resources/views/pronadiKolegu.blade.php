@extends('layouts.tlocrt')
@section('content')
<div id="app">
    <tlocrt-test :path="'{{asset('images/tlocrt.svg')}}'" />
</div>
@endsection