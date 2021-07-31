@props(['keyword'])
<a href="{{route('articles-by-keyword', [$keyword->name])}}"
   class="btn btn-sm btn-light mb-1">
    {{$keyword->name}}
</a>
