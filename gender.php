
// pass the name in $name & API Key in $api.


$curl = curl_init( 'https://gender-api.com/get?name=$name&key=$api_key' );

curl_setopt($curl, CURLOPT_HTTPHEADER, array(                                                                          
          'Content-Type: application/json'));

curl_setopt( $curl, CURLOPT_RETURNTRANSFER, 1);

$auth = curl_exec( $curl );

$info = curl_getinfo($curl);

$secret = json_decode($auth);
echo"<pre>";
print_r($secret);//Reterive the Gender
echo "</pre>";


