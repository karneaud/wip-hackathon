@extends('layout.master')

@section('title', 'The title of the page')
@section('description', 'Description of the page')

@section('content')
<div class="container overlay profile-usermenu text-center">
	<a href="#" class="float-right m-1" id="overlay-close-btn"><i class="bi bi-x-circle-fill"></i></a>
	<h3 class="text-center">Validate Driver</h3>
	<p class="text-left">Take a picture of the QR CODE to decode. You will then be prompted to validate via SMS or URL.</p>
	<div id="reader"></div>
	<a href="" id="qr-link" class="btn mx-auto align-self-center"><i class="bi bi-link-45deg"></i><span></span></a> 
</div>
<section class="container pb-4" style="margin-bottom: 87px;">
	<header class="text-center">
	<h1 class="py-3">What is Safe TT Taxi</h1>
</header>
	<article class="row justify-content-md-center">
	<div class="col-sm-12 col-md-6">
		<p>We want to try to keep you safe by encouraging best practices when travelling in public transportation.</p>
	<div class="row row-cols-md-2 text-center bulleted-points">
    	<div class="col-12">
        	<figure class="d-flex flex-row align-items-center">
        	<i class="bi bi-badge-hd-fill display-2"></i>
            <figcaption class="mx-2 text-left"><p>License Plate</p><small>Take note of the license plate of the car you are going to travel in.</small></figcaption>
    	</figure>
    </div>
    	<div class="col-12">
        	<figure class="d-flex flex-row align-items-center">
        		<i class="bi bi-person-badge-fill display-2"></i>
            	<figcaption class="mx-2 text-left"><p>Driver's License</p><small>Be aware of the driver's license or atleast the driver's name.</small></figcaption>
    		</figure>
    </div>
    	<div class="col-12">
        	<figure class="d-flex flex-row align-items-center">
        	<i class="bi bi-person-plus-fill display-2"></i>
            <figcaption class="mx-2 text-left"><p>Emergency Contact</p><small>Let an emergency contact know your whereabouts when travelling.</small></figcaption>
    	</figure>
    </div>
    </div>
	<div class="tip mx-auto my-1"><a href="" id="add-to-homescreen"><i class="bi bi-plus-square-fill"></i>  <small>Add to iOS Home Screen</small></a></div>
    <h3 class="text-uppercase" style="font-size: 4vw;">USE THE BUTTON TO SCAN A QR CODE</h3>
</div>
</article>
</section>
	<!-- <div id="call-to-action" class="text-white">
    	<label for="input-file" id="scan-btn" class="btn btn-danger rounded-circle"><i class="bi bi-camera-fill"></i>
    	<input type="file" name="input-file" id="input-file" accept="image/*;capture=camera" capture="camera" style="display:none"></label>
    	<p class="m-0 text-center"><small>SCAN</small></p>
    </div>
	-->
	 <div id="call-to-action" class="text-white">
    	<button type="button" id="scan-btn" class="btn btn-danger rounded-circle"><i class="bi bi-camera-fill"></i></button>
    	<p class="m-0 text-center"><small>SCAN</small></p>
    </div>
@endsection
@push('scripts')
	<script src="{{ asset('assets/js/qr.js', env('HTTPS', false)) }}"></script>
	<script>
    	(function(){
        	var cameraId
            	, html5QrCode
            	, link = document.querySelector('#qr-link')
            	, overlay =  document.querySelector('.overlay')
            	, SAFE_URL = "<?php print url('/') ?>"
            	, SAFE_SMS = <?php print env('SMS_URL', 18682222222 ) ?>
                , smsEx = new RegExp('^(SMSTO:'+ SAFE_SMS + ':)','ig')
        		, isInStandaloneMode = ('standalone' in window.navigator) && (window.navigator.standalone)
        		, isIphone = document.querySelectorAll('.profile-usermenu.iphone').length > 0
        		, event = document.createEvent( 'HTMLEvents' )
        	document.querySelector('#scan-btn').addEventListener('click', function(){
            	Html5Qrcode.getCameras().then(devices => {
  					if (devices && devices.length) {
                    	overlay.classList.toggle('open')
    					cameraId = devices.length > 1? devices[1].id : devices[0].id;
                    	html5QrCode = new Html5Qrcode("reader");
						html5QrCode.start(
 					 		cameraId,     // retreived in the previous step.
  							{
    							fps: 10
                				// scannable, rest shaded.
  							},
  						function(message) {
                        	switch(true) 
                                {
                                	//"sms:18682222222:Validate Driver Ge....
                                	case (smsEx).test(message) :
                                        message = message.replace(smsEx, 'sms:'.concat(SAFE_SMS, isIphone? '&' : '?', 'body=')  );
                                		break;
                                	case (new RegExp('^('+ SAFE_URL +')','g')).test(message) :
                                		break;
                                	default: 
                                		message = undefined
                                		break;
                                }
                        	if(message) {
                            	link.setAttribute('href', message )
                            	link.querySelector('span').innerText = /sms/.test(message) ? 'VALIDATE via SMS' : 'VALIDATE via URL'
                            	link.style.display = 'inline-block';
                                event.initEvent( 'click', true, true );
                            	link.dispatchEvent( event );
                            	link.click()
                            	html5QrCode.stop()
                            }
 					 	},
 					 	function(error) {
                       	 
  						})
						.catch(function(err) {
  							alert('Could not access your device camera!');
						});
  					}
				}).catch(function(err) {
  					alert('I need permission to access your device camera!');
				});
            });
        	document.querySelector('#overlay-close-btn').addEventListener('click', function(){
            	try {
                	overlay.classList.toggle('open')
                	html5QrCode.stop();
                } catch(err){
                	console.log('errr' , err);
                }
            })
        	
        	link.querySelector('span').innerText = '';
        	link.style.display = 'none';
        
        	if (isIphone && !isInStandaloneMode) {
  				document.querySelector('.tip').style.display = 'inline-block';
                if(navigator.share) return
            
            	document.querySelector('#add-to-homescreen').addEventListener('click', function(){
                	navigator.share({
                    	title: document.querySelector('title').textContent,
      					text: document.querySelector('meta[name="description"]').getAttribute('content'),
      					url: document.querySelector('link[rel="canonical"]').getAttribute('href')
                    })
                })
			}
        })()
	</script>
@endpush