<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grand Satya Admin</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Space+Grotesk:wght@300;400;500;600&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'gs-ink': '#0A1628',
                        'gs-navy': '#13274D',
                        'gs-slate': '#5C6779',
                        'gs-cream': '#F8F6F3',
                        'gs-gold': '#C9A962',
                        'gs-stone': '#E8E6E0'
                    },
                    fontFamily: {
                        'display': ['Playfair Display', 'serif'],
                        'sans': ['Space Grotesk', 'sans-serif']
                    },
                    letterSpacing: {
                        'tightest': '-0.05em',
                        'tighter': '-0.025em',
                        'wide': '0.025em',
                        'wider': '0.075em'
                    }
                }
            }
        }
    </script>
    <style>
        body { -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale; }
    </style>
</head>
<body class="bg-gs-cream text-gs-ink font-sans">
    <nav class="fixed top-0 left-0 w-full z-50 bg-gs-ink text-gs-cream border-b border-gs-navy">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <div class="flex items-center justify-between h-20">
                <a href="{{ route('admin.dashboard') }}" class="font-display text-xl tracking-tightest font-semibold">
                    Grand Satya Admin
                </a>
                <div class="flex items-center gap-6 flex-wrap">
                    <a href="{{ route('admin.fleets.index') }}" class="text-sm tracking-wide hover:text-gs-gold transition-colors duration-300">Armada</a>
                    <a href="{{ route('admin.gallery-photos.index') }}" class="text-sm tracking-wide hover:text-gs-gold transition-colors duration-300">Galeri</a>
                    <a href="{{ route('admin.blog-posts.index') }}" class="text-sm tracking-wide hover:text-gs-gold transition-colors duration-300">Blog</a>
                    <a href="{{ route('admin.users.index') }}" class="text-sm tracking-wide hover:text-gs-gold transition-colors duration-300">Users</a>
                    <a href="{{ route('front.index') }}" class="text-sm tracking-wide hover:text-gs-gold transition-colors duration-300">Lihat Website</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="pt-36 pb-12">
        @if (session('success'))
            <div class="max-w-7xl mx-auto px-6 lg:px-12 mb-10">
                <div class="bg-gs-gold/10 border border-gs-gold/30 px-6 py-4">
                    <p class="text-sm">{{ session('success') }}</p>
                </div>
            </div>
        @endif

        @yield('content')
    </main>
</body>
</html>
