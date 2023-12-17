@extends ( 'layouts.master' )

@section('title')
    Add Client
@endsection

@section('main-content')




<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">

    <!--Add Client ---------------------------------------------------->

    <div class="row">
      <!---Layout -->
      <div class="col  ">
        <div class="card mb-4">
          <h3 class="card-header">Add Client</h3>
          <div class="card-body">
            <form>

              <div class="row mb-3">
                  <div class="col col-12 col-md-4">
                      <input type="text" class="form-control mb-3" id="name" placeholder="Client Name">
                      <input type="email" class="form-control mb-3" id="email" placeholder=" Email">
                      <input type="text" class="form-control mb-3" id="business" placeholder="Business Name">


                  </div>
                  <div class="col  col-12 col-md-4">
                    <input type="number" class="form-control mb-3" id="phone" placeholder="Phone">
                    <input type="text" class="form-control mb-3" id="office" placeholder="Office Add.">
                    <input type="text" class="form-control mb-3" id="lead" placeholder="Lead Source">

                  </div>

                  <div class="col  col-12 col-md-4">
                    <input type="number" class="form-control mb-3" id="phone" placeholder="Other Phone">
                    <input type="text" class="form-control mb-3" id="gst" placeholder="GST No.">
                    <input type="text" class="form-control mb-3" id="status" placeholder="Status">

                  </div>


              </div>
              <input type="submit" class="btn btn-primary" value="Submit">

            </form>
          </div>
        </div>
      </div>

    </div>

    <!--Add Client  End ----------------------------------------------->


    <!-- Client  Table ----------------------------------------------->


    <div class="card shadow p-3 ">
        


      <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
   
      <div class="row ">
        <h3 class="card-header">Manage Client</h3>

        <div class="col">
          <table id="example" class="table dataTable no-footer overflow-x-auto"  aria-describedby="example_info">
        <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Business N.</th>
              <th>Phone</th>
              <th>Added Date</th>
              <th>Projects</th>
              <th>Action</th></tr>
        </thead>
        <tbody>            
          <tr >
            <td >1</td>
            <td>Avi</td>
            <td>ALP .PL</td>
            <td>9999 999 999</td>
            <td>1.12.23</td>
            <td>10</td>
            <td><a href="/manageclient">Manage</a></td>
          </tr>

          <tr >
            <td >1</td>
            <td>Avi</td>
            <td>ALP .PL</td>
            <td>9999 999 999</td>
            <td>1.12.23</td>
            <td>10</td>
            <td><a href="/manageclient">Manage</a></td>
          </tr>

          <tr >
            <td >1</td>
            <td>Avi</td>
            <td>ALP .PL</td>
            <td>9999 999 999</td>
            <td>1.12.23</td>
            <td>10</td>
            <td><a href="/manageclient">Manage</a></td>
          </tr>

          <tr >
            <td >1</td>
            <td>Avi</td>
            <td>ALP .PL</td>
            <td>9999 999 999</td>
            <td>1.12.23</td>
            <td>10</td>
            <td><a href="/manageclient">Manage</a></td>
          </tr>

          <tr >
            <td >1</td>
            <td>Avi</td>
            <td>ALP .PL</td>
            <td>9999 999 999</td>
            <td>1.12.23</td>
            <td>10</td>
            <td><a href="/manageclient">Manage</a></td>
          </tr>
          
   
            
        </tbody>
        
    </table>
  </div>
</div>



</div>


    
      


    </div>

    <!-- Project  Table End----------------------------------------------->

    
  </div>
  <!-- / Content -->

  


</div>



    
@endsection