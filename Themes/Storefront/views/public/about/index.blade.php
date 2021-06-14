@extends('public.layout')

<!-- @section('title', trans('storefront::compare.compare')) -->

@section('content')
<div id="myCarousel" class="carousel slide">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="" contenteditable="false"></li>
        <li data-target="#myCarousel" data-slide-to="1" class="active" contenteditable="false"></li>
        <li data-target="#myCarousel" data-slide-to="2" class="" contenteditable="false"></li>
    </ol>
    <div class="carousel-inner">
        <div class="item" style="">
            <img src="//placehold.it/1024x600/556B2F&text=First+Slide" alt="" class="">
            <div class="carousel-caption">
                <h4 class="">First Slide Title</h4>
                <p class="">
                   Description for First Slide, this First Slide.
                </p>
            </div>
        </div>
        <div class="item active">
            <img src="//placehold.it/1024x600/B05404&text=Second+Slide" alt="" class="">
            <div class="carousel-caption">
                <h4 class="">Second Slide Title</h4>

                <p class="">
                   Description for Second Slide, this is Second Slide.
                </p>
            </div>
        </div>
        <div class="item" style="">
            <img src="//placehold.it/1024x600/3333bb&text=Third+Slide" alt="" class="">
            <div class="carousel-caption">
                <h4 class="">Third Slide Title</h4>

                            <p class="">
                   Description for Third Slide, this is Third Slide.
                </p>
            </div>
        </div>
    </div>    

    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>

    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>


</div>
@endsection
