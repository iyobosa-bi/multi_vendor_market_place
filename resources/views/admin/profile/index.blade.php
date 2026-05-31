 @extends('admin.auth.layouts.master')


 @section('content')
     <div class="page-wrapper">
         <div class="page-body">
             <div class="container-xl">
                 <div class="row row-cards">
                     <div class="col-12">
                         <form class="card">
                             <div class="card-body">
                                 <h3 class="card-title">Edit Admin Profile</h3>
                                 <div class="row row-cards">
                                     <div class="col-md-5">
                                        <x-admin.input-text label="Admin Name" placeholder="Enter Name"  name="name" value="{{ auth()->user()->name }}"/>
                                     </div>

                                        <div class="col-md-5">
                                            <x-admin.input-text label="Admin Email" placeholder="Enter Email"  name="email" value="{{ auth()->user()->email }}"/>
                                        </div>
                                
                                     <div class="col-md-5">
                                         <div class="mb-3">
                                             <label class="form-label">Country</label>
                                             <select class="form-control form-select">
                                                 <option value="">Germany</option>
                                             </select>
                                         </div>
                                     </div>
                                     <div class="col-md-12">
                                         <div class="mb-3 mb-0">
                                             <label class="form-label">About Me</label>
                                             <textarea rows="5" class="form-control" placeholder="Here can be your description" value="Mike">Oh so, your weak rhyme
You doubt I'll bother, reading into it
I'll probably won't, left to my own devices
But that's the difference in our opinions.</textarea>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="card-footer text-end">
                                 <button type="submit" class="btn btn-primary">Update Profile</button>
                             </div>
                         </form>
                     </div>

                 </div>
             </div>
         </div>
     </div>
 @endsection
