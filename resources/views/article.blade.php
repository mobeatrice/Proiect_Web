@extends('layout')

@section('content')

    <div class="read-article container row">
        <section class="article-content col">

        @foreach($articles as $article)

                <h1 class="fs-h1 text-accent300 title">{{ $article->titlu }}</h1>



                <p class="category fs-category">{{ $article->category->nume_categorie }} </p>
                <p class="article-author fs-date text-dark"> By: {{ $article->nume_autor->nume }} {{ $article->nume_autor->prenume }}</p>
                <div class="article-text">
                    <p class="fs-text text-dark">{{ $article->continut_articol }}</p>
                </div>
                <p class="fs-date article__date date-bottom"><date> <em>Data: {{ $article->data_creare }}</em> </date> </p>
            @endforeach
        </section>
    </div>

@endsection
