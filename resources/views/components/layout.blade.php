<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blade névtelen komponensek bemutatása Tailwind CSS keretrendszerrel kiegészítve</title>
    @vite('resources/sass/main.scss', 'resources/css/app.css')
</head>
<body class="is-preload">
    {{-- {{ $slot }} --}}

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Header -->
        @include('includes._header')

        <!-- Menu -->
        @include('includes._menu')

        <!-- Main -->
        <div id="main">

            <!-- Post -->
            <article class="post">
                <header>
                    <div class="title">
                        <h2><a href="single.html">Magna sed adipiscing</a></h2>
                        <p>Lorem ipsum dolor amet nullam consequat etiam feugiat</p>
                    </div>
                    <div class="meta">
                        <time class="published" datetime="2015-11-01">November 1, 2015</time>
                        <a href="#" class="author"><span class="name">Jane Doe</span><img src="{{ Vite::asset('resources/images/avatar.jpg') }}" alt="" /></a>
                    </div>
                </header>
                <a href="single.html" class="image featured"><img src="{{ Vite::asset('resources/images/pic01.jpg') }}" alt="" /></a>
                <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
                <footer>
                    <ul class="actions">
                        <li><a href="single.html" class="button large">Continue Reading</a></li>
                    </ul>
                    <ul class="stats">
                        <li><a href="#">General</a></li>
                        <li><a href="#" class="icon solid fa-heart">28</a></li>
                        <li><a href="#" class="icon solid fa-comment">128</a></li>
                    </ul>
                </footer>
            </article>

            <!-- Post -->
            <article class="post">
                <header>
                    <div class="title">
                        <h2><a href="single.html">Ultricies sed magna euismod enim vitae gravida</a></h2>
                        <p>Lorem ipsum dolor amet nullam consequat etiam feugiat</p>
                    </div>
                    <div class="meta">
                        <time class="published" datetime="2015-10-25">October 25, 2015</time>
                        <a href="#" class="author"><span class="name">Jane Doe</span><img src="{{ Vite::asset('resources/images/avatar.jpg') }}" alt="" /></a>
                    </div>
                </header>
                <a href="single.html" class="image featured"><img src="{{ Vite::asset('resources/images/pic02.jpg') }}" alt="" /></a>
                <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper.</p>
                <footer>
                    <ul class="actions">
                        <li><a href="single.html" class="button large">Continue Reading</a></li>
                    </ul>
                    <ul class="stats">
                        <li><a href="#">General</a></li>
                        <li><a href="#" class="icon solid fa-heart">28</a></li>
                        <li><a href="#" class="icon solid fa-comment">128</a></li>
                    </ul>
                </footer>
            </article>

            <!-- Post -->
            <article class="post">
                <header>
                    <div class="title">
                        <h2><a href="single.html">Euismod et accumsan</a></h2>
                        <p>Lorem ipsum dolor amet nullam consequat etiam feugiat</p>
                    </div>
                    <div class="meta">
                        <time class="published" datetime="2015-10-22">October 22, 2015</time>
                        <a href="#" class="author"><span class="name">Jane Doe</span><img src="{{ Vite::asset('resources/images/avatar.jpg') }}" alt="" /></a>
                    </div>
                </header>
                <a href="single.html" class="image featured"><img src="{{ Vite::asset('resources/images/pic03.jpg') }}" alt="" /></a>
                <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla. Cras vehicula tellus eu ligula viverra, ac fringilla turpis suscipit. Quisque vestibulum rhoncus ligula.</p>
                <footer>
                    <ul class="actions">
                        <li><a href="single.html" class="button large">Continue Reading</a></li>
                    </ul>
                    <ul class="stats">
                        <li><a href="#">General</a></li>
                        <li><a href="#" class="icon solid fa-heart">28</a></li>
                        <li><a href="#" class="icon solid fa-comment">128</a></li>
                    </ul>
                </footer>
            </article>

            <!-- Pagination -->
            <ul class="actions pagination">
                <li><a href="" class="disabled button large previous">Previous Page</a></li>
                <li><a href="#" class="button large next">Next Page</a></li>
            </ul>

        </div>

        <!-- Sidebar -->
        @include('includes._sidebar')

    </div>

    <!-- Scripts -->
    @include('includes._scripts')

</body>
</html>
