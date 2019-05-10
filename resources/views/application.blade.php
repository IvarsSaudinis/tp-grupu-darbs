@extends('layout.master')

@section('content')

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

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="post" action="/" class="needs-validation" novalidate>
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-info" role="alert">
                            Izvēlieties kādu no aktīvajām studiju programmām
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="country">Studiju programma</label>
                        <select name="program" class="custom-select d-block w-100" id="program" required>
                            <option>Izvēle</option>
                            @foreach($programs as $program)
                                <option value="{{ $program->id }}">{{ $program->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <hr/>
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-light" role="alert">
                           Ievadiet korektu informāciju par sekmēm. Līguma slēgšanas brīdī būs nepieciešams uzrādīt dokumentu oriģinālus.
                        </div>
                    </div>
                </div>
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
                    <div class="col-md-6 mb-3">
                        <label for="state">Priekšmets</label>
                        <select name="p1" class="custom-select d-block0" id="state" required>
                            <option >Izvēle</option>
                            @foreach($subjects as $subject)
                                <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                            @endforeach
                        </select>

                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="state">CE vērtējums šajā priekšmetā</label>
                        <select name="CElevel1" class="custom-select d-block w-100" id="state" required>
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
                        <select name="p2" class="custom-select d-block " id="state" required>
                            <option>Izvēle</option>
                            @foreach($subjects as $subject)
                                <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                            @endforeach
                        </select>

                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="state">CE vērtējums šajā priekšmetā</label>
                        <select name="CElevel2" class="custom-select d-block w-100" id="state" required>
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
                    <input name="gdpr" type="checkbox" class="custom-control-input" id="gdpr">
                    <label class="custom-control-label" for="gdpr">Apstiprinu, ka vēlos, lai dati tiktu apstrādāti atbilstoši GDPR regulai</label>
                </div>
                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Iesniegt pieteikumu</button>
            </form>
        </div>
    </div>

@endsection