@extends('layouts.base')
@section('title', 'Services view')
@section('content')
    <h1>Services</h1>
    @component('_components.card')
        @slot('card_title', 'Service 1')
        @slot('card_content', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus tempore qui distinctio
            aliquid assumenda maiores ipsum eaque dolores, nostrum exercitationem iusto sit explicabo recusandae et vero amet
            aperiam, expedita sequi.')
    @endcomponent
    @component('_components.card')
        @slot('card_title', 'Service 2')
        @slot('card_content', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus tempore qui distinctio
                aliquid assumenda maiores ipsum eaque dolores, nostrum exercitationem iusto sit explicabo recusandae et vero amet
                aperiam, expedita sequi.')
    @endcomponent
    @component('_components.card')
        @slot('card_title', 'Service 3')
        @slot('card_content', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus tempore qui distinctio
               aliquid assumenda maiores ipsum eaque dolores, nostrum exercitationem iusto sit explicabo recusandae et vero amet
               aperiam, expedita sequi.')
    @endcomponent
    @component('_components.card')
        @slot('card_title', 'Service 4')
        @slot('card_content', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus tempore qui distinctio
               aliquid assumenda maiores ipsum eaque dolores, nostrum exercitationem iusto sit explicabo recusandae et vero amet
               aperiam, expedita sequi.')
    @endcomponent
    @component('_components.card')
        @slot('card_title', 'Service 5')
        @slot('card_content', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus tempore qui distinctio
        aliquid assumenda maiores ipsum eaque dolores, nostrum exercitationem iusto sit explicabo recusandae et vero amet
        aperiam, expedita sequi.')
    @endcomponent
@endsection
