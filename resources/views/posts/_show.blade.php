@component('components.panels.default', ['type' => 'info'])
    @slot('title')
        <strong>{{ link_to_route('posts.show', $post->title, $post) }}</strong>,
        <span>{{ link_to_route('users.show', $post->author->fullname, $post->author) }}</span>
        <time class="pull-right">{{ humanize_date($post->posted_at) }}</time>
    @endslot

    @if ($post->hasThumbnail())
        {{ Html::image($post->thumbnail()->url, $post->thumbnail()->original_filename, ['class' => 'img-responsive']) }}
    @endif

    {{ $post->content }}
@endcomponent
