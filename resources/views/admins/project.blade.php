@extends('admins.layout') @section('sidebar') 
@parent
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
      <th scope="col">วิทยากร</th>
      <th scope="col">สถานะ</th>
      <th scope="col" class="text-center">การจัดการ</th>
    </tr>
  </thead>
  <tbody>
  @foreach($projects as $i => $val)
    <tr>
      <th scope="row" class="text-center">{{ $i+1}}</th>
      <td>{{ $val->year_fund}}</td>
      <td>{{ $val->project_code}}</td>
      <td>{{ $val->project_name}}</td>
      <td>
        @foreach($val->activity as $activity)
          <a href="{{ url('admin/activity/create') }}"> - {{ $activity->activity_name }} </a><br>
        @endforeach
      </td>
      <td>
         @foreach($val->activity as $activity)
          <a href="#">-{{$activity->expert_id}} </a><br>
         @endforeach
      </td>
      <td>
        @foreach($val->activity as $activity)
          @if($activity->status == 0)
            <span class="badge badge-danger">ไม่สามารถดำเนินการได้</span></h1>
          @elseif($activity->sataus == 1)
            <span class="badge badge-success">เสร็จสิ้นโครงการ</span></h1>
          @else
            <span class="badge badge-primary">กำลังดำเนินการ</span></h1>
          @endif
          <br>
        @endforeach
      </td>
      <td class="text-center">
        <a href="{{ url('admin/project').'/'.$val->id.'/detail' }}" class="btn btn-primary btn-xs"><i class="fas fa-eye" aria-hidden="true"></i></i></a>
        <a href="{{ url('admin/project').'/'.$val->id }}" class="btn btn-secondary btn-xs"><i class="fas fa-pen-square" aria-hidden="true"></i></i></a>
        <a href="#" class="btn btn-danger btn-xs"><i class="fas fa-trash-alt" aria-hidden="true" data-id="{{ $val->id }}"></i></i></a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection