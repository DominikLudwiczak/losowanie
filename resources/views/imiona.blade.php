@extends('layouts.app')

@section('content')
<div class="container center-align">
    <h4>Podaj imiona losujących</h4>
    <div class='row'>
        <div class='col m3'></div>
        <div class='input-field col s12 m6'>
            <form method='post' action="{{ route('losowanie') }}">
                @csrf
                @for($i=0; $i < session('ilosc'); $i++)
                    <input type='text' name='{{$i}}' placeholder='Imie nr.{{$i+1}}' class='center-align'>
                @endfor
                <br/><br/><button type='submit' class='btn'>Dalej</button>
            </form>
        </div>
    </div>
</div>
@endsection