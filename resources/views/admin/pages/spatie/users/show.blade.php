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
                    <span class="text-uppercase page-subtitle">Dashboard</span>
                    <h3 class="page-title">Show User</h3>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
                    </div>
                </div>
            </div>
            <!-- End Page Header -->

            <!-- Error Show -->
            @include('admin.pages.alert.error_form')

            <div class="row">
              <div class="col-lg-6 col-sm-12 mb-4 auth-form mx-auto my-auto">
                <div class="card card-small card-post card-post--1">
                    <div class="card-post__image" style="background-image: url('{{ asset('assets/admin/images/content-management/1.jpeg') }}');">
                        <a href="#" class="card-post__category badge badge-pill badge-info">
                            {{ ucfirst($user->name) }}
                        </a>
                        <div class="card-post__author d-flex">
                          <a href="#" class="card-post__author-avatar card-post__author-avatar--small" style="background-image: url('{{ asset('assets/admin/images/avatars/0.jpg') }}');">
                              {{ ucfirst($user->name) }}
                          </a>
                      </div>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">
                        <span>
                            Name :- 
                        </span>
                        <span class="text-fiord-blue">
                            {{ ucfirst($user->name) }}
                        </span>
                    </h5>
                    <p class="card-text d-inline-block mb-3">
                        <span class="text-fiord-blue">
                            EMail :- 
                            {{ Auth::user()->email }}
                        </span>
                    </p><br>
                    <span class="text-muted">
                        <strong>Roles:</strong>
                        @if(!empty($user->getRoleNames()))
                        @foreach($user->getRoleNames() as $v)
                        <label class="badge badge-success">{{ $v }}</label>
                        @endforeach
                        @endif
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
@include('admin.includes.footer_menu')
</main>
</div>
@endsection