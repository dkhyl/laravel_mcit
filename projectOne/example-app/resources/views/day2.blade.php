<!-- we cut our codes from welcome.blade.php to projectOne folder
inside it there is our code from the welcome page -->

<!--  HERE create new blade page "day2"
we gonna start new page instade of pu them in the welcome page -->

<!-- printing RAW php tag inside html page with our var -->

<!--HTMLSPICALCHARS -->
<!-- this will print you orignal var without printing your html code
 larvel have security to block the html code -->
{{ $name }}

<!-- this will print you h1 tag from your var name here we bypass it or to allow the html code
    HTMLSPICALCHARS-->
{!! $name !!}
<!--HTMLSPICALCHARS -->

<!-- printing RAW php tag inside html page -->
@php
    echo $name;
@endphp

