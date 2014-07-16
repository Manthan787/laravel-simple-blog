<html>
<head>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<title>@yield('title')</title>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js">
	</script>
</head>
<body>

<div class="container">
	<ul class="nav nav-tabs" role="tablist">
  <li class="active"><a href="/">Home</a></li>
  <li><a href="/posts/create">Add Post</a></li>
  </ul>
  </div>
  <br>

	@yield('content')
</body>
</html>