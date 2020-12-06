<!DOCTYPE html>
<html>
<head>
    <title> Laravel Test Page</title>
</head>
<body>

<h1>Laravel Test</h1>
id no:{{$id}}<br>
name :{{$name}}
<?php
echo "id",$id;
for($i=1;$i<=$id;$i++)
{
    echo "<br> $i - $name";
}
?>
<a href="{{route('home')}}">Ana sayfa</a>

</body>
</html>
