@extends ( 'layouts.master' )

@section('title')
    Manage Client
@endsection

@section('main-content')




<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">

    <!--Manage Client ---------------------------------------------------->

    <div class="row">
      <!---Layout -->
      <div class="col  ">
        <div class="card mb-4">
          <h3 class="card-header">Manage Client</h3>
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

    <!--Manage Client  End ----------------------------------------------->




    
  </div>
  <!-- / Content -->

  


</div>



    
@endsection