<x-filament::page>
    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">

        {{-- Armada --}}
        <a href="{{ route('filament.resources.fleets.index') }}"
           class="block rounded-xl border border-gray-200 bg-white p-6 shadow-sm hover:border-primary-500 hover:shadow-md transition-all dark:border-gray-700 dark:bg-gray-800">
            <div class="flex items-center gap-4">
                <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-blue-50 dark:bg-blue-900/20">
                    <x-heroicon-o-truck class="h-6 w-6 text-blue-600" />
                </div>
                <div>
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Armada</p>
                    <p class="text-3xl font-bold text-gray-900 dark:text-white">{{ $fleetCount }}</p>
                </div>
            </div>
        </a>

        {{-- Tim --}}
        {{-- dihapus --}}

        {{-- Galeri --}}
        <a href="{{ route('filament.resources.gallery-photos.index') }}"
           class="block rounded-xl border border-gray-200 bg-white p-6 shadow-sm hover:border-primary-500 hover:shadow-md transition-all dark:border-gray-700 dark:bg-gray-800">
            <div class="flex items-center gap-4">
                <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-purple-50 dark:bg-purple-900/20">
                    <x-heroicon-o-photograph class="h-6 w-6 text-purple-600" />
                </div>
                <div>
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Foto Galeri</p>
                    <p class="text-3xl font-bold text-gray-900 dark:text-white">{{ $galleryCount }}</p>
                </div>
            </div>
        </a>

        {{-- Blog --}}
        <a href="{{ route('filament.resources.blog-posts.index') }}"
           class="block rounded-xl border border-gray-200 bg-white p-6 shadow-sm hover:border-primary-500 hover:shadow-md transition-all dark:border-gray-700 dark:bg-gray-800">
            <div class="flex items-center gap-4">
                <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-yellow-50 dark:bg-yellow-900/20">
                    <x-heroicon-o-document-text class="h-6 w-6 text-yellow-600" />
                </div>
                <div>
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Blog</p>
                    <p class="text-3xl font-bold text-gray-900 dark:text-white">{{ $blogCount }}</p>
                    <p class="text-xs text-gray-400">{{ $blogPublishedCount }} dipublikasikan</p>
                </div>
            </div>
        </a>

        {{-- Users --}}
        <a href="{{ route('filament.resources.users.index') }}"
           class="block rounded-xl border border-gray-200 bg-white p-6 shadow-sm hover:border-primary-500 hover:shadow-md transition-all dark:border-gray-700 dark:bg-gray-800">
            <div class="flex items-center gap-4">
                <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-red-50 dark:bg-red-900/20">
                    <x-heroicon-o-user-group class="h-6 w-6 text-red-600" />
                </div>
                <div>
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Users</p>
                    <p class="text-3xl font-bold text-gray-900 dark:text-white">{{ $userCount }}</p>
                </div>
            </div>
        </a>

        {{-- Lihat Website --}}
        <a href="{{ route('front.index') }}" target="_blank"
           class="block rounded-xl border border-dashed border-gray-300 bg-white p-6 shadow-sm hover:border-primary-500 hover:shadow-md transition-all dark:border-gray-600 dark:bg-gray-800">
            <div class="flex items-center gap-4">
                <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-gray-50 dark:bg-gray-700">
                    <x-heroicon-o-external-link class="h-6 w-6 text-gray-500" />
                </div>
                <div>
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Lihat Website</p>
                    <p class="text-xs text-gray-400">Buka di tab baru →</p>
                </div>
            </div>
        </a>

    </div>
</x-filament::page>
