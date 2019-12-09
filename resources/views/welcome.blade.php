@extends('layouts.main')
@section('title', 'Home')

@section('content')

   <header class="jumbotron my-4">
        <h1 class="display-3">A Warm Welcome!</h1>
        <p class="lead">View all of our menus and choose your favorite menu.</p>
        <a href="/menus" class="btn btn-primary btn-lg">View Menus</a>
      </header>

    <div class="container">
        <div class="row row-content align-items-center">
            <div class="col-sm-4 push-sm-8 col-md-3 push-md-9">
                <h3>Our Lipsmacking Culinary Creations</h3>
            </div>
            <div class="col-sm pull-sm-4 col-md pull-md-3">
                <div class="media">
                    <img class="d-flex mr-3 img-thumbnail align-self-center"
                         src="https://drop.ndtv.com/albums/COOKS/pasta-vegetarian/pastaveg_640x480.jpg" alt="Uthappizza">
                    <div class="media-body">
                        <h2 class="mt-0">Pasta<span class="badge badge-pill badge-default"><span>&#8377;</span>100.00</span></h2>
                        <p class="hidden-xs-down">A unique combination of Italian Pasta                         topped with Cerignola olives, ripe vine
                          cherry tomatoes, Vidalia onion, Guntur chillies and
                          Buffalo Paneer.</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="row row-content align-items-center">
            <div class="col-sm-4 col-md-3">
                <h3>This Month's Promotions</h3>
            </div>
            <div class="col-sm col-md-">
                <h2>Weekend Grand Buffet</h2>
                <p>Featuring mouthwatering combinations with a choice of five different salads, six enticing appetizers, six main entrees and five choicest desserts. Free flowing bubbly and soft drinks. All for just <span>&#8377;</span> 399 per person </p>
            </div>
        </div>

       
    </div>

   @endsection


