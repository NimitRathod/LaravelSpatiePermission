@extends('admin.layouts.app')

@section('title', 'Permission Dashboard')

@section('color-switcher')
@include('admin.includes.widget.color_switcher_animation')
@endsection

@section('content')
<div class="row">
    <!-- Main Sidebar -->
    @include('admin.includes.side_menu')

    <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
        <!-- Main Navbar -->
        @include('admin.includes.navbar')

        <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Dashboard</span>
                <h3 class="page-title">Permission Management</h3>
                <div class="pull-right">
                    @can('user-create')
                    <a class="btn btn-success" href="{{ route('user_permission.create') }}"> Create New Permission</a>
                    @endcan
                </div>
            </div>
        </div>
        <!-- End Page Header -->

        @include('admin.pages.alert.success')

        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($permissions as $key => $permission)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $permission->name }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('user_permission.show',$permission->id) }}">Show</a>
                    @can('user-edit')
                    <a class="btn btn-primary" href="{{ route('user_permission.edit',$permission->id) }}">Edit</a>
                    @endcan

                    @can('user-delete')
                    {!! Form::open(['method' => 'DELETE','route' => ['user_permission.destroy', $permission->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                    @endcan
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    @include('admin.includes.footer_menu')
</main>
{!! $permissions->render() !!}
</div>

@endsection

@section('footer_file')
@parent

@endsection