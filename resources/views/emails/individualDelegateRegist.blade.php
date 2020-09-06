@component('mail::message')
## Dear {{$data->fullName}},

We are very pleased to welcome you to ITBMUN 2020! We have accepted your
registration with the following summary:

<big><b>1. Personal Information</b></big>
    * __Name:__ {{$data->fullName}}
    * __Institution:__ {{$data->institution}}

<big><b>2. Council Preferences</b></big>
    * __1st:__ {{$data->firstCouncilPreference}} ({{$data->firstCouncilCountryPreference}})
    * __2nd:__ {{$data->secondCouncilPreference}} ({{$data->secondCouncilCountryPreference}})
    * __3nd:__ {{$data->thirdCouncilPreference}} ({{$data->thirdCouncilCountryPreference}})

<big><b>3. Package:</b> {{$data->accommodation}}</big>
@component('mail::panel')
@if($data->accommodation == 'Full Accommodation')
<b>International Delegate:</b> US$122,00<br>
<b>National Delegate:</b> Rp1.660.000,00
@else
<b>International Delegate:</b> US$65,00<br>
<b>National Delegate:</b> Rp865.000,00
@endif

@endcomponent

@if(isset($data->doubleDelegateName) && isset($data->doubleDelegateInstitution))
<big><b>4. Double Delegate</b></big>

<b>Delegate Name:</b> {{$data->doubleDelegateName}}<br>
<b>Delegate Institution:</b> {{$data->doubleDelegateInstitution}}
@endif

Should there be any changes to the mentioned details, please report to the Delegates’ Affair
and Accommodation Team through itbmodelunitednations@gmail.com with the subject :
“[Your Full Name]_Info Change_DAA”.

---

## Payment Mechanism

Please proceed to fulfill your payment to the following account

@component('mail::table')

| <big><b>Account Info</b></big>        | <big><b>Values</b></big>                                                                                                                                                        |
|:------------------------------------- |:------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| <small style='padding-right: 8px'><b>Account No</b></small>      | <small style='padding-right: 8px'>7772148677</small>                                                                                                                                                       |
| <small style='padding-right: 8px'><b>Account Holder</b></small>  | <small style='padding-right: 8px'>Josephine Emmanuel</small>                                                                                                                                               |
| <small style='padding-right: 8px'><b>Bank Issuer</b></small>     | <small style='padding-right: 8px'>Bank Central Asia (BCA) Menara BCA,<br>Grand Indonesia MH Thamrin St. No. 1<br>Jakarta, Indonesia 10310<br><b>(p)</b> (021) 235 88000 <b>(f)</b> (021) 235 88300 </small>|

@endcomponent

Within 3 days from the moment you received this email, we would expect to receive a
reply from you through this mail thread with the payment proof document attached either in
.pdf or .jpg or .png format. Upon receiving your payment proof, the Committee will proceed
to secure your seat and send you a confirmation email as soon as we have done so. However,
failure to fulfill your payment within 3 days will result in the termination of your registration.

Please note that there’s no refund policy after the payment has been made. For delegate
substitution matters please contact our email by the following format to receive substitution
form : “[Your Full Name]_Request To Subsitute_DAA”.

---
@endcomponent
