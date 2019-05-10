<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Ivars, Verners, Madara, Marta">
    <title>Reģistrācija studijām</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .container {
            max-width: 960px;
        }

        .lh-condensed { line-height: 1.25; }
    </style>

</head>
<body class="bg-light">
<div class="container">
    <div class="py-5">
        <h2>Reģistrācija studijām </h2>
        <p class="lead">
            Pieteikuma forma studijām nepieciešama, lai elektroniski pieteiktos studijām. Šī forma ir fiktīva un izgatavota studija darba ietvaros.
            <a href="#">Esi jau reģistrējies? Pārbaudi sava pieteikuma statusu!</a>
        </p>
    </div>

    <div class="row">

        <div class="col-md-12 order-md-1">
            <h4 class="mb-3">Pieteikuma forma</h4>
            <form class="needs-validation" novalidate>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="firstName">Vārds</label>
                        <input name="name" type="text" class="form-control" id="name" placeholder="Vārds" value="" required>
                        <div class="invalid-feedback">
                           Ir nepieciešams ievadīt vārdu
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="lastName">Uzvārds</label>
                        <input name="surname" type="text" class="form-control" id="surname" placeholder="Uzvārds" value="" required>
                        <div class="invalid-feedback">
                           Ir nepieciešams ievadīt uzvārdu
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="lastName">Personas kods</label>
                        <input name="pcode" type="text" class="form-control" id="pcode" placeholder="Personas kods" value="" required>
                        <div class="invalid-feedback">
                            Ir nepieciešams ievadīt personas kodu
                        </div>
                    </div>


                </div>


                <div class="mb-3">
                    <label for="email">E-pasts</label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="pecinja@inbox.lv">
                    <small id="emailHelp" class="form-text text-muted">Uz norādīto e-pastu tiks nosūtīts saite pieteikuma statusa aplūkošanai </small>
                </div>

                <hr/>
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-info">
                            Izvēlieties kādu no pieejamās studiju programmas
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="country">Studiju programma</label>
                        <select class="custom-select d-block w-100" id="country" required>
                            <option value="">Izvēle</option>
                            <option value="1">Programma 1</option>
                            <option value="2">Programma 2</option>
                            <option value="3">Programma 3</option>
                        </select>
                    </div>
                </div>
              {{--  <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-light" role="alert">
                          Mācību iestāde piedāvā dažādas studēšanas iespējas. Viens skolnieks var pieteikties divām programmām
                        </div>
                    </div>
                </div>--}}
                <hr/>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="state">Priekšmets</label>
                        <select name="p1" class="custom-select d-block w-100" id="state" required>
                            <option value="">Izvēle</option>
                            <option>Matemātika</option>
                            <option>Latviešu valoda</option>
                            <option>Dabas zinības</option>
                            <option>Angļu valoda</option>
                            <option>Vācu valoda</option>
                        </select>

                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="state">CE vērtējums šajā priekšmetā</label>
                        <select class="custom-select d-block w-100" id="state" required>
                            <option value="">Līmeņa izvēle...</option>
                            <option>A</option>
                            <option>B</option>
                            <option>C</option>
                            <option>D</option>
                            <option>E</option>
                            <option>F</option>
                        </select>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="state">Priekšmets</label>
                        <select name="p1" class="custom-select d-block w-100" id="state" required>
                            <option value="">Izvēle</option>
                            <option>Matemātika</option>
                            <option>Latviešu valoda</option>
                            <option>Dabas zinības</option>
                            <option>Angļu valoda</option>
                            <option>Vācu valoda</option>
                        </select>

                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="state">CE vērtējums šajā priekšmetā</label>
                        <select class="custom-select d-block w-100" id="state" required>
                            <option value="">Līmeņa izvēle...</option>
                            <option>A</option>
                            <option>B</option>
                            <option>C</option>
                            <option>D</option>
                            <option>E</option>
                            <option>F</option>
                        </select>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="average">Vidējā atzīme atestātā beidzot vidusskolu</label>
                        <input  name="average" type="text" class="form-control" id="name" placeholder="4.1" value="" required>
                    </div>
                </div>
                <hr class="mb-4">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="same-address">
                    <label class="custom-control-label" for="same-address">Apstiprinu, ka vēlos, lai dati tiktu apstrādāti atbilstoši GDPR regulai</label>
                </div>

                <hr class="mb-4">

                <button class="btn btn-primary btn-lg btn-block" type="submit">Iesniegt pieteikumu</button>
            </form>
        </div>
    </div>

    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; {{ date('Y') }} studentu projekts</p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="https://dif2.liepu.lv">Mācībiestāde</a></li>
            <li class="list-inline-item"><a href="#">Publiski pieejamais kods (MIT licence)</a></li>

        </ul>
    </footer>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
<script src="form-validation.js"></script></body>
</html>
