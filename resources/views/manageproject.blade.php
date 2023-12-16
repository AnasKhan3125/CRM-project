@extends ( 'layouts.master' )

@section('title')
    Manage Project
@endsection

@section('main-content')




<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">

    <!---Manage Project ---------------------------------------------------->

    <div class="row">
      <!---Layout -->
      <div class="col  ">
        <div class="card mb-4">
          <h3 class="card-header">Manage Project</h3>
          <div class="card-body">
            <form>

              <div class="row mb-3">
                  <div class="col col-12 col-md-4">
                      <input type="text" class="form-control mb-3" id="name" placeholder="Project Name">
                      <input type="email" class="form-control mb-3" id="email" placeholder=" Client Email">
                      <input type="text" class="form-control mb-3" id="start" placeholder="Start Date">
                      <input type="text" class="form-control mb-3" id="end" placeholder="Est.End Date">
                      <input type="text" class="form-control mb-3" id="phase" placeholder="No. of Phase">
                      <input type="text" class="form-control mb-3" id="user" placeholder="Allocate Users">
                      <input type="text" class="form-control mb-3" id="status" placeholder="Status">


                  </div>
                  <div class="col  col-12 col-md-8">
                    {{-- first row  --}}

                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control mb-3" id="client" placeholder="Client Name">
                            <input type="text" class="form-control mb-3" id="sales" placeholder="Sales Person">

                        </div>
                        <div class="col">
                            <input type="number" class="form-control mb-3" id="number" placeholder=" Client Phone">
                            <input type="text" class="form-control mb-3" id="cost" placeholder="Project Cost Ex GST">

                        </div>
                    </div>
                    <textarea class="form-control mb-3" name="" id="" cols="30" rows="3" placeholder="Scope"></textarea>
                      
                    {{-- second row  --}}

                    <div class="row">
                        <div class="col">
                            <input type="file" class="form-control mb-3" id="">
                            <input type="file" class="form-control mb-3" id="">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control mb-3" id="title" placeholder="File Title">
                            <input type="text" class="form-control mb-3" id="title" placeholder="File Title">
                        </div>
                    </div>

                    <textarea class="form-control mb-3" name="" id="" cols="30" rows="3" placeholder="New Comment"></textarea>


                  </div>
              </div>
              <input type="submit" class="btn btn-primary" value="Submit">

            </form>
          </div>
        </div>
      </div>

    </div>

    <!--Manage Project  End ----------------------------------------------->


    <!-- Project Doc  Table ----------------------------------------------->


    <div class="card shadow p-3 mb-4">

      <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
   
      <div class="row ">
        <h3 class="card-header">Project Docs</h3>

        <div class="col">
          <table id="example" class="table dataTable no-footer overflow-x-auto"  aria-describedby="example_info">
        <thead>
            <tr>
              <th>ID</th>
              <th>File Title</th>
              <th>Upload Date</th>
              <th>Action</th></tr>
        </thead>
        <tbody>            
          <tr >
            <td >1</td>
            <td>File Name</td>
            <td>1.11.23</td>
            <td><a href="#">View</a></td>
          </tr>

          <tr >
            <td >2</td>
            <td>File Name</td>
            <td>1.11.23</td>
            <td><a href="#">View</a></td>
          </tr>

          <tr >
            <td >3</td>
            <td>File Name</td>
            <td>1.11.23</td>
            <td><a href="#">View</a></td>
          </tr>

          <tr >
            <td >4</td>
            <td>File Name</td>
            <td>1.11.23</td>
            <td><a href="#">View</a></td>
          </tr>

       <tr >
            <td >5</td>
            <td>File Name</td>
            <td>1.11.23</td>
            <td><a href="#">View</a></td>
          </tr>
            
        </tbody>
        
    </table>
  </div>
</div>

</div>

    </div>

    <!-- Project Doc  Table End----------------------------------------------->


       

   
    <!-- Project Comment  Table ----------------------------------------------->


    <div class="card shadow p-3 mb-4 ">

        <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
     
        <div class="row ">
          <h3 class="card-header">Project Comment</h3>
  
          <div class="col">
            <table id="example" class="table dataTable no-footer overflow-x-auto"  aria-describedby="example_info">
          <thead>
              <tr>
                <th>ID</th>
                <th>Added by</th>
                <th>Comment</th>
                <th>Added Date</th>
                <th>Action</th></tr>
          </thead>
          <tbody>            
            <tr >
              <td >1</td>
              <td>Aman</td>
              <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste modi omnis cum quo.</td>
              <td>1.11.23</td>
              <td><a href="#">View</a></td>
            </tr>
  
            <tr >
                <td >2</td>
                <td>Aman</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste modi omnis cum quo.</td>
                <td>1.11.23</td>
                <td><a href="#">View</a></td>
              </tr>
  
              <tr >
                <td >3</td>
                <td>Aman</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste modi omnis cum quo.</td>
                <td>1.11.23</td>
                <td><a href="#">View</a></td>
              </tr>
  
              <tr >
                <td >4</td>
                <td>Aman</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste modi omnis cum quo.</td>
                <td>1.11.23</td>
                <td><a href="#">View</a></td>
              </tr>
  
              <tr >
                <td >5</td>
                <td>Aman</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste modi omnis cum quo.</td>
                <td>1.11.23</td>
                <td><a href="#">View</a></td>
              </tr>
              
          </tbody>
          
      </table>
    </div>
  </div>
  
  </div>
  
      </div>
  
      <!-- Project Comment  Table End----------------------------------------------->

    
  </div>
  <!-- / Content -->

  


</div>



    
@endsection