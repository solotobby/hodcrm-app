<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
   

     <!-- Page Content -->
     <div class="content">
        <!-- Heading -->
        <div class="block block-rounded">
          <div class="block-content block-content-full overflow-x-auto">
            <div class="py-3 text-center">
              <h1 class="h3 fw-extrabold mb-1">
                Denominations
              </h1>
              <h2 class="fs-sm fw-medium text-muted mb-0">
                List of all Denominations on the CRM
              </h2>
            </div>
          </div>
        </div>
        <!-- END Heading -->

        <!-- Dynamic Table Full -->
        <div class="block block-rounded">
          <div class="block-header block-header-default">
            <h3 class="block-title">
              Denominations - <small>{{ $denominations->count() }}</small>
            </h3>
          </div>
          <div class="block-content block-content-full overflow-x-auto">
            <!-- DataTables functionality is initialized with .js-dataTable-full class in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
              <thead>
                <tr>
                  
                  <th>Name</th>
                  <th class="d-none d-sm-table-cell">Email</th>
                  <th class="d-none d-sm-table-cell">Phone</th>
                  <th class="d-none d-sm-table-cell">Code</th>
                  <th class="d-none d-sm-table-cell">When Created</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($denominations as $denom)
                <tr>
                    
                    <td class="fw-semibold">{{$denom->name}}</td>
                    <td class="d-none d-sm-table-cell">{{$denom->email}}</td>
                    <td class="d-none d-sm-table-cell">
                        {{$denom->phone}}
                      
                    </td>
                    <td class="d-none d-sm-table-cell">
                        {{$denom->unique}}
                    </td>
                    <td class="d-none d-sm-table-cell">
                        {{$denom->created_at}}
                      
                    </td>
                  </tr>
                @endforeach
                
                
              </tbody>
            </table>
          </div>
        </div>
        <!-- END Dynamic Table Full -->

     </div>

     
</div>
