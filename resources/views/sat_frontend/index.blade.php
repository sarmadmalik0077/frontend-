@extends('layouts.template')

@section('custom_style')

@endsection()

@section('content')

    @component('sat_frontend.components.search-slider')
        Slider and search
    @endcomponent

    @component('sat_frontend.components.top-selling')
        top-selling
    @endcomponent

    @component('sat_frontend.components.recommended')
        Recommended
    @endcomponent

    @component('sat_frontend.components.explore-by-budget')
        Explore by Budget
    @endcomponent

    @component('sat_frontend.components.how-to-buy')
        How to Buy
    @endcomponent

    @component('sat_frontend.components.where-we-operate')
        Where we Operate
    @endcomponent

    @component('sat_frontend.components.car-makes')
        Car Makes
    @endcomponent

    @component('sat_frontend.components.best-seller-by-type')
        Best Seller by Type
    @endcomponent


@endsection()

@section('custom_js')

@endsection()