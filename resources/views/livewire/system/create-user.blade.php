<div>
    {{-- Be like water. --}}

    <div class="content">

        <!-- Heading -->
        <div class="block block-rounded">
           <div class="block-content block-content-full">
             <div class="py-3 text-center">
               <h1 class="h3 fw-extrabold mb-1">
                 Create User
               </h1>
               <h2 class="fs-sm fw-medium text-muted mb-0">
               Create Basic user Information and assign role to them
               </h2>
             </div>
           </div>
         </div>
         <!-- END Heading -->
          <!-- Alternative Style -->
          <div class="block block-rounded">
                <div class="block-header block-header-default">
                <h3 class="block-title">Enter User Information</h3>
                </div>

                <div class="block-content">
                    <form wire:submit="submitUser">
                      <div class="row">
                        <div class="col-lg-4">
                          <p class="text-muted">
                            Fill in the form
                          </p>
                        </div>
                        <div class="col-lg-8 col-xl-5">
                          
                              @if (session()->has('message'))
                                  <div class="alert alert-success">
                                      {{ session('message') }}
                                  </div>
                              @endif
          
                          <div class="mb-4">
                            <label class="form-label" for="example-text-input-alt">Name</label>
                            <input type="text" class="form-control form-control-alt" id="example-text-input-alt" wire:model="name" required autofocus  placeholder="Enter Name">
                          </div>
                          <div class="mb-4">
                            <label class="form-label" for="example-password-input-alt">Email Address</label>
                            <input type="email" class="form-control form-control-alt" id="example-password-input-alt" wire:model="email" required placeholder="Enter Email">
                          </div>
                          <div class="mb-4">
                              <label class="form-label" for="example-password-input-alt">Phone Number</label>
                              <input type="text" class="form-control form-control-alt" id="example-password-input-alt" wire:model="phone" required placeholder="Enter Phone Number">
                          </div>
                          <div class="mb-4">
                            <label class="form-label" for="example-password-input-alt">Assign Role</label>
                            <select class="form-control" wire:model="role" required>
                                <option value="">Select A role</option>
                                @foreach($roles as $role)
                                    <option value="{{ $role['name'] }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                        </div>
                         
                          <div class="mb-4">
                              <button type="submit" class="btn btn-lg btn-alt-primary fw-medium">
                                Create User
                              </button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>



          </div>


    </div>
</div>
