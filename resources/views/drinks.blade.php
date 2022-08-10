<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$title}}</title>
    <link rel="stylesheet" href="/css/styles.css">
    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
@include('header')
<section class="food-menu section-padding">
    <div class="container">
        <div>
            <div class="section-head">
                <i class="flaticon-cutlery"></i>
                <h2>{{$title}}</h2>
                <h3>{{$heading}}</h3>
            </div><!-- section-head -->
            <div class="food-menu-item-wrapper">
                <div class="grid">
                    @foreach($drinks as $drink)
                        <div class="element-item transition breakfast lunch drinks col-md-6 col-sm-6">
                            <div class="food-item">
                                <div class="food-item-img">
                                    <a href="#"><img src="images/food-menu/item4.jpg" alt=""></a>
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
    </div><!-- container -->
</section><!-- food menu section end-->
@include('footer')
<script src="/js/scripts.js"></script>
</body>
</html>
