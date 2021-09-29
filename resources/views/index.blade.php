@extends ('layouts.app')

@section('content')

<?php
    $i = 0;
?>

    @while ( $i < count($articleList))
    <div class="small-container">
        <div class="partial">
            <div class="big">
                <div class="big-content">
                    <a href="{{ route('articles.show', $articleList[$i]->id) }}">
                        <h3>{{ $articleList[$i]->title }}</h3>
                        <h5>{{ $articleList[$i]->author->name }}, {{$articleList[$i]->date}}</h5>
                        <div class="article-preview">
                            <img src="{{ $articleList[$i]->picture }}" alt="">
                            <p>{{ $articleList[$i]->content }}</p>
                        </div>
                        <div class="ad-box">
                            <div>AD</div>
                        </div>
                        <div>Click to continue reading...</div>
                        <form class="top-right" action="{{ route('articles.destroy', $articleList[$i]->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">&times;</button>
                        </form>
                    </a>
                </div>
                @if (count($articleList) === ++$i)
            </div>
        </div>
    </div>
                    @break
                @endif
            </div>
            <div class="big">
                <div class="big-content">
                    <a class="small" href="{{ route('articles.show', $articleList[$i]->id) }}">    
                        <h3>{{ $articleList[$i]->title }}</h3>
                        <h5>{{ $articleList[$i]->author->name }}, {{$articleList[$i]->date}}</h5>
                        <div class="article-preview-small">
                            <img src="{{ $articleList[$i]->picture }}" alt="">
                            <p>{{ $articleList[$i]->content }}</p>
                        </div>
                        <form class="top-right" action="{{ route('articles.destroy', $articleList[$i]->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">&times;</button>
                        </form>
                    </a>
                    @if (count($articleList) === ++$i)
                </div>
            </div>
        </div>
    </div>
                    @break
                    @endif
                    <a class="small" href="{{ route('articles.show', $articleList[$i]->id) }}">    
                        <h3>{{ $articleList[$i]->title }}</h3>
                        <h5>{{ $articleList[$i]->author->name }}, {{$articleList[$i]->date}}</h5>
                        <div class="article-preview-small">
                            <img src="{{ $articleList[$i]->picture }}" alt="">
                            <p>{{ $articleList[$i]->content }}</p>
                        </div>
                        <form class="top-right" action="{{ route('articles.destroy', $articleList[$i]->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">&times;</button>
                        </form>
                    </a>
                </div>
            </div>

            @if (count($articleList) === ++$i)
        </div>
    </div>
            @break
            @endif
            
        </div>
        <div class="partial">
            <div class="big">
                <div class="big-content">
                    <a class="small" href="{{ route('articles.show', $articleList[$i]->id) }}">    
                        <h3>{{ $articleList[$i]->title }}</h3>
                        <h5>{{ $articleList[$i]->author->name }}, {{$articleList[$i]->date}}</h5>
                        <div class="article-preview-small">
                            <img src="{{ $articleList[$i]->picture }}" alt="">
                            <p>{{ $articleList[$i]->content }}</p>
                        </div>
                        <form class="top-right" action="{{ route('articles.destroy', $articleList[$i]->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">&times;</button>
                        </form>
                    </a>
                    
                    @if (count($articleList) === ++$i)
                </div>
            </div>
        </div>
    </div>
                    @break
                    @endif
                    <a class="small" href="{{ route('articles.show', $articleList[$i]->id) }}">    
                        <h3>{{ $articleList[$i]->title }}</h3>
                        <h5>{{ $articleList[$i]->author->name }}, {{$articleList[$i]->date}}</h5>
                        <div class="article-preview-small">
                            <img src="{{ $articleList[$i]->picture }}" alt="">
                            <p>{{ $articleList[$i]->content }}</p>
                        </div>
                        <form class="top-right" action="{{ route('articles.destroy', $articleList[$i]->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">&times;</button>
                        </form>
                    </a>

                    @if (count($articleList) === ++$i)
                </div>
            </div>
        </div>
    </div>
                    @break
                    @endif
                </div>
            </div>
            <div class="big">  
                <div class="big-content">
                    <a href="{{ route('articles.show', $articleList[$i]->id) }}">    
                        <h3>{{ $articleList[$i]->title }}</h3>
                        <h5>{{ $articleList[$i]->author->name }}, {{$articleList[$i]->date}}</h5>
                        <div class="article-preview">
                            <img src="{{ $articleList[$i]->picture }}" alt="">
                            <p>{{ $articleList[$i]->content }}</p>
                        </div>
                        <div class="ad-box">
                            <div>AD</div>
                        </div>
                        <div>Click to continue reading...</div>
                        <form class="top-right" action="{{ route('articles.destroy', $articleList[$i++]->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">&times;</button>
                        </form>
                    </a>
                </div>
            </div>
        </div>
    </div>

    @endwhile

    <div class="links">{{ $articleList->links() }}</div>

@endsection 