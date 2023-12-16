@extends ( 'layouts.master' )

@section('title')
    Manage User
@endsection

@section('main-content')




<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">

    <!--Manage Users ---------------------------------------------------->

    <div class="row">
      <!---Layout -->
      <div class="col  ">
        <div class="card mb-4">
          <h3 class="card-header">Manage Users</h3>
          <div class="card-body">
            <form>

              <div class="row mb-3">
                  <div class="col col-12 col-md-4">
                      <input type="text" class="form-control mb-3" id="name" placeholder="Name">
                      <input type="email" class="form-control mb-3" id="email" placeholder="Email">
                  </div>
                  
                  <div class="col  col-12 col-md-4">
                      <input type="number" class="form-control mb-3" id="number" placeholder=" Phone ">
                      <input type="text" class="form-control mb-3" id="department" placeholder="Department">
                  </div>

                  <div class="col  col-12 col-md-4">
                    <input type="text" class="form-control mb-3" id="status" placeholder="Status">
                    <input type="text" class="form-control mb-3" id="department" placeholder="Department">
                </div>

              </div>
              <input type="submit" class="btn btn-primary" value="Submit">

            </form>
          </div>
        </div>
      </div>

    </div>

    <!--Add Users  End ----------------------------------------------->
    
  </div>
  <!-- / Content -->

  


</div>



    
@endsection