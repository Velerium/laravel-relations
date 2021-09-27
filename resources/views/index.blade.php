@extends ('layouts.app')

@section('content')

<?php
    $i = 0;
?>

    @while ( $i < count($articleList))
    <div class="small-container">
        <div class="partial">
            <div class="big">
                <a href="{{ route('articles.show', $articleList[$i]->id) }}">    
                    <div class="big-content padding">
                        <h3>{{ $articleList[$i]->title }}</h3>
                    </div>
                </a>
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
                        <div class="small padding">
                            <h3>{{ $articleList[$i]->title }}</h3>
                        </div>
                    </a>
                    @if (count($articleList) === ++$i)
                </div>
            </div>
        </div>
    </div>
                    @break
                    @endif
                    <a class="small" href="{{ route('articles.show', $articleList[$i]->id) }}">    
                        <div class="small padding">
                            <h3>{{ $articleList[$i]->title }}</h3>
                        </div>
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
                        <div class="small padding">
                            <h3>{{ $articleList[$i]->title }}</h3>
                        </div>
                    </a>
                    
                    @if (count($articleList) === ++$i)
                </div>
            </div>
        </div>
    </div>
                    @break
                    @endif
                    <a class="small" href="{{ route('articles.show', $articleList[$i]->id) }}">    
                        <div class="padding">
                            <h3>{{ $articleList[$i]->title }}</h3>
                        </div>
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
                <a href="{{ route('articles.show', $articleList[$i]->id) }}">    
                    <div class="big-content padding">
                        <h3>{{ $articleList[$i++]->title }}</h3>
                    </div>
                </a>
            </div>
        </div>
    </div>

    @endwhile

    <div class="links">{{ $articleList->links() }}</div>

@endsection 