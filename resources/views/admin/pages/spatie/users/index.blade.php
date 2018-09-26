@extends('admin.layouts.app')

@section('title', 'User Dashboard')

@section('color-switcher')
@include('admin.includes.widget.color_switcher_animation')
@endsection

@section('content')
<div class="">
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
            <h3 class="page-title">Users Management</h3>
            @can('user-create')
            <div class="pull-right">
              <a class="btn btn-success" href="{{ route('users.create') }}" > Create New User</a>
            </div>
            @endcan
          </div>
        </div>
        <!-- End Page Header -->

        @include('admin.pages.alert.success')

        <table class="table table-bordered">
          <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Roles</th>
            <th width="280px">Action</th>
          </tr>
          @foreach ($data as $key => $user)
          <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
              @if(!empty($user->getRoleNames()))
              @foreach($user->getRoleNames() as $v)
              <label class="badge badge-success">{{ $v }}</label>
              @endforeach
              @endif
            </td>
            <td>
              <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
              @can('user-edit')
              <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
              <!--  -->
              @endcan

              @can('user-delete')
              {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
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
  </div>
</div>

{!! $data->render() !!}

@endsection