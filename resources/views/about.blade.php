<!-- resources/views/about.blade.php -->
<!doctype html>
<title>About</title>
<h1>About page</h1>
<p>Hello, {{ $name ?? 'Guest' }}!</p>
<p>Umur : {{ $umur ? $umur : '18'}}</p>
