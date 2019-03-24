<div class="breadcrumb">
    <h1>{{ isset($page) ? $page : 'Dashboard' }}</h1>
    <ul>
        <li><a href="/">Dashboard</a></li>
        @if(isset($links))
            @foreach($links as $link=>$page)
                <a href="{{route($link)}}"><li>{{$page}}</li></a>
            @endforeach
        @endif
    </ul>
</div>
