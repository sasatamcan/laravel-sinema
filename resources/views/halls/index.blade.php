@extends('layouts.app')
@section('content')
    <section class="centered">
        <h3>Halls list</h3>
        <table>
            <tr>
                <td><input type="checkbox"></td>
                <td><input type="checkbox"></td>
                <td><input type="checkbox"></td>
            </tr>
            <tr>
                <td><input type="checkbox"></td>
                <td><input type="checkbox"></td>
                <td><input type="checkbox"></td>
            </tr>
        </table>
        <div class="movie hall-list">
            @php
                echo "<table>";
                for($i=0; $i <= $placeModel->countMaxRow(1); $i++){
                    echo "<tr>";
                    for($j=0; $j <=  $placeModel->countMaxColumn(2); $j++){
                        if($i % 2 == 0){
                            if($j % 2 == 0){
                                echo '<td style="background-color: pink; width: 10px; height:10px"></td>';
                            } else {
                               echo '<td style="background-color: black; width: 10px; height:10px"></td>';
                            }
                        } else {
                           if($j % 2 == 0){
                                echo '<td style="background-color: black; width: 10px; height:10px"></td>';
                            } else {
                               echo '<td style="background-color: pink; width: 10px; height:10px"></td>';
                            }
                        }
                    }
                    echo "</tr>";
                }
                echo "<table>"
            @endphp
        @foreach($hallList as $hall)
            <div class="hall_item">
                <div><h2>{{$hall->name}}</h2></div>
                <div class="hall_item__checkbox">
                    <table border="1px">
{{--                        @foreach($placeModel->getPlaceByHallId($hall->id) as $place)--}}

                            @php
                                   for($i = 1; $i <= $placeModel->countMaxRow($hall->id); $i++):
                             @endphp
                        <tr>
                            @php
                                for($i = 1; $i <= $placeModel->countMaxColumn($hall->id); $i++):
                            @endphp
                            <td>
                                1
                            </td>
                            @php
                                endfor;
                            @endphp
{{--                                <input type="checkbox" name="place[{{$hall->id}}][{{$place->id}}]">--}}
                            </tr>
                            @php
                               endfor;
                            @endphp
{{--                            @endforeach--}}
                    </table>
                </div>
            </div>
         @endforeach

        </div>
        <style>
            .hall-list{
                display: grid;
                grid-template-columns: 1fr 1fr;
                grid-gap: 6vw;
            }
            .hall_item h2{
                color: #ffffff;
            }
            .hall_item__checkbox{
                display: flex;
                justify-content: space-between;
                align-items: center;
                flex-wrap: wrap;
            }
        </style>



    </section>
@endsection