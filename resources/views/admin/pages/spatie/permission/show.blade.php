@extends('admin.layouts.app')

@section('title', 'Permission Create')

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
                    <h3 class="page-title">Show Permission</h3>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('user_permission.index') }}"> Back</a>
                    </div>
                </div>
            </div>
            <!-- End Page Header -->

            <!-- Error Show -->
            @include('admin.pages.alert.error_form')

            <div class="row">
              <div class="col-lg-6 col-sm-12 mb-4 auth-form mx-auto my-auto">
                <div class="card-post__author d-flex">
                  @if(!empty($UserPermission))
                  <div class="card-body">
                    <h5 class="card-title">
                        <span>
                            Name :- 
                        </span>
                        <span class="text-fiord-blue">
                            <label class="label label-success">{{ $UserPermission->name }}</label>
                        </span>
                    </h5>
                    <span class="text-muted">
                        <strong>Guard Name:</strong>
                        <label class="label label-success">{{ $UserPermission->guard_name }}</label>
                    </span>
                </div>
                        @endif
            </div>
        </div>
    </div>
</div>
<br>
@include('admin.includes.footer_menu')
</main>
</div>
@endsection