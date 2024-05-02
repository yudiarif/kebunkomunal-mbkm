@extends('layouts.master')
@section('container')
@include('admin.kelolakomoditi.kelolajagung.kelola')
{{-- MODAL --}}

{{-- @include('admin.kelolakomoditi.kelolajagung.modal.create') --}}
{{-- @include('admin.kelolakomoditi.kelolajagung.modal.edit') --}}
@include('admin.kelolakomoditi.kelolajagung.modal.panen')
@include('admin.kelolakomoditi.kelolajagung.modal.create')
@include('admin.kelolakomoditi.kelolajagung.modal.foto')
@include('admin.kelolakomoditi.kelolajagung.modal.panorama')
@include('admin.kelolakomoditi.kelolajagung.modal.deleteall')
@include('admin.kelolakomoditi.kelolajagung.modal.jenispupuk')
@include('admin.kelolakomoditi.kelolajagung.modal.tglpemupukan')


@endsection
