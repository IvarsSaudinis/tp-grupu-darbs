@extends('layout.master')

@section('content')

    <div class="py-5">
        <h2>Reģistrācija studijām </h2>
        <p class="lead">
            Pieteikuma forma studijām nepieciešama, lai elektroniski pieteiktos studijām. Šī forma ir fiktīva un izgatavota studija darba ietvaros.
            <a href="{{ url('/status') }}">Esi jau reģistrējies? Pārbaudi sava pieteikuma statusu!</a>
        </p>
    </div>

    <div class="row">

        <div class="col-md-12 order-md-1">
            <h4 class="mb-3">Pieteikuma forma</h4>
            @if ($errors->any())
                <div class="alert alert-danger">
                  <strong>Kļūda!</strong> Lūdzu, pārbaudiet vai ir aizpildīti korekti visi formas dati
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
                        <select name="program" class="custom-select d-block w-100 @if($errors->has('program')) is-invalid @endif" id="program" required>
                            <option value="" disabled selected>Izvēle...</option>
                            @foreach($programs as $program)
                                <option @if(old('program')==$program->id) selected @endif  value="{{ $program->id }}">{{ $program->name }}</option>
                            @endforeach
                        </select>
                        @if($errors->has('program'))
                            <div class="invalid-feedback">
                                {{ $errors->first('program') }}
                            </div>
                        @endif
                    </div>
                </div>
                <hr/>
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-secondary" role="alert">
                           Ievadiet korektu informāciju par sekmēm. Līguma slēgšanas brīdī būs nepieciešams uzrādīt dokumentu oriģinālus.
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="firstName">Vārds</label>
                        <input name="name" type="text" class="form-control  @if($errors->has('name')) is-invalid @endif" id="name" placeholder="Vārds" value="{{ old('name') }}" required>
                            @if($errors->has('name'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('name') }}
                                </div>
                           @endif
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="lastName">Uzvārds</label>
                        <input name="surname" type="text" class="form-control  @if($errors->has('surname')) is-invalid @endif" id="surname" placeholder="Uzvārds" value="{{ old('surname') }}" required>
                        @if($errors->has('surname'))
                            <div class="invalid-feedback">
                                {{ $errors->first('surname') }}
                            </div>
                        @endif
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="lastName">Personas kods</label>
                        <input name="pcode" type="text" class="form-control @if($errors->has('pcode')) is-invalid @endif" id="pcode" placeholder="Personas kods" value="{{ old('pcode') }}" required>
                        @if($errors->has('pcode'))
                            <div class="invalid-feedback">
                                {{ $errors->first('pcode') }}
                            </div>
                        @endif
                    </div>


                </div>

                <div class="mb-3">
                    <label for="email">E-pasts</label>
                    <input name="email" type="email" class="form-control @if($errors->has('email')) is-invalid @endif" id="email" value="{{ old('email') }}" placeholder="qwerty.lol366@gmail.com">
                    @if($errors->has('email'))
                        <div class="invalid-feedback">
                            {{ $errors->first('email') }}
                        </div>
                    @endif
                    <small id="emailHelp" class="form-text text-muted">Uz norādīto e-pastu tiks nosūtīts saite pieteikuma statusa aplūkošanai </small>
                </div>


                <hr/>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="state">Priekšmets</label>
                        <select name="p1" class="custom-select d-block0 @if($errors->has('p1')) is-invalid @endif" id="state" required>
                            <option value="">Izvēle...</option>
                            @foreach($subjects as $subject)
                                <option @if(old('p1')==$subject->id) selected @endif value="{{ $subject->id }}">{{ $subject->name }}</option>
                            @endforeach
                        </select>
                        @if($errors->has('p1'))
                            <div class="invalid-feedback">
                                {{ $errors->first('p1') }}
                            </div>
                        @endif
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="state">CE vērtējums šajā priekšmetā</label>
                        <select name="CElevel1" class="custom-select d-block w-100 @if($errors->has('CElevel1')) is-invalid @endif" id="state" required>
                            <option value="">Līmeņa izvēle...</option>
                            <option @if(old('CElevel1')=='A') selected @endif>A</option>
                            <option @if(old('CElevel1')=='B') selected @endif>B</option>
                            <option @if(old('CElevel1')=='C') selected @endif>C</option>
                            <option @if(old('CElevel1')=='D') selected @endif>D</option>
                            <option @if(old('CElevel1')=='E') selected @endif>E</option>
                            <option @if(old('CElevel1')=='F') selected @endif>F</option>
                        </select>
                        @if($errors->has('CElevel1'))
                            <div class="invalid-feedback">
                                {{ $errors->first('CElevel1') }}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="state">Priekšmets</label>
                        <select name="p2" class="custom-select d-block @if($errors->has('p2')) is-invalid @endif " id="state" required>
                            <option>Izvēle</option>
                            @foreach($subjects as $subject)
                                <option @if(old('p2')==$subject->id) selected @endif value="{{ $subject->id }}">{{ $subject->name }}</option>
                            @endforeach
                        </select>
                        @if($errors->has('p2'))
                            <div class="invalid-feedback">
                                {{ $errors->first('p2') }}
                            </div>
                        @endif

                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="state">CE vērtējums šajā priekšmetā</label>
                        <select name="CElevel2" class="custom-select d-block w-100 @if($errors->has('CElevel2')) is-invalid @endif" id="state" required>
                            <option value="">Līmeņa izvēle...</option>
                            <option @if(old('CElevel2')=='A') selected @endif>A</option>
                            <option @if(old('CElevel2')=='B') selected @endif>B</option>
                            <option @if(old('CElevel2')=='C') selected @endif>C</option>
                            <option @if(old('CElevel2')=='D') selected @endif>D</option>
                            <option @if(old('CElevel2')=='E') selected @endif>E</option>
                            <option @if(old('CElevel2')=='F') selected @endif>F</option>
                        </select>
                        @if($errors->has('CElevel2'))
                            <div class="invalid-feedback">
                                {{ $errors->first('CElevel2') }}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="average">Vidējā atzīme atestātā beidzot vidusskolu</label>
                        <input  name="average" type="text" class="form-control @if($errors->has('average')) is-invalid @endif" id="name" placeholder="4.1" value="{{ old('average') }}" required>
                        @if($errors->has('average'))
                            <div class="invalid-feedback">
                                {{ $errors->first('average') }}
                            </div>
                        @endif
                    </div>
                </div>
                <hr class="mb-4">
                <div class="custom-control custom-checkbox">
                    <input name="gdpr" type="checkbox" class="custom-control-input @if($errors->has('gdpr')) is-invalid @endif" id="gdpr">
                    <label class="custom-control-label" for="gdpr">Apstiprinu, ka vēlos, lai dati tiktu apstrādāti atbilstoši GDPR regulai</label>
                    @if($errors->has('gdpr'))
                        <div class="invalid-feedback">
                            {{ $errors->first('gdpr') }}
                        </div>
                    @endif
                </div>
                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Iesniegt pieteikumu</button>
            </form>
        </div>
    </div>

@endsection