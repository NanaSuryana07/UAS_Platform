@extends('layouts.master')
@section('content')
@include('beritas.list')
<a href="{{ route('berita.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Tambah Berita</a>
@endsection