<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/x-icon" href="<?php echo e(asset ('assets/img/reflex_logo.png')); ?>">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <!-- Bootstrap 5.1.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


 <!-- <link rel="stylesheet" href="<?php echo e(asset ('assets/css/select2.css')); ?>"> -->

 <!-- Style CSS -->
 <link rel="stylesheet" href="<?php echo e(asset ('assets/css/style.css')); ?>">
</head>
<title>ReflexDN</title>
<body>

    <!-- Header Start -->
    <div class="header  mb-3 shadow">
        <div class="container-fluid pt-1">
            <div class="row align-items-center">
                <!--logo & title start-->

                <div class="col-md-5">
                    <a class="d-flex align-items-center logo" href="<?php echo e(route('doctor')); ?>">
                        <!-- <img class="logo" src="img/Logo.png" alt="Logo"> -->
                        <div class="logo_container">
                          <img class="img-fluid" src="<?php echo e(asset ('assets/img/reflex_logo.png')); ?>" alt="Logo">
                        </div>

                        <!-- <h2 class="ms-3 mb-0 logo-title">
                            Dental Office Management System
                        </h2> -->
                    </a>
                </div>
                <!--logo & title end-->

                <!--nav start-->
                <?php if(Session::has('loginId')): ?>
                <div class="col-md-4">
                    <nav class="navbar navbar-expand-lg  p-0 ">
                        <div class="container-fluid">
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav fs-5 pe-auto">
                                    <li class="nav-item">
                                        <a class="nav-link active text-bg-blue-grey" aria-current="page" href="<?php echo e(route('doctor')); ?>">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <!-- <a class="nav-link text-bg-blue-grey " href="#">Inventory</a> -->
                                        <a class="nav-link text-bg-blue-grey" href="#" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Coming Soon" data-bs-custom-class="beautifier text-danger">Inventory</a>

                                    </li>
                                    <li class="nav-item">
                                        <!-- <a class="nav-link text-bg-blue-grey" href="#">Shop</a> -->
                                        <a class="nav-link text-bg-blue-grey" href="#" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Coming Soon" data-bs-custom-class="beautifier text-danger">Shop</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-bg-blue-grey" href="#">Forum</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
                <!--nav end-->

                <!--info Bar start-->

                <?php endif; ?>
                <!--info Bar end-->
            </div>
        </div>
    </div>
    <!-- Header end -->
    <!-- main start -->
    <div class="container-fluid">
        <div class="row">
            <!-- Profile start -->
            <div class="col-md-2 pe-0">
                <div class="profile blue-grey-border-thin   ">
                <h6 class="   p-2 mb-1 d-flex justify-content-center bg-blue-grey custom-border-radius">Patient's Profile</h6>
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
                                <div class="col-12 text-start ">Gender: <?php echo e($patient->gender); ?></div>
                                <div class="col-12 text-start ">Blood Group: <?php echo e($patient->Blood_group); ?></div>
                                <div class="col-12 text-start">Date of Birth: <?php echo e($patient->date); ?></div>


                                <div class="col-12 text-start">Mobile: <?php echo e($patient->mobile); ?></div>

                                <div class="col-12 text-start">Occupation: <?php echo e($patient->occupation); ?></div>
                                <div class="col-12 text-start">Address: <?php echo e($patient->address); ?></div>
                                <div class="col-12 text-start">Email: <?php echo e($patient->email); ?></div>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="profile blue-grey-border-thin py-2">
                    <!-- <h3>Treatment Plans</h3> -->
                    <div class="complete">

                        <!-- <a href="#" class="btns btn-outline-blue-grey my-2">Treatment Plans</a> -->

                        <a href="<?php echo e(route('doctor')); ?>" class="btns btn-outline-blue-grey my-2">Home</a>
                        <a href="<?php echo e(route('prescription',[$doctor_info->id,$patient->id])); ?>" class="btns btn-outline-blue-grey my-2">Write a Prescription</a>
                        <a href="<?php echo e(route('invoice',[$doctor_info->id,$patient->id])); ?>" class="btns btn-outline-blue-grey my-2">Billing</a>
                    </div>

                    <!-- <a href="">setting</a>
              <a href="" class="lgout-a">Logout</a> -->
                </div>
            </div>
            <!-- Profile end -->
            <!-- Mid Section start -->
            <div class="col-md-7 pe-0">
                <div class="blank-sec">
                <h6 class="   p-2 mb-1 d-flex justify-content-center bg-blue-grey custom-border-radius">Tooth Selection</h6>
                    <!-- teeth chart start -->
                    <div class="chart-teeth">
                        <div class="row mx-0">
                            <div class="col-md-6 p-0">
                                <div class="top-area1" id="top-area-top">
                                    <input type="radio" name="tooth-selector" id="radio1" checked>
                                    <label for="radio1">Permanent Teeth</label>
                                    </input>
                                </div>
                            </div>
                            <div class="col-md-6 p-0">
                                <div class="top-area2" id="sec-col-top">
                                    <input type="radio" name="tooth-selector" id="radio2">
                                    <label for="radio2">Deciduous Teeth</label>
                                    </input>
                                </div>
                            </div>
                            <div class="col-md-12 px-0">
                                <div class="row mx-0" id="permanent">
                                    <!-- Upper Right -->
                                    <div class="col-md-6 p-0 T-border-right">
                                        <div class="upper-right T-border-bottom">
                                            <h4>Upper Right</h4>
                                            <div class="upper-right-teeths">
                                                <ul>
                                                    <li>
                                                        <!-- <p>1</p> -->
                                                        <img src="<?php echo e(asset('assets/img/teeths/Upper-right/1TMR.png')); ?>" alt="" id="18" class="test">
                                                        <p class="mb-0">18</p>
                                                        <input type="checkbox" id="t" name="t" value="18" style="display:none" class="select t">
                                                    </li>
                                                    <li>
                                                        <!-- <p>2</p> -->
                                                        <img src="<?php echo e(asset('assets/img/teeths/Upper-right/2SMR.png')); ?>" alt="" id="17" class="test">
                                                        <p class="mb-0">17</p>
                                                        <input type="checkbox" id="t" name="t" value="17" style="display:none" class="select t">
                                                    </li>
                                                    <li>
                                                        <!-- <p>3</p> -->
                                                        <img src="<?php echo e(asset('assets/img/teeths/Upper-right/3FMR.png')); ?>" alt="" id="16" class="test">
                                                        <p class="mb-0">16</p>
                                                        <input type="checkbox" id="t" name="t" value="16" style="display:none" class="select t">
                                                    </li>
                                                    <li>
                                                        <!-- <p>4</p> -->
                                                        <img src="<?php echo e(asset('assets/img/teeths/Upper-right/4SPMR.png')); ?>" alt="" id="15" class="test">
                                                        <p class="mb-0">15</p>
                                                        <input type="checkbox" id="t" name="t" value="15" style="display:none" class="select t">
                                                    </li>
                                                    <li>
                                                        <!-- <p>5</p> -->
                                                        <img src="<?php echo e(asset('assets/img/teeths/Upper-right/5FPMR.png')); ?>" alt="" id="14" class="test">
                                                        <p  class="mb-0">14</p>
                                                        <input type="checkbox" id="t" name="t" value="14" style="display:none" class="select t">
                                                    </li>
                                                    <li>
                                                        <!-- <p>6</p> -->
                                                        <img src="<?php echo e(asset('assets/img/teeths/Upper-right/6CR.png')); ?>" alt="" id="13" class="test">
                                                        <p class="mb-0">13</p>
                                                        <input type="checkbox" id="t" name="t" value="13" style="display:none" class="select t">
                                                    </li>
                                                    <li>
                                                        <!-- <p>7</p> -->
                                                        <img src="<?php echo e(asset('assets/img/teeths/Upper-right/7LIR.png')); ?>" alt="" id="12" class="test">
                                                        <p class="mb-0">12</p>
                                                        <input type="checkbox" id="t" name="t" value="12" style="display:none" class="select t">
                                                    </li>
                                                    <li>
                                                        <!-- <p>8</p> -->
                                                        <img src="<?php echo e(asset('assets/img/teeths/Upper-right/8CIR.png')); ?>" alt="" id="11" class="test">
                                                        <p class="mb-0">11</p>
                                                        <input type="checkbox" id="t" name="t" value="11" style="display:none" class="select t">
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end -->
                                    <!-- Upper Left -->
                                    <div class="col-md-6 p-0 T-border-left">
                                        <div class="upper-right T-border-bottom">
                                            <h4>Upper Left</h4>
                                            <div class="upper-right-teeths">
                                                <ul>
                                                    <li>
                                                        <!-- <p>9</p> -->
                                                        <img src="<?php echo e(asset('assets/img/teeths/Upper-left/9CIL.png')); ?>" alt="" id="21" class="test">
                                                        <p class="mb-0">21</p>
                                                        <input type="checkbox" id="t" name="t" value="21" style="display:none" class="select t">
                                                    </li>
                                                    <li>
                                                        <!-- <p>10</p> -->
                                                        <img src="<?php echo e(asset('assets/img/teeths/Upper-left/10LIL.png')); ?>" alt="" id="22" class="test">
                                                        <p class="mb-0">22</p>
                                                        <input type="checkbox" id="t" name="t" value="22" style="display:none" class="select t">
                                                    </li>
                                                    <li>
                                                        <!-- <p>11</p> -->
                                                        <img src="<?php echo e(asset('assets/img/teeths/Upper-left/11CL.png')); ?>" alt="" id="23" class="test">
                                                        <p class="mb-0">23</p>
                                                        <input type="checkbox" id="t" name="t" value="23" style="display:none" class="select t">
                                                    </li>
                                                    <li>
                                                        <!-- <p>12</p> -->
                                                        <img src="<?php echo e(asset('assets/img/teeths/Upper-left/12FPML.png')); ?>" alt="" id="24" class="test">
                                                        <p class="mb-0">24</p>
                                                        <input type="checkbox" id="t" name="t" value="24" style="display:none" class="select t">
                                                    </li>
                                                    <li>
                                                        <!-- <p>13</p> -->
                                                        <img src="<?php echo e(asset('assets/img/teeths/Upper-left/13SPML.png')); ?>" alt="" id="25" class="test">
                                                        <p class="mb-0">25</p>
                                                        <input type="checkbox" id="t" name="t" value="25" style="display:none" class="select t">
                                                    </li>
                                                    <li>
                                                        <!-- <p>14</p> -->
                                                        <img src="<?php echo e(asset('assets/img/teeths/Upper-left/14FML.png')); ?>" alt="" id="26" class="test">
                                                        <p class="mb-0">26</p>
                                                        <input type="checkbox" id="t" name="t" value="26" style="display:none" class="select t">
                                                    </li>
                                                    <li>
                                                        <!-- <p>15</p> -->
                                                        <img src="<?php echo e(asset('assets/img/teeths/Upper-left/15SML.png')); ?>" alt="" id="27" class="test">
                                                        <p class="mb-0">27</p>
                                                        <input type="checkbox" id="t" name="t" value="27" style="display:none" class="select t">
                                                    </li>
                                                    <li>
                                                        <!-- <p>16</p> -->
                                                        <img src="<?php echo e(asset('assets/img/teeths/Upper-left/16TML.png')); ?>" alt="" id="28" class="test">
                                                        <p class="mb-0">28</p>
                                                        <input type="checkbox" id="t" name="t" value="28" style="display:none" class="select t">
                                                    </li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- end -->
                                    <!-- Lower Right -->
                                    <div class="col-md-6 p-0 T-border-right">
                                        <div class="upper-right  mb-3">
                                            <h4>Lower Right</h4>
                                            <div class="upper-right-teeths">
                                                <ul>
                                                    <li>
                                                        <input type="checkbox" id="t" name="t" value="48" style="display:none" class="select t">
                                                        <p  class="mb-0">48</p>
                                                        <img src="<?php echo e(asset('assets/img/teeths/Lower-Right/48TMR.png')); ?>" alt="" id="48" class="test">
                                                        <!-- <p>32</p> -->
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" id="t" name="t" value="47" style="display:none" class="select t">
                                                        <p  class="mb-0">47</p>
                                                        <img src="<?php echo e(asset('assets/img/teeths/Lower-Right/47SMR.png')); ?>" alt="" id="47" class="test">
                                                        <!-- <p>31</p> -->
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" id="t" name="t" value="46" style="display:none" class="select t">
                                                        <p  class="mb-0">46</p>
                                                        <img src="<?php echo e(asset('assets/img/teeths/Lower-Right/46FMR.png')); ?>" alt="" id="46" class="test">
                                                        <!-- <p>30</p> -->
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" id="t" name="t" value="46" style="display:none" class="select t">
                                                        <p  class="mb-0">45</p>
                                                        <img src="<?php echo e(asset('assets/img/teeths/Lower-Right/45SPMR.png')); ?>" alt="" id="45" class="test">
                                                        <!-- <p>29</p> -->
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" id="t" name="t" value="44" style="display:none" class="select t">
                                                        <p  class="mb-0">44</p>
                                                        <img src="<?php echo e(asset('assets/img/teeths/Lower-Right/44FPMR.png')); ?>" alt="" id="44" class="test">
                                                        <!-- <p>28</p> -->
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" id="t" name="t" value="43" style="display:none" class="select t">
                                                        <p  class="mb-0">43</p>
                                                        <img src="<?php echo e(asset('assets/img/teeths/Lower-Right/43CR.png')); ?>" alt="" id="43" class="test">
                                                        <!-- <p>27</p> -->
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" id="t" name="t" value="42" style="display:none" class="select t">
                                                        <p  class="mb-0">42</p>
                                                        <img src="<?php echo e(asset('assets/img/teeths/Lower-Right/42LIR.png')); ?>" alt="" id="42" class="test">
                                                        <!-- <p>26</p> -->
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" id="t" name="t" value="41" style="display:none" class="select t">
                                                        <p  class="mb-0">41</p>
                                                        <img src="<?php echo e(asset('assets/img/teeths/Lower-Right/41CIR.png')); ?>" alt="" id="41" class="test">
                                                        <!-- <p>25</p> -->
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end -->
                                    <!-- Lower Left -->
                                    <div class="col-md-6 p-0 T-border-left">
                                        <div class="upper-right">
                                            <h4>Lower Left</h4>
                                            <div class="upper-right-teeths">
                                                <ul>
                                                    <li>
                                                        <input type="checkbox" id="t" name="t" value="31" style="display:none" class="select t">
                                                        <p class="mb-0">31</p>
                                                        <img src="<?php echo e(asset('assets/img/teeths/Lower-Left/31CIL.png')); ?>" alt="" id="31" class="test">
                                                        <!-- <p>24</p> -->
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" id="t" name="t" value="32" style="display:none" class="select t">
                                                        <p class="mb-0">32</p>
                                                        <img src="<?php echo e(asset('assets/img/teeths/Lower-Left/32LIL.png')); ?>" alt="" id="32" class="test">
                                                        <!-- <p>23</p> -->
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" id="t" name="t" value="33" style="display:none" class="select t">
                                                        <p class="mb-0">33</p>
                                                        <img src="<?php echo e(asset('assets/img/teeths/Lower-Left/33CL.png')); ?>" alt="" id="33" class="test">
                                                        <!-- <p>22</p> -->
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" id="t" name="t" value="34" style="display:none" class="select t">
                                                        <p class="mb-0">34</p>
                                                        <img src="<?php echo e(asset('assets/img/teeths/Lower-Left/34FPML.png')); ?>" alt="" id="34" class="test">
                                                        <!-- <p>21</p> -->
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" id="t" name="t" value="35" style="display:none" class="select t">
                                                        <p class="mb-0">35</p>
                                                        <img src="<?php echo e(asset('assets/img/teeths/Lower-Left/35SPML.png')); ?>" alt="" id="35" class="test">
                                                        <!-- <p>20</p> -->
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" id="t" name="t" value="36" style="display:none" class="select t">
                                                        <p class="mb-0">36</p>
                                                        <img src="<?php echo e(asset('assets/img/teeths/Lower-Left/36FML.png')); ?>" alt="" id="36" class="test">
                                                        <!-- <p>19</p> -->
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" id="t" name="t" value="37" style="display:none" class="select t">
                                                        <p class="mb-0">37</p>
                                                        <img src="<?php echo e(asset('assets/img/teeths/Lower-Left/37SML.png')); ?>" alt="" id="37" class="test">
                                                        <!-- <p>18</p> -->
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" id="t" name="t" value="38" style="display:none" class="select t">
                                                        <p class="mb-0">38</p>
                                                        <img src="<?php echo e(asset('assets/img/teeths/Lower-Left/38TML.png')); ?>" alt="" id="38" class="test">
                                                        <!-- <p>17</p> -->
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end -->
                                </div>
                                <div class="row mx-0" id="deciduous">
                                    <!-- Upper Right -->
                                    <div class="col-md-6 p-0 T-border-right">
                                        <div class="upper-right T-border-bottom">
                                            <h4>Upper Right</h4>
                                            <div class="upper-right-teeths">
                                                <ul>
                                                    <li>
                                                        <img src="<?php echo e(asset('assets/img/teeths/Upper-right/4SPMR.png')); ?>" alt="" id="A" class="test">
                                                        <p>A</p>
                                                        <!-- <p>15</p> -->
                                                    </li>
                                                    <li>
                                                        <img src="<?php echo e(asset('assets/img/teeths/Upper-right/5FPMR.png')); ?>" alt="" id="B" class="test">
                                                        <p>B</p>
                                                        <!-- <p>14</p> -->
                                                    </li>
                                                    <li>
                                                        <img src="<?php echo e(asset('assets/img/teeths/Upper-right/6CR.png')); ?>" alt="" id="C" class="test">
                                                        <p>C</p>
                                                        <!-- <p>13</p> -->
                                                    </li>
                                                    <li>
                                                        <img src="<?php echo e(asset('assets/img/teeths/Upper-right/7LIR.png')); ?>" alt="" id="D" class="test">
                                                        <p>D</p>
                                                        <!-- <p>12</p> -->
                                                    </li>
                                                    <li>
                                                        <img src="<?php echo e(asset('assets/img/teeths/Upper-right/8CIR.png')); ?>" alt="" id="E" class="test">
                                                        <p>E</p>
                                                        <!-- <p>11</p> -->
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end -->
                                    <!-- Upper Left -->
                                    <div class="col-md-6 p-0 T-border-left">
                                        <div class="upper-right T-border-bottom">
                                            <h4>Upper Left</h4>
                                            <div class="upper-right-teeths">
                                                <ul>
                                                    <li>
                                                        <img src="<?php echo e(asset('assets/img/teeths/Upper-left/9CIL.png')); ?>" alt="" id="F" class="test">
                                                        <p>F</p>
                                                        <!-- <p>21</p> -->
                                                    </li>
                                                    <li>
                                                        <img src="<?php echo e(asset('assets/img/teeths/Upper-left/10LIL.png')); ?>" alt="" id="G" class="test">
                                                        <p>G</p>
                                                        <!-- <p>22</p> -->
                                                    </li>
                                                    <li>
                                                        <img src="<?php echo e(asset('assets/img/teeths/Upper-left/11CL.png')); ?>" alt="" id="H" class="test">
                                                        <p>H</p>
                                                        <!-- <p>23</p> -->
                                                    </li>
                                                    <li>
                                                        <img src="<?php echo e(asset('assets/img/teeths/Upper-left/12FPML.png')); ?>" alt="" id="I" class="test">
                                                        <p>I</p>
                                                        <!-- <p>24</p> -->
                                                    </li>
                                                    <li>
                                                        <img src="<?php echo e(asset('assets/img/teeths/Upper-left/13SPML.png')); ?>" alt="" id="J" class="test">
                                                        <p>J</p>
                                                        <!-- <p>25</p> -->
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end -->
                                    <!-- Lower Right -->
                                    <div class="col-md-6 p-0 T-border-right">
                                        <div class="upper-right">
                                            <h4>Lower Right</h4>
                                            <div class="upper-right-teeths mb-3">
                                                <ul>
                                                    <li>
                                                        <!-- <p>45</p> -->
                                                        <p>T</p>
                                                        <img src="<?php echo e(asset('assets/img/teeths/Lower-Right/45SPMR.png')); ?>" alt="" id="T" class="test">
                                                    </li>
                                                    <li>
                                                        <!-- <p>44</p> -->
                                                        <p>S</p>
                                                        <img src="<?php echo e(asset('assets/img/teeths/Lower-Right/44FPMR.png')); ?>" alt="" id="S" class="test">
                                                    </li>
                                                    <li>
                                                        <!-- <p>43</p> -->
                                                        <p>R</p>
                                                        <img src="<?php echo e(asset('assets/img/teeths/Lower-Right/43CR.png')); ?>" alt="" id="R" class="test">
                                                    </li>
                                                    <li>
                                                        <!-- <p>42</p> -->
                                                        <p>Q</p>
                                                        <img src="<?php echo e(asset('assets/img/teeths/Lower-Right/42LIR.png')); ?>" alt="" id="Q" class="test">
                                                    </li>
                                                    <li>
                                                        <!-- <p>41</p> -->
                                                        <p>P</p>
                                                        <img src="<?php echo e(asset('assets/img/teeths/Lower-Right/41CIR.png')); ?>" alt="" id="P" class="test">
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end -->
                                    <!-- Lower Left -->
                                    <div class="col-md-6 p-0 T-border-left">
                                        <div class="upper-right">
                                            <h4>Lower Left</h4>
                                            <div class="upper-right-teeths">
                                                <ul>
                                                    <li>
                                                        <!-- <p>31</p> -->
                                                        <p>O</p>
                                                        <img src="<?php echo e(asset('assets/img/teeths/Lower-Left/31CIL.png')); ?>" alt="" id="O" class="test">
                                                    </li>
                                                    <li>
                                                        <!-- <p>32</p> -->
                                                        <p>N</p>
                                                        <img src="<?php echo e(asset('assets/img/teeths/Lower-Left/32LIL.png')); ?>" alt="" id="N" class="test">
                                                    </li>
                                                    <li>
                                                        <!-- <p>33</p> -->
                                                        <p>M</p>
                                                        <img src="<?php echo e(asset('assets/img/teeths/Lower-Left/33CL.png')); ?>" alt="" id="M" class="test">
                                                    </li>
                                                    <li>
                                                        <!-- <p>34</p> -->
                                                        <p>L</p>
                                                        <img src="<?php echo e(asset('assets/img/teeths/Lower-Left/34FPML.png')); ?>" alt="" id="L" class="test">
                                                    </li>
                                                    <li>
                                                        <!-- <p>35</p> -->
                                                        <p>K</p>
                                                        <img src="<?php echo e(asset('assets/img/teeths/Lower-Left/35SPML.png')); ?>" alt="" id="K" class="test">
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end -->
                                </div>
                                <!-- Tooth Tools Function Start -->
                                <div class="tool-out">
                                    <form action="<?php echo e(route('treatment_info',[$doctor_info->id,$patient->id])); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <div class="tools-h">
                                            <div class="row align-items-center">
                                                <div class="col-5 d-flex align-items-center">
                                                    <h3 class="pe-0">Tooth No. :  </h3>
                                                    <input type="text" id="tooth_no" name="tooth_no" value="" readonly />
                                                </div>
                                                <div class="col-5">

                                                    <input type="text" id="tooth_side" name="tooth_side" value="" readonly/>
                                                </div>
                                                <div class="col-2 text-end">
                                                    <i class="fa-solid fa-xmark" id="close-btn"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <h5 class="d-flex justify-content-between">C/C Cheif Complaint
                                            <div>
                                                <a class="crud-btns" href="" data-bs-toggle="modal" data-bs-target="#chife_Complaint_Add" >
                                                    <i class="bi bi-plus-circle"></i>
                                                </a>
                                                <a class="crud-btns" href="" data-bs-toggle="modal" data-bs-target="#chife_Complaint" >
                                                    <i class="bi bi-card-list"></i>
                                                </a>
                                            </div>
                                        </h5>
                                        <select class="form-control custom-form-control multi" name="pc_c[]" aria-label="Default select example" multiple style="width:100%;">
                                            <?php $__currentLoopData = $c_cs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c_c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($c_c -> name); ?>"><?php echo e($c_c -> name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                        <ul>
                                            <li>Pain</li>
                                            <li>Check-up</li>
                                            <li>Pain</li>
                                            <li>Check-up</li>
                                            <li>Pain</li>
                                            <li>Check-up</li>
                                            <li>Pain</li>
                                            <li>Check-up</li>
                                        </ul>
                                        <h5 class="d-flex justify-content-between">C/F Clinical Findings
                                            <div>
                                                <a class="crud-btns" href="" data-bs-toggle="modal" data-bs-target="#Clinical_Finding_Add" >
                                                    <i class="bi bi-plus-circle"></i>
                                                </a>
                                                <a class="crud-btns" href="" data-bs-toggle="modal" data-bs-target="#Clinical_Findings" >
                                                    <i class="bi bi-card-list"></i>
                                                </a>
                                            </div>
                                        </h5>
                                        <select class="form-control custom-form-control multi" name="pc_f[]" aria-label="Default select example" multiple style="width:100%;">
                                            <?php $__currentLoopData = $c_fs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c_f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($c_f -> name); ?>"><?php echo e($c_f -> name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                        <ul>
                                            <li>Pain</li>
                                            <li>Check-up</li>
                                            <li>Pain</li>
                                            <li>Check-up</li>
                                            <li>Pain</li>
                                            <li>Check-up</li>
                                            <li>Pain</li>
                                            <li>Check-up</li>
                                        </ul>
                                        <h5 class="d-flex justify-content-between">Investigation
                                            <div>
                                                <a class="crud-btns" href="" data-bs-toggle="modal" data-bs-target="#Investigation_Add" >
                                                    <i class="bi bi-plus-circle"></i>
                                                </a>
                                                <a class="crud-btns" href="" data-bs-toggle="modal" data-bs-target="#Investigation" >
                                                    <i class="bi bi-card-list"></i>
                                                </a>
                                            </div>
                                        </h5>
                                        <select class="form-control custom-form-control multi" name="p_investigation[]" aria-label="Default select example" multiple style="width:100%;">
                                            <?php $__currentLoopData = $investigations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $investigation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="X-ray"><?php echo e($investigation->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                        <ul>
                                            <li>X-ray</li>
                                            <li>OPG</li>
                                            <li>CBCT</li>
                                        </ul>

                                        <h5 class="d-flex justify-content-between">T/P Treatment Plans
                                            <div>
                                                <a class="crud-btns" href="" data-bs-toggle="modal" data-bs-target="#Treatment_Plan_Add" >
                                                    <i class="bi bi-plus-circle"></i>
                                                </a>
                                                <a class="crud-btns" href="" data-bs-toggle="modal" data-bs-target="#Treatment_Plans" >
                                                    <i class="bi bi-card-list"></i>
                                                </a>
                                            </div>
                                        </h5>
                                        <select class="form-control custom-form-control multi" name="pt_p[]" aria-label="Default select example" style="width:100%;">
                                            <?php $__currentLoopData = $t_ps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t_p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($t_p -> name); ?>"><?php echo e($t_p -> name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                        <ul>
                                            <li>Pain</li>
                                            <li>Check-up</li>
                                            <li>Pain</li>
                                            <li>Check-up</li>
                                            <li>Pain</li>
                                            <li>Check-up</li>
                                            <li>Pain</li>
                                            <li>Check-up</li>
                                        </ul>
                                        <div class="d-flex">
                                            <button class="btn   btn-outline-blue-grey">Submit</button>
                                            <input type="hidden" id="tooth_type" name="tooth_type" value="" readonly/>
                                        </div>

                                    </form>
                                </div>
                            </div>
                            <!-- Tooth Tools Function Start -->

                            <!-- Teeth Button -->
                            <div class="col-md-12 teeth-bottom px-0">
                                <div class="teeth-btn d-flex">
                                    <a class="test" id="All">Full Mouth</a>

                                    <a class="mul">Multi Teeth</a>
                                    <a class="confirm  " style="display:none">Confirm</a>
                                </div>
                                <!-- <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btncheck1">Full Mouth</label>

                    <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btncheck2">Multi Teeth</label> -->

                                <!-- <button>Multi Teeth</button> -->
                            </div>
                        </div>
                    </div>
                    <!-- teeth chart end -->
                    <!-- Treatment Card start -->
                    <div class="treatment-cards my-3">
                        <div class="treatment-cards-h bg-blue-grey p-2">
                            <h4 class="m-0 ">Treatment Plans For <?php echo e($patient->name); ?></h4>
                        </div>
                        <!-- Treatment Plans Status -->
                        <div class="row mx-2">
                            <?php $__currentLoopData = $treatment_infos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $treatment_info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-4 p-0 pt-3 pe-1">
                                <div class="treatment-card d-flex flex-column flex-wrap">
                                    <div class="treatment-card-details">
                                        <h4 class="m-0"><?php echo e($treatment_info->tooth_side); ?> Tooth No: <?php echo e($treatment_info->tooth_no); ?></h4>


                                        <p class="fw-bold m-0 ms-1 mt-1 mb-2"><?php echo e($treatment_info->treatment_plans); ?></p>
                                        <!-- <p class="m-0 ms-1">Start : 04/03/2021</p> -->
                                        <p class="fw-bold m-0 ms-1">CC : <span class="fw-normal"><?php echo e($treatment_info->chife_complaints); ?></span></p>
                                        <p class="fw-bold m-0 ms-1">CF : <span class="fw-normal"><?php echo e($treatment_info->clinical_findings); ?></span></p>
                                        <p class="fw-bold m-0 ms-1 mb-2">Investigation : <span class="fw-normal"><?php echo e($treatment_info->investigation); ?></span></p>
                                        <?php if($treatment_info->status == 2): ?>
                                        <p class="m-0 ms-1">Status : <span class="text-success">Done</span></p>
                                        <?php elseif($treatment_info->status == 1): ?>
                                        <p class="m-0 ms-1">Status : <span class="text-success">Progress</span></p>
                                        <?php else: ?>
                                        <p class="m-0 ms-1">Status : <span class="text-success">Not Start</span></p>
                                        <?php endif; ?>
                                    </div>
                                    <div class="treatment-card-btn">
                                        <a href="<?php echo e(route('treatments',[$doctor_info->id,$patient->id,$treatment_info->id,$treatment_info->treatment_plans])); ?>" class="py-1" style="font-size: 20px;color: #000;">Enter</a>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <!-- Treatment Card end -->

                </div>
            </div>
            <!-- Mid Section end -->

            <!-- Prescription,Ad & Events start -->
            <div class="col-md-3 page-home">

                <!-- We have info-box-col-1 for not fixed height -->
                <!-- <div class="info-box-col text-center p-2 mb-3">
                    <h4 class="text-center bg-blue-grey custom-border-radius py-2">Previous Steps List</h4>
                    <div class="accordion accordion-flush mt-2" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    Notice #1
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, incidunt expedita corrupti consequatur voluptatum voluptatibus!</div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="info-box-col mb-3 pb-1">
                <h6 class="p-2 d-flex justify-content-center bg-blue-grey custom-border-radius">Medical History</h6>
                     <div class="Patient-info">
                            <div class="row">
                                <div class="col-12 text-start">BP :<?php echo e($patient->bp_high); ?> / <?php echo e($patient->bp_low); ?></div>
                                <div class="col-12 text-start">Heart Disease: <?php echo e($patient->Heart_Disease); ?></div>
                                <div class="col-12 text-start">Diabetic: <?php echo e($patient->Diabetic); ?></div>
                                <div class="col-12 text-start">Helpatics: <?php echo e($patient->Helpatics); ?></div>
                                <div class="col-12 text-start">Bleeding disorder: <?php echo e($patient->Bleeding_disorder); ?></div>
                                <div class="col-12 text-start">Allergy: <?php echo e($patient->Allergy); ?></div>

                                <?php if($patient->gender == "Male"): ?>
                                <div class="col-12 text-start"> </div>
                                <?php else: ?>
                                <div class="col-12 text-start">Pregnant/Lactating: <?php echo e($patient->Pregnant); ?></div>
                                <?php endif; ?>
                                <div class="col-12 text-start">Other: <?php echo e($patient->other); ?></div>
                                <!-- <button type="button" class="btn btn-secondary btn-sm">Small button</button> -->
                                    <!--  a tag trigger modal -->
                                <div class="my-2 d-flex justify-content-center">
                                    <a href="" class="btns btn-outline-blue-grey mt-2 text-center" data-bs-toggle="modal" data-bs-target="#UpdatePatient">
                                        Add/Edit
                                </a>
                                </div>
                                <div class="col-12 text-start d-flex justify-content-center p-edit mt-2">


                                    <!-- Modal -->
                                    <div class="modal fade " id="UpdatePatient" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable">
                                            <div class="modal-content ">
                                                <!--bg-opacity-50-->
                                                <!-- Modal Header & Close btn -->
                                                <div class="modal-header">
                                                    <h5 class="modal-title " id="exampleModalLabel">
                                                        Edit Patient Info.
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <!-- Modal Header & Close btn end -->
                                                <!-- Modal Body -->

                                                <div class="modal-body">
                                                    <form action="<?php echo e(route('update_patient',$patient->id)); ?>" method="post">
                                                        <?php echo method_field('PUT'); ?>
                                                        <?php echo csrf_field(); ?>
                                                        <div class="row">
                                                            <!-- 1 -->
                                                            <div class="mb-2 col-6">
                                                                <label for="exampleInputEmail1" class="form-label ">BP</label>
                                                                <div class="d-flex">
                                                                    <input type="number" name="bp_high" class="form-control custom-form-control me-3" value="<?php echo e($patient->bp_high); ?>">
                                                                    <h3 class="m-0">/</h3>
                                                                    <input type="number" name="bp_low" class="form-control custom-form-control ms-3" value="<?php echo e($patient->bp_low); ?>">
                                                                </div>

                                                                <!-- <div class="form-text"></div> -->
                                                            </div>
                                                            <!-- 2 -->
                                                            <div class="mb-2 col-6">
                                                                <label for="mName" class="form-label  ">Bleeding discorder</label>
                                                                <select class="form-select" name="Bleeding_disorder" aria-label="Heart Disease" value="<?php echo e($patient->Bleeding_disorder); ?>">
                                                                    <option selected></option>
                                                                    <option <?php echo e(($patient->Bleeding_disorder) == 'yes' ? 'selected' : ''); ?> value="yes">Yes</option>
                                                                    <option <?php echo e(($patient->Bleeding_disorder) == 'no' ? 'selected' : ''); ?> value="no">No</option>
                                                                    <!-- <option value="3">Others</option> -->
                                                                </select>
                                                            </div>
                                                            <!-- 3 -->
                                                            <div class="mb-2 col-6">
                                                                <label for="mName" class="form-label  ">Heart Disease</label>
                                                                <select class="form-select" name="Heart_Disease" aria-label="Heart Disease" value="<?php echo e($patient->Heart_Disease); ?>">
                                                                    <option selected></option>
                                                                    <option <?php echo e(($patient->Heart_Disease) == 'yes' ? 'selected' : ''); ?> value="yes">Yes</option>
                                                                    <option <?php echo e(($patient->Heart_Disease) == 'no' ? 'selected' : ''); ?> value="no">No</option>
                                                                    <!-- <option value="3">Others</option> -->
                                                                </select>
                                                            </div>
                                                            <!-- 4 -->
                                                            <div class="mb-2 col-6">
                                                                <label for="mName" class="form-label ">Allergy</label>
                                                                <select class="form-select" name="Allergy" aria-label="Heart Disease" value="<?php echo e($patient->Allergy); ?>">
                                                                    <option selected></option>
                                                                    <option <?php echo e(($patient->Allergy) == 'yes' ? 'selected' : ''); ?> value="yes">Yes</option>
                                                                    <option <?php echo e(($patient->Allergy) == 'no' ? 'selected' : ''); ?> value="no">No</option>
                                                                    <!-- <option value="3">Others</option> -->
                                                                </select>
                                                            </div>
                                                            <!-- 5 -->
                                                            <div class="mb-2 col-6">
                                                                <label for="mName" class="form-label ">Diabetic</label>
                                                                <select class="form-select" name="Diabetic" aria-label="Heart Disease" value="<?php echo e($patient->Diabetic); ?>">
                                                                    <option selected></option>
                                                                    <option <?php echo e(($patient->Diabetic) == 'yes' ? 'selected' : ''); ?> value="yes">Yes</option>
                                                                    <option <?php echo e(($patient->Diabetic) == 'no' ? 'selected' : ''); ?> value="no">No</option>
                                                                    <!-- <option value="3">Others</option> -->
                                                                </select>
                                                            </div>
                                                            <!-- 6 -->

                                <?php if($patient->gender == "Male"): ?>
                                <div></div>
                                <?php else: ?>
                                                            <div class="mb-2 col-6">
                                                                <label for="mName" class="form-label ">Pregnant/Lactating</label>
                                                                <select class="form-select" name="Pregnant" aria-label="Heart Disease" value="<?php echo e($patient->Pregnant); ?>">
                                                                    <option selected></option>
                                                                    <option <?php echo e(($patient->Pregnant) == 'yes' ? 'selected' : ''); ?> value="yes">Yes</option>
                                                                    <option <?php echo e(($patient->Pregnant) == 'no' ? 'selected' : ''); ?> value="no">No</option>
                                                                    <!-- <option value="3">Others</option> -->
                                                                </select>
                                                            </div>
                                <?php endif; ?>
                                                            <!-- 7 -->
                                                            <div class="mb-2 col-6">
                                                                <label for="mName" class="form-label ">Helpatics</label>
                                                                <select class="form-select" name="Helpatics" aria-label="Heart Disease" value="<?php echo e($patient->Helpatics); ?>">
                                                                    <option selected></option>
                                                                    <option <?php echo e(($patient->Helpatics) == 'yes' ? 'selected' : ''); ?> value="yes">Yes</option>
                                                                    <option <?php echo e(($patient->Helpatics) == 'no' ? 'selected' : ''); ?> value="no">No</option>
                                                                    <!-- <option value="3">Others</option> -->
                                                                </select>
                                                            </div>
                                                            <!-- 8 -->
                                                            <div class="mb-2 col-6">
                                                                <label for="exampleInputEmail1" class="form-label ">Other</label>
                                                                <input type="text" name="other" class="form-control custom-form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo e($patient->other); ?>">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                                                            <button class="btn btn-outline-blue-grey ">Submit</button>
                                                        </div>
                                                    </form>
                                                </div>

                                                <!-- Modal Body end -->
                                                <!-- Modal Footer -->

                                                <!-- Modal Footer end -->
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modal end -->
                                </div>
                            </div>

                        </div>
                </div>
                <div class="info-box-col mb-3 pb-1">
                <h6 class="p-2 d-flex justify-content-center bg-blue-grey custom-border-radius">Previous Prescription</h6>

                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <?php $__empty_1 = true; $__currentLoopData = $v_prescriptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$v_prescription): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <div class="accordion-item mb-0">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed d-flex" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo<?php echo e($key +1); ?>" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    <p class="me-5">Prescription <?php echo e($key + 1); ?></p><p class="ms-5"><?php echo e($v_prescription->date); ?></p>
                                </button>
                            </h2>
                            <div id="flush-collapseTwo<?php echo e($key +1); ?>" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <h4>Drug List From Prescription</h4>
                                        <?php
                                            $ds = $v_prescription->drug_id_list;
                                            $ds = explode(',',$ds);
                                            $drug_infos = \App\Models\drugs::find($ds);
                                        ?>
                                    <ol class="mt-2">
                                        <?php $__currentLoopData = $drug_infos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $drug_info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li>
                                            <p>
                                                <?php echo e($drug_info->drug_name); ?>

                                            </p>
                                            <p>
                                                <?php echo e($drug_info->drug_time); ?> [ <?php echo e($drug_info->duration); ?> day(s) ] <?php echo e($drug_info->meal_time); ?>

                                            </p>
                                        </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ol>
                                    <a href="<?php echo e(route('view_prescription',[$doctor_info->id,$patient->id])); ?>" class="btn rounded-pill btn-outline-blue-grey">View</a>

                                    <a href="<?php echo e(route('send_mail',[$doctor_info->id,$patient->id])); ?>" class="btn rounded-pill btn-outline-blue-grey">Send Mail</a>

                                    <button href="#" class="btn rounded-pill btn-outline-blue-grey delete-Prescription" value ="<?php echo e($v_prescription->id); ?>" style="font-size:14px ;">
                                        Delete
                                    </button>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    New Patient
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <a href="" class="btn btn-black">View</a>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="info-box-col mb-3 d-flex flex-column">
                 <h6 class="p-2 d-flex justify-content-center bg-blue-grey custom-border-radius">Ad</h6>

                    <!-- <button type="button" class="btn btn-outline-info text-dark mt-2 mb-2 btn-lg  ">Post</button> -->
                    <div class="accordion accordion-flush" id="accordionFlushExample">
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
                                <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, officiis. Praesentium commodi molestias voluptatibus culpa.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shadow  rounded border">
                    <h6 class="p-2 d-flex justify-content-center bg-blue-grey custom-border-radius">Cost</h6>

                    <div class="d-flex justify-content-between align-items-center   p-2">

                        <!-- <h4>Treatment Cost</h4>
                        <div>
                        <a class="crud-btns" href="" data-bs-toggle="modal" data-bs-target="#Treatment_Cost_Add">
                            <i class="bi bi-plus-circle"></i>
                        </a>
                        <a class="crud-btns" href="" data-bs-toggle="modal" data-bs-target="#Treatment_Cost">
                            <i class="bi bi-card-list"></i>
                        </a>
                        </div> -->
                            <h6 class="estimated-cost-title">Estimated Cost</h6>
                        <div>
                        <a class="crud-btns" href="" data-bs-toggle="modal" data-bs-target="#Estimated_Cost">
                            <i class="bi bi-card-list"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Admin Notice,Ad & Events end -->

    <!-- main end -->
    <!-- footer -->
    <div class="footer p-3">
        <div class="row container-fluid">
            <p class="text-center my-auto">
                © Developed By Hospitalin
            </p>
        </div>
    </div>
    <!-- footer end-->

 <!-- Modal -->
 <div class="modal fade" id="exampleModal_1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <form action="<?php echo e(route('treatment_info',[$doctor_info->id,$patient->id])); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="modal-header">
                    <!-- <h5 class="modal-title" id="exampleModalLabel">Treatment Information</h5> -->
                    <div class="modal_header">
                            <div class="row align-items-center">
                                <div class="col-6 d-flex align-items-center">
                                    <h3 class="ps-0">Tooth No. <span class="multi_tooth_no"></span> </h3>
                                    <input type="hidden" id="tooth_no_modal" name="tooth_no" value="" />
                                </div>
                                <div class="col-6 text-center">
                                    <!-- <h3 name="tooth_side">Upper Right</h3> -->
                                    <input type="text" id="tooth_side_modal" name="tooth_side" value="" readonly class="text-center"/>
                                </div>
                                <div class="text-center">
                                    <input type="hidden" id="tooth_type_modal" name="tooth_type" value="" readonly/>
                                </div>
                            </div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Tooth Tools Function Start -->
                    <!-- <div class="tools-h">
                            <div class="row align-items-center mb-2">
                                <div class="col-3 d-flex align-items-center">
                                    <h3 class="pe-0">Tooth No.</h3>
                                    <input type="text" id="tooth_no_modal" name="tooth_no" value=""/>
                                </div>
                                <div class="col-5 text-center">
                                    <input type="text" id="tooth_side_modal" name="tooth_side" value="" readonly class="text-center"/>
                                </div>
                                <div class="col-4 text-center">
                                    <input type="text" id="tooth_type_modal" name="tooth_type" value="" readonly/>
                                </div>
                            </div>
                    </div> -->
                    <div class="row">
                        <div class="col-6 mb-3">
                            <h5 class="d-flex justify-content-between">
                                C/C Cheif Complaint
                                <div>
                                    <a class="crud-btns" href="" data-bs-toggle="modal" data-bs-target="#chife_Complaint_Add" >
                                        <i class="bi bi-plus-circle"></i>
                                    </a>
                                    <a class="crud-btns" href="" data-bs-toggle="modal" data-bs-target="#chife_Complaint" >
                                        <i class="bi bi-card-list"></i>
                                    </a>
                                </div>
                            </h5>
                            <select class="form-select multi" name="pc_c[]" aria-label="Default select example" multiple style="width:100%;">
                                <option value="">Nothing To Select</option>
                                <?php $__currentLoopData = $c_cs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c_c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($c_c -> name); ?>"><?php echo e($c_c -> name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <div class="modal_ul">
                                    <?php
                                        $fav_c_cs = $fav->fav_cc;
                                        $fav_c_cs = explode(',',$fav_c_cs);
                                    ?>
                                    <?php $__currentLoopData = $fav_c_cs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$fav_cc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="form-check btn_width p-0">
                                        <input type="checkbox" class="btn-check" id="btn-cc-<?php echo e($key + 1); ?>" autocomplete="off" name="pc_c[]" value="<?php echo e($fav_cc); ?>">
                                        <label class="btn btn-outline-secondary btn_test" for="btn-cc-<?php echo e($key + 1); ?>"><?php echo e($fav_cc); ?></label>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>

                        <div class="col-6 mb-3">
                            <h5 class="d-flex justify-content-between">
                                C/F Clinical Findings
                                <div>
                                    <a class="crud-btns" href="" data-bs-toggle="modal" data-bs-target="#Clinical_Finding_Add" >
                                        <i class="bi bi-plus-circle"></i>
                                    </a>
                                    <a class="crud-btns" href="" data-bs-toggle="modal" data-bs-target="#Clinical_Findings" >
                                        <i class="bi bi-card-list"></i>
                                    </a>
                                </div>
                            </h5>
                            <select class="form-control custom-form-control multi" name="pc_f[]" aria-label="Default select example" multiple style="width:100%;">
                                <option value="">Nothing To Select</option>
                                <?php $__currentLoopData = $c_fs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c_f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($c_f -> name); ?>"><?php echo e($c_f -> name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <div class="modal_ul">
                                <?php
                                    $fav_c_fs = $fav->fav_cf;
                                    $fav_c_fs = explode(',',$fav_c_fs);
                                ?>
                                <?php $__currentLoopData = $fav_c_fs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$fav_cf): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="form-check btn_width p-0">
                                    <input type="checkbox" class="btn-check" id="btn-cf-<?php echo e($key + 1); ?>" autocomplete="off" name="pc_f[]" value="<?php echo e($fav_cf); ?>">
                                    <label class="btn btn-outline-secondary btn_test" for="btn-cf-<?php echo e($key + 1); ?>"><?php echo e($fav_cf); ?></label>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>

                        <div class="col-6 mb-3">
                            <h5 class="d-flex justify-content-between">Investigation
                                <div>
                                    <a class="crud-btns" href="" data-bs-toggle="modal" data-bs-target="#Investigation_Add" >
                                        <i class="bi bi-plus-circle"></i>
                                    </a>
                                    <a class="crud-btns" href="" data-bs-toggle="modal" data-bs-target="#Investigation" >
                                        <i class="bi bi-card-list"></i>
                                    </a>
                                </div>
                            </h5>
                            <select class="form-control custom-form-control multi" name="p_investigation[]" aria-label="Default select example" multiple style="width:100%;">
                                <option value="">Nothing To Select</option>
                                <?php $__currentLoopData = $investigations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $investigation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($investigation->name); ?>"><?php echo e($investigation->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <div class="modal_ul">
                                <?php
                                    $fav_investigations = $fav->fav_investigation;
                                    $fav_investigations = explode(',',$fav_investigations);
                                ?>
                                <?php $__currentLoopData = $fav_investigations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$fav_investigation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="form-check btn_width p-0">
                                    <input type="checkbox" class="btn-check" id="btn-inves-<?php echo e($key + 1); ?>" autocomplete="off" name="p_investigation[]" value="<?php echo e($fav_investigation); ?>">
                                    <label class="btn btn-outline-secondary btn_test" for="btn-inves-<?php echo e($key + 1); ?>"><?php echo e($fav_investigation); ?></label>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>

                        <div class="col-6 mb-3">
                            <h5 class="d-flex justify-content-between">T/P Treatment Plans
                                 <div>
                                    <a class="crud-btns" href="" data-bs-toggle="modal" data-bs-target="#Treatment_Plan_Add" >
                                        <i class="bi bi-plus-circle"></i>
                                    </a>
                                    <a class="crud-btns" href="" data-bs-toggle="modal" data-bs-target="#Treatment_Plans" >
                                        <i class="bi bi-card-list"></i>
                                    </a>
                                </div>
                            </h5>
                            <select class="form-control custom-form-control multi" name="pt_p[]" aria-label="Default select example" style="width:100%;">
                                <option value="">Nothing To Select</option>
                                <?php $__currentLoopData = $t_ps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t_p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($t_p -> name); ?>"><?php echo e($t_p -> name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <div class="modal_ul">
                                <?php
                                    $fav_tps = $fav->fav_tp;
                                    $fav_tps = explode(',',$fav_tps);
                                ?>
                                <?php $__currentLoopData = $fav_tps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$fav_tp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="form-check btn_width p-0">
                                    <input type="checkbox" class="btn-check" id="btn-tp-<?php echo e($key + 1); ?>" autocomplete="off" name="pt_p[]" value="<?php echo e($fav_tp); ?>">
                                    <label class="btn btn-outline-secondary btn_test" for="btn-tp-<?php echo e($key + 1); ?>"><?php echo e($fav_tp); ?></label>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                        <div class="d-flex">
                            <!-- <button class="btn   btn-outline-blue-grey">Submit</button> -->
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
 </div>
 <!-- Mpdal end -->

 <!-- Modal For C/C Chief Complaint List -->
 <div class="modal fade " id="chife_Complaint" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <!-- Modal Header & Close btn -->
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="exampleModalLabel">
                    C/C Chief Complaint List
                </h5>
                <button type="button" class="btn-close" data-bs-toggle="modal" data-bs-target="#exampleModal_1" aria-label="Close"></button>
            </div>
            <!-- Modal Header & Close btn end -->
            <!-- Modal Body -->
            <div class="modal-body">
                <!-- C/C Chief Complaint List-->
                <table class="table table-bordered mt-4 text-center">
                    <thead>
                        <tr>
                            <th class="">Serial No</th>
                            <th class="">Chief Complaints</th>
                            <th class="">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $lc_cs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$lcc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($key+1); ?></td>
                            <td><?php echo e($lcc->name); ?></td>
                            <?php if($lcc->status == 1): ?>
                            <td class="d-flex justify-content-around p-0">
                                <button type="button" class="btn crud-btns CC_editbtn" href="" value="<?php echo e($lcc->id); ?>" >
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </button>
                                <button class="btn crud-btns delete-cc" href="#" value="<?php echo e($lcc->id); ?>">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </td>
                            <?php else: ?>
                            <td></td>
                            <?php endif; ?>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <!--C/C Chief Complaint list end -->
            </div>
            <!-- Modal Body end -->
        </div>
    </div>
 </div>
 <!-- Modal end -->
 <!-- Modal For C/C Chief Complaint Add -->
 <div class="modal fade " id="chife_Complaint_Add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <!-- Modal Header & Close btn -->
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="exampleModalLabel">
                    Add Cheif Complaint
                </h5>
                <button type="button" class="btn-close" data-bs-toggle="modal" data-bs-target="#exampleModal_1" aria-label="Close"></button>
            </div>
            <!-- Modal Header & Close btn end -->
            <!-- Modal Body -->
            <div class="modal-body">
                <form action="<?php echo e(route('chife_complaint')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <div class="mb-3 drug-name">
                            <input class="form-control custom-form-control" list="list" placeholder="Enter New Cheif Complaint" name="cc_name">
                            <input type="hidden" name="cc_status" id="" value="1">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal_1">Discard</button>
                        <button type="submit" class="btn btn-sm btn btn-sm btn-outline-blue-grey">Confirm</button>
                    </div>
                </form>
            </div>
            <!-- Modal Body end -->
        </div>
    </div>
 </div>
 <!-- Modal end -->
 <!-- Modal For C/C Chief Complaint update -->
 <div class="modal fade " id="chife_Complaint_Update" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <!-- Modal Header & Close btn -->
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="exampleModalLabel">
                    Edit Cheif Complaint
                </h5>
                <button type="button" class="btn-close" data-bs-toggle="modal" data-bs-target="#chife_Complaint" aria-label="Close"></button>
            </div>
            <!-- Modal Header & Close btn end -->
            <!-- Modal Body -->
            <div class="modal-body">
                <form action="<?php echo e(route('update_chife_complaint')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>

                    <input type="hidden" id="CCId" name="c_c_id"/>
                    <div class="modal-body">
                        <div class="mb-3 drug-name">
                            <input class="form-control" list="list" id="c_c_name" placeholder="Enter New Chief Complaint" name="cc_name">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#chife_Complaint">Discard</button>
                        <button type="submit" class="btn btn-sm btn-outline-blue-grey">Update</button>
                    </div>
                </form>
            </div>
            <!-- Modal Body end -->
        </div>
    </div>
 </div>
 <!-- Modal end -->
 <!-- Modal For Delete C/C Chief Complaint -->
    <div class="modal fade " id="del-CC" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <!-- Modal Header & Close btn -->
                <div class="modal-header">
                    <h5 class="modal-title text-dark" id="exampleModalLabel">
                        Delete C/C Chief Complaint
                    </h5>
                    <button type="button" class="btn-close" data-bs-toggle="modal" data-bs-target="#chife_Complaint" aria-label="Close"></button>
                </div>
                <!-- Modal Header & Close btn end -->
                <!-- Modal Body -->
                <div class="modal-body">
                    <form action="<?php echo e(route('delete_chife_complaint')); ?>" method="POST" >
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('delete'); ?>
                        <div class="mb-3 text-center">
                            <h5 class="text-danger">Are You Sure to Delete This information?</h5>
                        </div>
                        <input type="hidden" id="del-cc-id" name="deletingId">
                        <!-- Modal Footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-dark btn-sm" data-bs-toggle="modal" data-bs-target="#chife_Complaint">Close</button>
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

 <!-- Modal For C/F Clinical Findings List -->
 <div class="modal fade " id="Clinical_Findings" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <!-- Modal Header & Close btn -->
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="exampleModalLabel">
                    C/F Clinical Findings List
                </h5>
                <button type="button" class="btn-close" data-bs-toggle="modal" data-bs-target="#exampleModal_1" aria-label="Close"></button>
            </div>
            <!-- Modal Header & Close btn end -->
            <!-- Modal Body -->
            <div class="modal-body">
                <!-- C/F Clinical Findings List-->
                <table class="table table-bordered mt-4 text-center">
                    <thead>
                        <tr>
                            <th class="">Serial No</th>
                            <th class="">Clinical Findings</th>
                            <th class="">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $lc_fs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$lcf): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($key+1); ?></td>
                            <td><?php echo e($lcf->name); ?></td>
                            <?php if($lcf->status == 1): ?>
                            <td class="d-flex justify-content-around p-0">
                                <button class="btn crud-btns CF_editbtn" href="" value= "<?php echo e($lcf->id); ?>" >
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </button>
                                <button class="btn crud-btns delete-cf" href="#" value= "<?php echo e($lcf->id); ?>">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </td>
                            <?php else: ?>
                            <td></td>
                            <?php endif; ?>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <!--C/F Clinical Findings list end -->
            </div>
            <!-- Modal Body end -->
        </div>
    </div>
 </div>
 <!-- Modal end -->

  <!-- Modal For C/F Clinical Findings Add -->
  <div class="modal fade " id="Clinical_Finding_Add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <!-- Modal Header & Close btn -->
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="exampleModalLabel">
                    Add Clinical Finding
                </h5>
                <button type="button" class="btn-close" data-bs-toggle="modal" data-bs-target="#exampleModal_1" aria-label="Close"></button>
            </div>
            <!-- Modal Header & Close btn end -->
            <!-- Modal Body -->
            <div class="modal-body">
                <form action="<?php echo e(route('clinical_finding')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <div class="mb-3 drug-name">
                            <input class="form-control" list="list" placeholder="Enter New Clinical Finding" name="cf_name">
                            <input type="hidden" name="cf_status" id="" value="1">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal_1">Discard</button>
                        <button type="submit" class="btn btn-sm btn-outline-blue-grey">Confirm</button>
                    </div>
                </form>
            </div>
            <!-- Modal Body end -->
        </div>
    </div>
 </div>
 <!-- Modal end -->

  <!-- Modal For C/F Clinical Findings update -->
  <div class="modal fade " id="Clinical_Finding_Update" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <!-- Modal Header & Close btn -->
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="exampleModalLabel">
                    Edit  Clinical Finding
                </h5>
                <button type="button" class="btn-close" data-bs-toggle="modal" data-bs-target="#Clinical_Findings" aria-label="Close"></button>
            </div>
            <!-- Modal Header & Close btn end -->
            <!-- Modal Body -->
            <div class="modal-body">
                <form action="<?php echo e(route('update_clinical_finding')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>

                    <input type="hidden" id="CFId" name="c_f_id"/>
                    <div class="modal-body">
                        <div class="mb-3 drug-name">
                            <input class="form-control" list="list" id="c_f_name" placeholder="Enter New Clinical Finding" name="cf_name">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#Clinical_Findings">Discard</button>
                        <button type="submit" class="btn btn-sm btn-outline-blue-grey">Update</button>
                    </div>
                </form>
            </div>
            <!-- Modal Body end -->
        </div>
    </div>
 </div>
 <!-- Modal end -->

 <!-- Modal For Delete C/F Clinical Findings -->
 <div class="modal fade " id="del-CF" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <!-- Modal Header & Close btn -->
                <div class="modal-header">
                    <h5 class="modal-title text-dark" id="exampleModalLabel">
                        Delete C/F Clinical Findings
                    </h5>
                    <button type="button" class="btn-close" data-bs-toggle="modal" data-bs-target="#Clinical_Findings" aria-label="Close"></button>
                </div>
                <!-- Modal Header & Close btn end -->
                <!-- Modal Body -->
                <div class="modal-body">
                    <form action="<?php echo e(route('delete_clinical_finding')); ?>" method="POST" >
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('delete'); ?>
                        <div class="mb-3 text-center">
                            <h5 class="text-danger">Are You Sure to Delete This information?</h5>
                        </div>
                        <input type="hidden" id="del-cf-id" name="deletingId">
                        <!-- Modal Footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-dark btn-sm" data-bs-toggle="modal" data-bs-target="#Clinical_Findings">Close</button>
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

 <!-- Modal For Investigation List -->
 <div class="modal fade " id="Investigation" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <!-- Modal Header & Close btn -->
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="exampleModalLabel">
                    Investigation List
                </h5>
                <button type="button" class="btn-close" data-bs-toggle="modal" data-bs-target="#exampleModal_1" aria-label="Close"></button>
            </div>
            <!-- Modal Header & Close btn end -->
            <!-- Modal Body -->
            <div class="modal-body">
                <!-- Investigation List-->
                <table class="table table-bordered mt-4 text-center">
                    <thead>
                        <tr>
                            <th class="">Serial No</th>
                            <th class="">Investigations</th>
                            <th class="">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $investigation_lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$investigation_list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($key+1); ?></td>
                            <td><?php echo e($investigation_list->name); ?></td>
                            <?php if($investigation_list->status == 1): ?>
                            <td class="d-flex justify-content-around  p-0">

                                <button class="btn crud-btns Investigation_editbtn" href="" value= "<?php echo e($investigation_list->id); ?>" >
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </button>
                                <button class="btn crud-btns delete-Investigation" href="#" value= "<?php echo e($investigation_list->id); ?>">
                                    <i class="fa-solid fa-trash"></i>
                                </button>

                            </td>
                            <?php else: ?>
                            <td></td>
                            <?php endif; ?>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <!--Investigation list end -->
            </div>
            <!-- Modal Body end -->
        </div>
    </div>
 </div>
 <!-- Modal end -->

  <!-- Modal For Investigation Add -->
  <div class="modal fade " id="Investigation_Add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <!-- Modal Header & Close btn -->
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="exampleModalLabel">
                    Add Investigation
                </h5>
                <button type="button" class="btn-close" data-bs-toggle="modal" data-bs-target="#exampleModal_1" aria-label="Close"></button>
            </div>
            <!-- Modal Header & Close btn end -->
            <!-- Modal Body -->
            <div class="modal-body">
                <form action="<?php echo e(route('investigation')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <div class="mb-3 drug-name">
                            <input class="form-control" list="list" placeholder="Enter New Investigation" name="investigation_name">
                            <input type="hidden" name="investigation_status" id="" value="1">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal_1">Discard</button>
                        <button type="submit" class="btn btn-sm btn-outline-blue-grey">Confirm</button>
                    </div>
                </form>
            </div>
            <!-- Modal Body end -->
        </div>
    </div>
  </div>
  <!-- Modal end -->

    <!-- Modal For Investigation update -->
    <div class="modal fade " id="Investigation_Update" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <!-- Modal Header & Close btn -->
                <div class="modal-header">
                    <h5 class="modal-title text-dark" id="exampleModalLabel">
                        Edit  Investigation
                    </h5>
                    <button type="button" class="btn-close" data-bs-toggle="modal" data-bs-target="#Investigation" aria-label="Close"></button>
                </div>
                <!-- Modal Header & Close btn end -->
                <!-- Modal Body -->
                <div class="modal-body">
                    <form action="<?php echo e(route('update_investigation')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>

                        <input type="hidden" id="InvestigationId" name="investigation_id"/>
                        <div class="modal-body">
                            <div class="mb-3 drug-name">
                                <input class="form-control" list="list" id="Investigation_name" placeholder="Enter Investigation" name="investigation_name">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#Investigation">Discard</button>
                            <button type="submit" class="btn btn-sm btn-outline-blue-grey">Update</button>
                        </div>
                    </form>
                </div>
                <!-- Modal Body end -->
            </div>
        </div>
    </div>
    <!-- Modal end -->

 <!-- Modal For Delete Investigation -->
 <div class="modal fade " id="del-Investigation" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <!-- Modal Header & Close btn -->
                <div class="modal-header">
                    <h5 class="modal-title text-dark" id="exampleModalLabel">
                        Delete Investigation
                    </h5>
                    <button type="button" class="btn-close" data-bs-toggle="modal" data-bs-target="#Investigation" aria-label="Close"></button>
                </div>
                <!-- Modal Header & Close btn end -->
                <!-- Modal Body -->
                <div class="modal-body">
                    <form action="<?php echo e(route('delete_investigation')); ?>" method="POST" >
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('delete'); ?>
                        <div class="mb-3 text-center">
                            <h5 class="text-danger">Are You Sure to Delete This information?</h5>
                        </div>
                        <input type="hidden" id="del-Investigation-id" name="deletingId">
                        <!-- Modal Footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-dark btn-sm" data-bs-toggle="modal" data-bs-target="#Investigation">Close</button>
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

 <!-- Modal For T/P Treatment Plans List -->
 <div class="modal fade " id="Treatment_Plans" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <!-- Modal Header & Close btn -->
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="exampleModalLabel">
                    T/P Treatment Plans List
                </h5>
                <button type="button" class="btn-close" data-bs-toggle="modal" data-bs-target="#exampleModal_1" aria-label="Close"></button>
            </div>
            <!-- Modal Header & Close btn end -->
            <!-- Modal Body -->
            <div class="modal-body">
                <!-- T/P Treatment Plans List-->
                <table class="table table-bordered mt-4 text-center">
                    <thead>
                        <tr>
                            <th class="">Serial No</th>
                            <th class="">Treatment Plans</th>
                            <!-- <th class="">Cost</th> -->
                            <th class="">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $lt_ps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$ltp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($key+1); ?></td>
                            <td><?php echo e($ltp->name); ?></td>
                            <!-- <td><?php echo e($ltp->cost); ?></td> -->
                            <?php if($ltp->status == 1): ?>
                            <td class="d-flex justify-content-around  p-0">
                                <button class="btn crud-btns TP_editbtn" href="" value="<?php echo e($ltp->id); ?>" >
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </button>
                                <button class="btn crud-btns delete-tp" href="#" value="<?php echo e($ltp->id); ?>">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </td>
                            <?php else: ?>
                            <td></td>
                            <?php endif; ?>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <!--T/P Treatment Plans list end -->
            </div>
            <!-- Modal Body end -->
        </div>
    </div>
 </div>
 <!-- Modal end -->

 <!-- Modal For T/P Treatment Plans Add -->
 <div class="modal fade " id="Treatment_Plan_Add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <!-- Modal Header & Close btn -->
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="exampleModalLabel">
                    Add Treatment Plan
                </h5>
                <button type="button" class="btn-close" data-bs-toggle="modal" data-bs-target="#exampleModal_1" aria-label="Close"></button>
            </div>
            <!-- Modal Header & Close btn end -->
            <!-- Modal Body -->
            <div class="modal-body">
                <form action="<?php echo e(route('treatment_plan')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <div class="mb-3 drug-name">
                            <input class="form-control" list="list" placeholder="Enter New Treatment Plan" name="tp_name">
                            <input type="hidden" name="tp_status" id="" value="1">
                            <input type="hidden" name="d_id" id="" value="<?php echo e($doctor_info->id); ?>">
                        </div>
                        <div class="mb-3 drug-name">
                            <input class="form-control" list="list" placeholder="Enter Cost" name="tp_cost">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal_1">Discard</button>
                        <button type="submit" class="btn btn-sm btn-outline-blue-grey">Confirm</button>
                    </div>
                </form>
            </div>
            <!-- Modal Body end -->
        </div>
    </div>
 </div>
 <!-- Modal end -->

 <!-- Modal For T/P Treatment Plans update -->
 <div class="modal fade " id="Treatment_Plan_Update" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <!-- Modal Header & Close btn -->
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="exampleModalLabel">
                    Edit  Treatment Plan
                </h5>
                <button type="button" class="btn-close" data-bs-toggle="modal" data-bs-target="#Treatment_Plans" aria-label="Close"></button>
            </div>
            <!-- Modal Header & Close btn end -->
            <!-- Modal Body -->
            <div class="modal-body">
                <form action="<?php echo e(route('update_treatment_plan')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>

                    <input type="hidden" id="TPId" name="t_p_id"/>
                    <div class="modal-body">
                        <div class="mb-3 drug-name">
                            <input class="form-control" list="list" id="t_p_name" placeholder="Enter New Clinical Finding" name="tp_name">
                        </div>
                        <div class="mb-3 drug-name">
                            <input class="form-control" list="list" id="t_p_cost" placeholder="Enter Cost" name="tp_cost">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#Treatment_Plans">Discard</button>
                        <button type="submit" class="btn btn-sm btn-outline-blue-grey">Update</button>
                    </div>
                </form>
            </div>
            <!-- Modal Body end -->
        </div>
    </div>
 </div>
 <!-- Modal end -->

 <!-- Modal For Delete T/P Treatment Plans -->
 <div class="modal fade " id="del-TP" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <!-- Modal Header & Close btn -->
                <div class="modal-header">
                    <h5 class="modal-title text-dark" id="exampleModalLabel">
                        Delete T/P Treatment Plans
                    </h5>
                    <button type="button" class="btn-close" data-bs-toggle="modal" data-bs-target="#Treatment_Plans" aria-label="Close"></button>
                </div>
                <!-- Modal Header & Close btn end -->
                <!-- Modal Body -->
                <div class="modal-body">
                    <form action="<?php echo e(route('delete_treatment_plan')); ?>" method="POST" >
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('delete'); ?>
                        <div class="mb-3 text-center">
                            <h5 class="text-danger">Are You Sure to Delete This information?</h5>
                        </div>
                        <input type="hidden" id="del-TP-id" name="deletingId">
                        <!-- Modal Footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-dark btn-sm" data-bs-toggle="modal" data-bs-target="#Treatment_Plans">Close</button>
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

   <!-- Modal For T/P Estimated Cost List -->
 <div class="modal fade " id="Estimated_Cost" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <!-- Modal Header & Close btn -->
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="exampleModalLabel">
                    Estimated Cost List
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Modal Header & Close btn end -->
            <!-- Modal Body -->
            <div class="modal-body">
                <!-- T/P Treatment Cost List-->
                <table class="table table-bordered mt-3 text-center">
                    <thead>
                        <tr>
                            <th class="">#</th>
                            <th class="">Treatment Plans</th>
                            <th class="">Cost</th>
                            <!-- <th class="">Action</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $treatment_infos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$t_p_cost): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($key+1); ?></td>
                            <td><?php echo e($t_p_cost->treatment_plans); ?></td>
                            <td><?php echo e($t_p_cost->cost); ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td colspan="2">Total</td>
                            <td><?php echo e($total_cost); ?></td>
                        </tr>
                    </tbody>
                </table>
                <!--T/P Treatment Cost list end -->
            </div>
            <!-- Modal Body end -->
        </div>
    </div>
 </div>
  <!-- Modal end -->



    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="<?php echo e(asset ('assets/js/app.js')); ?>"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="<?php echo e(asset ('assets/js/chosen.jquery.js')); ?>"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(function(){
            // $(".multi").select2();
            $(".multi").select2({
                dropdownParent: $("#exampleModal_1")
            });

            $(document).on('click','.test',function(){
                var id = $(this).attr("id");
                // console.log(id);
                $("#exampleModal_1").modal('show');
                $("#tooth_no_modal").val(id);
                $(".multi_tooth_no").text(id);
                if(id > 10 && id < 19){
                    $("#tooth_side_modal").val('Upper Right');
                    $("#tooth_type_modal").val('Permanent Teeth');
                }
                else if(id > 20 && id < 29){
                    $("#tooth_side_modal").val('Upper Left');
                    $("#tooth_type_modal").val('Permanent Teeth');
                }
                else if(id > 30 && id < 39){
                    $("#tooth_side_modal").val('Lower Left');
                    $("#tooth_type_modal").val('Permanent Teeth');
                }
                else if(id > 40 && id < 49){
                    $("#tooth_side_modal").val('Lower Right');
                    $("#tooth_type_modal").val('Permanent Teeth');
                }
                else if(id=="A"||id=="B"||id=="C"||id=="D"||id=="E"){
                    $("#tooth_side_modal").val('Upper Right');
                    $("#tooth_type_modal").val('Deciduous Teeth');
                }
                else if(id=="F"||id=="G"||id=="H"||id=="I"||id=="J"){
                    $("#tooth_side_modal").val('Upper Left');
                    $("#tooth_type_modal").val('Deciduous Teeth');
                }
                else if(id=="K"||id=="L"||id=="M"||id=="N"||id=="O"){
                    $("#tooth_side_modal").val('Lower Left');
                    $("#tooth_type_modal").val('Deciduous Teeth');
                }
                else if(id=="P"||id=="Q"||id=="R"||id=="S"||id=="T"){
                    $("#tooth_side_modal").val('Lower Right');
                    $("#tooth_type_modal").val('Deciduous Teeth');
                }

            });

            $(document).on('click', '.mul',function(){
                $('.confirm').show();
                $("#exampleModal_1").modal('hide');
                $('.select').show();

            });
            $(document).on('click', '.confirm',function(){
                // $('.confirm').show();
                // $('.select').show();
                var arr = [];
                $.each($("input[name='t']:checked"), function(){
                    arr.push($(this).val());
                });
                var tooths = arr.join(", ");
                console.log(arr.join(", "));
                $("#exampleModal_1").modal('show');
                $("#tooth_no_modal").val(tooths);
                $(".multi_tooth_no").text(tooths);
                $('.confirm').hide();
                $('.select').hide();

            });

        });
    </script>

    <script>

        $(document).ready(function(){

            // script for C/C Chief Complaint update
            $(document).on('click', '.CC_editbtn',function(){
                var cc_id = $(this).val();
                $("#chife_Complaint").modal('hide');
                // alert(edit);
                $("#chife_Complaint_Update").modal('show');
                $.ajax({
                    type:"GET",
                    url: "/edit_chife_complaint/"+cc_id,
                    success: function(response){
                        // console.log(response.cc.name);
                        $('#CCId').val(cc_id);
                        $('#c_c_name').val(response.cc.name);
                    }
                });
            });

            $(document).on('click', '.delete-cc',function(){
                var deleteCCId = $(this).val();
                $("#chife_Complaint").modal('hide');
                // alert(deleteCCId);
                $("#del-CC").modal('show');
                $('#del-cc-id').val(deleteCCId);
            });

            // script for C/F Clinical Findings
            $(document).on('click', '.CF_editbtn',function(){
                var cf_id = $(this).val();
                $("#Clinical_Findings").modal('hide');
                // alert(cf_id);
                $("#Clinical_Finding_Update").modal('show');
                $.ajax({
                    type:"GET",
                    url: "/edit_clinical_finding/"+cf_id,
                    success: function(response){
                        // console.log(response);
                        $('#CFId').val(cf_id);
                        $('#c_f_name').val(response.cf.name);
                    }
                });
            });

            $(document).on('click', '.delete-cf',function(){
                var deleteCFId = $(this).val();
                $("#Clinical_Findings").modal('hide');

                // alert(deleteCFId);
                $("#del-CF").modal('show');
                $('#del-cf-id').val(deleteCFId);
            });


            // script for Investigation

            $(document).on('click', '.Investigation_editbtn',function(){
                var Investigation_id = $(this).val();
                $("#Investigation").modal('hide');
                // alert(Investigation_id);
                $("#Investigation_Update").modal('show');
                $.ajax({
                    type:"GET",
                    url: "/edit_investigation/"+Investigation_id,
                    success: function(response){
                        console.log(response);
                        $('#InvestigationId').val(Investigation_id);
                        $('#Investigation_name').val(response.inves.name);
                    }
                });
            });

            $(document).on('click', '.delete-Investigation',function(){
                var deleteInvestigationId = $(this).val();
                $("#Investigation").modal('hide');
                // alert(deleteInvestigationId);
                $("#del-Investigation").modal('show');
                $('#del-Investigation-id').val(deleteInvestigationId);
            });


            // script for T/P Treatment Plans

            $(document).on('click', '.TP_editbtn',function(){
                var tp_id = $(this).val();
                $("#Treatment_Plans").modal('hide');
                // alert(tp_id);
                $("#Treatment_Plan_Update").modal('show');
                $.ajax({
                    type:"GET",
                    url: "/edit_treatment_plan/"+tp_id,
                    success: function(response){
                        // console.log(response);
                        $('#TPId').val(tp_id);
                        $('#t_p_name').val(response.tp.name);
                        $('#t_p_cost').val(response.tp.cost);
                    }
                });
            });

            $(document).on('click', '.delete-tp',function(){
                var deleteTPId = $(this).val();
                $("#Treatment_Plans").modal('hide');
                // alert(deleteTPId);
                $("#del-TP").modal('show');
                $('#del-TP-id').val(deleteTPId);
            });
            // script for T/P Treatment Costs

            $(document).on('click', '.TP_Cost_editbtn',function(){
                var tp_Cost_id = $(this).val();
                $("#Treatment_Cost").modal('hide');
                // alert(tp_Cost_id);
                $("#Treatment_Cost_Update").modal('show');
                $.ajax({
                    type:"GET",
                    url: "/edit_treatment_cost/"+tp_Cost_id,
                    success: function(response){
                        // console.log(response);
                        $('#TPCostId').val(tp_Cost_id);
                        $('#tp_cost_name').val(response.tp_cost.name);
                        $('#tp_cost').val(response.tp_cost.price);
                    }
                });
            });

            $(document).on('click', '.delete-tp_Cost',function(){
                var deleteTPCostId = $(this).val();
                $("#Treatment_Cost").modal('hide');
                // alert(deleteTPCostId);
                $("#del-Cost-TP").modal('show');
                $('#del-TP-cost-id').val(deleteTPCostId);
            });

        });
    </script>




</body>

</html>
<?php /**PATH C:\xampp\htdocs\resources\views/view_patient.blade.php ENDPATH**/ ?>