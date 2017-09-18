@extends(env('THEME').'.layouts.site')

@section('header')
    @include(env('THEME').'.indexHeader')
@endsection

@section('content')

    <div class="car-list content-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-xs-12">
                    @include(env('THEME').'.indexSideBar')
                </div>
                <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    <div id="content">
                        <div id="main-table">
                            @include(env('THEME').'.indexContent')
                        </div>
                        <div id="hide-table" style="display: block">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('footer')
    @include(env('THEME').'.contactPopup')
    @include(env('THEME').'.aboutPopup')
    @include(env('THEME').'.layouts.footer')
@endsection



