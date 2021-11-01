<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{page_title}</title>
</head>
<body>
    <h1> {page_heading|upper} </h1>
    <p> DOB: {date|date(Y-m-d)} </p>
    <p>DOB: {date|date(l ds F Y)}</p>
    <p>Price: {price|local_currency(EUR)}</p>
</body>
</html>