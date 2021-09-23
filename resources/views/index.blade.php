@extends ('layouts.app')

@section('content')

<div class="container">
    
    @for ($i = 0; $i < count($articleList); $i += 6)
    <div class="small-container">
        <div class="partial">
            <div class="big">
                <div class="big-content border"><h3>{{ $articleList[$i]->title }}</h3></div>
            </div>
            <div class="big">
                <div class="big-content">
                    <div class="small"><h3>{{ $articleList[$i+1]->title }}</h3></div>
                    <div class="small"><h3>{{ $articleList[$i+2]->title }}</h3></div>
                </div>
            </div>
            
        </div>
        <div class="partial">
            <div class="big">
                <div class="big-content">
                    <div class="small"><h3>{{ $articleList[$i+3]->title }}</h3></div>
                    <div class="small"><h3>{{ $articleList[$i+4]->title }}</h3></div>
                </div>
            </div>
            <div class="big">
                <div class="big-content border"><h3>{{ $articleList[$i+5]->title }}</h3></div>
            </div>
        </div>
    </div>

    @endfor

    <div class="links">{{ $articleList->links() }}</div>
    
</div>

@endsection 