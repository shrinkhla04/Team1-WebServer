<!doctype html>
<html lang="en">
<head>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://d3js.org/d3.v4.min.js"></script>
    <script type="text/javascript" src="js/d3.v3.js"></script>
	<link href="{{ asset('css/StackedPlot.css') }}" rel="stylesheet" type="text/css" >
</head>
<body>

@extends("main_template")

@section('title', 'WebServer')

@section("navbar")
    <nav class="navbar navbar-expand-lg navbar-custom">
        <!--<img class="img" style="width:2%; display: block; height:2%" src="img/Icon.png">-->
        <a class="navbar-brand" href=""> Team1 Webserver - Results</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" id="navbarDropdown" role="button" aria-haspopup="true"
                       aria-expanded="false" href={{url('/')}}>
                        Back to Home
                    </a>
                </li>
            </ul>
        </div>
    </nav>
@endsection
@section("main_container")
<div style="text-align:center;margin-left: 30px;">
<div class="tab" style="max-width:98%">
  <button class="tablinks active" onclick="openCity(event, 'London')">Phylogenetic Trees</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Heatmaps</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Time Line</button>
</div>


<div id="London" class="tabcontent" style="display: block;">
<div class="container" style="max-width:90%">
	<div class="row">
		  <div class="column">
		    <div style="margin-top:50px;margin-left:50px">
		   	<label id="show-length"><input type="checkbox"> Show branch length</label><br>
			<input type="radio" name="gender" value="0"> Source Site
			<input type="radio" name="gender" value="1"> Source Type
			<input type="radio" name="gender" value="2" checked> State
			</div>
			<div id="main" class="container" style="margin-top:40px">
			</div>
			<script type="text/javascript" src="{{ URL::asset('js/StackedPlot.js') }}"></script>
		  </div>
		  <div class="column">
				<div id="drop" style="max-height:540px"></div>
		  </div>
    </div>
</div>
</div>






<div id="Paris" class="tabcontent">
	<div class="container" style="max-width:90%">
		<div class="row">
		  <div class="column" style="width:50%; text-align:center"">
				<div id="my_dataviz"></div> 
		  </div>
		  <div class="column" style="width:50%; text-align:center">
				<div id="Virulence"></div> 
		  </div>
		</div>
	</div>
  <script type="text/javascript" src="{{ URL::asset('js/Heatmap.js') }}"></script>
</div>

<div id="Tokyo" class="tabcontent">

<div id="metric-modal"></div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.9.1/underscore-min.js"></script>
<script type="text/javascript" src="{{ URL::asset('js/Timeline.js') }}"></script>
<link href="{{ asset('css/Timeline.css') }}" rel="stylesheet" type="text/css" >
</div>
</div>
@endsection
@section("main_container2")
@endsection
@section("footer")
@endsection