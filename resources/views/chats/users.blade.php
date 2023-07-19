<div class="flex px-6 py-4 justify-between items-center">
    <span class="font-bold text-2xl text-neutral-700 dark:text-gray-100">
        Chats
    </span>
    <div
        x-data="{
            toggle: () => {
                if (localStorage.theme === 'dark') {
                    localStorage.theme = 'light';
                    document.documentElement.classList.remove('dark');
                } else {
                    localStorage.theme = 'dark';
                    document.documentElement.classList.add('dark');
                }
            }
        }"
        @click="toggle"
        class="rounded-full p-1.5 w-10 h-10 group/icon hover:border-none hover:bg-blue-500 border dark:border-gray-500 flex items-center justify-center"
    >
        <svg
            xmlns="http://www.w3.org/2000/svg"
            class="group-hover/icon:fill-white fill-blue-500 dark:w-[80%] w-[70%]"
            viewBox="0 0 49.7 49.7"
        >
            <path
                d="M25.4,49.7A25.6,25.6,0,0,1,1.3,32.3,25.6,25.6,0,0,1,17.3.1a2,2,0,0,1,2.1.5,2.2,2.2,0,0,1,.5,2.1,19.9,19.9,0,0,0-1.2,6.8A21,21,0,0,0,25,24.7,21,21,0,0,0,40.2,31h0a20.9,20.9,0,0,0,6.9-1.2,2,2,0,0,1,2.5,2.5,25.8,25.8,0,0,1-16,16.1A28.7,28.7,0,0,1,25.4,49.7ZM15,5.5A21.4,21.4,0,0,0,5.1,31.1,21.5,21.5,0,0,0,15.9,43.4a21.2,21.2,0,0,0,28.3-8.8,17.5,17.5,0,0,1-4,.4h0a24.9,24.9,0,0,1-18-7.5,24.9,24.9,0,0,1-7.5-18A26.9,26.9,0,0,1,15,5.5Z"
            ></path>
        </svg>
    </div>
</div>
<div class="px-4 pb-4">
    <div class="relative">
        <input
            placeholder="Rechercher un message, un utilisateur…"
            class="w-full rounded-xl dark:bg-neutral-600 bg-gray-100 py-6 pl-6 pr-12 h-[2.375rem] border-none outline-0 focus:outline-none focus:ring-1 dark:focus:ring-gray-500 focus:ring-gray-100 dark:focus:border-gray-500 focus:border-gray-100 dark:focus:bg-neutral-800 focus:bg-white"
        />
        <button
            type="submit"
            class="absolute top-0 right-0 h-full w-14 flex justify-center items-center"
        >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="dark:fill-neutral-400 fill-neutral-300 w-2/5"
                viewBox="0 0 46.6 46.6"
            >
                <path
                    d="M46.1,43.2l-9-8.9a20.9,20.9,0,1,0-2.8,2.8l8.9,9a1.9,1.9,0,0,0,1.4.5,2,2,0,0,0,1.5-.5A2.3,2.3,0,0,0,46.1,43.2ZM4,21a17,17,0,1,1,33.9,0A17.1,17.1,0,0,1,33,32.9h-.1A17,17,0,0,1,4,21Z"
                ></path>
            </svg>
        </button>
    </div>
</div>
<div class="flex-auto overflow-y-auto px-4 pb-12">
    <div x-data>
        <template x-for="(user, index) in $store.users.items">
            <div
                class="rounded-xl cursor-pointer px-4 py-2 flex items-center grid grid-cols-[4em_4fr] gap-x-4"
                :class="$store.users.current === index ? 'dark:hover:bg-gray-800 dark:bg-gray-800 hover:bg-blue-100 bg-blue-100' : 'dark:hover:bg-neutral-600 hover:bg-gray-100'"
                @click="isOpenMessages = true"
            >
                <div class="relative">
                    <img
                        x-bind:src="user.image"
                        class="rounded-full w-full"
                        x-bind:alt="user.name"
                    />
                    <div
                        class="absolute right-0 bottom-0 rounded-full w-4 h-4 border-white border-[3px]"
                        :class="user.active ? 'bg-green-400' : 'bg-gray-400'"
                    ></div>
                </div>
                <div class="overflow-hidden flex flex-col">
                    <span x-text="user.name"></span>
                    <span
                        class="whitespace-nowrap text-ellipsis overflow-hidden"
                        x-text="user.lastMessage"
                    ></span>
                </div>
            </div>
        </template>
    </div>
</div>
