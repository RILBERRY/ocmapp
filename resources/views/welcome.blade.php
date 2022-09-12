<!-- //extending master -->
@extends('master')

<!-- //add page title here -->
@section('title', 'Home page')

<!-- //add content of each page here -->
@section('content')

@component('components.model' ,['items'=>$items])
  @slot('title')
  4-Stroke Outboard Models
  @endslot
@endcomponent

@component('components.model' ,['items'=>$items])
  @slot('title')
  2-Stroke Outboard Models
  @endslot
@endcomponent

@component('components.model' ,['items'=>$items])
  @slot('title')
  Cabrea Outboard Models
  @endslot
@endcomponent


@stop