@extends('layouts.frontend.app')

@section('content')
    <!--                  start about
                                ************************************************************************
                                ************************************************************************   sit amet consectetur adipisicing
                                ************************************************************************ -->

    <div class="small-container">
        <div class="row">
            <div class="cards-container containerr">
                @foreach ($abouts as $about)
                    <div class="card">

                        <h2></h2>

                        <img src="{{ asset('images/about/' . $about->image) }}" alt="">
                        <div class="list-wrapper">

                            <div class="lists">
                                <!-- <div class="title"> -->
                                <h3 style="text-align: center">{{ $about->title }}</h3>
                                <!-- </div> -->
                                <p style="text-align: center">
                                   
                                    @php
                                        $text = $about->description;
                                        $textLength = mb_strlen($text);
                                        $chunkSize = 30;

                                        for ($i = 0; $i < $textLength; $i += $chunkSize) {
                                            $chunk = mb_substr($text, $i, $chunkSize);
                                            echo $chunk . '<br>';
                                        }
                                    @endphp

                             
                                    </p>
                            </div>


                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
