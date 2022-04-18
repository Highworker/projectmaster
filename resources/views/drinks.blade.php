<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$title}}</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
@include('header')
<section class="food-menu section-padding">
    <div class="container">
        <div class="row">
            <div class="section-head">
                <i class="flaticon-cutlery"></i>
                <h2>{{$title}}</h2>
                <p>{{$heading}}</p>
            </div><!-- section-head -->
            <div class="food-menu-item-wrapper">
                <div class="grid">
                    @foreach($drinks as $drink)
                        <div class="element-item transition breakfast lunch drinks col-md-4 col-sm-6">
                            <div class="food-item">
                                <div class="food-item-img">
                                </div>
                                <div class="food-item-details">
                                    <div class="dotted-title">
                                        <div class="dotted-name">
                                            <a href="/drink/{{$drink->id}}">{{ $drink->name}}</a>
                                        </div>

                                    </div><!-- dotted title -->
                                    <p><strong>Description: </strong>{{$drink->description}}</p>
                                    <p><strong>Making: </strong>{{$drink->making}}</p>
                                    <p><strong>Ingridients: </strong>
                                        @foreach($drink->ingridients as $ingridient)
                                            <p> {{$ingridient->name}} </p>
                                        @endforeach
                                    </p>

                                        <!-- <div class="rating-star">
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <span>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                    </span>
                                            </div> rating star -->
                                </div><!-- food item details -->
                            </div><!-- food item -->
                        </div> <!-- element-item -->
                    @endforeach
                </div>
            </div><!-- food-menu-item-wrapper -->
            <!-- <div class="food-menu-btn">
                <a href="#" class="button">View Full menu</a>
            </div> -->
        </div>
        <div id="filters" class="button-group">
            <button class="button is-checked" data-filter=".drinks">{{$page_title}}</button>
        </div><!--button group-->
    </div><!-- container -->
</section><!-- food menu section end-->
@include('footer')
<script src="/js/scripts.js"></script>
</body>
</html>
