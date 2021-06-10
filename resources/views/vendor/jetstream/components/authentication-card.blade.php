<div class="min-h-screen flex flex-col sm:justify-center items-center sm:px-6 bg-gray-100">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md max-w-screen-sm min-w-max mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
