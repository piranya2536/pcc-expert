@extends('admins.layout')

@section('sidebar')
    @parent
    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <div>
        <div class="col-md-10 col-md-offset-1">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="fname">ชื่อ</label>
                    <input type="text" class="form-control" id="fname" placeholder="ชื่อ">
                </div>
                <div class="form-group col-md-6">
                    <label for="lname">นามสกุล</label>
                    <input type="text" class="form-control" id="lname" placeholder="นามสกุล">
                </div>

                <div class="form-group col-md-6">
                    <label for="fname">ชื่อความเชี่ยวชาญ</label>
                    <input type="text" class="form-control" id="fname" placeholder="">
                </div>
                <div class="form-group col-md-6">
                    <label for="lname">สาขาความเชี่ยวชาญ</label>
                    <input type="text" class="form-control" id="lname" placeholder="">
                </div>

            </div>
            <div class="form-group text-center">
                <input type="submit" class="btn btn-primary btn-login-submit" value="ค้นหา" />
                <button class="btn btn-danger btn-cancel-action">ยกเลิก</button>
            </div>
        </div>
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default panel-table">
                <div class="panel-heading">
                    <div class="row">
                    <div class="col col-xs-6">
                        <h3 class="panel-title">Panel Heading</h3>
                    </div>
                    <div class="col col-xs-6 text-right">
                        <a href="{{ url('admin/expert/create') }}" class="btn btn-sm btn-primary btn-create">เพิ่ม</a>
                    </div>
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table table-striped table-bordered table-list">
                    <thead>
                        <tr>
                            <th class="hidden-xs">ลำดับที่</th>
                            <th>ชื่อ - นามสกุล</th>
                            <th>แก้ไข</th>
                            <th>ลบ</th>
                        </tr> 
                    </thead>
                        <tbody>
                        @foreach($experts as $i => $val)
                            <tr>
                                <td>{{ $i+1 }}</td>
                                <td>{{ $val->title }} {{ $val->fname_th }} {{ $val->lname_th }}</td>
                                <td></td>
                                <td></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
                <div class="panel-footer">
                    
                </div>
            </div>
        </div>
    </div>
@endsection