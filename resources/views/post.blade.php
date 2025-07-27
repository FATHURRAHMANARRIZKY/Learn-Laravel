<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    {{-- <article class="py-8 max-w-screen-md border-b border-gray-300">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
        <div>By <a href="/authors/{{ $post->author->username }}" class="hover:underlinetext-base
                text-gray-500">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}"
                class="hover:underline text-base text-gray-500">{{ $post->category->name }}</a> |
            {{ $post->created_at->diffForHumans() }}</div>
        <p class="my-4 font-light">{{ $post['body'] }}</p>
        <a href="/" class="font-medium text-blue-500 hover:underline">&laquo;Back To Post</a>
    </article> --}}

    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-gray-700 dark:white antialiased">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
            <article
                class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <header class="mb-4 lg:mb-6 not-format">
                    <a href="/" class="font-medium text-xs text-blue-600 hover:underline">&laquo; Back to all posts</a>
                    <address class="flex items-center my-6 not-italic">
                        <a href="/authors/{{ $post->author->username }}"></a>
                        <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                            <img class="mr-4 w-16 h-16 rounded-full"
                                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="{{ $post->author->name }}" />
                            <div>
                                <a href="/?author={{ $post->author->username }}" rel="author"
                                    class="text-xl font-bold text-gray-900 dark:text-white">{{ $post->author->name }}</a>
                                {{-- <p class="text-base text-gray-500 dark:text-gray-400">Graphic Designer, educator & CEO
                                    Flowbite</p> --}}
                                <p class="text-base text-gray-500 dark:text-gray-400 mb-1">{{ $post->created_at->diffForHumans() }}</p>
                                <a href="/?category={{ $post->category->slug }}"><span
                                class="bg-{{ $post->category->color }}-200 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-gray-800">
                                {{ $post->category->name }}
                            </span></a>
                            </div>
                        </div>
                    </address>
                    <h1
                        class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                        {{ $post->title }}</h1>
                </header>
                <p>{{$post->body}}</p>
            </article>
        </div>
    </main>

</x-layout>
