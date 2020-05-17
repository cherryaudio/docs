<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>{{ $name }}</title>
    <link rel="stylesheet" href="/site/themes/cherry/css/themes/{{ $theme }}?v=1">
</head>

<body>
    <h1>Table of Contents</h1>
    {!! $toc->getToc() !!}
    {!! $toc->getContent() !!}
</body>

</html>