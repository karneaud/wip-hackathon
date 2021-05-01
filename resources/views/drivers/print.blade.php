<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet" media="all" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css" rel="stylesheet" media="all">
  	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/socicon@3.0.5/css/socicon.min.css" rel="stylesheet" media="all">
  	<script src="https://cdn.jsdelivr.net/npm/file-saver@2.0.5/dist/FileSaver.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/dom-to-image@2.6.0/src/dom-to-image.min.js"></script>
  <script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-834435-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-834435-3');
</script>
</head>
<style>
html, body {
	font-family: Arial, sans-serif;
}

</style>
<!------ Include the above in your HEAD tag ---------->
<!--
User Profile Sidebar by @keenthemes
A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
Licensed under MIT
-->
<body>
<div class="container text-left pt-2">
        <button type="button" class="btn btn-primary btn-lg" id="print-btn">PRINT</button>
</div>
<div class="container">
    <div class="row justify-content-md-center">
		<div class="col-md-4 col-md-offset-3 col-sm-12 text-center printable">
			<div class="m-2 pt-2 border rounded border-danger" style="border-width: 8px !important;">
            	<div class="container">
                	<div class="row">
                    	<div class="col">
                			<div class="float-left">
                            	<figure style="max-width: 156px;">
                    			<figcaption class="figure-caption d-flex flex-column">
                        			<span>SCAN ME</span>
                    			</figcaption>
  								<img {!! sprintf('src="https://api.qrserver.com/v1/create-qr-code/?data=%s"', urlencode(route("taxi-driver", ['record_id' => $record_id ] ))) !!} class="figure-img img-fluid" alt="...">
                    			<figcaption class="figure-caption d-flex flex-column"><small>VERIFY VIA URL: </small><span class="text-danger font-weight-bolder pb-2">{{ $short_url }}</span></figcaption>
							</figure>
                        </div>
                		</div>
                	</div>
                	
                	<div class="row mb-4">
                		<div class="col-12">
                        	<div class="profile-usertitle text-center">
								<h2 class="p-2 d-block border rounded-lg profile-usertitle-job text-white font-weight-bolder m-1" style="background-color: black; font-size: 300%">{{ $plates }}</h2>
                	<!--  -->
							</div>
                    	</div>
                	</div>
                	<div class="row">
                    	<div class="col">
                        	 <figure style="max-width: 128px; font-size: 80%" class="float-right">
                             	<figcaption  class="figure-caption d-flex flex-column">SCAN TO SMS</figcaption>
                   				<img class="img-fluid" {!! sprintf('src="https://api.qrserver.com/v1/create-qr-code/?data=%s"', urlencode("SMSTO:". env('SMS_URL', 18682222222 ) .":Validate Driver $name ($record_id), License Plate No $plates")) !!}>
                             	<figcaption class="figure-caption d-flex flex-column"><small>VERIFY VIA SMS: <span class="text-danger font-weight-bolder pb-2">(0444)</span></small></figcaption>
					</figure>
                        </div>
				</div>
			</div>
	</div>
		</div>
</div>
</div>
<script>
(function(){
	document.querySelector('#print-btn').addEventListener('click',
    function(){
    	domtoimage.toJpeg(document.querySelector('.printable'), { quality: 1, bgcolor: 'white' })
    		.then(function (dataUrl) {
    			printJS({printable: dataUrl, type: 'image' })
    		});
    });
})()
</script>
</body>
</html>