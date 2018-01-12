@extends('admins.layout') @section('sidebar') 
@parent
@endsection
@section('head')
<link href="{{ asset('assets/css/styleproject.css') }}" rel="stylesheet">
@endsection 
@section('content')
<br>
<div class="content">
<table class="table">
  <thead>
    <tr>
      <th scope="col" class="text-center">#</th>
      <th scope="col">ปีงบประมาณ</th>
      <th scope="col">รหัสโครงการ</th>
      <th scope="col">ชื่อโครการ</th>
      <th scope="col">ชื่อกิจกรรม/หลักสูตร</th>
      <th scope="col">สถานะ</th>
      <th scope="col" class="text-center">จัดการ</th>
    </tr>
  </thead>
  <tbody>
  @foreach($projects as $i => $val)
    <tr>
      <th scope="row" class="text-center">{{ $i+1}}</th>
      <td>{{ $val->year_fund}}</td>
      <td>{{ $val->project_code}}</td>
      <td>{{ $val->project_name}}</td>
      <td>{{ $val->activity()->activity_name or '-'}}</td>
      <td>{{ $val->status}}</td>
      <td class="text-center">
        <a href="#" class="btn btn-primary btn-xs"><i class="fas fa-eye" aria-hidden="true"></i></i></a>
        <a href="{{ url('admin/project').'/'.$val->id }}" class="btn btn-success btn-xs"><i class="fas fa-pen-square" aria-hidden="true"></i></i></a>
        <a href="#" class="btn btn-danger btn-xs"><i class="fas fa-trash-alt" aria-hidden="true"></i></i></a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection