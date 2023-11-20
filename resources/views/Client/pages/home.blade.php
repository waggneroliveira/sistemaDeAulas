@extends('Client.core.main')
@section('content')
    <div>
        <form action="" method="POST">
            @csrf
                {!! $question->question_text !!}
            <input type="hidden" name="question" value="{!! $question->question_text !!}">
            @foreach($question->options as $option)
                <input type="checkbox" name="option" id="{{$option->id}}">
                <label for="{{$option->id}}">{{$option->response}}</label>
            @endforeach

        </form>
    </div>
    <h1>teste whi</h1>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/nobGM3EKLIo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <div style="padding:56.25% 0 0 0;position:relative;">
        <iframe src="https://player.vimeo.com/video/710521391?share=copy" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Linkin Park &amp; Eminem - Lying From You (2020)"></iframe>
    </div>
    <section>

        @php
            $content = [
                'title' => 'porque confiar na',
                'highlight' => 'whi',
                'image' => asset('Client/assets/images/cat-sqr.jpg'),
                'text' => 'Confie na gente para transformar sua marca em uma experiência digital incrível. Nossa agência une criatividade, tecnologia e compromisso para construir sua presença online de forma inovadora e impactante.',
            ];
        @endphp

        @for ($i = 0; $i < 3; $i++)
            @include('Client.models.mdl-article', $content)
        @endfor

    </section>
@endsection
