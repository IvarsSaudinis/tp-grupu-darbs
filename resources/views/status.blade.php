@extends('layout.master')

@section('content')

    <div class="py-5 text-center">

        <h2>Reģistrācija apstiprināta</h2>
        <p class="lead">
            Šajā sadaļā ir iespējams aplūkot aktuālos pieteikumu datus. Lūdzu, ņemiet vērā, ka pieteikumu skaits
            var palielināties un tas var ietekmēt šī pieteikuma reitingu. Pieteikšanās studijām noslēgsies
            <span title="Pēc divām nedēļām">{{ (new \Carbon\Carbon('now'))->addWeeks(2) }}</span>.
            Pēc šī termiņa tiks publiskoti pieteikumu rezultāti.
        </p>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-secondary" role="alert">
                Saglabā šo saiti vēlākai pieteikuma aplūkošanai
            </div>
            <div class="form-group">
                <input type="text" class="form-control form-control-lg" id="url" readonly value="{{ url('/status/' . $access) }}">
            </div>
        </div>
    </div>

    <hr/>

    <div class="row">
        <div class="col-md-12">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Pieteikuma statuss</span>
            </h4>

            @foreach($participant->applications as $appl)
            <table class="table table-striped table-bordered">
                <tbody>
                <tr>
                    <td>Reģistrācijas datums</td>
                    <td>Studiju programma</td>
                    <td>Budžeta vietas</td>
                    <td>Semestra maksa</td>
                    <td>Vieta reitingā</td>
                </tr>
                <tr>
                    <td>{{ $appl->created_at }}</td>
                    <td><strong>{{ $appl->program->name}}</strong></td>
                    <td>{{ $appl->program->budget_count}}</td>
                    <td>€ {{ $appl->program->price}}</td>
                    <td>
                        <strong style="color:green">12</strong>
                    </td>
                </tr>
                </tbody>
            </table>
            @endforeach
            {{-- Ja ir tikai viena programma --}}

           {{-- <a class="btn btn-primary" href="{{ url('/application/' . $access) }}">Pieteikties vēl vienā programmā</a>--}}

            <hr/>

            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Iesniegtā pieteikuma dati</span>
            </h4>

            <table class="table table-bordered">
                <tbody>
                <tr>
                    <td><strong>Vārds, uzvārds, personas kods</strong></td>
                    <td> {{ $participant->name }} {{ $participant->surname }}, {{ $participant->pcode }}   </td>
                </tr>
                <tr>
                    <td><strong>E-pasts</strong></td>
                    <td>{{ $participant->email  }}</td>
                </tr>
                <tr>
                    <td><strong>Eksāmens 1</strong> </td>
                    <td> {{   $participant->program_first->name or ''  }}, <strong>{{ $participant->CElevel1 }}  </strong>  </td>
                </tr>
                <tr>
                    <td><strong>Eksāmens 2</strong> </td>
                    <td> {{   $participant->program_second->name or ''  }}, <strong>{{ $participant->CElevel2 }} </strong>    </td>
                </tr>
                <tr>
                    <td><strong>Atestāta vidējā atzīme</strong> </td>
                    <td>{{ $participant->average }} </td>
                </tr>
                </tbody>
            </table>


    </div>

    </div>
@endsection