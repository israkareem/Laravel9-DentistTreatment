
@extends('layouts.frontbase')

@section('title', 'Frequently Asked Questions | '.$setting->title)
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
@section('content')

    <div class="container">
        <div class="row">
            <h1 style="margin-left: 200px">Frequently Asked Questions</h1>

            @foreach($datalist as $rs)
                <div class="card">
                    <div class="card-header">
                        <a class="card-link" data-toggle="collapse" href="#collapse{{$loop->iteration}}">
                            {{$rs->question}}</a>
                    </div>
                    <div>
                        <div id="collapse{{$loop->iteration}}" class="collapse @once show @endonce" data-parent="#accordion">
                            <div class="card-body">
                                {!!$rs->answer!!}
                            </div>
                        </div>


                        @endforeach
                    </div>

                </div>
        </div>
    </div>

@endsection
