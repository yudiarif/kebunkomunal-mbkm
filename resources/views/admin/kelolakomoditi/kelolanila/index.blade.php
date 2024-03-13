@extends('layouts.master')
@section('container')
@include('admin.kelolakomoditi.kelolanila.kelola')
{{-- MODAL --}}

{{-- @include('admin.kelolakomoditi.kelolanila.modal.create') --}}
{{-- @include('admin.kelolakomoditi.kelolanila.modal.edit') --}}
@include('admin.kelolakomoditi.kelolanila.modal.panen')
@include('admin.kelolakomoditi.kelolanila.modal.create')
@include('admin.kelolakomoditi.kelolanila.modal.foto')
@include('admin.kelolakomoditi.kelolanila.modal.panorama')
@include('admin.kelolakomoditi.kelolanila.modal.deleteall')
@include('admin.kelolakomoditi.kelolanila.modal.yt')


@endsection
