<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sam's Library</title>
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
</head>
<h1>Sam's Dank Books</h1>
<hr/>
<body>
<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('books') }}">BOOKISH</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('books') }}">View All Books</a></li>
        <li><a href="{{ URL::to('books/create') }}">Add a Book</a></li>
    </ul>
</nav>
<div class="container">
    @yield('content')
</div>

@yield('footer')
</body>
</html>