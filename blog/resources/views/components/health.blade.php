@foreach($healthArticles as $a)
<div class="row add-whitespace mt-4 mb-4">
    <div class="col-lg">
        <h2 id="title">
        <a href="/healthArticle/{{ $a->id ?? '' }}">{{ $a->title ?? ''}}</a>
        </h2>    
        <p style="color: grey; font-size: 15px;">
            {{ $a->excerpt }}
        </p>                  
    </div>
</div>

@endforeach