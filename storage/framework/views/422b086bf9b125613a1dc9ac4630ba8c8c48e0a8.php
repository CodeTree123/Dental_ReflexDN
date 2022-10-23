<?php echo $__env->make('include.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- main start -->
<div class="container-fluid">
    <div class="row">
        <!-- Profile start -->
        <div class="col-md-2 pe-0">
            <div class="profile  blue-grey-border-thin ">
                <div class="complete">
                    <div class="p-header">
                        <!-- <img src="img/banner.jpg" class="cover"> -->
                        <?php if($patient->image == null): ?>
                            <img src="<?php echo e(asset('assets/img/profile.png')); ?>" class="doctor-profile my-4">
                        <?php else: ?>
                            <img src="<?php echo e(url('public/uploads/patient/'.$patient->image)); ?>" class="doctor-profile my-4">
                        <?php endif; ?>

                        <!-- <i class="fa-solid fa-pen-to-square"></i> -->
                        <h2 class="mb-2"><?php echo e($patient->name); ?></h2>
                    </div>
                    <div class="Patient-personal-info">
                        <div class="row">
                            <div class="col-12 text-start">Patient ID: <?php echo e($patient->id); ?></div>
                            <div class="col-12 text-start">Age: <?php echo e($patient->age); ?></div>
                            <div class="col-12 text-start pe-0">Gender: <?php echo e($patient->gender); ?></div>
                            <div class="col-12 text-start  ">Blood Group: <?php echo e($patient->Blood_group); ?></div>
                            <div class="col-12 text-start">Date of Birth: <?php echo e($patient->date); ?></div>


                            <div class="col-12 text-start">Mobile: <?php echo e($patient->mobile); ?></div>

                            <div class="col-12 text-start">Occupation: <?php echo e($patient->occupation); ?></div>
                            <div class="col-12 text-start">Address: <?php echo e($patient->address); ?></div>
                            <div class="col-12 text-start">Email: <?php echo e($patient->email); ?></div>

                        </div>
                    </div>

                </div>
            </div>
            <div class="profile  blue-grey-border-thin  py-2">
                <!-- <h3>Treatment Plans</h3> -->
                <div class="complete">

                    <!-- <a href="#" class="btns btn-outline-blue-grey my-2">
                        Treatment Plans
                    </a> -->
                    
                    
                    
                    
                    <a href="" class="btns btn-outline-blue-grey my-2" data-bs-toggle="modal"
                       data-bs-target="#Next_Appointment_form">
                        Next Appointment
                    </a>
                    <!-- <a href="<?php echo e(route('prescription',[$doctor_info->id,$patient->id])); ?>" class="btns  btn-outline-blue-grey my-2">
                            Prescription
                        </a>
                        <a href="<?php echo e(route('invoice',[$doctor_info->id,$patient->id])); ?>" class="btns btn-outline-blue-grey my-2">
                            Billing
                        </a> -->
                </div>

                <!-- <a href="">setting</a>
          <a href="" class="lgout-a">Logout</a> -->
            </div>
        </div>
        <!-- Profile end -->
        <!-- Mid Section start -->
        <div class="col-md-7 pe-0">
            <div class="blank-sec">
                <h6 class="p-2 mb-1 d-flex justify-content-between bg-blue-grey custom-border-radius">
                    <span>Tooth <?php echo e($treatment_info->treatment_plans); ?></span>
                    <span>Tooth no: <?php echo e($treatment_info->tooth_no); ?></span>
                </h6>

                <?php if(Session::has('success')): ?>
                    <div class="alert alert-success"><?php echo e(Session::get('success')); ?></div>
                <?php endif; ?>
                <?php if(Session::has('fail')): ?>
                    <div class="alert alert-danger"><?php echo e(Session::get('fail')); ?></div>
                <?php endif; ?>
                <!-- treatmentplans start -->
                <div class="row mx-0">
                    <div class="col-6">
                        <h6 class="d-flex justify-content-center bg-blue-grey custom-border-radius p-2">
                            Tooth Information
                        </h6>
                        <div class="treatment-box text-center   p-2">
                            <div class="row">
                                <div class="col-md-6 ">
                                    <div class="container">
                                        <div class="treatment-info mb-2 ">
                                            <img class="tooth-img"
                                                 src="<?php echo e(asset('assets/img/teeths/all_tooth/'.$tooth_info->img)); ?>"
                                                 alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 ">
                                    
                                    <h4>Tooth No: <?php echo e($treatment_info->tooth_no); ?></h4>
                                    <h6><?php echo e($tooth_info->Tooth_name); ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="col-12">
                                <h6 class="d-flex justify-content-center bg-blue-grey custom-border-radius p-2">
                                    History
                                </h6>
                                <div class="treatment-box p-2">
                                    <p class="fw-bold m-0 ms-1">CC : <span
                                            class="fw-normal"><?php echo e($treatment_info->chife_complaints); ?></span></p>
                                    <p class="fw-bold m-0 ms-1">CF : <span
                                            class="fw-normal"><?php echo e($treatment_info->clinical_findings); ?></span></p>
                                    <p class="fw-bold m-0 ms-1 mb-2">Investigation : <span
                                            class="fw-normal"><?php echo e($treatment_info->investigation); ?></span></p>
                                </div>
                            </div>
                            <div class="col-12 mt-1">
                                <h6 class="p-2 d-flex justify-content-between bg-blue-grey custom-border-radius">
                                    <span>Status</span>
                                    <?php if($treatment_info->status == 2): ?>
                                        <span>Done</span>
                                    <?php elseif($treatment_info->status == 1): ?>
                                        <span>Progress</span>
                                    <?php else: ?>
                                        <span>Not Done</span>
                                    <?php endif; ?>
                                </h6>
                                <form
                                    action="<?php echo e(route('treatment_steps',[$doctor_info->id,$patient->id,$treatment_info->id])); ?>"
                                    method="post">
                                    <?php echo csrf_field(); ?>
                                    <div class="treatment-box p-2">
                                        <label for="t_status" class="form-label">Enter Treatment Status</label>
                                        <select class="form-select" aria-label="Default select example" id="t_status"
                                                name="t_status">
                                            <option <?php echo e(($treatment_info->status) == '0' ? 'selected' : ''); ?> value="0">Not
                                                Done
                                            </option>
                                            <option <?php echo e(($treatment_info->status) == '1' ? 'selected' : ''); ?> value="1">
                                                Progress
                                            </option>
                                            <option <?php echo e(($treatment_info->status) == '2' ? 'selected' : ''); ?> value="2">
                                                Done
                                            </option>
                                        </select>
                                        <!-- <div id="emailHelp" class="form-text text-danger">*Before Submit Please Select Treatment Status</div> -->
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-1">
                        <h6 class="d-flex justify-content-center bg-blue-grey custom-border-radius p-2">OT Notes</h6>
                        <div class="treatment-box p-2">
                            <div class="p-2">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="12" name="steps"
                                          placeholder="Enter OT Notes"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-1">
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn bg-success px-3 text-white bg-opacity-75 mt-2">Submit
                            </button>
                        </div>
                    </div>

                    </form>
                </div>
                <!-- treatmentplans end -->
            </div>
        </div>
        <!-- Mid Section end -->

        <!-- Prescription,Ad & Events start -->
        <div class="col-md-3 page-home">

            <!-- We have info-box-col-1 for not fixed height -->
            <div class="info-box-col p-2 mb-3">
                <h4 class="d-flex justify-content-center bg-blue-grey custom-border-radius">Medical History</h4>
                <div class="Patient-info my-2">
                    <div class="row">
                        <div class="col-12 text-start">BP :<?php echo e($patient->bp_high); ?> / <?php echo e($patient->bp_low); ?></div>
                        <div class="col-12 text-start">Heart Disease: <?php echo e($patient->Heart_Disease); ?></div>
                        <div class="col-12 text-start">Diabetic: <?php echo e($patient->Diabetic); ?></div>
                        <div class="col-12 text-start">Helpatics: <?php echo e($patient->Helpatics); ?></div>
                        <div class="col-12 text-start">Bleeding disorder: <?php echo e($patient->Bleeding_disorder); ?></div>
                        <div class="col-12 text-start">Allergy: <?php echo e($patient->Allergy); ?></div>
                        <div class="col-12 text-start">Pregnant/Lactating: <?php echo e($patient->Pregnant); ?></div>
                        <div class="col-12 text-start">Other: <?php echo e($patient->other); ?></div>
                        <!-- <button type="button" class="btn btn-secondary btn-sm">Small button</button> -->
                        <div class="col-12 text-start d-flex justify-content-center p-edit mt-2">

                        </div>
                    </div>
                </div>
            </div>
            <div class="info-box-col p-2 mb-3">
                <h4 class="d-flex justify-content-center bg-blue-grey custom-border-radius">Previous OT Notes</h4>
                <?php if($t_steps->isNotEmpty()): ?>
                    <?php $__currentLoopData = $t_steps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseOne<?php echo e($key +1); ?>" aria-expanded="false"
                                            aria-controls="flush-collapseOne">
                                        <p><?php echo e($key + 1); ?>. <?php echo e($t->date); ?></p>
                                    </button>
                                </h2>
                                <div id="flush-collapseOne<?php echo e($key +1); ?>" class="accordion-collapse collapse"
                                     aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <ul class="mb-2">
                                            <li><span>Steps:</span> <?php echo e($t->steps); ?></li>
                                        </ul>
                                        <button class="btn crud-btns t_steps_editbtn" href="" value="<?php echo e($t->id); ?>">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </button>
                                        <button class="btn crud-btns delete-ot_note" href="#" value="<?php echo e($t->id); ?>">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseOne" aria-expanded="false"
                                        aria-controls="flush-collapseOne">
                                    Previous Treatment OT Note #1
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                 aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <ol>
                                        <li>There was no previous steps information.</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <div class="info-box-col p-2 mb-3">
                <h4 class="d-flex justify-content-center bg-blue-grey custom-border-radius">Report</h4>
                <div class="d-flex flex-row justify-content-around align-items-center py-1">
                    <a class="crud-btns" href="" data-bs-toggle="modal" data-bs-target="#Report_Add">
                        <i class="bi bi-plus-circle"></i>
                    </a>
                    <h6>Remaining: <?php echo e($total_report); ?></h6>
                </div>
                <hr class="m-0">
                <div class="accordion accordion-flush" id="accordionFlushExample">

                    <div class="accordion-item mb-0">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed d-flex py-2" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                <p class="me-5">Reports</p>
                            </button>
                        </h2>

                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                             aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <?php if($reports->isNotEmpty()): ?>
                                    <table class="table table-bordered text-center">
                                        <thead>
                                        <tr>
                                            <th class="">#</th>
                                            <th class="">Images</th>
                                            <th class="">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $__currentLoopData = $reports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$report): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($key + 1); ?></td>
                                                <td>
                                                    <img src="<?php echo e(url('public/uploads/report/'.$report->image)); ?>"
                                                         onclick="FullView(this.src)">
                                                </td>
                                                <td>
                                                    <button class="btn crud-btns delete-report" href="#"
                                                            value="<?php echo e($report->id); ?>">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                <?php else: ?>
                                    <h6>There was no report of this patient.</h6>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="info-box-col p-2 mb-3">
                <h4 class="d-flex justify-content-center bg-blue-grey custom-border-radius">Post to Furums</h4>
                <button type="button" class="btn btn-outline-info text-dark mt-2 mb-2 btn-lg  ">Post</button>
                <!-- <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading1">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapse1" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                Notice #1
                            </button>
                        </h2>
                        <div id="flush-collapse1" class="accordion-collapse collapse"
                            aria-labelledby="flush-heading1" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                demonstrate the <code>.accordion-flush</code> class. This is the first item's
                                accordion body.</div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>

<style>
    .image_view {
        width: 100px;
        height: 100px;
        cursor: pointer;
    }

    #FullImageView {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.9);
        text-align: center;
        z-index: 1200;
    }

    #FullImage {
        padding: 24px;
        max-width: 98%;
        max-height: 98%;
    }

    #CloseBtn {
        position: absolute;
        top: 12px;
        right: 12px;
        font-size: 2rem;
        color: white;
        cursor: pointer;
    }
</style>

<div id="FullImageView">
    <img id="FullImage"/>
    <span id="CloseBtn" onclick="FullViewClose()">&times;</span>
</div>
<!-- Admin Notice,Ad & Events end -->

<div class="modal fade " id="Next_Appointment_form" tabindex="-1" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <!-- Modal Header & Close btn -->
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="exampleModalLabel">
                    Add Next Appointment
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Modal Header & Close btn end -->
            <!-- Modal Body -->
            <div class="modal-body">
                <form action="<?php echo e(route('next_appointment')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="modal-body">
                        <input type="hidden" id="appointment_id" value="<?php echo e($appointment_id); ?>" name="appointment_id">
                        <input type="hidden" id="d_id" value="<?php echo e($doctor_info->id); ?>" name="d_id">
                        <input type="hidden" id="p_id" value="<?php echo e($patient->id); ?>" name="p_id">

                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" value="<?php echo e($patient->name); ?>" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="date" class="form-label">Date</label>
                            <input type="date" class="form-control" id="date" name="date">
                        </div>
                        <div class="mb-3">
                            <label for="time" class="form-label">Time</label>
                            <input type="time" class="form-control" id="time" name="time">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">Discard</button>
                        <button type="submit" class="btn btn-sm btn-outline-blue-grey">Appointment</button>
                    </div>
                </form>
            </div>
            <!-- Modal Body end -->
        </div>
    </div>
</div>


<!-- Modal For Delete Medicine -->
<div class="modal fade " id="del-Prescription" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <!-- Modal Header & Close btn -->
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="exampleModalLabel">
                    Delete Prescription
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Modal Header & Close btn end -->
            <!-- Modal Body -->
            <div class="modal-body">
                <form action="<?php echo e(route('prescription_delete')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('delete'); ?>
                    <div class="mb-3 text-center">
                        <h5 class="text-danger">Are You Sure to Delete This information?</h5>
                    </div>
                    <input type="hidden" id="del-Prescription-id" name="deletingId">
                    <!-- Modal Footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark btn-sm" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-outline-blue-grey  btn-sm">Yes,Delete</button>
                        <!-- Modal Footer end -->
                    </div>
                </form>
            </div>
            <!-- Modal Body end -->
        </div>
    </div>
</div>
<!-- Modal end -->

<!-- Modal For Report_Add Add -->
<div class="modal fade " id="Report_Add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <!-- Modal Header & Close btn -->
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="exampleModalLabel">
                    Add Report
                </h5>
                <button type="button" class="btn-close" data-bs-toggle="modal" data-bs-target="#exampleModal_1"
                        aria-label="Close"></button>
            </div>
            <!-- Modal Header & Close btn end -->
            <!-- Modal Body -->
            <div class="modal-body">
                <form action="<?php echo e(route('report',[$doctor_info->id,$patient->id,$treatment_info->id])); ?>" method="post"
                      enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <div class="mb-3 drug-name">
                            <label for="formFile" name="r_image" class="form-label text-dark">Drop Image</label>
                            <input class="form-control" name="r_image" type="file" id="formFile">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                data-bs-target="#exampleModal_1">Discard
                        </button>
                        <button type="submit" class="btn btn-sm btn btn-sm btn-outline-blue-grey">Confirm</button>
                    </div>
                </form>
            </div>
            <!-- Modal Body end -->
        </div>
    </div>
</div>
<!-- Modal end -->

<!-- Modal For Delete Report -->
<div class="modal fade " id="del-Report" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <!-- Modal Header & Close btn -->
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="exampleModalLabel">
                    Delete Report
                </h5>
                <button type="button" class="btn-close" data-bs-toggle="modal" data-bs-target="#Investigation"
                        aria-label="Close"></button>
            </div>
            <!-- Modal Header & Close btn end -->
            <!-- Modal Body -->
            <div class="modal-body">
                <form action="<?php echo e(route('report_delete')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('delete'); ?>
                    <div class="mb-3 text-center">
                        <h5 class="text-danger">Are You Sure to Delete This Report information?</h5>
                    </div>
                    <input type="hidden" id="del-Report-id" name="deletingId">
                    <!-- Modal Footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark btn-sm" data-bs-toggle="modal"
                                data-bs-target="#Investigation">Close
                        </button>
                        <button type="submit" class="btn btn-outline-blue-grey  btn-sm">Yes,Delete</button>
                        <!-- Modal Footer end -->
                    </div>
                </form>
            </div>
            <!-- Modal Body end -->
        </div>
    </div>
</div>
<!-- Modal end -->

<!-- Modal For OT Notes update -->
<div class="modal fade " id="Ot_Update" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <!-- Modal Header & Close btn -->
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="exampleModalLabel">
                    Edit OT Notes
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Modal Header & Close btn end -->
            <!-- Modal Body -->
            <div class="modal-body">
                <form action="<?php echo e(route('update_chember')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>

                    <input type="hidden" id="ot_notes_id" name="ot_notes_id"/>
                    <div class="modal-body">
                        <div class="p-2">
                            <textarea class="form-control" id="ot_note_form" rows="12" name="steps"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">Discard</button>
                        <button type="submit" class="btn btn-sm btn-outline-blue-grey">Update</button>
                    </div>
                </form>
            </div>
            <!-- Modal Body end -->
        </div>
    </div>
</div>
<!-- Modal end -->

<!-- Modal For Delete Report -->
<div class="modal fade " id="del-ot" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <!-- Modal Header & Close btn -->
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="exampleModalLabel">
                    Delete OT Note
                </h5>
                <button type="button" class="btn-close" data-bs-toggle="modal" data-bs-target="#Investigation"
                        aria-label="Close"></button>
            </div>
            <!-- Modal Header & Close btn end -->
            <!-- Modal Body -->
            <div class="modal-body">
                <form action="<?php echo e(route('delete_ot')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('delete'); ?>
                    <div class="mb-3 text-center">
                        <h5 class="text-danger">Are You Sure to Delete This OT information?</h5>
                    </div>
                    <input type="hidden" id="del-OT-id" name="deletingId">
                    <!-- Modal Footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark btn-sm" data-bs-toggle="modal"
                                data-bs-target="#Investigation">Close
                        </button>
                        <button type="submit" class="btn btn-outline-blue-grey  btn-sm">Yes,Delete</button>
                        <!-- Modal Footer end -->
                    </div>
                </form>
            </div>
            <!-- Modal Body end -->
        </div>
    </div>
</div>
<!-- Modal end -->

<?php echo $__env->make('include.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<script>
    $(document).ready(function () {
        $(document).on('click', '.delete-report', function () {
            var deleteReportId = $(this).val();
            // $("#Treatment_Plans").modal('hide');
            // alert(deleteTPId);
            $("#del-Report").modal('show');
            $('#del-Report-id').val(deleteReportId);
        });

        $(document).on('click', '.t_steps_editbtn', function () {
            var ot_id = $(this).val();
            // $("#Treatment_Cost").modal('hide');
            // alert(ot_id);
            $("#Ot_Update").modal('show');
            $.ajax({
                type: "GET",
                url: "/ot_notes/" + ot_id,
                success: function (response) {
                    // console.log(response.ts);
                    var t = response.ts.stpes;
                    $('#ot_notes_id').val(ot_id);
                    $("textarea#ot_note_form").val(t);
                    // $('#chember-add').val(response.ci.chember_address);
                }
            });
        });
        $(document).on('click', '.delete-ot_note', function () {
            var deleteOtId = $(this).val();
            // $("#Treatment_Plans").modal('hide');
            // alert(deleteOtId);
            $("#del-ot").modal('show');
            $('#del-OT-id').val(deleteOtId);
        });
    });
</script>

<script>
    function FullView(ImgLink) {
        document.getElementById("FullImage").src = ImgLink;
        document.getElementById("FullImageView").style.display = "block";
    }

    function FullViewClose() {
        document.getElementById("FullImageView").style.display = "none";
    }
</script>


<?php /**PATH C:\xampp\htdocs\reflexdn\resources\views/treatmentplans.blade.php ENDPATH**/ ?>