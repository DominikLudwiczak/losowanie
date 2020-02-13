@extends('layouts.app')

@section('content')
<div class="container center-align">
    <h4>Wyniki losowania</h4>
    <div class='row'>
        <div class='col m2'></div>
        <div class='col s12 m8'>
            <table class='centered striped'>
                <thead>
                    <tr>
                        <td class='center-align'><b>L.p</b></td>
                        <td class='center-align'><b>Imię</b></td>
                        <td class='center-align'><b>Wylosowany</b></td>
                    </tr>
                </thead>
                <tbody>
                    @for($i=0; $i < session('ilosc'); $i++)
                        <tr>
                            <td>{{ $i+1 }}.</td>
                            <td>{{ $arr[$i] }}</td>
                            <td>{{ $arr2[$i] }}</td>
                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection