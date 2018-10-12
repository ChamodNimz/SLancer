@extends('layouts.public-master')

@section('title')
    Welcome to SLancer
    @endsection
    
@section('content')
    <div class="panel panel-info not-round">
		<div class="panel-heading result-header">
		    <h3 class="panel-title result-title"><span class="glyphicon glyphicon-tag"></span>  Search results - 'web Developments'</h3>
	    </div>
		<div class="panel-body">
		   <div class="row">
		   	
			  <div class="col-sm-6 col-md-4">
			    <div class="thumbnail shadow">
			    	<div class="avatar shadow">
			    		<img src="{{URL::to('images/avatar.png')}}">
			    	</div>
			      <img src="{{URL::to('images/dev3.jpg')}}" alt="..." id="back-image">
			      <div class="caption">
			      	<div class="text-left gig-header"> <span class="badge price-tag"><span> Rs </span>1500</span>
						<span class="off-line"><span>Offline</span></span>
			      	</div>
			        <h3>Web developer</h3>
			        <hr>
			        <div class="middle"><p><a href="#" class="btn btn-success" role="button">View</a></p>
						<button type="button" class="btn btn-warning">
							  <span class="glyphicon glyphicon-star" aria-hidden="true"></span> Bookmark
							</button>
			        </div>
			        <p>Well experienced web developer who  has working experince of a esteemed software company</p>
			      </div>
			    </div>
			  </div>
<!----------  freelancer viewing template ------------>
			  <div class="col-sm-6 col-md-4">
			    <div class="thumbnail shadow">
			    	<div class="avatar shadow">
			    		<img src="{{URL::to('images/avatar.png')}}">
			    		<div class="lance-name">
			    		<b>chamod nismara</b>
			    		</div>
			    	</div>
			    	
			      <img src="{{URL::to('images/dev.jpg')}}" alt="..." id="back-image">
			      <div class="caption">
			      	<div class="text-left gig-header"> <span class="badge price-tag"><span> Rs </span>1500</span>
						
			      	</div>
			        <h3><b>Web developer</b></h3>
			        <span class="starRating">
					  <input id="rating5" type="radio" name="rating" value="5">
					  <label for="rating5">5</label>
					  <input id="rating4" type="radio" name="rating" value="4">
					  <label for="rating4">4</label>
					  <input id="rating3" type="radio" name="rating" value="3">
					  <label for="rating3">3</label>
					  <input id="rating2" type="radio" name="rating" value="2">
					  <label for="rating2">2</label>
					  <input id="rating1" type="radio" name="rating" value="1">
					  <label for="rating1">1</label>
					</span>
					<span class="off-line ml"><span>Offline</span></span>
			        <hr>
			        <div class="middle"><p><a href="#" class="btn btn-success" role="button">View</a></p>
						<button type="button" class="btn btn-warning">
							  <span class="glyphicon glyphicon-star" aria-hidden="true"></span> Bookmark
							</button>
			        </div>
			        <p><b>Well experienced web developer who  has working experince of a esteemed software company</b></p>
			      </div>
			    </div>
			  </div>
<!----------- freelancer viweing tampplet end ----------->
			  <div class="col-sm-6 col-md-4">
			    <div class="thumbnail shadow">
			    	<div class="avatar shadow">
			    		<img src="{{URL::to('images/avatar.png')}}">
			    	</div>
			      <img src="{{URL::to('images/dev2.jpg')}}" alt="..." id="back-image">
			      <div class="caption">
			      	<div class="text-left gig-header"> <span class="badge price-tag"><span> Rs </span>1500</span>
						
			      	</div>
			        <h3>Web Designer</h3>
			        <span class="starRating">
					  <input id="rating5" type="radio" name="rating" value="5">
					  <label for="rating5">5</label>
					  <input id="rating4" type="radio" name="rating" value="4">
					  <label for="rating4">4</label>
					  <input id="rating3" type="radio" name="rating" value="3">
					  <label for="rating3">3</label>
					  <input id="rating2" type="radio" name="rating" value="2">
					  <label for="rating2">2</label>
					  <input id="rating1" type="radio" name="rating" value="1">
					  <label for="rating1">1</label>
					</span>
					<span class="online"><span>Online</span></span>
			        <hr>
			        <div class="middle"><p><a href="#" class="btn btn-info" role="button">View</a></p>
						<button type="button" class="btn btn-warning">
							  <span class="glyphicon glyphicon-star" aria-hidden="true"></span> Bookmark
							</button>
			        </div>
			        <p>Well experienced web developer who  has working experince of a esteemed software company</p>
			      </div>
			    </div>
			  </div>

			  <div class="col-sm-6 col-md-4">
			    <div class="thumbnail shadow">
			    	<div class="avatar shadow">
			    		<img src="{{URL::to('images/avatar.png')}}">
			    	</div>
			      <img src="{{URL::to('images/dev2.jpg')}}" alt="..." id="back-image">
			      <div class="caption">
			      	<div class="text-left gig-header"> <span class="badge price-tag"><span> Rs </span>1500</span>
						<span class="off-line"><span>Offline</span></span>
			      	</div>
			        <h3>Web developer</h3>
			        <span class="starRating">
					  <input id="rating5" type="radio" name="rating" value="5">
					  <label for="rating5">5</label>
					  <input id="rating4" type="radio" name="rating" value="4">
					  <label for="rating4">4</label>
					  <input id="rating3" type="radio" name="rating" value="3">
					  <label for="rating3">3</label>
					  <input id="rating2" type="radio" name="rating" value="2">
					  <label for="rating2">2</label>
					  <input id="rating1" type="radio" name="rating" value="1">
					  <label for="rating1">1</label>
					</span>
			        <hr>
			        <div class="middle"><p><a href="#" class="btn btn-info" role="button">View</a></p>
						<button type="button" class="btn btn-warning">
							  <span class="glyphicon glyphicon-star" aria-hidden="true"></span> Bookmark
							</button>
			        </div>
			        <p>Well experienced web developer who  has working experince of a esteemed software company</p>
			      </div>
			    </div>
			  </div>
			</div>
		</div>
	</div>
    @endsection   