@extends('layout.master')

@section('content')

    <div class="py-5">
        <h2>Papildreģistrācija studijām </h2>
    </div>

    <div class="row">
        <div class="col-md-12 order-md-1">
            <h4 class="mb-3">Pieteikuma forma</h4>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Kļūda!</strong> Lūdzu, izvēlieties kādā programmā iesniegt datus
                </div>
            @endif

            <form method="post" action="{{ url('application/' . $access) }}" class="needs-validation" novalidate>
                {{ csrf_field() }}
                <input name="participant" type="hidden" value="{{ $participant->id }}">
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-info" role="alert">
                            Izvēlieties kādu no aktīvajām studiju programmām
                        </div>
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
                    <div class="col-md-4 mb-3">
                        <label for="firstName">Vārds</label>
                        <input name="name" type="text" class="form-control" id="name" placeholder="Vārds" value="{{ $participant->name }}"  disabled>

                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="lastName">Uzvārds</label>
                        <input name="surname" type="text" class="form-control" id="surname" placeholder="Uzvārds" value="{{ $participant->surname }}" disabled>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="lastName">Personas kods</label>
                        <input name="pcode" type="text" class="form-control" id="surname" placeholder="pcode" value="{{ $participant->pcode }}" disabled>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="average">Vidējā atzīme atestātā beidzot vidusskolu</label>
                        <input  name="average" type="text" class="form-control" value="{{ $participant->average }}" disabled>

                    </div>
                </div>
                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Papildināt pieteikumu</button>
            </form>
        </div>
    </div>

@endsection