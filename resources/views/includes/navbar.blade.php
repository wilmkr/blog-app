<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
	<div class="container">
		<a class="navbar-brand" href="/">{{config('app.name')}}</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item"><a class="nav-link" aria-current="page" href="/">Home</a></li>
				<li class="nav-item"><a class="nav-link" href="/about">About</a></li>
				<li class="nav-item"><a class="nav-link" href="/services">Services</a></li>
				<li class="nav-item"><a class="nav-link" href="/posts">Blog</a></li>
			</ul>
			<ul class="navbar-nav ms-auto">
				<li><a class="nav-link" href="/posts/create">Create Post</a></li>
			</ul>
		</div>
	</div>
</nav>