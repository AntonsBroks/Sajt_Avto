@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

@extends('layouts.app')
@section('content')

    <link href="{{ asset('css/style1.css') }}" rel="stylesheet" type="text/css" >
    
    <div>
    <section>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                <div class="list-group-item list-group-item-primary"><h4> Order information</h4></div>
                   Model:  {{$car->model}}<br>
                   Color:  {{$car->color}}<br>
                   Mileage:  {{$car->mileage}}<br>
                   Price:  {{$car->price}} € <br>
                   Year:  {{$car->year}}<br>
                    @if ($car->automatic == 1) 
                        Automatic <br>
                    @endif
                    @if ($car->automatic == 0) 
                        Mechanic <br>
                    @endif
                        {{$car->condition}}<br>

                        @switch($car->id)
                        @case('1') <img src="{{  url('/img/11.PNG') }}" alt="foto"  class="photo"> @break
                        @case('2') <img src="{{  url('/img/12.PNG') }}" alt="foto"  class="photo"> @break
                        @case('3') <img src="{{  url('/img/9.png') }}"  alt="foto" class="photo"> @break
                        @case('4') <img src="{{  url('/img/10.PNG') }}"  alt="foto"  class="photo"> @break
                        @case('5') <img src="{{  url('/img/13.png') }}"  alt="foto"  class="photo"> @break
                        @case('6') <img src="{{  url('/img/17.PNG') }}"  alt="foto"  class="photo"> @break
                        @case('7') <img src="{{  url('/img/15.PNG') }}" alt="foto"  class="photo"> @break
                        @case('8') <img src="{{  url('/img/14.PNG') }}"  alt="foto" class="photo"> @break
                        @case('9') <img src="{{  url('/img/20.PNG') }}" alt="foto" class="photo"> @break
                        @case('10') <img src="{{  url('/img/21.PNG') }}" alt="foto"  class="photo"> @break
                        @case('11') <img src="{{  url('/img/18.PNG') }}" alt="foto"  class="photo"> @break
                        @case('12') <img src="{{  url('/img/19.PNG') }}" alt="foto"  class="photo"> @break
                        @case('13') <img src="{{  url('/img/24.PNG') }}"  alt="foto" class="photo"> @break
                        @case('14') <img src="{{  url('/img/25.PNG') }}" alt="foto"  class="photo"> @break
                        @case('15') <img src="{{  url('/img/22.PNG') }}"  alt="foto"  class="photo"> @break
                        @case('16') <img src="{{  url('/img/23.PNG') }}"  alt="foto" class="photo"> @break
                        @case('17') <img src="{{  url('/img/28.PNG') }}"  alt="foto"  class="photo"> @break
                        @case('18') <img src="{{  url('/img/29.PNG') }}"  alt="foto" class="photo"> @break
                        @case('19') <img src="{{  url('/img/26.PNG') }}"  alt="foto"  class="photo"> @break
                        @case('20') <img src="{{  url('/img/27.PNG') }}" alt="foto"  class="photo"> @break
                    @endswitch
                </div>
            </div>
            <div class="col-sm-8">
                <div class="card">
                        <div class="list-group-item list-group-item-primary"><h4>Order placing</h4></div>
                        <div class="list-group-item" >
                            {!! Form::open(array('action'=>'OrderController@store')) !!}
                            @csrf
                            <div class="form-group">
                                {{Form::label('name','Your name')}}
                                {{Form::text('name','',['class'=>'form-control','placeholder'=>'Name'])}}
                                @if ($errors->has('name'))
                                    <span >
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                                @endif
                            </div>
                            <div class="form-group">
                                {{Form::label('surname','Surname')}}
                                {{Form::text('surname','',['class'=>'form-control','placeholder'=>'Surname'])}}
                                @if ($errors->has('surname'))
                                    <span >
                                <strong>{{ $errors->first('surname') }}</strong>
                            </span>
                                @endif
                            </div>
                            <div class="form-group">

                                {{Form::label('address','Your address')}}
                                {{Form::text('address','',['class'=>'form-control','placeholder'=>'Address'])}}
                                @if ($errors->has('address'))
                                    <span>
                                <strong>{{ $errors->first('address') }}</strong>
                            </span>
                                @endif
                            </div>
                            <div class="form-group">
                                {{Form::label('phone','Your phone')}}
                                (+371) {{Form::text('phone','',['class'=>'form-control','placeholder'=>'Phone'])}}
                                @if ($errors->has('phone'))
                                    <span>
                                <strong>{{ $errors->first('phone') }}</strong>
                            </span>
                                @endif
                            </div>
                            <input type="hidden" name="car" value="{{$car->id}}" />
                            {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
                            {!!Form::close()!!}
                        </div>
                </div>
            </div>

        </div>
    </div>
    </section>


     
    <div class="footer">
        <h2>Contacts</h2>
        <p> Antons Broks </p>
        <p>antonbroks@inbox.lv</p>
      </div>

@endsection