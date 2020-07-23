<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="//voguepay.com/js/voguepay.js" type="text/javascript"></script>
</head>
<body>
	<p>You will be redirected to VoguePay Platform in feww seconds...</p>
	<form id='payform' onsubmit='return false;' method='POST' action='https://voguepay.com/pay/'>
    <input type='hidden' name='v_merchant_id' value='DEMO'/>
    <input type="hidden" name="cur" value="NGN">
    <input type='hidden' name='merchant_ref' value='' />
    <input type='hidden' name='memo' value='School Transcript' />

    <input type='hidden' name='item_x' value='School Transcript' />
    <input type='hidden' name='description_x' value='School Transcript' />
    <input type='hidden' name='price_x' value='6000' />

    <input type='hidden' name='developer_code' value='' />
    <input type='hidden' name='store_id' value='' />
    <input type="hidden" name="notify_url" value="">
    <input type="hidden" name="success_url" value="localhost/studentTrans/success.php">
    <input type="hidden" name="fail_url" value="//localhost/studentTrans/fail.php">

    <input type='hidden' name='total' value='6000' />
    <input type='image' src='http://voguepay.com/images/buttons/buynow_blue.png' alt='Submit' />
</form> 
<script type="text/javascript">
	Voguepay.init({form:'payform'});
</script>

</body>
</html>