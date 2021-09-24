@extends ('layouts.app')

@section('content')

<?php
    $i = 0;
?>

    @while ( $i < count($articleList))
    <div class="small-container">
        <div class="partial">
            <div class="big">
                <div class="big-content border"><h3>{{ $articleList[$i]->title }}</h3></div>
                @if (count($articleList) === ++$i)
            </div>
        </div>
    </div>
                    @break
                @endif
            </div>
            <div class="big">
                <div class="big-content">
                    <div class="small"><h3>{{ $articleList[$i]->title }}</h3></div>

                    @if (count($articleList) === ++$i)
                </div>
            </div>
        </div>
    </div>
                    @break
                    @endif
                    <div class="small"><h3>{{ $articleList[$i]->title }}</h3></div>
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
                    <div class="small"><h3>{{ $articleList[$i]->title }}</h3></div>

                    @if (count($articleList) === ++$i)
                </div>
            </div>
        </div>
    </div>
                    @break
                    @endif
                    <div class="small"><h3>{{ $articleList[$i]->title }}</h3></div>

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
                <div class="big-content border"><h3>{{ $articleList[$i++]->title }}</h3></div>
            </div>
        </div>
    </div>

    @endwhile

    <div class="links">{{ $articleList->links() }}</div>

@endsection 