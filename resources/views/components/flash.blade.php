@if (session()->has('success'))
        <div x-data="{ isVisible: true }"
             x-init="
                    setTimeout(() => {
                        isVisible = false
                    }, 5000)
             "
             x-show.transition.duration.1000ms="isVisible"
             class="fixed bottom-3 right-3 bg-blue-500 text-white py-2 px-4 rounded-xl">
            <p>{{ session('success') }}</p>
        </div>
    @endif
