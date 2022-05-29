
@extends('layouts.frontbase')

@section('title', $data->title)




@section('content')

    <style>
        .checked {
            color: orange !important;
        }
    </style>
<div class="container">
    <div class="row" style="margin-bottom: 200px;">
        <div class="col-6">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="height: 700px;">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{\Illuminate\Support\Facades\Storage::url($data->image)}}" class="d-block w-100" alt="{{$data->title}}" style="height: 800px;">
                    </div>

                    @foreach($images as $rs)
                        <div class="carousel-item">
                            <img src="{{Storage::url($rs->image)}}" class="d-block w-100" alt="{{$rs->title}}">
                        </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-6">
            <h4>{{$data->title}}</h4>
            <h5>{{$data->price}}</h5>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            @php
            $average = $data->comment->average('rate');
            @endphp

            <span class="fa fa-star @if($average> 0) checked @endif"></span>
            <span class="fa fa-star @if($average> 1) checked @endif"></span>
            <span class="fa fa-star @if($average > 2) checked @endif"></span>
            <span class="fa fa-star @if($average > 3) checked @endif"></span>
            <span class="fa fa-star @if($average > 4) checked @endif"></span>
            <a href="#comments">{{$data->comment->count('id')}}/{{number_format($average,2)}} - Comment(s)/Add Comment</a>


            <p>{!!$data->description!!}</p>


        </div>
    </div>
  <style>
      .navbar-nav{
          width: 100%;
      }

      @media(min-width:568px){
          .end{
              margin-left: auto;
          }
      }

      @media(max-width:768px){
          #post{
              width: 100%;
          }
      }
      #clicked{
          padding-top: 1px;
          padding-bottom: 1px;
          text-align: center;
          width: 100%;
          background-color: #ecb21f;
          border-color: #a88734 #9c7e31 #846a29;
          color: #444444;
          border-width: 1px;
          border-style: solid;
          border-radius: 13px;
      }

      #profile{
          background-color: unset;

      }

      #post{
          margin: 10px;
          padding: 6px;
          padding-top: 2px;
          padding-bottom: 2px;
          text-align: center;
          border: 1px solid #deec1f;
          border-width: 1px;
          border-style: solid;
          border-radius: 13px;
          width: 50%;
      }

      #nav-items li a,#profile{
          text-decoration: none;
          color: rgb(224, 219, 219);
      }


      .comments{
          margin-top: 5%;
          margin-left: 20px;
      }

      .darker{
          border: 1px solid #deec1f;
          float: right;
          border-radius: 5px;
          padding-left: 40px;
          padding-right: 30px;
          padding-top: 10px;
      }

      .comment{
          border: 1px solid rgb(52, 52, 52);
          float: left;
          border-radius: 5px;
          padding-left: 40px;
          padding-right: 30px;
          padding-top: 10px;

      }
      .comment h4,.comment span,.darker h4,.darker span{
          display: inline;
      }

      .comment p,.comment span,.darker p,.darker span{
          color: rgb(184, 183, 183);
      }

      h1,h4{
          font-weight: bold;
      }
      label{
          color: rgb(212, 208, 208);
      }

      #align-form{
          margin-top: 20px;
      }
      .form-group p a{
          color: white;
      }


      #darker img{
          margin-right: 15px;
          position: static;
      }

      .form-group input,.form-group textarea{
          border: 1px solid rgba(52, 52, 52);
          border-radius: 12px;
      }

      form{
          border: 1px solid rgb(52, 52, 52);
          background-color: rgb(52, 52, 52);
          border-radius: 5px;
          padding: 20px;
      }
  </style>


    <style>
        .screen-reader{
            width: var(--screenReaderWidth, 1px) !important;
            height: var(--screenReaderHeight, 1px) !important;
            padding: var(--screenReaderPadding, 0) !important;
            border: var(--screenReaderBorder, none) !important;

            position: var(--screenReaderPosition, absolute) !important;
            clip: var(--screenReaderClip, rect(1px, 1px, 1px, 1px)) !important;
            overflow: var(--screenReaderOverflow, hidden) !important;
        }

        /*
        =====
        CORE STYLES
        =====
        */

        .rating{
            --uiRatingColor: var(--ratingColor, #eee);
            --uiRatingColorActive: var(--ratingColorActive, #ffcc00);

            display: var(--ratingDisplay, flex);
            font-size: var(--ratingSize, 1rem);
            color: var(--uiRatingColor);
        }

        .rating__control:nth-of-type(1):focus ~ .rating__item:nth-of-type(1)::before,
        .rating__control:nth-of-type(2):focus ~ .rating__item:nth-of-type(2)::before,
        .rating__control:nth-of-type(3):focus ~ .rating__item:nth-of-type(3)::before,
        .rating__control:nth-of-type(4):focus ~ .rating__item:nth-of-type(4)::before,
        .rating__control:nth-of-type(5):focus ~ .rating__item:nth-of-type(5)::before{
            content: "";
            box-shadow: 0 0 0 var(--ratingOutlineWidth, 4px) var(--uiRatingColorActive);

            position: absolute;
            top: -.15em;
            right: 0;
            bottom: -.15em;
            left: 0;
            z-index: -1;
        }

        .rating__item{
            cursor: pointer;
            position: relative;
        }

        .rating__item{
            padding-left: .25em;
            padding-right: .25em;
        }

        .rating__star{
            display: block;
            width: 1em;
            height: 1em;

            fill: currentColor;
            stroke: var(--ratingStroke, #222);
            stroke-width: var(--ratingStrokeWidth, 1px);
        }

        .rating:hover,
        .rating__control:nth-of-type(1):checked ~ .rating__item:nth-of-type(1),
        .rating__control:nth-of-type(2):checked ~ .rating__item:nth-of-type(-n+2),
        .rating__control:nth-of-type(3):checked ~ .rating__item:nth-of-type(-n+3),
        .rating__control:nth-of-type(4):checked ~ .rating__item:nth-of-type(-n+4),
        .rating__control:nth-of-type(5):checked ~ .rating__item:nth-of-type(-n+5){
            color: var(--uiRatingColorActive);
        }

        .rating__item:hover ~ .rating__item{
            color: var(--uiRatingColor);
        }

        /*
        =====
        SETTINGS
        =====
        */

        .rating{
            --ratingSize: 2rem;
            --ratingColor: #eee;
            --ratingColorActive: #ffcc00;
        }

        /*
        =====
        DEMO
        =====
        */

        body{
            font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Open Sans, Ubuntu, Fira Sans, Helvetica Neue, sans-serif;
            font-size: 1rem;
            margin: 0;
        }

        .page{

            display: flex;
        }

        .page__demo{
            margin: auto;
        }

        .page__group{
            margin-top: 2rem;
            margin-bottom: 2rem;
            text-align: center;
        }

        .page__hint{
            display: block;
            font-weight: 700;
            margin-top: 1rem;
        }

        @media (min-width: 641px){
            .page__demo{
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
            }

            .page__group{
                margin-left: 3.5rem;
                margin-right: 3.5rem;
            }
        }
    </style>



</div>

            <!-- Main Body -->
            <section>
                <div class="container">
                    <div class="row" >
                        <div class="col-sm-5 col-md-6 col-12 pb-4" >
                            <h1 id = "comments">Comments</h1>
                        @foreach($comments as $rs )

                            <div class="comment mt-4 text-justify float-left w-100">
                                <h4>{{$rs->user->name}}</h4>
                                <span>{{$rs->created_at}}</span>
                                <br>
                                <p>{{$rs->comment}}</p>

                                <span class="fa fa-star @if($rs->rate > 0) checked @endif"></span>
                                <span class="fa fa-star @if($rs->rate > 1) checked @endif"></span>
                                <span class="fa fa-star @if($rs->rate > 2) checked @endif"></span>
                                <span class="fa fa-star @if($rs->rate > 3) checked @endif"></span>
                                <span class="fa fa-star @if($rs->rate > 4) checked @endif"></span>

                            </div>


                        @endforeach
                        </div>

                            <form class="review-form" action="{{route('storecomment')}}" method="post" style="">
                                @csrf
                                <input type="hidden" name="treatment_id"  value="{{$data->id}}">

                                <div class="form-group">
                                    <h4 style="color:white">Leave a comment </h4>
                                    <div class="form-group">

                                        <input type="text" name="subject" placeholder="Subject" >

                                    </div>
                                    <textarea name="comment" placeholder="Your Comment" cols="30" rows="5" class="form-control"></textarea>
                                </div>

                                <div class="page" style="height: 300px !important;">
                                    <div class="page__demo">
                                        <div class="page__group">
                                            <div class="rating">
                                                <input type="radio" name="rating-star" value="1" class="rating__control screen-reader" id="rc1">
                                                <input type="radio" name="rating-star" value="2"  class="rating__control screen-reader" id="rc2">
                                                <input type="radio" name="rating-star" value="3"  class="rating__control screen-reader" id="rc3">
                                                <input type="radio" name="rating-star" value="4"  class="rating__control screen-reader" id="rc4">
                                                <input type="radio" name="rating-star" value="5"  class="rating__control screen-reader" id="rc5">
                                                <label for="rc1" class="rating__item">
                                                    <svg class="rating__star">
                                                        <use xlink:href="#star" name="rate"></use>
                                                    </svg>
                                                    <span class="screen-reader">1</span>
                                                </label>
                                                <label for="rc2" class="rating__item">
                                                    <svg class="rating__star" name="rate">
                                                        <use xlink:href="#star"></use>
                                                    </svg>
                                                    <span class="screen-reader">2</span>
                                                </label>
                                                <label for="rc3" class="rating__item" >
                                                    <svg class="rating__star" name="rate">
                                                        <use xlink:href="#star"></use>
                                                    </svg>
                                                    <span class="screen-reader">3</span>
                                                </label>
                                                <label for="rc4" class="rating__item">
                                                    <svg class="rating__star" name="rate">
                                                        <use xlink:href="#star" ></use>
                                                    </svg>
                                                    <span class="screen-reader">4</span>
                                                </label>
                                                <label for="rc5" class="rating__item">
                                                    <svg class="rating__star"name="rate">
                                                        <use xlink:href="#star"></use>
                                                    </svg>
                                                    <span class="screen-reader">5</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                    <symbol id="star" viewBox="0 0 26 28">
                                        <path d="M26 10.109c0 .281-.203.547-.406.75l-5.672 5.531 1.344 7.812c.016.109.016.203.016.313 0 .406-.187.781-.641.781a1.27 1.27 0 0 1-.625-.187L13 21.422l-7.016 3.687c-.203.109-.406.187-.625.187-.453 0-.656-.375-.656-.781 0-.109.016-.203.031-.313l1.344-7.812L.39 10.859c-.187-.203-.391-.469-.391-.75 0-.469.484-.656.875-.719l7.844-1.141 3.516-7.109c.141-.297.406-.641.766-.641s.625.344.766.641l3.516 7.109 7.844 1.141c.375.063.875.25.875.719z"/>
                                    </symbol>
                                </svg>


                                <h4 style="color: white">Rate</h4>

                                <div class="form-group">
                                    @auth
                                    <button class="primary-btn" method="post">Post Comment</button>
                                    @else
                                    <a href="/login" class="primary-btn">For submit your comment, please login</a>
                                        @endauth
                                </div>
                            </form>

                    </div>
                </div>
            </section>


@endsection


