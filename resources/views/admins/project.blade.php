@extends('admins.layout') @section('sidebar') @parent
<p>This is appended to the master sidebar.</p>
@endsection
 @section('content')
<br>
<nav class="navbar navbar-default">
        <div class="nav nav-justified navbar-nav">
 
            <form class="navbar-form navbar-search" role="search">
                <div class="input-group">
                
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-search btn-default dropdown-toggle" data-toggle="dropdown">
                            <span class="glyphicon glyphicon-search"></span>
                            <span class="label-icon">Search</span>
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu pull-left" role="menu">
                           <li>
                                <a href="#">
                                    <span class="glyphicon glyphicon-user"></span>
                                    <span class="label-icon">Search By User</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                <span class="glyphicon glyphicon-book"></span>
                                <span class="label-icon">Search By Organization</span>
                                </a>
                            </li>
                        </ul>
                    </div>
        
                    <input type="text" class="form-control">
                
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-search btn-default">
                        GO
                        </button>
                         
                         
                    </div>
                </div>  
            </form>   
         
        </div>
    </nav>
@endsection