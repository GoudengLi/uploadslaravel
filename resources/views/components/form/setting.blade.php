@props(['heading'])

<section class="py-8 max-w-4xl mx-auto">
    <h1 class="text-lg font-bold mb-8 pb-2 border-b">
        {{ $heading }}
    </h1>

    <div class="flex">
        <aside class="w-48 flex-shrink-0">
            <div style="position: relative;" onmouseover="showLinks()" onmouseout="hideLinks()">
                <h4 class="font-semibold mb-4">Links</h4>
            
                <ul id="linksList" style="display: none;">
                    <li>
                        <a href="/admin/posts" class="{{ request()->is('admin/posts') ? 'text-blue-500' : '' }}">All Posts</a>
                    </li>
            
                    <li>
                        <a href="/admin/posts/create" class="{{ request()->is('admin/posts/create') ? 'text-blue-500' : '' }}">New Post</a>
                    </li>
                </ul>
            </div>
        </aside>

        <main class="flex-1">
            <div {{ $attributes(['class' => 'border border-gray-200 p-6 rounded-xl']) }}>
                {{ $slot }}
            </div>
        </main>
    </div>
</section>
<script>
    function showLinks() {
        document.getElementById('linksList').style.display = 'block';
    }

    function hideLinks() {
        document.getElementById('linksList').style.display = 'none';
    }
</script>