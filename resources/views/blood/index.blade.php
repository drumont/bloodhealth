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
                    <h3>Blood Bank {{$bloods->count()}}</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-offset-1 col-md-1">
            <div class="panel panel-default">
                <div class="panel-body text-center">
                    <h3>A</h3>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body text-center">
                    <h4>Blood Group: <strong>A</strong></h4>
                    <h5>Rhesus: <strong>Positif</strong></h5>
                    <h5>Blood Bag:  <strong> {{ \App\Blood::whereCenter_id(Auth::user()->center_id)->whereBlood_group('A')->
                    whereRhesus('positif')->count() }} </strong> </h5>
                    <div>
                        <div class="col-md-6">60 CC: <strong>{{ \App\Blood::whereCenter_id(Auth::user()->center_id)->
                        whereBlood_group('A')->whereRhesus('positif')->whereQuantity('adult-60CC')->count() }}</strong></div>
                        <div class="col-md-6">30 CC: <strong>{{ \App\Blood::whereCenter_id(Auth::user()->center_id)->
                        whereBlood_group('A')->whereRhesus('positif')->whereQuantity('pediatry-30CC')->count() }}</strong></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body text-center">
                    <h4>Blood Group: <strong>A</strong></h4>
                    <h5>Rhesus: <strong>Negatif</strong></h5>
                    <h5>Blood Bag: <strong> {{ \App\Blood::whereCenter_id(Auth::user()->center_id)->
                    whereBlood_group('A')->whereRhesus('negatif')->count() }} </strong> </h5>
                    <div>
                        <div class="col-md-6">60 CC: <strong>{{ \App\Blood::whereCenter_id(Auth::user()->center_id)->
                        whereBlood_group('A')->whereRhesus('negatif')->whereQuantity('adult-60CC')->count() }}</strong></div>
                        <div class="col-md-6">30 CC: <strong>{{ \App\Blood::whereCenter_id(Auth::user()->center_id)->
                        whereBlood_group('A')->whereRhesus('negatif')->whereQuantity('pediatry-30CC')->count() }}</strong></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-offset-1 col-md-1">
            <div class="panel panel-default">
                <div class="panel-body text-center">
                    <h3>B</h3>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body text-center">
                    <h4>Blood Group: <strong>B</strong></h4>
                    <h5>Rhesus: <strong>Positif</strong></h5>
                    <h5>Blood Bag: <strong> {{ \App\Blood::whereCenter_id(Auth::user()->center_id)->
                    whereBlood_group('B')->whereRhesus('positif')->count() }} </strong></h5>
                    <div>
                        <div class="col-md-6">
                            60 CC:
                            <strong>{{ \App\Blood::whereCenter_id(Auth::user()->center_id)->
                            whereBlood_group('B')->whereRhesus('positif')->whereQuantity('adult-60CC')->count() }}
                            </strong>
                        </div>
                        <div class="col-md-6">30 CC: <strong>{{ \App\Blood::whereCenter_id(Auth::user()->center_id)->
                        whereBlood_group('B')->whereRhesus('positif')
                        ->whereQuantity('pediatry-30CC')->count() }}</strong></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body text-center">
                    <h4>Blood Group: <strong>B</strong></h4>
                    <h5>Rhesus: <strong>Negatif</strong></h5>
                    <h5>Blood Bag: <strong> {{ \App\Blood::whereCenter_id(Auth::user()->center_id)->
                    whereBlood_group('B')->whereRhesus('negatif')->count() }} </strong></h5>
                    <div>
                        <div class="col-md-6">60 CC: <strong>{{ \App\Blood::whereCenter_id(Auth::user()->center_id)->
                        whereBlood_group('B')->whereRhesus('negatif')->whereQuantity('adult-60CC')->count() }}</strong></div>
                        <div class="col-md-6">30 CC: <strong>{{ \App\Blood::whereCenter_id(Auth::user()->center_id)->
                        whereBlood_group('B')->whereRhesus('negatif')->whereQuantity('pediatry-60CC')->count() }}</strong></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-offset-1 col-md-1">
            <div class="panel panel-default">
                <div class="panel-body text-center">
                    <h3>O</h3>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body text-center">
                    <h4>Blood Group: <strong>O</strong></h4>
                    <h5>Rhesus: <strong>Positif</strong></h5>
                    <h5>Blood Bag:  <strong> {{ \App\Blood::whereCenter_id(Auth::user()->center_id)->
                    whereBlood_group('O')->whereRhesus('positif')->count() }} </strong> </h5>
                    <div>
                        <div class="col-md-6">60 CC: <strong>{{ \App\Blood::whereCenter_id(Auth::user()->center_id)->
                        whereBlood_group('O')->whereRhesus('positif')->whereQuantity('adult-60CC')->count() }}</strong></div>
                        <div class="col-md-6">30 CC: <strong>{{ \App\Blood::whereCenter_id(Auth::user()->center_id)->
                        whereBlood_group('O')->whereRhesus('positif')->whereQuantity('pediatry-30CC')->count() }}</strong></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body text-center">
                    <h4>Blood Group: <strong>O</strong></h4>
                    <h5>Rhesus: <strong>Negatif</strong></h5>
                    <h5>Blood Bag: <strong> {{ \App\Blood::whereCenter_id(Auth::user()->center_id)->
                    whereBlood_group('O')->whereRhesus('negatif')->count() }} </strong> </h5>
                    <div>
                        <div class="col-md-6">60 CC: <strong>{{ \App\Blood::whereCenter_id(Auth::user()->center_id)->
                        whereBlood_group('O')->whereRhesus('negatif')->whereQuantity('adult-60CC')->count() }}</strong></div>
                        <div class="col-md-6">30 CC: <strong>{{ \App\Blood::whereCenter_id(Auth::user()->center_id)->
                        whereBlood_group('O')->whereRhesus('negatif')->whereQuantity('pediatry-30CC')->count() }}</strong></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-offset-1 col-md-1">
            <div class="panel panel-default">
                <div class="panel-body text-center">
                    <h3>AB</h3>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body text-center">
                    <h4>Blood Group: <strong>AB</strong></h4>
                    <h5>Rhesus: <strong>Positif</strong></h5>
                    <h5>Blood Bag: <strong> {{ \App\Blood::whereCenter_id(Auth::user()->center_id)->
                    whereBlood_group('AB')->whereRhesus('positif')->count() }} </strong></h5>
                    <div>
                        <div class="col-md-6">60 CC: <strong>{{ \App\Blood::whereCenter_id(Auth::user()->center_id)->
                        whereBlood_group('AB')->whereRhesus('positif')->whereQuantity('adult-60CC')->count() }}</strong></div>
                        <div class="col-md-6">30 CC: <strong>{{ \App\Blood::whereCenter_id(Auth::user()->center_id)->
                        whereBlood_group('AB')->whereRhesus('positif')->whereQuantity('pediatry-60CC')->count() }}</strong></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body text-center">
                    <h4>Blood Group: <strong>AB</strong></h4>
                    <h5>Rhesus: <strong>Negatif</strong></h5>
                    <h5>Blood Bag: <strong> {{ \App\Blood::whereCenter_id(Auth::user()->center_id)->
                    whereBlood_group('AB')->whereRhesus('negatif')->count() }} </strong></h5>
                    <div>
                        <div class="col-md-6">60 CC: <strong>{{ \App\Blood::whereCenter_id(Auth::user()->center_id)->
                        whereBlood_group('AB')->whereRhesus('negatif')->whereQuantity('adult-60CC')->count() }}</strong></div>
                        <div class="col-md-6">30 CC: <strong>{{ \App\Blood::whereCenter_id(Auth::user()->center_id)->
                        whereBlood_group('AB')->whereRhesus('negatif')->whereQuantity('pediatry-60CC')->count() }}</strong></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection