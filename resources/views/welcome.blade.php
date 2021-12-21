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
                    <!-- Card image -->
                    <div class="view overlay">
                        <img class="card-img-top img-thumbnail" src="{{ asset('images/kehmis.jpg') }}" alt="Key Population"  >
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <div class="text-black-50 text-center ">
                        <h3 class="card-title h1-responsive font-bold"><strong>KeHMIS HIS Products Demo, Training and Testing Environment</strong></h3>
                    </div>
                </div>

                <h1 class="text-success text-center">ONLINE DEMO AND TRAINING SERVERS</h1>
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
                                    <h5 class="card-title">KenyaEMR</h5>
                                    <!-- Text -->
                                    <p class="card-text">Use this for training and demo. </p>
                                    <p class="card-text">To login use Admin/Admin123. </p>
                                    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                                    <a class="btn btn-outline-success btn-md stretched-link" target="_blank" href="https://data.kenyahmis.org:8500/openmrs"><i class="fa fa-check-circle" aria-hidden="true"></i> KenyaEMR</a>

                                </div>
                                <!-- Card content -->

                            </div>
                            <!-- Card -->
                            <!-- Card -->
                            <div class="card mb-3">


                                <!-- Card content -->
                                <div class="card-body">
                                    <!-- Title -->
                                    <h5 class="card-title">Ushauri</h5>
                                    <!-- Text -->
                                    <p class="card-text">Use this for training and demo</p>
                                    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                                    <a class="btn btn-outline-success btn-md stretched-link" target="_blank" href="http://176.58.109.44:5020/"><i class="fa fa-check-circle" aria-hidden="true"></i> Ushauri</a>

                                </div>
                                <!-- Card content -->

                            </div>
                            <!-- Card -->

                            <!-- Card -->
                            <div class="card mb-3">


                                <!-- Card content -->
                                <div class="card-body">
                                    <!-- Title -->
                                    <h5 class="card-title">Mhealth</h5>
                                    <!-- Text -->
                                    <p class="card-text">Use this for training and demo</p>
                                    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                                    <a class="btn btn-outline-success btn-md stretched-link" target="_blank" href="http://176.58.109.44:5010"><i class="fa fa-check-circle" aria-hidden="true"></i> Mhealth</a>

                                </div>
                                <!-- Card content -->

                            </div>
                            <!-- Card -->
                            <!-- Card -->
                            <div class="card mb-3">


                                <!-- Card content -->
                                <div class="card-body">

                                    <!-- Title -->
                                    <h5 class="card-title">Interoperability Layer</h5>
                                    <!-- Text -->
                                    <p class="card-text">Use this for training and demo</p>
                                    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                                    <a class="btn btn-outline-success btn-md stretched-link" target="_blank" href="http://il.kenyahmis.org"><i class="fa fa-check-circle" aria-hidden="true"></i> IL</a>

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

                <h1 class="text-info text-center">Important KeHMIS Resources</h1>
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-8 ">
                        <!-- Card group -->
                        <div class="card-group">


                            <!-- Card -->
                            <div class="card mb-4 ">


                                <!-- Card content -->
                                <div class="card-body">
                                    <!-- Title -->
                                    <h4 class="card-title">DWAPI</h4>
                                    <!-- Text -->
                                    <p class="card-text">Use this for external testing</p>
                                    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                                    <a class="btn btn-outline-info btn-md stretched-link" target="_blank" href="http://dwapi.kenyahmis.org"><i class="fa fa-check-circle" aria-hidden="true"></i> DWAPI</a>

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
                                    <p class="card-text">Use this to view DWAPI uploads to DWH.</p>
                                    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                                    <a class="btn btn-outline-info btn-md stretched-link" target="_blank" href="http://data.kenyahmis.org:4700/"><i class="fa fa-check-circle" aria-hidden="true"></i> SPOT</a>
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
                             <!-- Card -->
                            <div class="card mb-4">


                                <!-- Card content -->
                                <div class="card-body">

                                    <!-- Title -->
                                    <h4 class="card-title">MLAB</h4>
                                    <!-- Text -->
                                    <p class="card-text">Use this to view VL results.</p>
                                    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                                    <a class="btn btn-outline-info btn-md stretched-link" target="_blank" href="https://mlab.nascop.org/"><i class="fa fa-check-circle" aria-hidden="true"></i> MLAB</a>
                                </div>
                                <!-- Card content -->

                            </div>

                            <!-- Card -->
                            <div class="card mb-4">


                                <!-- Card content -->
                                <div class="card-body">

                                    <!-- Title -->
                                    <h4 class="card-title">USHAURI</h4>
                                    <!-- Text -->
                                    <p class="card-text">Use this to view Appointment Messages.</p>
                                    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                                    <a class="btn btn-outline-info btn-md stretched-link" target="_blank" href="https://ushauri.nascop.org/"><i class="fa fa-check-circle" aria-hidden="true"></i> USHAURI</a>
                                </div>
                                <!-- Card content -->


                        </div>
                        <!-- Card group -->
                    </div>
                    <div class="col-2"></div>
                </div>

                <hr>
                
                <h1 class="text-success text-center">EXTERNAL & INTERNAL TESTING SERVERS</h1>
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-8 ">
                        <!-- Card group -->
                        <div class="card-group">


                            <!-- Card -->
                            <div class="card mb-3 ">


                                <!-- Card content -->
                                <div class="card-body">
                                    <!-- Title -->
                                    <h4 class="card-title">KenyaEMR (External)</h4>
                                    <!-- Text -->
                                    <p class="card-text">Use this for external testing</p>
                                    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                                    <a class="btn btn-outline-primary btn-md stretched-link" target="_blank" href="https://data.kenyahmis.org:8400/openmrs"><i class="fa fa-check-circle" aria-hidden="true"></i> KenyaEMR</a>

                                </div>
                                <!-- Card content -->

                            </div>
                            <!-- Card -->

                            <!-- Card -->
                            <div class="card mb-3">


                                <!-- Card content -->
                                <div class="card-body">

                                    <!-- Title -->
                                    <h4 class="card-title">Key Pop (External)</h4>
                                    <!-- Text -->
                                    <p class="card-text">Use this for internal testing.</p>
                                    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                                    <a class="btn btn-outline-primary btn-md stretched-link" target="_blank" href="https://data.kenyahmis.org:9100/openmrs"><i class="fa fa-check-circle" aria-hidden="true"></i> Key Pop</a>
                                </div>
                                <!-- Card content -->

                            </div>
                            <!-- Card -->
                            <!-- Card -->
                            <div class="card mb-3">


                                <!-- Card content -->
                                <div class="card-body">
                                    <!-- Title -->
                                    <h4 class="card-title">KenyaEMR (Internal)</h4>
                                    <!-- Text -->
                                    <p class="card-text">Use this for internal testing. This server is only accessible within Palladium Network.</p>
                                    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                                    <a class="btn btn-outline-primary btn-md stretched-link" target="_blank" href="http://192.168.1.220:8080/openmrs"><i class="fa fa-check-circle" aria-hidden="true"></i> KenyaEMR</a>

                                </div>
                                <!-- Card content -->

                            </div>
                            <!-- Card -->

                            <!-- Card -->
                            <div class="card mb-3">



                                <!-- Card content -->
                                <div class="card-body">

                                    <!-- Title -->
                                    <h4 class="card-title">Key Pop (Internal)</h4>
                                    <!-- Text -->
                                    <p class="card-text">Use this for internal testing. This server is only accessible within Palladium Network.</p>
                                    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                                    <a class="btn btn-outline-primary btn-md stretched-link" target="_blank" href="http://192.168.1.219:8501/openmrs"><i class="fa fa-check-circle" aria-hidden="true"></i> Key Pop</a>
                                </div>
                                <!-- Card content -->

                            </div>
                            <!-- Card -->

                        </div>
                        <!-- Card group -->
                    </div>
                    <div class="col-2"></div>
                </div>

                <div class="row">
                    <div class="col-12 text-center">
                       <p class="text-muted"> Brought to you by Quality Assurance, KeHMIS</p>
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
