<!--  | In this file : 
        will include the rows, col's for each type of article - 2 each
 -->
<!--  | first 2 rows for baby article -->
<div class="row add-whitespace mt-4 mb-2">
    <div class="col-lg">
        <h2 id="title">
            <a href="/babyArticle/{{ $mostPopular[0][0]->id ?? '' }}">
                {{ $mostPopular[0][0]->title ?? '' }}
            </a>
        </h2>  
        <p style="color: grey; font-size: 15px;">
            {{ $mostPopular[0][0]->excerpt ?? ''}}
        </p>              
    </div>
</div>
<!--  | separator  -->


<!-- | row for second most-popular baby article -->
<div class="row add-whitespace mb-2">
    <div class="col-lg">
        <h2  id="title">
            <a href="/babyArticle/{{ $mostPopular[0][1]->id ?? '' }}">
              {{ $mostPopular[0][1]->title ?? '' }}
            </a>
        </h2>  
        <p style="color: grey; font-size: 15px;">
            {{ $mostPopular[0][1]->excerpt ?? ''  }}
        </p>              
    </div>
</div>

<!-- | Second set of articles | Kids articles -->
 
<div class="row add-whitespace mb-2">
    <div class="col-sm-12">
        <h2 style="" id="title">
            <a href="/kidArticle/{{ $mostPopular[1][0]->id ?? '' }}">
             {{ $mostPopular[1][0]->title ?? ''}}
            </a>
            <p style="color: grey; font-size: 15px;">
                {{ $mostPopular[1][0]->excerpt  ?? '' }}
            </p>   
        </h2>                
    </div>
</div>

<div class="row add-whitespace mb-2">
    <div class="col-lg">
        <h2  id="title">
            <a href="/kidArticle/{{ $mostPopular[1][1]->id ?? '' }}">
              {{ $mostPopular[1][1]->title ?? ''}}
            </a>
        </h2>  
        <p style="color: grey; font-size: 15px;">
            {{ $mostPopular[1][1]->excerpt  ?? '' }}
        </p>              
    </div>
</div>

<div class="row add-whitespace mb-2">
    <div class="col-lg">
        <h2  id="title">
            <a href="/guideArticle/{{ $mostPopular[2][0]->id ?? '' }}">
              {{ $mostPopular[2][0]->title ?? ''}}
            </a>
        </h2>  
        <p style="color: grey; font-size: 15px;">
            {{ $mostPopular[2][0]->excerpt ?? '' }}
        </p>              
    </div>
</div>

<div class="row add-whitespace mb-2">
    <div class="col-lg">
        <h2  id="title">
            <a href="/guideArticle/{{ $mostPopular[2][1]->id ?? '' }}">
              {{ $mostPopular[2][1]->title ?? ''}}
            </a>
        </h2>  
        <p style="color: grey; font-size: 15px;">
            {{ $mostPopular[2][1]->excerpt ?? '' }}
        </p>              
    </div>
</div>

<div class="row add-whitespace mb-2">
    <div class="col-lg">
        <h2  id="title">
            <a href="/healthArticle/{{ $mostPopular[3][0]->id ?? '' }}">
              {{ $mostPopular[3][0]->title ?? ''}}
            </a>
        </h2>  
        <p style="color: grey; font-size: 15px;">
            {{ $mostPopular[3][0]->excerpt ?? '' }}
        </p>              
    </div>
</div>

<div class="row add-whitespace mb-4">
    <div class="col-lg">
        <h2  id="title">
            <a href="/healthArticle/{{ $mostPopular[3][1]->id ?? '' }}">
              {{ $mostPopular[3][1]->title ?? ''}}
            </a>
        </h2>  
        <p style="color: grey; font-size: 15px;">
            {{ $mostPopular[3][1]->excerpt ?? ''}}
        </p>              
    </div>
</div>