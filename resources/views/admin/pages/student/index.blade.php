@extends('admin.layouts.app')

@section('title', 'Student Dashboard')

@section('content')
<div class="row">
  <!-- Main Sidebar -->
  @include('admin.includes.side_menu')
  <!-- End Main Sidebar -->
  <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
    <!-- Main Navbar -->
    @include('admin.includes.navbar')

    <!-- / .main-navbar -->
    <div class="main-content-container container-fluid px-4">
      <!-- Page Header -->
      <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
          <h3 class="page-title">Student Form</h3>
        </div>
      </div>
      <!-- End Page Header -->
      <!-- Small Stats Blocks -->

      <div class="card card-small" hidden="">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12">
              <div class="card-header border-bottom">
                <h6 class="m-0">Form Inputs</h6>
              </div>
              <form>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control is-valid" id="validationServer01" placeholder="First name" value="Catalin" required>
                    <div class="valid-feedback">The first name looks good!</div>
                  </div>
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control is-valid" id="validationServer02" placeholder="Last name" value="Vasile" required>
                    <div class="valid-feedback">The last name looks good!</div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control is-invalid" id="validationServer03" placeholder="Username" value="catalin.vasile" required>
                  <div class="invalid-feedback">This username is taken.</div>
                </div>
                <div class="form-group">
                  <select class="form-control is-invalid">
                    <option selected>Choose...</option>
                    <option>...</option>
                  </select>
                  <div class="invalid-feedback">Please select your state.</div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="card card-small">

        <div class="container">
          <div class="card-header border-bottom">
            <h6 class="m-0">Form Example</h6>
          </div>
          <div class="row">
            <div class="col-sm-12 col-">
              <form>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="feEmailAddress">Email</label>
                    <input type="email" class="form-control" id="feEmailAddress" placeholder="Email"> 
                  </div>
                  <div class="form-group col-md-6">
                    <label for="fePassword">Password</label>
                    <input type="password" class="form-control" id="fePassword" placeholder="Password"> 
                  </div>
                </div>
                <div class="form-group">
                  <label for="feInputAddress">Address</label>
                  <input type="text" class="form-control" id="feInputAddress" placeholder="1234 Main St"> 
                </div>
                <div class="form-group">
                  <label for="feInputAddress2">Address 2</label>
                  <input type="text" class="form-control" id="feInputAddress2" placeholder="Apartment, studio, or floor"> 
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="feInputCity">City</label>
                    <input type="text" class="form-control" id="feInputCity"> 
                  </div>
                  <div class="form-group col-md-4">
                    <label for="feInputState">State</label>
                    <select id="feInputState" class="form-control">
                      <option selected>Choose...</option>
                      <option>...</option>
                    </select>
                  </div>
                  <div class="form-group col-md-2">
                    <label for="inputZip">Zip</label>
                    <input type="text" class="form-control" id="inputZip"> 
                  </div>
                  <div class="form-group col-md-12">
                    <div class="custom-control custom-checkbox mb-1">
                      <input type="checkbox" class="custom-control-input" id="formsAgreeField">
                      <label class="custom-control-label" for="formsAgreeField">I agree with your
                        <a href="#">Privacy Policy</a>.
                      </label>
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Create New Account</button>
              </form>
              <br>
            </div>
          </div>
        </div>
      </div>
              <br>
    </div>

    <!-- Footer Menu -->
    @include('admin.includes.footer_menu')
  </main>
</div>
@endsection

@section('footer_file')
@parent


@endsection