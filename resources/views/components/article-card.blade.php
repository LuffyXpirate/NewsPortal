@props(['article'])
<div class="flex gap-4 hover:bg-gray-50 p-2 rounded-lg transition-colors group">
    <div class="w-28 flex-shrink-0">
        <img src="{{ asset($article->image) }}" alt="{{ $article->title }}" class="w-full h-20 object-cover rounded-lg">
    </div>
    <div class="flex-1">
        <h3>{{ $article->title }}</h3>
        <small class="text-xs text-gray-500 mt-1 block">
            {{ nepalidate($article->created_at) }}
        </small>
    </div>