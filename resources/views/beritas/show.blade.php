@extends('layouts.master')
@section('content')
    <div class="row">
      <h2>{!! $berita->judul !!}</h2>
      <h2>{!! $berita->isi_berita !!}</h2>
    </div>
    <div>
      {!! Form::open(array('route' => array('beritas.destroy', $berita->id), 'method' => 'delete')) !!}
      {!! link_to(route('beritas.index'), "Back", ['class' => 'btn btn-raised btn-info']) !!}
      {!! link_to(route('beritas.edit', $article->id), 'Edit', ['class' => 'btn btn-raised btn-warning']) !!}
      {!! Form::submit('Delete', array('class' => 'btn btn-raised btn-danger', "onclick" => "return confirm('are you sure?')")) !!}
      {!! Form::close() !!}
    </div>
@endsection