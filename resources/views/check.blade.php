@extends('layout.master')

@section('content')

    <div class="py-5 text-center">

        <h2>Reģistrācijas statusa pārbaude</h2>

    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-info">
                Ievadiet unikālo saiti, ko saņēmāt e-pastā vai saglabājāt iepriekš
            </div>
            <form  action="{{ url('status') }}" method="post">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col">
                        <input name="access" type="text" class="form-control form-control-lg" placeholder="Unikālais kods">
                    </div>
                    <div class="col">
                        <button class="btn btn-primary btn-lg" type="submit">Pārbaudīt</button>
                    </div>
                </div>
            </form>
        </div>

    </div>

    <div class="row">
        <div class="col-md-12">

            <hr/>

            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Statistikas dati</span>
            </h4>

            <table class="table table-bordered">
                <tbody>
                <tr>
                    <td><strong>Kopējais pieteikumu skaits</strong></td>
                    <td> {{ $total }}    </td>
                </tr>
                <tr>
                    <td><strong>Populārākās programmas</strong></td>
                    <td>
                            @foreach($popular as $p)
                              <p>
                               {{ $loop->iteration }}.   {{ $p->program->name }}
                              </p>
                            @endforeach

                    </td>
                </tr>
                </tbody>
            </table>


        </div>

    </div>
@endsection