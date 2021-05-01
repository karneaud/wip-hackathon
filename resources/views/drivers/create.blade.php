<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-834435-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-834435-3');
</script>
</head>
<body>
<iframe id="gform" src="https://docs.google.com/forms/d/e/1FAIpQLSfE0PSw5FPLNPAYrAU2ffbx8-G8Ik3zvFjLEiU6hTrduZZzKw/viewform?embedded=true" width="100%" height="100%" style="height:100vh" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
<script>
var load = 0;

document.getElementById('gform').onload = function(){
    /*Execute on every reload on iFrame*/
    load++;
    if(load > 1){
        /*Second reload is a submit*/
        document.location = "<?php print route('taxi-driver-print'); ?>";
    }
}
</script>
</body>
</html>