@extends('layouts.app')

@section('content')
<div class="container center-align">
    <div class='row'>
        <div class='col m3 hide-on-small-only'></div>
        <div class='col s12 m6'>
            <h4>Podaj ilość losujących</h4>
            <div class='col s3'></div>
            <div class='input-field col s6'>
                <form method='post' action="{{ route('imiona') }}">
                    @csrf
                    <select name='ilosc'>
                        <option value='' disabled selected>Ilość osób</option>
                        @for($i=1; $i < 31; $i++)
                            <?php echo "<option value='$i'>$i</option>";?>
                        @endfor
                    </select>
                    <br/><button class='btn' type='submit'>Dalej</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection