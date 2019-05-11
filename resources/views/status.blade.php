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
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Pieteikuma statuss</span>
            </h4>

            <table class="table table-striped table-bordered">
                <tbody>
                <tr>
                    <td>Reģistrācijas datums</td>
                    <td>Studiju programma</td>
                    <td>Budžetu vietu skaits programmā</td>
                    <td>Vieta reitingā</td>
                </tr>
                <tr>
                    <td>{{ date('now') }}</td>
                    <td>Socilālais darbinieks</td>
                    <td>6</td>
                    <td>
                        <strong style="color:green">12</strong>
                    </td>
                </tr>
                </tbody>
            </table>
            {{-- Ja ir tikai viena programma --}}
            <a class="btn btn-primary" href="#">Pieteikties vēl vienā programmā</a>

            <hr/>

            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Iesniegtā pieteikuma dati</span>
            </h4>

            <table class="table table-bordered">
                <tbody>
                <tr>
                    <td><strong>Vārds, uzvārds, personas kods</strong></td>
                    <td>Juris Ozols , xxx-222</td>
                </tr>
                <tr>
                    <td><strong>E-pasts</strong></td>
                    <td>xx</td>
                </tr>
                <tr>
                    <td><strong>Eksāmens 1</strong> </td>
                    <td>Latviešu valoda, A</td>
                </tr>
                <tr>
                    <td><strong>Eksāmens 2</strong> </td>
                    <td>Matemātika, C</td>
                </tr>
                <tr>
                    <td><strong>Atestāta vidējā atzīme</strong> </td>
                    <td>8.8</td>
                </tr>
                </tbody>
            </table>


    </div>

    </div>
@endsection