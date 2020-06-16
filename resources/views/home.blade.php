<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Boolean Classes</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

      
    </head>
    <body>
        <header class="main-header">
            <h1>Boolean Classes</h1>
        </header>

        <main class="main-content">
            <section class="students">
                @foreach($students as $student)
                <div class="single-student">
                    <h3> {{ $student->name }} </h3>
                    <h4> {{ $student->class }} </h4>
                    <p> {{ $student->languages }} </p>
                </div>
                @endforeach
            </section>
        </main>

        <footer class="main-footer">
            footer
        </footer>
    </body>
</html>
