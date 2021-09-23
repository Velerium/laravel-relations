@extends ('layouts.app')

@section('content')

<div class="container">
    
    @for ($i = 0; $i < count($articleList); $i += 6)

    <div class="partial">
        <div class="big">
            <div class="big-content border">{{ $articleList[$i]->title }}</div>
        </div>
        <div class="big">
            <div class="big-content">
                <div class="small">{{ $articleList[$i+1]->title }}</div>
                <div class="small">{{ $articleList[$i+2]->title }}</div>
            </div>
        </div>
        
    </div>
    <div class="partial">
        <div class="big">
            <div class="big-content">
                <div class="small">{{ $articleList[$i+3]->title }}</div>
                <div class="small">{{ $articleList[$i+4]->title }}</div>
            </div>
        </div>
        <div class="big">
            <div class="big-content border">{{ $articleList[$i+5]->title }}</div>
        </div>
    </div>

    @endfor
    
</div>

@endsection 