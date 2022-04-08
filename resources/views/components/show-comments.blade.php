@props(['comments'])
@if (count($comments) !== 0)
  @foreach ($comments as $comment)
  <x-post-comment :comment="$comment" />
  @endforeach

@else
<x-panel class="text-center bg-gray-100">
    <p class="text-gray-500">No comments yet for this post...</p>
</x-panel>
@endif
