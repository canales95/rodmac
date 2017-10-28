<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>audisoft | Login</title>
        {{-- estilos de material design for bootstrap --}}
        <link rel="stylesheet" type="text/css" href="mdb/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="mdb/css/mdb.min.css">
        <link rel="stylesheet" type="text/css" href="libs/font-awesome-4.7.0/css/font-awesome.min.css">
        {{-- estilos de la vista --}}
        <link rel="stylesheet" type="text/css" href="packages/css/index.css">
    </head>
    <body>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-5">
                    <br>
                    <!--Section: Live preview-->
                    <section class="form-dark">

                        <!--Form without header-->
                        <div class="card card-image" style="background-image: url('https://mdbootstrap.com/img/Photo/Others/pricing-table%20(7).jpg');">
                            <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4">

                                <!--Header-->
                                <div class="text-center">
                                    <h3 class="white-text mb-5 mt-4 font-bold"><strong>SIGN</strong> <a class="green-text font-bold"><strong> UP</strong></a></h3>
                                </div>

                                <!--Body-->
                                <div class="md-form">
                                    <input type="text" id="Form-email5" class="form-control white-text">
                                    <label for="Form-email5">Your email</label>
                                </div>

                                <div class="md-form pb-3">
                                    <input type="password" id="Form-pass5" class="form-control white-text">
                                    <label for="Form-pass5">Your password</label>
                                    <div class="form-group">
                                        <input type="checkbox" id="checkbox6">
                                        <label for="checkbox6" class="white-text">Accept the<a href="#" class="green-text font-bold"> Terms and Conditions</a></label>
                                    </div>
                                </div>

                                <!--Grid row-->
                                <div class="row d-flex align-items-center mb-4">

                                    <!--Grid column-->
                                    <div class="text-center mb-3 col-md-12">
                                        <button type="button" class="btn btn-success btn-block btn-rounded z-depth-1">Sign in</button>
                                    </div>
                                    <!--Grid column-->
                                </div>
                                <!--Grid row-->

                                <!--Grid column-->
                                <div class="col-md-12">
                                    <p class="font-small white-text d-flex justify-content-end">Have an account? <a href="#" class="green-text ml-1 font-bold"> Log in</a></p>
                                </div>
                                <!--Grid column-->

                            </div>
                        </div>
                        <!--/Form without header-->

                    </section>
                    <!--Section: Live preview-->
                </div>
            </div>
        </div>


        {{-- scripts para material design for bootstrap --}}
        <script src="mdb/js/jquery-3.2.1.min.js"></script>
        <script src="mdb/js/popper.min.js"></script>
        <script src="mdb/js/bootstrap.min.js"></script>
        <script src="mdb/js/mdb.min.js"></script>
        {{-- script para funcionamiento del logueo --}}
        <script src="js/login.js"></script>
        <script type="text/javascript">
            new WOW().init();
        </script>

    </body>
</html>
