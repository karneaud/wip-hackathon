@extends('layout.master')

@section('title', 'Safe TT Taxi Driver')
@section('description', 'Safe TT Taxi Driver validation!')

@section('content')
<!------ Include the above in your HEAD tag ---------->
<!--
User Profile Sidebar by @keenthemes
A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
Licensed under MIT
-->
<div class="container-fluid px-0 clearfix">
	<!-- SIDEBAR USERPIC -->
				<div class="container p-0">
                	<div class="row m-0 p-0">
                    	<div class="col-4 pr-0">
							<!-- SVG -->
                        		<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 226.969 226.969" style="enable-background:new 0 0 226.969 226.969;" xml:space="preserve"><g><path d="M217.289,83.307c-1.024,0-2.075,0.146-3.124,0.436l-11.023,3.036L191.49,58.398c-3.491-8.506-13.813-15.427-23.009-15.427h-7.753V19.442c0-4.136-3.364-7.5-7.5-7.5H73.742c-4.136,0-7.5,3.364-7.5,7.5v23.529h-7.913c-9.195,0-19.518,6.92-23.009,15.426L23.684,86.739l-10.879-2.997c-1.049-0.289-2.101-0.436-3.124-0.436C4.072,83.307,0,87.593,0,93.497v6.032c0,6.893,5.608,12.5,12.5,12.5h0.802l-1.664,4.052c-3.244,7.903-5.884,21.283-5.884,29.825v56.621c0,6.893,5.607,12.5,12.5,12.5h15.027c6.893,0,12.5-5.607,12.5-12.5v-13.916H181.03v13.916c0,6.893,5.608,12.5,12.5,12.5h15.024c6.893,0,12.5-5.607,12.5-12.5v-56.621c0-8.542-2.64-21.922-5.884-29.825l-1.664-4.052h0.963c6.893,0,12.5-5.607,12.5-12.5v-6.032C226.969,87.593,222.898,83.307,217.289,83.307z M143.612,21.944c0-0.165,0.135-0.3,0.3-0.3h5.778c0.165,0,0.3,0.135,0.3,0.3v20.797c0,0.1-0.057,0.175-0.132,0.23h-6.114c-0.075-0.055-0.132-0.13-0.132-0.23V21.944z M102.172,21.644h6.943c0.165,0,0.35,0.125,0.411,0.279l8.241,20.716l7.554-9.345c0.104-0.128,0.114-0.346,0.023-0.483l-7.25-10.917c-0.092-0.138-0.031-0.25,0.134-0.25h6.421c0.165,0,0.371,0.115,0.457,0.255l3.737,6.062c0.086,0.141,0.228,0.141,0.314,0l3.74-6.062c0.086-0.141,0.292-0.255,0.457-0.255h6.424c0.165,0,0.225,0.112,0.134,0.25l-7.256,10.917c-0.092,0.138-0.081,0.355,0.022,0.483l7.692,9.514c0.052,0.063,0.064,0.122,0.045,0.164h-6.818c-0.09-0.047-0.171-0.11-0.218-0.185l-4.221-6.755c-0.088-0.14-0.23-0.14-0.318,0l-4.212,6.755c-0.047,0.075-0.128,0.138-0.218,0.185h-12.847c-0.088-0.052-0.164-0.124-0.193-0.215l-1.416-4.336c-0.051-0.157-0.228-0.285-0.393-0.285h-7.87c-0.165,0-0.345,0.127-0.399,0.283l-1.526,4.34c-0.032,0.09-0.108,0.162-0.197,0.213h-6.179c-0.049-0.051-0.07-0.121-0.035-0.208l8.404-20.84C101.822,21.769,102.007,21.644,102.172,21.644z M81.852,42.741v-16.52c0-0.165-0.135-0.3-0.3-0.3h-6.945c-0.165,0-0.3-0.135-0.3-0.3v-3.678c0-0.165,0.135-0.3,0.3-0.3h20.91c0.165,0,0.3,0.135,0.3,0.3v3.678c0,0.165-0.135,0.3-0.3,0.3h-6.985c-0.165,0-0.3,0.135-0.3,0.3v16.52c0,0.1-0.057,0.175-0.132,0.23h-6.116C81.909,42.917,81.852,42.841,81.852,42.741z M32.516,105.062l17.705-43.129c2.089-5.088,8.298-9.251,13.798-9.251h98.772c5.5,0,11.709,4.163,13.798,9.251l17.705,43.129c2.089,5.088-0.702,9.251-6.202,9.251H38.718C33.218,114.313,30.427,110.15,32.516,105.062z M72.512,160.604c0,2.75-2.25,5-5,5H33.718c-2.75,0-5-2.25-5-5v-16.032c0-2.75,2.25-5,5-5h33.794c2.75,0,5,2.25,5,5V160.604z M197.768,160.604c0,2.75-2.25,5-5,5h-33.794c-2.75,0-5-2.25-5-5v-16.032c0-2.75,2.25-5,5-5h33.794c2.75,0,5,2.25,5,5V160.604z"/><path d="M108.157,33.858c0.165,0,0.246-0.124,0.181-0.275l-2.492-5.751c-0.066-0.151-0.176-0.153-0.244-0.003l-2.639,5.757c-0.068,0.15,0.01,0.272,0.175,0.272H108.157z"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                        	<!-- END SVG -->
                    </div>
                    	<div class="col-8 d-flex align-items-center">
                    		<div class="profile-usertitle">
								<h1 class="p-2 border text-center rounded-lg profile-usertitle-job text-white font-weight-bolder m-1" style="background-color: black; font-size: 11vw">{{ $plates == 'unknown' ? '0000000' : $plates }}</h1>
                			</div>
                   		 </div>
               		</div>
                	<div class="row">
                    	<div class="col">
                        	<div class="text-center p-4" style="background-color: black">
                            	<h4 class="profile-usertitle-name text-white font-weight-bold">{{ $name }}</h4>
                    			<p class="warning-label m-0" style="background-color: black;">
                            	@include('layout.verify', [
                            		'text_color' => in_array(strtolower($status),['pending','unverified'])? 'text-warning' 
                            			: ($status == 'unknown' ? 'text-danger' : 'text-success'),
                            		'symbol' => in_array(strtolower($status),['pending','unverified'])? 'bi-exclamation-triangle' 
                            			: ($status == 'unknown'? 'bi-x-octagon-fill' : 'bi-check-circle'),
                            		'status' => $status	
                            	])
                   			 	</p>
                   		 </div>
                	</div>
            	</div>
            	<div class="container">
                	<div class="row">
            			<div class="col profile-content m-2 p-2rounded text-center bg-danger text-warning">
                        <small><b>Send this information to someone in case of emergency.</b></small>
            			</div>
                	</div>
                	<div class="row">
                		<div class="profile-usermenu col">
							<ul class="list-group w-85 text-left">
								<li class="list-group-item text-white" style="background-color:#25D366">
									<a {!! sprintf('href="//wa.me/?text=Driver: %s, License Plate: %s URL: %s"', $name, $plates, $short_url ) !!} >
									<i class="socicon socicon-whatsapp mr-2"></i>&nbsp;Send Whatsapp </a>
								</li>
								<li class="list-group-item bg-dark iphone text-white">
									<a {!! sprintf('href="sms:&body=Driver %s License Plate %s URL: %s"', $name, $plates, $short_url ) !!}>
									<i class="bi bi-chat-dots mr-2"></i>&nbsp;Send SMS</a>
								</li>
                    			<li class="list-group-item bg-dark android text-white">
									<a {!! sprintf('href="sms:?body=Driver %s License Plate %s URL: %s"', $name, $plates, $short_url ) !!}>
									<i class="bi bi-chat-dots mr-2"></i>&nbsp;Send SMS</a>
								</li>
								<li class="list-group-item bg-primary">
									<a href="tel:+18683072177" target="_blank">
									<i class="bi bi-telephone-outbound-fill mr-2"></i>&nbsp;Call Hotline </a>
								</li>
							</ul>
						</div>
                	</div>
                	<div class="row">
                    		<div class="col">
                            	<p class="text-center mt-2">
                        			<cite style="
   						 line-height: 1;
   							 overflow: visible;
							"><small>
                                    <strong>Powered by []</strong><br/>
                                    <strong>Hotline: <a href="tel:8882227765">222-7765</a></strong>
                        	</small></cite>
                                <br/>
                                 <span class="text-center font-weight-bold">Developed by <a href="http://kendallarneaud.me" target="_blank">Kendall Arneaud</a>
							</span>
                            <p class="my-8"><br/></p>
                    		</div>
               		 </div>
				</div>
		</div>
@endsection