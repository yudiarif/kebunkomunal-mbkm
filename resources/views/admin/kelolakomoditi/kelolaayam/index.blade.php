@extends('layouts.master')
@section('container')
@include('admin.kelolakomoditi.kelolaayam.kelola')
{{-- MODAL --}}

{{-- @include('admin.kelolakomoditi.kelolanila.modal.create') --}}
{{-- @include('admin.kelolakomoditi.kelolanila.modal.edit') --}}
@include('admin.kelolakomoditi.kelolaayam.modal.panen')
@include('admin.kelolakomoditi.kelolaayam.modal.create')
@include('admin.kelolakomoditi.kelolaayam.modal.foto')
@include('admin.kelolakomoditi.kelolaayam.modal.panorama')
@include('admin.kelolakomoditi.kelolaayam.modal.deleteall')
@include('admin.kelolakomoditi.kelolaayam.modal.yt')


@endsection
