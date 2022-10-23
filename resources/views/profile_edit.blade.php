@include('include.header')

    <!-- main start -->
    <div class="container-fluid">
 <div class="row justify-content-center align-items-center">
     <div class="col-lg-5 mt-5">
     <form action="{{route('update.doctor',[$doctor_info->id])}}" method="post" enctype="multipart/form-data">
     @method('PUT')
     @csrf
    <!-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
        <h3 class="mb-3 fw-normal text-center">Edit Your Profile</h3>
        <div class="d-flex justify-content-between mx-2">
            <h4 class="mb-3 fw-normal">Your BMDC ID: {{$doctor_info->BMDC}}</h4>
            <h4 class="mb-3 fw-normal">Your ID:{{$doctor_info->id}}</h4>
        </div>

        <div class="form-floating ">
            <input type="text" name="fname"  class="form-control mb-2" id="floatingInput" value="{{$doctor_info->fname}}">
            <label for="floatingInput">First Name</label>
        </div>
        <div class="form-floating ">
            <input type="text" name="lname"  class="form-control mb-2" id="floatingInput" value="{{$doctor_info->lname}}">
            <label for="floatingInput">Last Name</label>
        </div>
        <!-- <div class="form-floating">
            <input type="text" name="BMDC" class="form-control mb-2" id="bmdcID" placeholder="BMDC Registration No.">
            <label for="bmdcID">BMDC Registration No.</label>
        </div> -->
        <!-- <div class="form-floating">
            <input type="text" name="chember_name" class="form-control mb-2" id="chamberName" placeholder="chamberName" value="{{$doctor_info->chember_name}}">
            <label for="chamberName">Chamber Name</label>
        </div>
        <div class="form-floating">
            <input type="text" name="chember_add" class="form-control mb-2" id="chamberAddress" placeholder="chamberAddress" value="{{$doctor_info->chember_add}}">
            <label for="chamberAddress">Chamber Address</label>
        </div> -->
        <div class="form-floating ">
            <input type="number" name="phone" class="form-control mb-2" id="floatingInput" placeholder="Name" value="{{$doctor_info->phone}}">
            <label for="floatingInput">Mobile Number</label>
        </div>
        <div class="form-floating">
            <input type="number" name="nid" class="form-control mb-2" id="nid" placeholder="NID" value="{{$doctor_info->nid}}">
            <label for="nid">NID</label>
        </div>
        <div class="d-flex justify-content-between flex-column my-4">
                <div class="form-floating me-2">
                        <input type="text" name="mCollege" class="form-control mb-2 " id="mCollege" placeholder="Enter  Medical College" value="{{$doctor_info->mCollege}}">
                        <label for="mCollege">Enter  Medical College</label>
                    </div>
                    <div class="form-floating me-2">
                        <input type="text" name="batch" class="form-control mb-2" id="batch" placeholder="Batch" value="{{$doctor_info->batch}}">
                        <label for="batch">Batch</label>
                    </div>

            <div class="form-floating me-2">
                <input type="text" name="d_session" class="form-control mb-2" id="session" placeholder="session" value="{{$doctor_info->session}}">
                <label for="session">Session</label>
            </div>
            <div class="form-floating">
                <input type="text" name="passing_year" class="form-control mb-2" id="passing_year" placeholder="passing_year" value="{{$doctor_info->passing_year}}">
                <label for="passing_year">Passing Year</label>
            </div>
            <div class="form-floating">
                <input type="text" name="speciality" class="form-control mb-2" id="speciality" placeholder="Speciality" value="{{$doctor_info->speciality}}">
                <label for="speciality">Speciality</label>
            </div>
            <div class="mt-2">
                <label for="formFile" name="p_image" class="form-label text-dark">Drop your image</label>
                <input class="form-control" name="p_image" type="file" id="formFile">
                <img src="{{url('public/uploads/doctor/'.$doctor_info->p_image)}}" class="mt-2" style="width: 70px; height: 70px;">

            </div>
        </div>



        <button class="w-100 btn btn-lg btn-outline-dark mb-2" type="submit">Update</button>


  </form>
     </div>
 </div>
    </div>
    <!-- Admin Notice,Ad & Events end -->

    <!-- main end -->

  @include('include.footer')
