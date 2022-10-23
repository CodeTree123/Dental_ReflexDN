@include('include.header')
    <!-- main start -->
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-2 pe-0">
                <div class="profile blue-grey-border-thin">
                <h6 class="   p-2 mb-1 d-flex justify-content-center bg-blue-grey custom-border-radius">Doctor's Profile</h6>
                    <div class="complete">
                        <div class="p-header">
                            <a href="" class="d-flex m-0 p-0 w-100 justify-content-end" href="" data-bs-toggle="modal" data-bs-target="#total_amount">৳</a>
                            <!-- <a href="" class="d-flex m-0 p-0 w-100 justify-content-end">৳</a> -->
                            <!-- <img src="img/banner.jpg" class="cover"> -->
                            @if($doctor_info->p_image == null)
                            <img src="{{ asset('assets/img/profile.png')}}" class="doctor-profile my-4">
                            @else
                            <img src="{{url('public/uploads/doctor/'.$doctor_info->p_image)}}" class="doctor-profile my-4">
                            @endif

                            <h2 class="mb-2">{{$doctor_info->fname." ".$doctor_info->lname}}</h2>
                            <p class="mb-2">{{$doctor_info->designation}}</p>
                            <p class="mb-2">Subscription Remain : {{$sub_remain}} Days</p>
                            <!--<p class="mb-2">Dental Consulatant of the Royal <br>Dental</p>-->
                            <!-- <a href="#_" class="btns btn-outline-blue-grey  mb-2">This Month</a> -->
                            <!--<p class="mb-2">SMS Remaining : 50</p>-->
                            <!--<p class="mb-2">Buy SMS : 50</p>-->

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
                    @if($subscription_check->status == 1)
                        <a href="{{route('patient_list',[$doctor_info->id])}}" class="btns btn-outline-blue-grey my-2">Patient List</a>
                        <a href="{{route('appointment_list',[$doctor_info->id])}}" class="btns btn-outline-blue-grey my-2">Appointment</a>
                        <!-- <a href="#" class="btns btn-outline-blue-grey my-2">Income/Expence</a> -->
                        <a href="{{route('subscription',[$doctor_info->id])}}" class="btns btn-outline-blue-grey my-2">Subscription</a>
                    @else
                    <!-- <a href="#" class="btns btn-outline-blue-grey my-2">Patient List</a> -->
                        <button type="button" class="btns btn-outline-blue-grey my-2 border-0" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Need To Subscribe" data-bs-custom-class="beautifier text-danger">Patient List</button>
                        <!-- <a href="#" class="btns btn-outline-blue-grey my-2">Appointment</a> -->
                        <button type="button" class="btns btn-outline-blue-grey my-2 border-0" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Need To Subscribe" data-bs-custom-class="beautifier text-danger">Appointment</button>
                        <!-- <a href="#" class="btns btn-outline-blue-grey my-2">Income/Expence</a> -->
                        <a href="{{route('subscription',[$doctor_info->id])}}" class="btns btn-outline-blue-grey my-2">Subscription</a>
                    @endif
                    </div>

                    <!-- <a href="">setting</a>
              <a href="" class="lgout-a">Logout</a> -->
                </div>
            </div>
            <div class="col-md-7 pe-0">
                <div class="blank-sec dental_bg">
                @if(Session::has('success'))
                <div class="alert alert-success">{{Session::get('success')}}</div>
                @endif
                @if(Session::has('fail'))
                <div class="alert alert-danger">{{Session::get('fail')}}</div>
                @endif
                <div class="pricing-header p-3 pb-md-4 mx-auto text-center">

                <h1 class="  fw-bold">ReflexDN</h1>
                <h1 class="text-bg-blue-grey">Choose a plan</h1>
    </div>
                <main>

                <form action="{{route('subscription_add_redeem')}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="d-flex justify-content-center mb-3">
                        <input type="hidden" id="status" name="doctor_id" value="{{$doctor_info->id}}">

                        <input type="hidden" name="package_name" class="subscription_info ms-2" value="Redeem Code">


                            <!-- <input type="text" id="package_duration" name="package_duration" class="subscription_info ms-2" style="width: 20px;" readonly>
                                <input type="text" id="package_duration_types" name="package_duration_types" class="subscription_info" readonly> -->

                        <input type="hidden" name="package_price" class="subscription_info ms-2" value="0">

                        <div class="d-flex  bg-blue-grey rounded-pill p-2 m-2 ">

                            <input class="form-control " list="list" id="redeem_code" placeholder="Redeem Code" name="redeem_code" style="width:100%;">

                            <button type="submit" class="btn btn-sm btn btn-sm btn-light rounded-pill">Activate</button>
                        </div>

                    </div>
                </form>
                    <div class="container p-0">
                    <div class="row   mb-3 text-center mx-1 px-1 ">
                        @if($subscription_check->request == 0)
                            @foreach($subscription_plans2 as $subscription_plan2)
                            <div class="col-xxl-6 col-xl-6 col-lg-6 px-1">
                                <div class=" bg-blue-grey card mb-4 rounded-3 shadow-sm">
                                <div class="card-header py-3 blue-grey-border text-white">
                                    <h4 class="">Save {{$subscription_plan2->descount}}%</h4>
                                </div>
                                <div class="card-body bg-white mx-1 p-0 py-3">
                                <h6 class="my-0 fw-normal">{{$subscription_plan2->package_name}}</h6>

                                    <h3 class="text-dark fw-bold"> {{$subscription_plan2->duration." ".$subscription_plan2->duration_types}}</h3>
                                    <p class="fw-bold text-dark   pricing-card-title py-3">Basic Price - {{$subscription_plan2->basic_price}} ৳ </p>

                                    <h5 class="fw-bold text-bg-blue-grey  pricing-card-title py-3">Discounted Price  <br>
                                         <span class="fw-bolder  fs-3 ">
                                         ৳ {{$subscription_plan2->package_price}}
                                    </span>
                                </h5>

                                    <p class=" fw-bold text-dark  pricing-card-title">Save
                                    {{$subscription_plan2->saved_price}}৳ </p>

                                </div>
                                    <div class="d-flex">
                                        <button type="button" class="w-100 btn btn-lg   PackageID me-1" value="{{$subscription_plan2->id}}">
                                            <span class="fw-bolder text-white fs-3">Buy Now</span>
                                        </button>
                                        <!-- <button type="button" class="w-100 btn btn-lg btn-outline-dark PackageID ms-1" value="{{$subscription_plan2->id}}">
                                            Try This
                                        </button> -->
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @else
                    @foreach($subscription_plans as $subscription_plan)
                    <div class="col-xxl-3 col-xl-3 col-lg-3 px-1">
                        <div class=" bg-blue-grey card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3 blue-grey-border text-white">
                            <h4 class="">Save {{$subscription_plan->descount}}%</h4>
                        </div>
                        <div class="card-body bg-white mx-1 p-0 py-3">
                        <h6 class="my-0 fw-normal">{{$subscription_plan->package_name}}</h6>

                            <h3 class="text-dark fw-bold"> {{$subscription_plan->duration." ".$subscription_plan->duration_types}}</h3>
                            <p class="fw-bold text-dark   pricing-card-title py-3">Basic Price - {{$subscription_plan->basic_price}} ৳ </p>

                            <h5 class="fw-bold text-bg-blue-grey  pricing-card-title py-3">Discounted Price  <br>
                                 <span class="fw-bolder  fs-3 ">
                                 ৳ {{$subscription_plan->package_price}}
                            </span>
                        </h5>

                            <p class=" fw-bold text-dark  pricing-card-title">Save
                            {{$subscription_plan->saved_price}}৳ </p>

                        </div>
                            <div class="d-flex">
                                <button type="button" class="w-100 btn btn-lg   PackageID me-1" value="{{$subscription_plan->id}}">
                                    <span class="fw-bolder text-white fs-3">Buy Now</span>
                                </button>
                                <!-- <button type="button" class="w-100 btn btn-lg btn-outline-dark PackageID ms-1" value="{{$subscription_plan->id}}">
                                    Try This
                                </button> -->
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                    </div>
                       <div class="d-flex justify-content-end align-items-center  ">
                       <p class=" bg-white py-3 ps-2">We Accept Only
                        </p>
                        <img class=" logo" src="{{asset ('assets/img/bkash_logo.png')}}" alt="Logo">

                       </div>

                    </div>
                </main>
                </div>
            </div>

            <!-- Admin Notice,Ad & Events start -->
            <div class="col-md-3 page-home">

                <div class="info-box-col p-2 mb-3">
                    <h4 class="d-flex justify-content-end">Admin Notice Board</h4>
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
                <div class="info-box-col info-box-col-ad p-2 mb-3">
                    <h4 class="d-flex justify-content-end">Ad</h4>


                    <div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('assets/img/slider_img/ad_slider_1.jpg')}}" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/img/slider_img/ad_slider_2.png')}}" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/img/slider_img/ad_slider_3.jpg')}}" class="d-block w-100"
                                    alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="info-box-col p-2 mb-3">
                    <h4 class="d-flex justify-content-end">Upcoming Events</h4>
                </div>
            </div>
        </div>
    </div>
    <!-- Admin Notice,Ad & Events end -->

    <!-- Modal For Subscription Add -->
 <div class="modal fade " id="package" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <!-- Modal Header & Close btn -->
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="exampleModalLabel">
                    Subscription Information
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Modal Header & Close btn end -->
            <!-- Modal Body -->
            <div class="modal-body">
                @if($subscription_check->status == 1)
                <!-- <form action="{{route('subscription_add')}}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3 subscription-drug-name">
                             <input type="text" class="p-2" id="status" name="doctor_id" value="{{$doctor_info->id}}" readonly>
                            <input type="text" class="p-2" id="package_name" name="package_name" readonly>
                            <input type="text" class="p-2" id="package_price" name="package_price" readonly>
                            <input type="text" class="p-2" id="package_duration" name="package_duration" readonly>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">Discard</button>
                        <button type="submit" class="btn btn-sm btn btn-sm btn-outline-blue-grey">Update</button>
                    </div>
                </form> -->
                <h4>You have already Subscribe {{$subscription_check->package_name}}.</h4>

                @else
                <p class="text-center mb-3 text-danger">Please select PAYMENT option in Bkash app to pay thr subscription fee.</p>
                <h5 class="text-center mb-2">Our Bkash merchant number</h5>
                <h3 class="text-center fw-bold mb-2 text-primary">019 44 35 66 25</h3>
                <form action="{{route('subscription_add')}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="modal-body p-0 bg-primary">
                        <input type="hidden" id="status" name="doctor_id" value="{{$doctor_info->id}}">
                        <input type="hidden" name="s_time" value="1">
                        <div class="d-flex my-2 justify-content-center align-items-center">
                            <h6 class="me-1 text-white">Package:</h6>
                            <h6 class="text-white" id="package_name_show"></h6>
                        </div>
                        <input type="hidden" id="package_name" name="package_name" class="subscription_info ms-2" readonly>
                        <div class="d-flex mb-2 justify-content-center align-items-center">
                            <h6 class="me-1 text-white">Duration:</h6>
                            <h6 class="text-white" id="package_duration_show"></h6>
                            <h6 class="text-white ms-1" id="package_duration_types_show"></h6>
                        </div>
                        <input type="hidden" id="package_duration" name="package_duration" class="subscription_info ms-2" style="width: 20px;" readonly>
                        <input type="hidden" id="package_duration_types" name="package_duration_types" class="subscription_info" readonly>
                        <div class="d-flex mb-2 justify-content-center align-items-center">
                            <h6 class="me-1 text-white">Price:</h6>
                            <h6 class="text-white" id="package_price_show"></h6><h6 class="ms-1 text-white">TK.</h6>
                        </div>
                        <input type="hidden" id="package_price" name="package_price" class="subscription_info ms-2" readonly>
                        <div class="mb-3 px-2 text-white">
                            <label for="mobile" class="form-label">Your Sender Bkash number</label>
                            <input type="number" class="form-control" id="mobile" name="s_mobile" aria-describedby="emailHelp" placeholder="Enter Bkash Number">
                            <p id="emailHelp" class="form-text text-white">After completing transection write the Bkash number you used to pay</p>
                        </div>

                        <!-- <input class="form-control" list="list" id="redeem_code" placeholder="Please Enter redeem code" name="redeem_code"> -->

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">Discard</button>
                        <button type="submit" class="btn btn-sm btn btn-sm btn-outline-blue-grey">Confirm</button>
                    </div>
                </form>
                @endif
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
    <script>
        $(document).ready(function(){
            $(document).on('click', '.PackageID',function(){
                var packageId = $(this).val();
                // alert(packageId);
                $("#package").modal('show');
                $.ajax({
                    type:"GET",
                    url: "/subscription_info/"+packageId,
                    success: function(response){
                        // console.log(response.subscription_info);
                        $('#package_name').val(response.subscription_info.package_name);
                        $('#package_name_show').text(response.subscription_info.package_name);
                        $('#package_price').val(response.subscription_info.package_price);
                        $('#package_price_show').text(response.subscription_info.package_price);
                        $('#package_duration').val(response.subscription_info.duration);
                        $('#package_duration_show').text(response.subscription_info.duration);
                        $('#package_duration_types').val(response.subscription_info.duration_types);
                        $('#package_duration_types_show').text(response.subscription_info.duration_types);

                    }
                });
            });
        });

    </script>
    <script>
        // var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        // var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        // return new bootstrap.Tooltip(tooltipTriggerEl)
        // })

        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
        var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl)
        })
    </script>
