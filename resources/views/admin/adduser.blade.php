@extends ( 'layouts.master' )

@section('title')
Add User
@endsection

@section('main-content')




<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">

    <!--Add Users ---------------------------------------------------->

    <div class="row">
      <!---Layout -->
      <div class="col  ">
        <div class="card mb-4">
          <h3 class="card-header">Add Users</h3>
          <div class="card-body">
            <form>

              <div class="row mb-3">
                <div class="col col-12 col-md-6">
                  <input type="text" class="form-control mb-3" id="name" placeholder="Name">
                  <input type="email" class="form-control mb-3" id="email" placeholder="Email">

                </div>
                <div class="col  col-12 col-md-6">
                  <input type="number" class="form-control mb-3" id="number" placeholder=" Phone Number">
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


    <!-- Users  Table ----------------------------------------------->


    <div class="card shadow p-3">
      <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
        <div class="row dt-row">
          <div class="col-sm-12">
            <div class="table-responsive">
              <table id="example" class="table dataTable no-footer" style="width: 100%;" aria-describedby="example_info">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Department</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Avi</td>
                    <td>Avi@gmail.com</td>
                    <td>999 999 9999</td>
                    <td>Sales</td>
                    <td>Active</td>
                    <td><a href="/manageuser">Manage</a></td>
                  </tr>
                  <!-- ... (other rows) ... -->
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>



</div>






</div>

<!-- Users  Table End----------------------------------------------->


</div>
<!-- / Content -->




</div>




@endsection