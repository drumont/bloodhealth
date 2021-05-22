@extends('layouts.app')
<style>
    .panel-heading{

        background:url({{ asset('img/bg-pattern.png') }}),#7b4397;
        background:url({{ asset('img/bg-pattern.png') }}),-webkit-linear-gradient(to left,#7b4397,#dc2430);
        background:url({{ asset('img/bg-pattern.png') }}),linear-gradient(to left,#7b4397,#dc2430);
    }
    .btn-primary:hover{

        background:url({{ asset('img/bg-pattern.png') }}),#7b4397;
        background:url({{ asset('img/bg-pattern.png') }}),-webkit-linear-gradient(to left,#7b4397,#dc2430);
        background:url({{ asset('img/bg-pattern.png') }}),linear-gradient(to left,#7b4397,#dc2430);
    }
</style>
@section('content')
    <div class="row">
        <div class="col-md-offset-1 col-md-10">
            <div class="panel panel-default">
                <div class="panel-body text-center">
                    <h3>Form to add a blood bag</h3>
                </div>
            </div>
        </div>
    </div>
    <form class="form-horizontal" role="form" method="POST" action="/blood">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-md-offset-1 col-md-5">
                <div class="panel panel-default">
                    <div class="panel-body text-center">
                        <div>
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"/>
                            <input type="hidden" name="center_id" value="{{ Auth::user()->center_id }}"/>
                            <div class="form-group{{ $errors->has('quantity') ? ' has-error' : '' }}">
                                <label for="quantity" class="col-md-4 control-label">Quantity</label>

                                <div class="col-md-6">
                                    <select id="quantity" class="form-control" name="quantity" required autofocus>
                                        <option value="adult-60CC">Adult-60CC</option>
                                        <option value="pediatry-30CC">Pediatry-30CC</option>
                                    </select>

                                    @if ($errors->has('quantity'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('quantity') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="form-group{{ $errors->has('rhesus') ? ' has-error' : '' }}">
                                <label for="rhesus" class="col-md-4 control-label">Rhesus</label>

                                <div class="col-md-6">
                                    <select id="rhesus" class="form-control" name="rhesus" required autofocus>
                                        <option value="positif">positif</option>
                                        <option value="negatif">negatif</option>
                                    </select>

                                    @if ($errors->has('rhesus'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('rhesus') }}</strong>
                                </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="panel panel-default">
                    <div class="panel-body text-center">
                        <div>
                            <div class="form-group{{ $errors->has('blood_group') ? ' has-error' : '' }}">
                                <label for="blood_group" class="col-md-4 control-label">Blood Group</label>

                                <div class="col-md-6">
                                    <select id="blood_group" class="form-control" name="blood_group" required autofocus>
                                        <option value="AB">AB</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="O">O</option>
                                    </select>

                                    @if ($errors->has('blood_group'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('blood_group') }}</strong>
                                </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="form-group{{ $errors->has('number') ? ' has-error' : '' }}">
                                <label for="number" class="col-md-4 control-label">Number of blood bag</label>

                                <div class="col-md-6">
                                    <input id="number" type="number" class="form-control" name="number" required autofocus>

                                    @if ($errors->has('number'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('number') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Create
                    </button>
                </div>
            </div>
        </div>
    </form>
@endsection