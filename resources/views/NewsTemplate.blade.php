@if(!empty($post))
    <b>Заголовок: </b> {{ $post->title }} <br>
    <b>Анонс: </b> {{ $post->preview }} <br>
    <b>Текст:</b> {{ $post->text }} <br>
    <b>Теги:</b> {{ $post->tags }} <br>
@endif