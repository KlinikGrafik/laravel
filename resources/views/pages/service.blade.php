@extends('layouts.app')

@section('content')

<h1>{{$title}}</h1>
<p> I am asri</p>

@if (count ($service as $service)> 0)
<ul>
    @foreach ($services as $service)
    <li>
            {{$service}}
    </li>
    
    @endforeach
@endif
<p>This a blog application</p>

@endsection