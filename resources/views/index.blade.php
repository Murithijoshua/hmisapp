@extends('main')

@section('content')
{{-- demo servers --}}
@include('componets.Demo')
{{-- pre-release servers --}}
@include('componets.tabs')

{{-- {{$dwhData}} --}}
{{--
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
                                        <h4 class="card-title">DWH Portal</h4>
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
                    {{-- <table class="table table-sm table-striped">
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
    </div> --}}

    {{-- <div class="row">
        <div class="col-12 container justify-content-center">
           <p class="text-muted container justify-content-center">Brought to you by Quality Assurance, KeHMIS</p>
        </div>
    </div> --}}


{{-- </div>  --}}
@endsection
