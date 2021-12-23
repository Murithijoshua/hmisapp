<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>KeHMIS Applications</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">


        <!-- Styles -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="card col-8 offset-md-2"  >
                    <img class="card-img-top h-25 w-100 align-items-center" src="{{ asset('images/KeHMIS_Logo.svg') }}" alt="KeHMIS"  >

                    <div class="text-black-50 text-center ">
                        <h3 class="card-title h1-responsive font-bold"><strong>KeHMIS HIS Products Demo, Training and Testing Environment</strong></h3>
                    </div>
                </div>

                <h1 class="text-success text-center">EMR DEMO AND TRAINING SERVERS</h1>
                <p class="text-success text-center">These are the released versions of KeHMIS products. Use of these servers should be primarily for demo and training.</p>
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-8 ">
                        <!-- Card group -->
                        <div class="card-group">


                            <!-- Card -->
                            <div class="card mb-3">



                                <!-- Card content -->
                                <div class="card-body">
                                    <!-- Title -->
                                    <h4 class="card-title">KenyaEMR</h4>
                                    <!-- Text -->
                                    <p class="card-text">Use this for KenyaEMR training and demo. To install, get latest.</p>
                                    <p class="card-text">To login use Admin/Admin123 </p>
                                    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                                    <a class="btn btn-outline-success btn-sm " target="_blank" href="https://data.kenyahmis.org:8500/openmrs"><i class="fa fa-check-circle" aria-hidden="true"></i> KenyaEMR</a>
                                    <a class="btn btn-outline-secondary btn-sm float-right" target="_blank" href="https://github.com/palladiumkenya/kenyahmis-releases/releases/tag/v26">
                                        <svg height="20" class="octicon octicon-mark-github text-white" viewBox="0 0 16 16" version="1.1" width="32" aria-hidden="true"><path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"></path></svg>
                                        Github</a>

                                </div>
                                <!-- Card content -->

                            </div>
                            <!-- Card -->
                            <!-- Card -->
                            <div class="card mb-3">


                                <!-- Card content -->
                                <div class="card-body">
                                    <!-- Title -->
                                    <h4 class="card-title">SPOT</h4>
                                    <!-- Text -->
                                    <p class="card-text">Use this for SPOT training and testing. </p>
                                    <p class="card-text">EMR metrics can also be viewed</p>
                                    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                                    <a class="btn btn-success btn-sm stretched-link" target="_blank" href="https://spotstaging.kenyahmis.org/"><i class="fa fa-check-circle" aria-hidden="true"></i> SPOT</a>

                                </div>
                                <!-- Card content -->

                            </div>
                            <!-- Card -->


                            <!-- Card -->
                            <div class="card mb-3">


                                <!-- Card content -->
                                <div class="card-body">

                                    <!-- Title -->
                                    <h4 class="card-title">Ushauri</h4>
                                    <!-- Text -->
                                    <p class="card-text">Use this for Ushauri training and demo. To install, get latest.</p>
                                    <p class="card-text">To login use 0731332028/Trial@2019 </p>
                                    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                                    <a class="btn btn-outline-success btn-sm" target="_blank" href="http://176.58.109.44:5020/"><i class="fa fa-check-circle" aria-hidden="true"></i> Ushauri</a>
                                    <a class="btn btn-outline-secondary btn-sm float-right" target="_blank" href="https://github.com/palladiumkenya/ushauriweb">
                                        <svg height="20" class="octicon octicon-mark-github text-white" viewBox="0 0 16 16" version="1.1" width="32" aria-hidden="true"><path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"></path></svg>
                                        Github</a>
                                </div>
                                <!-- Card content -->

                            </div>
                            <!-- Card -->
                            <!-- Card -->
                            <div class="card mb-3">


                                <!-- Card content -->
                                <div class="card-body">

                                    <!-- Title -->
                                    <h4 class="card-title">MLAB</h4>
                                    <!-- Text -->
                                    <p class="card-text">Use this for MLAB training and demo. To install, get latest.</p>
                                    <p class="card-text">To login use hdindi@mhealthkenya.org/hdindi1234 </p>
                                    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                                    <a class="btn btn-outline-success btn-sm" target="_blank" href="http://176.58.109.44:5010/"><i class="fa fa-check-circle" aria-hidden="true"></i> MLAB</a>
                                    <a class="btn btn-outline-secondary btn-sm float-right" target="_blank" href="https://github.com/palladiumkenya/mLab">
                                        <svg height="20" class="octicon octicon-mark-github text-white" viewBox="0 0 16 16" version="1.1" width="32" aria-hidden="true"><path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"></path></svg>
                                        Github</a>
                                </div>
                                <!-- Card content -->

                            </div>
                            <!-- Card -->
                            <div class="card mb-3">


                                <!-- Card content -->
                                <div class="card-body">

                                    <!-- Title -->
                                    <h4 class="card-title">Interoperability Layer</h4>
                                    <!-- Text -->
                                    <p class="card-text">Use this for IL training and demo. To install, get latest.</p>
                                    <p class="card-text">To login use admin/admin </p>
                                    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                                    <a class="btn btn-outline-success btn-sm" target="_blank" href="https://il.kenyahmis.org"><i class="fa fa-check-circle" aria-hidden="true"></i> IL</a>

                                    <a class="btn btn-outline-secondary btn-sm float-right" target="_blank" href="https://github.com/palladiumkenya/Interoperability-Layer/releases/tag/1.0.0">
                                        <svg height="20" class="octicon octicon-mark-github text-white" viewBox="0 0 16 16" version="1.1" width="32" aria-hidden="true"><path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"></path></svg>
                                        Github</a>
                                </div>
                                <!-- Card content -->

                            </div>
                            <!-- Card -->

                        </div>
                        <!-- Card group -->
                    </div>
                    <div class="col-2"></div>
                </div>

                <hr>

                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-8 ">
                        <ul class="nav nav-tabs">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#pre-release">PRE-RELEASE TESTING SERVERS & DWH RESOURCES</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#technical">TOT TECHNICAL CONTENT</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#enduser">END USER CONTENT</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="pre-release" class="tab-pane active">

                                <p class="text-success text-center">These are the pre-releases versions of KeHMIS products. Use of these servers should be primarily for testing purposes. Expect down times and continuous upgrades.</p>
                                <div class="row">
                                    <div class="col-12 ">
                                        <!-- Card group -->
                                        <div class="card-group">


                                            <!-- Card -->
                                            <div class="card mb-3 ">


                                                <!-- Card content -->
                                                <div class="card-body">
                                                    <!-- Title -->
                                                    <h4 class="card-title">KenyaEMR</h4>
                                                    <!-- Text -->
                                                    <p class="card-text">Use this for testing only.</p>
                                                    <p class="card-text">Openmrs v2.X</p>
                                                    <p class="card-text">To login use Admin/Admin123 </p>
                                                    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                                                    <a class="btn btn-outline-primary btn-sm stretched-link" target="_blank" href="http://197.248.44.228:8600/openmrs"><i class="fa fa-check-circle" aria-hidden="true"></i> KenyaEMR (Test)</a>

                                                </div>
                                                <!-- Card content -->

                                            </div>
                                            <!-- Card -->

                                            <!-- Card -->
                                            <div class="card mb-3">


                                                <!-- Card content -->
                                                <div class="card-body">

                                                    <!-- Title -->
                                                    <h4 class="card-title">KenyaEMR</h4>
                                                    <!-- Text -->
                                                    <p class="card-text">Use this for testing only.</p>
                                                    <p class="card-text">Openmrs v1.X</p>
                                                    <p class="card-text">To login use Admin/Admin123 </p>
                                                    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                                                    <a class="btn btn-outline-primary btn-sm stretched-link" target="_blank" href="https://data.kenyahmis.org:9100/openmrs/index.htm    "><i class="fa fa-check-circle" aria-hidden="true"></i> Key Pop (Test)</a>
                                                </div>
                                                <!-- Card content -->

                                            </div>
                                            <!-- Card -->

                                            <!-- Card -->
                                            <div class="card mb-3">

                                                <!-- Card content -->
                                                <div class="card-body">

                                                    <!-- Title -->
                                                    <h4 class="card-title">Interoperability Layer</h4>
                                                    <!-- Text -->
                                                    <p class="card-text">Use this for testing only.</p>
                                                    <p class="card-text">To login use admin/admin </p>
                                                    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                                                    <a class="btn btn-outline-primary btn-sm stretched-link" target="_blank" href="https://iltest.kenyahmis.org/"><i class="fa fa-check-circle" aria-hidden="true"></i> IL (Test)</a>

                                                </div>
                                                <!-- Card content -->

                                            </div>
                                            <!-- Card -->

                                            <!-- Card -->
                                            <div class="card mb-3">


                                                <!-- Card content -->
                                                <div class="card-body">

                                                    <!-- Title -->
                                                    <h4 class="card-title">New DWH Portal</h4>
                                                    <!-- Text -->
                                                    <p class="card-text">Use this for testing only.</p>
                                                    <p class="card-text">Data and changes is regularly added & deleted! </p>
                                                    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                                                    <a class="btn btn-outline-primary btn-sm stretched-link" target="_blank" href="https://data.kenyahmis.org:9000"><i class="fa fa-check-circle" aria-hidden="true"></i> DWH Portal (Test)</a>

                                                </div>
                                                <!-- Card content -->

                                            </div>
                                            <!-- Card -->
                                        </div>
                                        <!-- Card group -->
                                    </div>
                                </div>

                                <p class="text-info text-center">These are the released versions of KeHMIS DWH products. Use of these servers should be primarily for demo and training.</p>
                                <div class="row">
                                    <div class="col-12 ">
                                        <!-- Card group -->
                                        <div class="card-group">


                                            <!-- Card -->
                                            <div class="card mb-4 ">


                                                <!-- Card content -->
                                                <div class="card-body">
                                                    <!-- Title -->
                                                    <h4 class="card-title">DWAPI</h4>
                                                    <!-- Text -->
                                                    <p class="card-text">Use this for testing only.</p>
                                                    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                                                    <a class="btn btn-outline-info btn-sm stretched-link" target="_blank" href="https://data.kenyahmis.org:5753"><i class="fa fa-check-circle" aria-hidden="true"></i> DWAPI</a>

                                                </div>
                                                <!-- Card content -->

                                            </div>
                                            <!-- Card -->

                                            <!-- Card -->
                                            <div class="card mb-4">


                                                <!-- Card content -->
                                                <div class="card-body">

                                                    <!-- Title -->
                                                    <h4 class="card-title">SPOT</h4>
                                                    <!-- Text -->
                                                    <p class="card-text">Use this for view DWAPI uploads to DWH.</p>
                                                    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                                                    <a class="btn btn-outline-info btn-md stretched-link" target="_blank" href="https://spot.kenyahmis.org/"><i class="fa fa-check-circle" aria-hidden="true"></i> SPOT</a>
                                                </div>
                                                <!-- Card content -->

                                            </div>
                                            <!-- Card -->
                                            <!-- Card -->
                                            <div class="card mb-4">


                                                <!-- Card content -->
                                                <div class="card-body">
                                                    <!-- Title -->
                                                    <h4 class="card-title">Data warehouse</h4>
                                                    <!-- Text -->
                                                    <p class="card-text">Use this to access national data warehouse.</p>
                                                    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                                                    <a class="btn btn-outline-info btn-md stretched-link" target="_blank" href="https://dwh.nascop.org/"><i class="fa fa-check-circle" aria-hidden="true"></i> DWH</a>

                                                </div>
                                                <!-- Card content -->

                                            </div>
                                            <!-- Card -->



                                        </div>
                                        <!-- Card group -->
                                    </div>
                                </div>
                            </div>
                            <div id="technical" class="tab-pane fade">
                                <p class="text-secondary text-center">These are the technical training materials as per the latest HIS products.</p>
                                <table class="table table-sm table-striped">
                                    <thead>
                                    <tr class="table-success">
                                        <th scope="col">HIS Product & Version</th>
                                        <th scope="col">Job Aid </th>
                                        <th scope="col">Video </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">KenyaEMR v17.1.0</th>
                                        <td>
                                            <a class="btn btn-sm btn-link" target="_blank" href="https://drive.google.com/file/d/1nR6xjCZlMPRrt-aTs2BrdOkNJwePXxjZ/view?usp=sharing"><i class="fa fa-external-link" aria-hidden="true"></i> Ubuntu Desktop Installation</a>
                                        </td>
                                        <td>
                                            <a class="btn btn-sm btn-link " target="_blank" href="https://drive.google.com/file/d/1Cw3chcdyPBkLMOBefJXrVvAFEG58b1Ag/view?usp=sharing"><i class="fa fa-external-link" aria-hidden="true"></i> Ubuntu Desktop Installation</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">KenyaEMR v17.1.0</th>
                                        <td>
                                            <a class="btn btn-sm btn-link" target="_blank" href="https://drive.google.com/file/d/1-qTPaCTpdxh2wJgQk4Zce1M-IumRRf1j/view?usp=sharing"><i class="fa fa-external-link" aria-hidden="true"></i> KenyaEMR Dependencies Installation
                                            </a>
                                        </td>
                                        <td>
                                            <a class="btn btn-sm btn-link " target="_blank" href="https://drive.google.com/file/d/1k1PYsRs1hH3XrvJSjF4nr2eX42IinowH/view?usp=sharing"><i class="fa fa-external-link" aria-hidden="true"></i> KenyaEMR Dependencies Installation
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">KenyaEMR v17.1.0</th>
                                        <td>
                                            <a class="btn btn-sm btn-link" target="_blank" href="https://drive.google.com/file/d/1-qTPaCTpdxh2wJgQk4Zce1M-IumRRf1j/view?usp=sharing"><i class="fa fa-external-link" aria-hidden="true"></i> KenyaEMR_Installation_Long_process</a>
                                        </td>
                                        <td>
                                            <a class="btn btn-sm btn-link " target="_blank" href="https://drive.google.com/file/d/1Lqux6sdG4jsw82DHp9fNXkRps2HxLcDt/view?usp=sharing"><i class="fa fa-external-link" aria-hidden="true"></i> KenyaEMR_Installation_Long_process</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">KenyaEMR v17.1.0</th>
                                        <td>
                                            <a class="btn btn-sm btn-link" target="_blank" href="https://drive.google.com/file/d/18jrVcbmU6Mw6v8nuT4HG20koAb1RbftF/view?usp=sharing"><i class="fa fa-external-link" aria-hidden="true"></i> KenyaEMR Upgrade </a>
                                        </td>
                                        <td>
                                            <a class="btn btn-sm btn-link " target="_blank" href="https://drive.google.com/file/d/15wFnjwzKnFF2F0Ywm25XTWHjCV1sFtfH/view?usp=sharing"><i class="fa fa-external-link" aria-hidden="true"></i> KenyaEMR Upgrade</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">KenyaEMR v17.1.0</th>
                                        <td>
                                            <a class="btn btn-sm btn-link" target="_blank" href="https://drive.google.com/file/d/1vIbLr8ub3UigkCA5QaQsMvpg-zA58ZJZ/view?usp=sharing"><i class="fa fa-external-link" aria-hidden="true"></i> KenyaEMR Data Tools Setup</a>
                                        </td>
                                        <td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">KenyaEMR v17.1.0</th>
                                        <td>
                                            <a class="btn btn-sm btn-link" target="_blank" href="https://drive.google.com/file/d/1jQc4FjrSy6TK1KfT1ITx4cJkjMIn_ZYV/view?usp=sharing"><i class="fa fa-external-link" aria-hidden="true"></i> Ubuntu Server installation </a>
                                        </td>
                                        <td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">IQCare v2.1.0</th>
                                        <td>
                                            <a class="btn btn-sm btn-link" target="_blank" href="https://drive.google.com/file/d/1MM-Xiafp6p3CVN0yQFi0qoNsWGUxTAm6/view?usp=sharing"><i class="fa fa-external-link" aria-hidden="true"></i> IQCare IIS Installation </a>
                                        </td>
                                        <td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">IQCare v2.1.0</th>
                                        <td>
                                            <a class="btn btn-sm btn-link" target="_blank" href="https://drive.google.com/file/d/1MM-Xiafp6p3CVN0yQFi0qoNsWGUxTAm6/view?usp=sharing"><i class="fa fa-external-link" aria-hidden="true"></i> IQCare Installation Process</a>
                                        </td>
                                        <td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">IQCare v2.1.0</th>
                                        <td>
                                            <a class="btn btn-sm btn-link" target="_blank" href="https://drive.google.com/file/d/1yw6CiusGXJaje6CI6zkb4n9yUNFpIOHV/view?usp=sharing"><i class="fa fa-external-link" aria-hidden="true"></i> IQCare Upgrade Process</a>
                                        </td>
                                        <td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">AfyaMobile v4.0</th>
                                        <td>
                                            <a class="btn btn-sm btn-link" target="_blank" href="https://drive.google.com/file/d/1_6cT52wEHH66U-wNdEnBS7n99N8e-qTp/view?usp=sharing"><i class="fa fa-external-link" aria-hidden="true"></i> AfyaMobile Installation </a>
                                        </td>
                                        <td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">mUzima v2.4</th>
                                        <td>
                                            <a class="btn btn-sm btn-link" target="_blank" href="https://drive.google.com/file/d/1v5sgWhy38p4MrV_di-GLvvPAbOblKY5-/view?usp=sharing"><i class="fa fa-external-link" aria-hidden="true"></i> mUzima Installation </a>
                                        </td>
                                        <td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Interoperability Layer v2.0.0</th>
                                        <td>
                                            <a class="btn btn-sm btn-link" target="_blank" href="https://drive.google.com/file/d/1YqEtaldK3Yy9c38_6v1GNLb6a8M0eL9c/view?usp=sharing"><i class="fa fa-external-link" aria-hidden="true"></i> IL Installation in Windows</a>
                                        </td>
                                        <td>
                                            <a class="btn btn-sm btn-link" target="_blank" href="https://drive.google.com/drive/folders/12ydPvOSuEaBf04kyaTDQmbfF4MMdix59?usp=sharing"><i class="fa fa-external-link" aria-hidden="true"></i> IL Installation in Windows </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Interoperability Layer v2.0.0</th>
                                        <td>
                                            <a class="btn btn-sm btn-link" target="_blank" href="https://drive.google.com/file/d/1pOWiSsQC5C_FYDPr7ZfSV3zS_knyDRVh/view?usp=sharing"><i class="fa fa-external-link" aria-hidden="true"></i> IL Installation in LinuxOS </a>
                                        </td>
                                        <td>
                                            <a class="btn btn-sm btn-link" target="_blank" href="https://drive.google.com/drive/folders/12ydPvOSuEaBf04kyaTDQmbfF4MMdix59?usp=sharing"><i class="fa fa-external-link" aria-hidden="true"></i> IL Installation in LinuxOS</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">DWAPI v2.4.3</th>
                                        <td>
                                            <a class="btn btn-sm btn-link" target="_blank" href="https://drive.google.com/file/d/1wcWir5W2XJS-BdZ4FUQnhbiN-s3ddfZW/view?usp=sharing"><i class="fa fa-external-link" aria-hidden="true"></i> Docker DWAPI Installation & Configuration  </a>
                                        </td>
                                        <td>
                                            <a class="btn btn-sm btn-link" target="_blank" href="https://drive.google.com/drive/folders/15B_7lGBzzUISqBcoJ5DbvJbWm-9wSvMn?usp=sharing"><i class="fa fa-external-link" aria-hidden="true"></i> Video_Docker_DWAPI_Installation</a>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>

                            <div id="enduser" class="tab-pane fade">
                                <p class="text-secondary text-center">These are the end user training materials as per the latest HIS products.</p>
                                <table class="table table-sm table-striped">
                                    <thead>
                                    <tr class="table-success">
                                        <th scope="col">HIS Product & Version</th>
                                        <th scope="col">Job Aid </th>
                                        <th scope="col">Video </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">mUzima v2.4</th>
                                        <td>
                                            <a class="btn btn-sm btn-link" target="_blank" href="https://drive.google.com/file/d/18rjIxZIZYem2h3PU__1fZ7Kh6x0cUvwk/view?usp=sharing"><i class="fa fa-external-link" aria-hidden="true"></i> mUzima_End_to_End_Navigation_JobAid</a>
                                        </td>
                                        <td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">OTZ OVC Modules v1.0</th>
                                        <td>
                                            <a class="btn btn-sm btn-link" target="_blank" href="https://drive.google.com/open?id=19KGdSM9GUOCC2G3RJxTM1U4oa6YVmswO"><i class="fa fa-external-link" aria-hidden="true"></i> OTZ End to End navigation in KenyaEMR</a>
                                        </td>
                                        <td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">OTZ OVC Modules v1.0</th>
                                        <td>
                                            <a class="btn btn-sm btn-link" target="_blank" href="https://drive.google.com/open?id=1kXgMk-ImafI1pDe-H7P8EyO2balF9eM3"><i class="fa fa-external-link" aria-hidden="true"></i> OVC End to End navigation  in KenyaEMR</a>
                                        </td>
                                        <td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">OTZ OVC Modules v1.0</th>
                                        <td>
                                            <a class="btn btn-sm btn-link" target="_blank" href="https://drive.google.com/open?id=1iVWlV-6QSDn-6JxuzCQ3XQI2MVmmSH3o"><i class="fa fa-external-link" aria-hidden="true"></i> OTZ End to End navigation in IQCare</a>
                                        </td>
                                        <td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">OTZ OVC Modules v1.0</th>
                                        <td>
                                            <a class="btn btn-sm btn-link" target="_blank" href="https://drive.google.com/open?id=11pTggJ_mpbpx5bruI67-4YPhgBMhb57A"><i class="fa fa-external-link" aria-hidden="true"></i> OVC End to End navigation in IQCare</a>
                                        </td>
                                        <td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">OTZ OVC Modules v1.0</th>
                                        <td>
                                            <a class="btn btn-sm btn-link" target="_blank" href="https://drive.google.com/open?id=1EZekCdD3LONVe_5A45kvSHkVtKjHlIWm"><i class="fa fa-external-link" aria-hidden="true"></i> OVC Training slides</a>
                                        </td>
                                        <td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">OTZ OVC Modules v1.0</th>
                                        <td>
                                            <a class="btn btn-sm btn-link" target="_blank" href="https://drive.google.com/open?id=1nCjEnUo8jK_59Tfw5eBmcWE2aIiAIrGz"><i class="fa fa-external-link" aria-hidden="true"></i> OTZ Training slides</a>
                                        </td>
                                        <td>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-2"></div>
                </div>

                <div class="row">
                    <div class="col-12 container justify-content-center">
                       <p class="text-muted container justify-content-center">Brought to you by Quality Assurance, KeHMIS</p>
                    </div>
                </div>


            </div>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    </body>
</html>
