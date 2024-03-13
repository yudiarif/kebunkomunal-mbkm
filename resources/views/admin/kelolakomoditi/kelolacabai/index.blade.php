@extends('layouts.master')
@section('container')
@include('admin.kelolakomoditi.kelolacabai.kelola')
{{-- MODAL --}}

{{-- @include('admin.kelolakomoditi.kelolajagung.modal.create') --}}
{{-- @include('admin.kelolakomoditi.kelolajagung.modal.edit') --}}
@include('admin.kelolakomoditi.kelolacabai.modal.panen')
@include('admin.kelolakomoditi.kelolacabai.modal.create')
@include('admin.kelolakomoditi.kelolacabai.modal.foto')
@include('admin.kelolakomoditi.kelolacabai.modal.panorama')
@include('admin.kelolakomoditi.kelolacabai.modal.deleteall')

@endsection
