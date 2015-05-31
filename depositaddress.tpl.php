<div id='cryptoaccounts-deposit-qrcode'></div>
<script>
	jQuery(function($) {
		console.log("hello");
		$('#cryptoaccounts-deposit-qrcode').qrcode({
		    "size": 300,
   			"color": "#3a3",
    		"text": "<?php echo $text; ?>"
		});
	});
</script>