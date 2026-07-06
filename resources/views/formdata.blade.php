 <!-- only for testing purpose, will not work in laravel -->

  <!-- $_REQUEST -->
@php
$name =  $_REQUEST['name'];
echo "Name : " . $name;
@endphp

<!-- $_POST -->
@php
$name = $_POST['name'];
echo "Name : " . $name;
@endphp