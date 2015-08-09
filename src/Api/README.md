

```BASH
vendor/bin/xsd2php convert:wsdl:php \
    --ns-dest='Icepay/Api/IcePay/;src/Api/IcePay' \
    --ns-map='connect.icepay.com;Icepay/Api/IcePay' \
    --ns-dest='Icepay/Api/DataContract/;src/Api/DataContract' \
    --ns-map='http://schemas.datacontract.org/2004/07/APIService;Icepay/Api/DataContract' \
    --ns-dest='Icepay/Api/DataContract/Responses/;src/Api/DataContract/Responses' \
    --ns-map='http://schemas.datacontract.org/2004/07/APIService.Responses;Icepay/Api/DataContract/Responses' \
    --ns-dest='Icepay/Api/DataContract/SharedResponse/;src/Api/DataContract/SharedResponse' \
    --ns-map='http://schemas.datacontract.org/2004/07/APIService.SharedResponseTypes;Icepay/Api/DataContract/SharedResponse/' \
    --ns-dest='Icepay/Api/DataContract/System/;src/Api/DataContract/System' \
    --ns-map='http://schemas.datacontract.org/2004/07/System;Icepay/Api/DataContract/System/' \
    --ns-dest='Icepay/Api/;src/Api/' \
    --ns-map='http://tempuri.org/;Icepay/Api/' \
     https://connect.icepay.com/webservice/report.svc?wsdl \
     https://connect.icepay.com/webservice/refund.svc?wsdl \
     https://connect.icepay.com/webservice/icepay.svc?wsdl \
     https://connect.icepay.com/webservice/APCapture.svc?wsdl
 ```
