@extends('admin.layouts.app')

@section('title', 'User Create')

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
                    <span class="text-uppercase page-subtitle">Permission Dashboard </span>
                    <h3 class="page-title">Edit Permission</h3>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('user_permission.index') }}"> Back</a>
                    </div>
                </div>
            </div>
            <!-- End Page Header -->

            <!-- Error Show -->
            @include('admin.pages.alert.error_form')

            {!! Form::model($UserPermission, ['method' => 'PATCH','route' => ['user_permission.update', $UserPermission->id]]) !!}
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Permission Name:</strong>
                        {!! Form::text('name', null, array('placeholder' => 'Permission Name','class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Guard Name:</strong>
                        {!! Form::text('guard_name', null, array('placeholder' => 'Guard Name','class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
        <br>
        @include('admin.includes.footer_menu')
    </main>
</div>
@endsection