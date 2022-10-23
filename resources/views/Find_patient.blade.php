@include('include.header')
    <!-- main start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 pe-0">
                <div class="profile blue-grey-border-thin">
                <h6 class="   p-2 mb-1 d-flex justify-content-center bg-blue-grey custom-border-radius">Doctor's Profile</h6>
                    <div class="complete">
                        <div class="p-header">
                            <a href="" class="d-flex m-0 p-0 w-100 justify-content-end" data-bs-toggle="modal" data-bs-target="#total_amount">৳</a>
                            <!-- <img src="img/banner.jpg" class="cover"> -->
                            @if($doctor_info->p_image == null)
                            <img src="{{ asset('assets/img/profile.png')}}" class="doctor-profile mb-4 mt-2">
                            @else
                            <img src="{{url('public/uploads/doctor/'.$doctor_info->p_image)}}" class="doctor-profile mb-4 mt-2">
                            @endif

                            <h2 class="mb-2">{{$doctor_info->fname." ".$doctor_info->lname}}</h2>
                            <p class="mb-2">{{$doctor_info->designation}}</p>
                            <p class="mb-2">Subscription Remain : {{$sub_remain}} Days</p>
                            <!-- <p class="mb-2">Dental Consulatant of the Royal <br>Dental</p> -->
                            <!-- <a href="#_" class="btns btn-outline-blue-grey   mb-2">This Month</a> -->
{{--                            <p class="mb-2">SMS Remaining : 50</p>--}}
{{--                            <p class="mb-2">Buy SMS : 50</p>--}}

                        </div>
                    </div>
                </div>
                <div class="profile blue-grey-border-thin">
                    <div class="d-flex justify-content-evenly my-2   ">
                        <a href="{{route('doctor_profile_setting',[$doctor_info->id])}}" class="" data-bs-toggle="tooltip" data-bs-placement="top" title="Setting">
                            <i class="fa-solid fa-gear fa-xl"  ></i>
                        </a>
                        <a  href="{{route('profile_edit',[$doctor_info->id ?? 0])}}" class="" data-bs-toggle="tooltip" data-bs-placement="top" title="Profile">
                            <i class="fa-solid fa-user fa-xl"></i>
                        </a>
                        <a  href="{{route('logout')}}" class="" data-bs-toggle="tooltip" data-bs-placement="top" title="Logout">
                            <i class="fa-solid fa-power-off fa-xl"></i>
                        </a>
                    </div>
                </div>
                <div class="profile blue-grey-border-thin py-2">
                    <!-- <h3>Treatment Plans</h3> -->
                    <div class="complete">
                        <a href="{{route('patient_list',[$doctor_info->id])}}" class="btns btn-outline-blue-grey my-2">Patient List</a>
                        <a href="{{route('appointment_list',[$doctor_info->id])}}" class="btns btn-outline-blue-grey my-2">Appointment</a>
                        <a href="{{route('subscription',[$doctor_info->id])}}" class="btns btn-outline-blue-grey my-2">Subscription</a>
                    </div>

                    <!-- <a href="">setting</a>
              <a href="" class="lgout-a">Logout</a> -->
                </div>
            </div>
            <div class="col-md-7 pe-0">
                <div class="blank-sec">
                <h6 class="   p-2 mb-1 d-flex justify-content-center bg-blue-grey custom-border-radius">Exclusives</h6>
<!-- slider -->
<div class="slide_items_wrapper  blue-grey-border mx-3 mb-3">
                                    <div class="slick_slide_items">

                                        <div class="card slider-card-body blue-grey-border-thin me-2">

                                            <div class="card-body">
                                                <h5 class="card-title text-bg-blue-grey">Card title 1</h5>
                                                <p class="card-text">This is a longer card with supporting text below as
                                                    a natural lead-in to additional content. This content is a little
                                                    bit longer.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slick_slide_items">

                                        <div class="card slider-card-body blue-grey-border-thin me-2">

                                            <div class="card-body">
                                                <h5 class="card-title text-bg-blue-grey">Card title 1</h5>
                                                <p class="card-text">This is a longer card with supporting text below as
                                                    a natural lead-in to additional content. This content is a little
                                                    bit longer.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slick_slide_items">

                                        <div class="card slider-card-body blue-grey-border-thin me-2">

                                            <div class="card-body">
                                                <h5 class="card-title text-bg-blue-grey">Card title 1</h5>
                                                <p class="card-text">This is a longer card with supporting text below as
                                                    a natural lead-in to additional content. This content is a little
                                                    bit longer.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slick_slide_items">

                                        <div class="card slider-card-body blue-grey-border-thin me-2">

                                            <div class="card-body">
                                                <h5 class="card-title text-bg-blue-grey">Card title 1</h5>
                                                <p class="card-text">This is a longer card with supporting text below as
                                                    a natural lead-in to additional content. This content is a little
                                                    bit longer.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slick_slide_items">

                                        <div class="card slider-card-body blue-grey-border-thin me-2">

                                            <div class="card-body">
                                                <h5 class="card-title text-bg-blue-grey">Card title 1</h5>
                                                <p class="card-text">This is a longer card with supporting text below as
                                                    a natural lead-in to additional content. This content is a little
                                                    bit longer.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slick_slide_items">

                                        <div class="card slider-card-body blue-grey-border-thin me-2">

                                            <div class="card-body">
                                                <h5 class="card-title text-bg-blue-grey">Card title 1</h5>
                                                <p class="card-text">This is a longer card with supporting text below as
                                                    a natural lead-in to additional content. This content is a little
                                                    bit longer.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slick_slide_items">

                                        <div class="card slider-card-body blue-grey-border-thin me-2">

                                            <div class="card-body">
                                                <h5 class="card-title text-bg-blue-grey">Card title 1</h5>
                                                <p class="card-text">This is a longer card with supporting text below as
                                                    a natural lead-in to additional content. This content is a little
                                                    bit longer.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slick_slide_items">

                                        <div class="card slider-card-body blue-grey-border-thin me-2">

                                            <div class="card-body">
                                                <h5 class="card-title text-bg-blue-grey">Card title 1</h5>
                                                <p class="card-text">This is a longer card with supporting text below as
                                                    a natural lead-in to additional content. This content is a little
                                                    bit longer.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slick_slide_items">

                                        <div class="card slider-card-body blue-grey-border-thin me-2">

                                            <div class="card-body">
                                                <h5 class="card-title text-bg-blue-grey">Card title 1</h5>
                                                <p class="card-text">This is a longer card with supporting text below as
                                                    a natural lead-in to additional content. This content is a little
                                                    bit longer.</p>
                                            </div>
                                        </div>
                                    </div>



                    </div>
                    <!-- slider end ----------------------------------------------------------->
                    <!-- Search & New Patient Start -->
                    <div class="row m-0 justify-content-around">
                    <h6 class="   p-2 mb-1 d-flex justify-content-center bg-blue-grey  ">Search</h6>

                         <span class="text-danger no-paitent-error">@error('search') {{$message}} @enderror</span>
                        <div class="col-md-5 blue-grey-border py-4">
                            <form action="{{route('search',[$doctor_info->id])}}" method="POST">
                                @csrf
                                <!-- <input type="text" placeholder="Search Old Patient" name="search" class="search-input"> -->
                            <div class="d-flex my-auto">

                                <input class="form-control me-2  blue-grey-border-thin " type="text" placeholder="Search Old Patient" aria-label="default input example" name="search">
                                <button class="btn btn-outline-blue-grey ">Search</button>


                            </div>



                            </form>
                        </div>
                        <div class="col-md-5 blue-grey-border ">
                            <div class="new-gen-pat">
                                <!--  a tag trigger modal -->
                                <a href="" class="btn btn-outline-blue-grey text-white" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    New Patient registration
                                </a>
                                <!-- Modal -->
                                <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <!-- Modal Header & Close btn -->
                                            <div class="modal-header">
                                                <h5 class="modal-title text-dark mb-0" id="exampleModalLabel">
                                                    New Patient Registration
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <!-- Modal Header & Close btn end -->
                                            <!-- Modal Body -->
                                            <div class="modal-body">
                                                <form action="{{route('patient_info',[$doctor_info->id])}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <!-- <label for="exampleInputEmail1" class="form-label text-dark">Mobile no.</label> -->
                                                        <input type="number" name="mobile" class="form-control custom-form-control" placeholder="Mobile No">
                                                        <!-- <div class="form-text"></div> -->
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-9">
                                                        <div class="mb-3">
                                                        <!-- <label for="exampleInputEmail1" class="form-label text-dark">Name</label> -->
                                                        <input type="name" name="name" class="form-control custom-form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name">
                                                        <!-- <div id="emailHelp" class="form-text"></div> -->
                                                    </div>
                                                        </div>
                                                        <div class="col-3">
                                                        <div class="mb-3">
                                                        <!-- <label for="exampleInputEmail1" class="form-label text-dark">Name</label> -->
                                                        <input type="number" name="age" class="form-control custom-form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Age">
                                                        <!-- <div id="emailHelp" class="form-text"></div> -->
                                                    </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="mb-3">
                                                                <!-- <label for="mName" class="form-label text-dark">Gender</label> -->
                                                                <select class="form-select" name="gender" aria-label="Gender">
                                                                    <option selected value="">Select gender</option>
                                                                    <option value="Male">Male</option>
                                                                    <option value="Female">Female</option>
                                                                    <option value="Other">Others</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="mb-3">
                                                                <!-- <label for="mName" class="form-label text-dark">Blood Group</label> -->
                                                                <select class="form-select" name="Blood_group" aria-label="Blood Group">
                                                                    <option selected value="">Blood Group
                                                                    </option>
                                                                    <option value="A+">A+</option>
                                                                    <option value="A-">A-</option>
                                                                    <option value="B+">B+</option>
                                                                    <option value="B-">B-</option>
                                                                    <option value="AB-">AB+</option>
                                                                    <option value="AB-">AB-</option>
                                                                    <option value="O+">O+</option>
                                                                    <option value="O-">O-</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="mb-3">
                                                                <!-- <label for="mName" class="form-label text-dark">Date of Birth</label> -->
                                                                <!-- <br> class="msform"-->
                                                                <input class="form-control custom-form-control" name="date" type="text" placeholder="Date of Birth">
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="mb-3">
                                                                <!-- <label for="exampleInputEmail1" class="form-label text-dark">Occupation</label> -->
                                                                <input type="text" class="form-control" name="occupation" placeholder="Occupation">
                                                                <!-- <div class="form-text"></div> -->
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="mb-3">
                                                        <!-- <label for="exampleInputEmail1" class="form-label text-dark">Address</label> -->
                                                        <input type="address" class="form-control" name="address" placeholder="Address">
                                                        <!-- <div class="form-text"></div> -->
                                                    </div>
                                                    <div class="">
                                                        <!-- <label for="exampleInputEmail1" class="form-label text-dark">Email address</label> -->
                                                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email address">
                                                        <!-- <div id="emailHelp" class="form-text">We'll never share your
                                                            email with anyone else.</div> -->
                                                    </div>
                                                    <div class="mt-2">
                                                        <label for="formFile" name="image" class="form-label text-dark">Drop your
                                                            image</label>
                                                        <input class="form-control" name="image" type="file" id="formFile">
                                                    </div>
                                                    <!-- Modal Footer -->
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-dark btn-sm" data-bs-dismiss="modal">Close</button>
                                                        <button class="btn btn-outline-blue-grey  btn-sm">Save</button>
                                                        <!-- Modal Footer end -->
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- Modal Body end -->
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal end -->
                            </div>
                        </div>
                    </div>



                    <!-- Search & New Patient end-->
                    @forelse($patient as $pf)
                    <table class="table table-bordered mt-4 text-center">
                        <thead>
                            <tr>
                                <th class="">name</th>
                                <th class="">mobile</th>
                                <th class="">Patient ID:</th>
                                <th class="">Action</th>
                            </tr>
                        </thead>
                        <tbody>



                            <tr>
                                <td>{{$pf->name}}</td>
                                <td>{{$pf->mobile}}</td>
                                <td>{{$pf->id}}</td>
                                <td class="d-flex justify-content-around">
                                    <span>
                                        <a class="crud-btns" href="{{route('view_patient',[$doctor_info->id,$pf->id])}}" data-bs-toggle="tooltip" data-bs-placement="top" title="View Patient Info">
                                            <i class="fa-solid fa-file-lines"></i>
                                        </a>
                                    </span>


                                   <span  data-bs-toggle="modal" data-bs-target="#patitentUpdate">
                                    <a class="crud-btns" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Update Patient Info">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                   </span>

                                    <span data-bs-toggle="modal" data-bs-target="#patitentDelete">
                                    <a class="crud-btns" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Patient Info">
                                         <i class="fa-solid fa-trash"></i>
                                    </a>
                                    </span>
                                    <!--  -->
                                </td>
                            </tr>

                        </tbody>

                    </table>
                    @empty
                            <h4 class="mt-2 px-4 text-danger">There was no Information about this Number</h2>
                    @endforelse
                    <!--Search Result For Patient end -->

                    <!-- Modal For Update Patient Information-->
                    <div class="modal fade " id="patitentUpdate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-scrollable">
                            <div class="modal-content">
                                <!-- Modal Header & Close btn -->
                                <div class="modal-header">
                                    <h5 class="modal-title text-dark mb-0" id="exampleModalLabel">
                                        Update Patient Information
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <!-- Modal Header & Close btn end -->
                                <!-- Modal Body -->

                                <div class="modal-body pt-1 pb-0">
                                    @foreach($patient as $pf)
                                    <form action="{{route('edit.patient',[$doctor_info->id,$pf->id])}}" method="POST" enctype="multipart/form-data">
                                     @method('PUT')
                                     @csrf

                                        <div class="mb-2">
                                            <label for=" " class="form-label text-dark">Mobile no.</label>
                                            <input type="number" name="mobile" class="form-control custom-form-control" placeholder="Mobile No" value="{{$pf->mobile}}">
                                        </div>
                                        <div class="row">
                                            <div class="col-9">
                                                <div class="mb-2">
                                                    <label for=" " class="form-label text-dark">Name</label>
                                                    <input type="name" name="name" class="form-control custom-form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name" value="{{$pf->name}}">

                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-2">
                                                    <label for=" " class="form-label text-dark">Age</label>
                                                     <input type="number" name="age" class="form-control custom-form-control" id=" " aria-describedby="emailHelp" placeholder="Age" value="{{$pf->age}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-2">
                                                    <label for="mName" class="form-label text-dark">Gender</label>
                                                    <!-- <select class="form-select" name="gender" aria-label="Gender">
                                                            <option selected>Select gender</option>
                                                            <option value="Male">Male</option>
                                                            <option value="Female">Female</option>
                                                            <option value="Other">Others</option>
                                                        </select> -->
                                                    <input type="text" name="gender" class="form-control custom-form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Gender" value="{{$pf->gender}}">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-2">
                                                    <label for="mName" class="form-label text-dark">Blood Group</label>
                                                    <!-- <select class="form-select" name="Blood_group" aria-label="Blood Group">
                                                        <option selected> Patient's Blood Group
                                                                    </option>
                                                        <option value="a+">A+</option>
                                                        <option value="a-">A-</option>
                                                        <option value="b+">B+</option>
                                                        <option value="b-">B-</option>
                                                        <option value="ab-">AB+</option>
                                                        <option value="ab-">AB-</option>
                                                        <option value="o+">O+</option>
                                                        <option value="o-">O-</option>
                                                    </select> -->
                                                    <input type="text" name="Blood_group" class="form-control custom-form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Blood Group" value="{{$pf->Blood_group}}">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-2">
                                                    <label for="mName" class="form-label text-dark">Date of Birth</label>
                                                                <!-- <br> class="msform"-->
                                                    <input class="form-control custom-form-control" name="date" type="text" placeholder="Date of Birth" value="{{$pf->date}}">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-2">
                                                    <label for=" " class="form-label text-dark">Occupation</label>
                                                    <input type="text" class="form-control custom-form-control" name="occupation" placeholder="Occupation" value="{{$pf->occupation}}">
                                                    <!-- <div class="form-text"></div> -->
                                                </div>
                                            </div>
                                        </div>


                                        <div class="mb-2">
                                            <label for="" class="form-label text-dark">Address</label>
                                            <input type="address" class="form-control custom-form-control" name="address" placeholder="Address" value="{{$pf->address}}">
                                        </div>
                                        <div class="">
                                            <label for="" class="form-label text-dark">Email address</label>
                                            <input type="email" name="email" class="form-control custom-form-control" id=" " aria-describedby="emailHelp" placeholder="Email address" value="{{$pf->email}}">

                                        </div>
                                        <div class="mt-2 row   ">
                                            <div class="col">
                                            <label for="formFile" name="image" class="form-label text-dark">Drop your
                                                            image</label>
                                            <input class="form-control" name="image" type="file" id="formFile"  >
                                            </div>
                                            <div class="col">
                                            <p>Last Profile Image</p>
                                            <img src="{{url('public/uploads/patient/'.$pf->image)}}" class="mt-2" style="width: 70px; height: 70px;">

                                            </div>

                                        </div>
                                        <!-- Modal Footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-dark btn-sm" data-bs-dismiss="modal">Close</button>
                                            <button class="btn btn-outline-blue-grey  btn-sm">Update</button>
                                                        <!-- Modal Footer end -->
                                        </div>

                                    </form>
                                    @endforeach
                                </div>
                                <!-- Modal Body end -->
                            </div>
                        </div>
                    </div>
                    <!-- Modal end -->

                    <!-- Modal For Delete Patient Information-->
                    <div class="modal fade " id="patitentDelete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-scrollable">
                            <div class="modal-content">
                                <!-- Modal Header & Close btn -->
                                <div class="modal-header">
                                    <h5 class="modal-title text-dark" id="exampleModalLabel">
                                        Delete Patient Information
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <!-- Modal Header & Close btn end -->
                                <!-- Modal Body -->

                                <div class="modal-body">
                                    @foreach($patient as $pf)
                                    <form action="{{route('delete.patient',[$doctor_info->id,$pf->id])}}" method="POST" >
                                        @method('delete')
                                        @csrf

                                        <div class="mb-3 text-center">
                                            <h5 class="text-danger">Are You Sure to Delete The information</h5>
                                        </div>

                                        <!-- Modal Footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-dark btn-sm" data-bs-dismiss="modal">Close</button>
                                            <button class="btn btn-outline-blue-grey  btn-sm">Delete</button>
                                        <!-- Modal Footer end -->
                                        </div>

                                    </form>
                                    @endforeach
                                </div>
                                <!-- Modal Body end -->
                            </div>
                        </div>
                    </div>
                    <!-- Modal end -->


                    <!-- Search & New Patient end-->
                       <!--Appointment Start  -->
                       <div class="Appointment-sec my-3 mx-3 blue-grey-border ">
                        <div class="Appointment-h p-2 bg-blue-grey custom-border-radius">
                            <h4 class="m-0">Today we have {{$count_ap}} Appointment</h4>
                        </div>
                        <!-- Appointment Status -->
                        <div class="row p-1">
                            @foreach($appointments as $appointment)
                            <div class="col-md-3">
                                <div class="Appointment-details blue-grey-border-thin  d-flex flex-wrap align-items-center p-1">
                                    <div class="Appointment-Patient-img me-2">
                                        <!-- <img src="{{ asset('assets/img/profile.png')}}"> -->
                                        @if($appointment->image == null)
                                        <img src="{{ asset('assets/img/profile.png')}}">
                                        @else
                                        <img src="{{url('public/uploads/patient/'.$appointment->image)}}">
                                        @endif
                                    </div>

                                    <div class="Appointment-Patient-details">
                                        <h6 class="m-0">{{$appointment->name}}</h6>
                                        <p class="mt-1">{{$appointment->time}}</p>
                                        @php
                                            $time = Carbon\Carbon::parse($appointment->time)->format('H:i');
                                            $now_time = Carbon\Carbon::now()->format('H:i');
                                            //echo $time,$now_time;
                                        @endphp
                                        @if($time > $now_time)
                                            <p>Status : <span class="text-success">In Chamber</span></p>
                                        @else
                                            <p>Status : <span class="text-success">Delayed</span></p>
                                        @endif
                                    </div>
                                    <div class="patient-status m-auto my-1">
                                        <a class="btn btn-sm btn-outline-blue-grey m-0" href="{{route('view_patient',[$appointment->d_id,$appointment->p_id])}}" role="button">View</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        <!--    <div class="col-md-3">
                                <div class="Appointment-details blue-grey-border-thin  d-flex flex-wrap align-items-center p-1">
                                    <div class="Appointment-Patient-img me-2">
                                        <img src="{{ asset('assets/img/profile.png')}}">

                                    </div>
                                    <div class="Appointment-Patient-details">
                                        <h4 class="m-0">Hasan Mahud</h4>
                                        <p class="m-0">05:00pm</p>
                                        <p class="m-0"> Root canal</p>
                                    </div>
                                    <div class="patient-status m-auto my-1">
                                        <h5>Status : <span class="text-success">Done</span></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="Appointment-details blue-grey-border-thin  d-flex flex-wrap align-items-center p-1">
                                    <div class="Appointment-Patient-img me-2">
                                        <img src="{{ asset('assets/img/profile.png')}}">

                                    </div>
                                    <div class="Appointment-Patient-details">
                                        <h4 class="m-0">Hasan Mahud</h4>
                                        <p class="m-0">05:00pm</p>
                                        <p class="m-0"> Root canal</p>
                                    </div>
                                    <div class="patient-status m-auto my-1">
                                        <h5>Status : <span class="text-info">Pending</span></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="Appointment-details blue-grey-border-thin  d-flex flex-wrap align-items-center p-1">
                                    <div class="Appointment-Patient-img me-2">
                                        <img src="{{ asset('assets/img/profile.png')}}">

                                    </div>
                                    <div class="Appointment-Patient-details">
                                        <h4 class="m-0">Hasan Mahud</h4>
                                        <p class="m-0">05:00pm</p>
                                        <p class="m-0"> Root canal</p>
                                    </div>
                                    <div class="patient-status m-auto my-1">
                                        <h5>Status : <span class="text-info">Pending</span></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="Appointment-details blue-grey-border-thin  d-flex flex-wrap align-items-center p-1">
                                    <div class="Appointment-Patient-img me-2">
                                        <img src="{{ asset('assets/img/profile.png')}}">

                                    </div>
                                    <div class="Appointment-Patient-details">
                                        <h4 class="m-0">Hasan Mahud</h4>
                                        <p class="m-0">05:00pm</p>
                                        <p class="m-0"> Root canal</p>
                                    </div>
                                    <div class="patient-status m-auto my-1">
                                        <h5>Status : <span class="text-info">Pending</span></h5>
                                    </div>
                                </div>
                            </div>-->
                        </div>
                    </div>
                    <!--Appointment end  -->
                    <!--Patient list Start  -->
                    <!-- <div class="patient-list-col  blue-grey-border">
                        <div class="patient-list-h p-2 bg-blue-grey custom-border-radius">
                            <h4 class="m-0">Patient List</h4>
                        </div>
                        <table class="table text-center">
                            <thead>
                                <tr>
                                    <th scope="col">Day</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Saturday</th>
                                    <td>Tom</td>
                                    <td>Sam</td>
                                    <td>Rafa</td>
                                </tr>
                                <tr>
                                    <th scope="row">Sunday</th>
                                    <td>Tom</td>
                                    <td>Sam</td>
                                </tr>
                                <tr>
                                    <th scope="row">Monday</th>
                                    <td>Tom</td>
                                    <td>Sam</td>
                                    <td>Rafa</td>
                                    <td>Shafi</td>
                                </tr>
                                <tr>
                                    <th scope="row">tuesday</th>
                                    <td>Tom</td>
                                    <td>Sam</td>
                                    <td>Rafa</td>
                                </tr>
                                <tr>
                                    <th scope="row">Wednesday</th>
                                </tr>
                                <tr>
                                    <th scope="row">Thursday</th>
                                    <td>Tom</td>
                                    <td>Sam</td>
                                    <td>Rafa</td>
                                </tr>
                                <tr>
                                    <th scope="row">Friday</th>
                                    <td>Tom</td>
                                </tr>
                            </tbody>
                        </table>
                    </div> -->
                    <!-- Appointment list end -->
                </div>
            </div>
<!-- Admin Notice,Ad & Events start -->
<div class="col-md-3 page-home">

<div class="info-box-col mb-3 pb-1">
    <h4 class="p-2 d-flex justify-content-center bg-blue-grey custom-border-radius">Admin Notice Board</h4>
    <!-- accordion -->
    <div class="accordion accordion-flush" id="accordionFlushExample">
        @foreach($notices as $key=>$notice)
            <div class="accordion-item mb-0">
                <h2 class="accordion-header" id="flush-heading{{$key + 1}}">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse{{$key + 1}}" aria-expanded="false" aria-controls="flush-collapse{{$key + 1}}">
                        {{$notice->title}}
                    </button>
                </h2>
                <div id="flush-collapse{{$key + 1}}" class="accordion-collapse collapse" aria-labelledby="flush-heading{{$key + 1}}" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        {{$notice->description}}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <!-- accordion end -->
</div>
<div class="info-box-col info-box-col-ad mb-3">
    <h4 class="p-2 d-flex justify-content-center bg-blue-grey custom-border-radius">Ad</h4>



    <div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('assets/img/slider_img/ad_slider_1.jpg')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/img/slider_img/ad_slider_2.png')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/img/slider_img/ad_slider_3.jpg')}}" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- <div class="info-box-col mb-3">
    <h4 class="p-2 d-flex justify-content-center bg-blue-grey custom-border-radius">Upcoming Events</h4>

</div> -->
</div>
</div>
</div>
<!-- Admin Notice,Ad & Events end -->

       <!-- Modal For T/P Estimated Cost List -->
       <div class="modal fade " id="total_amount" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <!-- Modal Header & Close btn -->
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="exampleModalLabel">
                    Earning Information
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Modal Header & Close btn end -->
            <!-- Modal Body -->
            <div class="modal-body">
                <!-- T/P Treatment Cost List-->
                {{-- <table class="table table-bordered mt-3 text-center">
                    <thead>
                        <tr>
                            <th class="">#</th>
                            <th class="">Treatment Plans</th>
                            <th class="">Cost</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($treatment_infos as $key=>$t_p_cost)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$t_p_cost->treatment_plans}}</td>
                            <td>{{$t_p_cost->cost}}</td>
                        </tr>
                        @endforeach
                        <tr>
                            <td colspan="2">Total</td>
                            <td>{{$total_cost}}</td>
                        </tr>
                    </tbody>
                </table> --}}
                <!--T/P Treatment Cost list end -->
                <h5>Total Amount: {{$total_cost}}</h5>
                <h5>Total Income: {{$total_paid}}</h5>
                <h5>Total Due: {{$total_due}}</h5>
            </div>
            <!-- Modal Body end -->
        </div>
    </div>
 </div>
  <!-- Modal end -->

<!-- Modal For T/P Estimated Cost List -->
<div class="modal fade " id="total_amount" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <!-- Modal Header & Close btn -->
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="exampleModalLabel">
                    Earning Information
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Modal Header & Close btn end -->
            <!-- Modal Body -->
            <div class="modal-body">
                <!-- T/P Treatment Cost List-->
                <!-- <table class="table table-bordered mt-3 text-center">
                    <thead>
                        <tr>
                            <th class="">#</th>
                            <th class="">Treatment Plans</th>
                            <th class="">Cost</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table> -->
                <!--T/P Treatment Cost list end -->
                <h5>Total Amount: {{$total_cost}}</h5>
                <h5>Total Income: {{$total_paid}}</h5>
                <h5>Total Due: {{$total_due}}</h5>
            </div>
            <!-- Modal Body end -->
        </div>
    </div>
</div>
<!-- Modal end -->

    <!-- main end -->
    @include('include.footer')

<script type="text/javascript">

     $('.slide_items_wrapper').slick({
   centerMode: true,
   centerPadding: '30px',
   slidesToShow: 3,
   slidesToScroll: 1,
   autoplay: true,
   autoplaySpeed: 2000,
   arrows: false,

   responsive: [
     {
       breakpoint: 768,
       settings: {
         arrows: false,
         centerMode: true,
         centerPadding: '40px',
         slidesToShow: 3
       }
     },
     {
       breakpoint: 480,
       settings: {
         arrows: false,
         centerMode: true,
         centerPadding: '40px',
         slidesToShow: 1
       }
     }
   ]
 });
   </script>