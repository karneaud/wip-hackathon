<footer>
    <div class="container">
    <p> &copy; 2021 All rights reserved.</p>
    </div>
</footer>
@prepend('scripts')
	<script src="{{ asset('assets/js/app.js', env('HTTPS', false)) }}"></script>
	<script>
    (function(){
    	if(/iPhone|iPad|iPod/i.test(navigator.userAgent)) {
    		document.querySelector('.profile-usermenu').classList.add('iphone');
    	}
	})()
</script>
@endprepend