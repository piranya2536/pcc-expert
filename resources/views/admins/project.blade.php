@extends('layouts.admin') 
@section('content')
<div class="content">
<div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">ค้นหา<a class="heading-elements-toggle"><i class="icon-more"></i></a></h5>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                        <li><a data-action="close"></a></li>
                    </ul>
                </div>
            </div>
            <div class="panel-body">
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
          <a href="{{  url('admin/activity').'/'.$activity->id.'/edit' }}"> - &nbsp;&nbsp; {{ $activity->activity_name }} </a><br>
        @endforeach
      </td>
      <td>
         @foreach($val->activity as $activity)
          <a href="#">- &nbsp;&nbsp; {{$activity->expert_id}} </a><br>
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
        <a href="{{ url('admin/project').'/'.$val->id.'/detail' }}" class="btn btn-primary btn-xs"><i class="icon-eye" aria-hidden="true"></i></i></a>
        <a href="{{ url('admin/project').'/'.$val->id }}" class="btn btn-default btn-xs"><i class="icon-pencil5" aria-hidden="true"></i></i></a>
        <a href="{{ url('admin/project').'/'.$val->id.'/delete' }}" class="btn btn-danger btn-xs"><i class="icon-bin" aria-hidden="true" data-id="{{ $val->id }}"></i></i></a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
</div>
@endsection