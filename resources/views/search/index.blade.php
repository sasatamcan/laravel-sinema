@extends('layouts.app')
@section('title' ,'Search')
@section('content')
    <section class="centered">
        <div>
            @if(count($result['category'])>0)
                <h2>Категории </h2>
        @foreach ($result['category'] as $res)
            <div class="mov">
                <a href="#">
                    <h2 class="movietitle"> {{ $res->name }}</h2>
                </a>
            </div>
        @endforeach
        </div>

            {{ $result['category']->links() }}
        @endif

        @if(count($result['films'])>0)
            <h2>Фильми </h2>
        @foreach ($result['films'] as $res)
            <div class="mov">
                <a href="#">
                    <h2 class="movietitle"> {{ $res->name }}</h2>
                </a>
            </div>
            @endforeach
            </div>

            {{ $result['films']->links() }}
                @endif

    </section>
@endsection

