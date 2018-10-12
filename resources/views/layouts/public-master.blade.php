<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{URL::to('css/custom.css')}}">
        <script
          src="https://code.jquery.com/jquery-3.3.1.min.js"
          integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
          crossorigin="anonymous">
        </script>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
        <title>@yield('title')</title>

        <!------ to make the navigation stays clear ------->
        <style type="text/css">
        @import url('https://fonts.googleapis.com/css?family=Montserrat');
            body { padding-top: 70px;

                   font-family: 'Montserrat', sans-serif !important;
             }
        </style>

    </head>
    <body>
        @include('includes.public-navigation')
        <div class="container-fluid pt pb mb ">
            <div class="row pl pr">
                <div class="col-md-3 ">
                    <div class="mini-card-hv shadow ">
                        <h3><b>Freelancers</b></h3>
                        <hr>
                        <img src="{{URL::to('images/main-images/freelancer.png')}}" class="img-responsive" style="width: auto !important;height: 110px !important; padding-left: 85px !important;padding-bottom: 30px">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mini-card-hv shadow">
                        <h3><b>Services</b></h3>
                        <hr>
                        <img src="{{URL::to('images/main-images/services.png')}}" class="img-responsive" style="width: auto !important;height: 110px !important; padding-left: 85px !important;padding-bottom: 30px">
                    </div>
                </div>    
            </div>
            
                    
        </div>
<!------------ the main content with the division of three parts of the main body ------------->
    	<div class="container-fluid">
            <div class="col-md-3">
                <div class="row">
                        <div class="panel-group" id="accordion">
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <a style="text-decoration: none;" class="accordion-toggle lead" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                        <span class="glyphicon glyphicon-list-alt"></span> Freelancers
                                </a>
                              </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse out">
                    <div class="panel-body">
                        <div class= "md-radio">
                            <div class="cat-item">
                                <input type="radio" name="cat" id="1">
                                <label for="1">Software Development</label>    
                            </div>
                            <div class="cat-item">
                                <input type="radio" name="cat" id="2">
                                <label for="2">Web development</label>    
                            </div>
                            <div class="cat-item">
                                <input type="radio" name="cat" id="3">
                                <label for="3">Document / Essay Writing</label>    
                            </div>
                            <div class="cat-item">
                                <input type="radio" name="cat" id="4">
                                <label for="4">Translation</label>    
                            </div>
                            <div class="cat-item">
                                <input type="radio" name="cat" id="5">
                                <label for="5">Music</label>    
                            </div>
                            <div class="cat-item">
                                <input type="radio" name="cat" id="6">
                                <label for="7"> Project /Assignment handling</label>    
                            </div>
                            <div class="cat-item">
                                <input type="radio" name="cat" id="8">
                                <label for="8"> Web Designing</label>    
                            </div>
                            <div class="cat-item">
                                <input type="radio" name="cat" id="9">
                                <label for="9"> Graphic Designing</label>    
                            </div>
                            <div class="cat-item">
                                <input type="radio" name="cat" id="10">
                                <label for="10"> Sports/academies</label>    
                            </div>
                            <div class="cat-item">
                                <input type="radio" name="cat" id="11">
                                <label for="11"> Teaching</label>    
                            </div>
                        </div> 
                    </div>
                            </div>
                          </div>
                        </div>
                </div>
                <div class="row">
                            <div class="panel-group" id="accordion">
                              <div class="panel panel-default">
                                <div class="panel-heading">
                                  <h4 class="panel-title">
                                    <a style="text-decoration: none;" class="accordion-toggle lead" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                           <span class="glyphicon glyphicon-globe"></span> Services
                                    </a>
                                  </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse out">
                    <div class="panel-body">
                        <div class= "md-radio">
                            <div class="cat-item">
                                <input type="radio" name="cat" id="1">
                                <label for="1">Communications</label>    
                            </div>
                            <div class="cat-item">
                                <input type="radio" name="cat" id="1">
                                <label for="1">Book Shops</label>    
                            </div>
                            <div class="cat-item">
                                <input type="radio" name="cat" id="2">
                                <label for="2">Cafes/gaming Spots</label>    
                            </div>
                            <div class="cat-item">
                                <input type="radio" name="cat" id="3">
                                <label for="3">Web Hosting</label>    
                            </div>
                            <div class="cat-item">
                                <input type="radio" name="cat" id="4">
                                <label for="4">Salons</label>    
                            </div>
                            <div class="cat-item">
                                <input type="radio" name="cat" id="5">
                                <label for="5">Wedding planing</label>    
                            </div>
                            <div class="cat-item">
                                <input type="radio" name="cat" id="5">
                                <label for="5">Bridal dressing</label>    
                            </div>
                            <div class="cat-item">
                                <input type="radio" name="cat" id="6">
                                <label for="7"> Studios</label>    
                            </div>
                            <div class="cat-item">
                                <input type="radio" name="cat" id="8">
                                <label for="8"> Catering</label>    
                            </div>
                            <div class="cat-item">
                                <input type="radio" name="cat" id="9">
                                <label for="9"> Cab /transporting</label>    
                            </div>
                        </div> 
                    </div>
                                </div>
                              </div>
                            </div>
                </div>
                <div class="row">
                            <div class="panel-group" id="accordion">
                              <div class="panel panel-default">
                                <div class="panel-heading">
                                  <h4 class="panel-title">
                                    <a style="text-decoration: none;" class="accordion-toggle lead" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                           <span class="glyphicon glyphicon-filter"></span> Filter
                                    </a>
                                  </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse in">

<!---------filter price range part ----------------->
                            <div class="panel-body">
                                <div class="panel-group" id="accordion">
                                        <div class="panel-heading">
                                          <h6 class="panel-title">
                                            <a style="text-decoration: none;" class="accordion-toggle lead" data-toggle="collapse" data-parent="#accordion" href="#collapse4"> <span class="glyphicon glyphicon-transfer"></span>
                                                   <small>Price range</small>
                                            </a>
                                          </h6>
                                        </div>
                                        <div id="collapse4" class="panel-collapse collapse out">
                                          <div class="panel-body">
                                            <div class="well">
                                                <form action='#' method="post">
                                                    <div class="input-group">
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label for="from">From</label>
                                                            <select class="form-control" id="from">
                                                                <option>100</option>
                                                                <option>500</option>
                                                                <option>1000</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-2" style="margin-top: 15px;font-size: 30px;">-</div>
                                                        <div class="col-md-5">
                                                            <label for="to">To</label>
                                                            <select class="form-control" id="to">
                                                                <option>500</option>
                                                                <option>1000</option>
                                                                <option>5000</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    
                                                </form>
                                            </div>
                                                
                                          </div>
                                        </div>
                                </div>
                                      
<!---------- filter price range end -------->                                        
<!---------- filter loation part ----------->

                                <div class="panel-group" id="accordion">
                                        <div class="panel-heading">
                                          <h4 class="panel-title">
                                            <a style="text-decoration: none;" class="accordion-toggle lead" data-toggle="collapse" data-parent="#accordion" href="#collapse5"> <span class="glyphicon glyphicon-map-marker"></span>
                                                <small>Location</small>
                                            </a>
                                          </h4>
                                        </div>
                                        <div id="collapse5" class="panel-collapse collapse in">
                                          <div class="panel-body">
                                            <div class="well">
                                                <form action='#' method="post" class="nav">
                                                    <li><a href="#">Colombo</a></li>
                                                    <li><a href="#">Gampaha</a></li>
                                                    <li><a href="#">Kaluthra</a></li>
                                                    <li><a href="#">Kandy</a></li>
                                                    <li><a href="#">kurunagala</a></li>
                                                    <li><a href="#">Maharagama</a></li>
                                                </form>
                                            </div>
                                                
                                          </div>
                                        </div>
                                </div>

<!---------- filter loation part end ----------->
                                </div>
                                </div>
                              </div>
                            </div>
                </div>
            </div>
            <div class="col-md-8">
                @yield('content')
            </div>
            <div class="col-md-1">
                
            </div>
    			
    	</div>
    </body>
</html>
