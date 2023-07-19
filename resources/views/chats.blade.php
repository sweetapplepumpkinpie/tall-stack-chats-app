<x-chats-layout>
    <div
        x-data="{ isOpenProfile: window.innerWidth >= 1024, isOpenMessages: true }"
        class="flex-auto bg-white dark:bg-neutral-800 grid grid-cols-1 sm:grid-cols-6 lg:grid-cols-8 relative"
    >
        <div
            class="col-span-1 sm:col-span-2 border-r dark:border-gray-500 h-full flex flex-col overflow-hidden"
        >
            <x-users></x-users>
        </div>
        <div
            x-show="isOpenMessages"
            x-transition:enter="transform transition ease-in-out duration-500 sm:duration-0"
            x-transition:enter-start="translate-y-full"
            x-transition:enter-end="translate-y-0"
            x-transition:leave="transform transition ease-in-out duration-500"
            x-transition:leave-start="-translate-y-full"
            x-transition:leave-end="translate-y-full"
            class="col-span-1 sm:col-span-4 flex flex-col absolute z-1 bg-white dark:bg-neutral-800 sm:relative h-full overflow-hidden dark:border-gray-500"
        >
            <x-messages></x-messages>
        </div>
        <div
            @resize.window="isOpenProfile = window.innerWidth >= 1024; if (window.innerWidth > 640) { isOpenMessages = window.innerWidth >= 640 }"
            x-show="isOpenProfile"
            x-transition:enter="transform transition ease-in-out duration-500 lg:duration-0"
            x-transition:enter-start="translate-x-full"
            x-transition:enter-end="translate-x-0"
            x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700"
            x-transition:leave-start="translate-x-0"
            x-transition:leave-end="translate-x-full"
            class="lg:col-span-2 w-full sm:w-1/2 md:w-1/3 lg:w-full right-0 border-l h-full overflow-y-auto px-6 absolute z-2 bg-white dark:bg-neutral-800 lg:relative dark:border-gray-500"
        >
            <x-profile></x-profile>
        </div>
    </div>
</x-chats-layout>
