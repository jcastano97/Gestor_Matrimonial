<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="/img/favicon.png"/>
    <title>Gestor Matrimonial</title>
</head>
<body>
<form id="myForm" method="post" action="https://sandbox.checkout.payulatam.com/ppp-web-gateway-payu/">
    <input name="merchantId"    type="hidden"  value="508029"   >
    <input name="accountId"     type="hidden"  value="512321" >
    <input name="description"   type="hidden"  value="Test PAYU"  >
    <input name="referenceCode" type="hidden"  value="{{$pay->reference_pay}}" >
    <input name="amount"        type="hidden"  value="{{$pay->value_pay}}"   >
    <input name="tax"           type="hidden"  value="0"  >
    <input name="taxReturnBase" type="hidden"  value="0" >
    <input name="currency"      type="hidden"  value="COP" >
    <input name="signature"     type="hidden"  value="{{md5("4Vj8eK4rloUd272L48hsrarnUA~508029~$pay->reference_pay~$pay->value_pay~COP")}}"  >
    <input name="test"          type="hidden"  value="1" >
    <input name="buyerFullName" type="hidden"  value="{{$user->name}}" >
    <input name="buyerEmail"    type="hidden"  value="test@test.com" >
    <input name="responseUrl"    type="hidden"  value="http://www.test.com/response" >
    <input name="confirmationUrl"    type="hidden"  value="http://www.test.com/confirmation" >
    <input name="Submit"        type="submit"  value="Enviar" >
</form>
<script>
    document.getElementById('myForm').submit();
</script>
</body>
</html>
