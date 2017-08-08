
// function checkOTP : input user otpcode and OTP device id to validate OTP
// if OTP correct, it returns true
// if not, returns false
// the code is valid until 5mins.
function checkOTP($otpcode, $device_id){

date_default_timezone_set("Asia/Seoul");
$unix = time();



$i = 0;
for ($i = 0; $i <= 300; $i++) {
    //echo md5($device_id, false)."  ";
    //echo md5($device_id, false)."!OTP!".($unix-$i)."  <br>  ";
    //echo substr(md5(md5($device_id, false)."!OTP!".($unix-$i),false),0,5)."<br> ";
    
    if(substr(md5(md5($device_id, false)."!OTP!".($unix-$i),false),0,5) == $otpcode){
        echo true;
    }
}
echo false;
}
