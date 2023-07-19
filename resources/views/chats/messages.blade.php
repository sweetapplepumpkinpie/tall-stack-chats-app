<div
    class="flex justify-between border-b dark:border-gray-500 items-center pl-6 pr-2 py-2"
>
    <div
        x-data="{current: $store.users.items[$store.users.current]}"
        class="flex items-center space-x-2"
    >
        <div class="block sm:hidden w-8" @click="isOpenMessages = false">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="fill-blue-400"
                viewBox="0 0 45.5 30.4"
            >
                <path
                    d="M43.5,13.1H7l9.7-9.6A2.1,2.1,0,1,0,13.8.6L.9,13.5h0L.3,14v.6c0,.1-.1.1-.1.2v.4a2,2,0,0,0,.6,1.5l.3.3L13.8,29.8a2.1,2.1,0,1,0,2.9-2.9L7,17.2H43.5a2,2,0,0,0,2-2A2.1,2.1,0,0,0,43.5,13.1Z"
                ></path>
            </svg>
        </div>
        <div
            class="block sm:hidden rounded-full dark:bg-blue-500 bg-blue-400 w-6 h-6 dark:text-gray-100 text-white text-center"
        >
            1
        </div>
        <div class="flex items-center grid grid-cols-[4em_4fr] gap-x-4">
            <div class="relative">
                <img
                    x-bind:src="current.image"
                    class="rounded-full w-full"
                    x-bind:alt="current.name"
                />
                <div
                    class="absolute right-0 bottom-0 rounded-full w-4 h-4 border-white border-[3px]"
                    :class="current.active ? 'bg-green-400' : 'bg-gray-400'"
                ></div>
            </div>
            <div class="overflow-hidden flex flex-col">
                <span x-text="current.name" class="dark:text-gray-100"></span>
                <span
                    class="whitespace-nowrap text-ellipsis overflow-hidden dark:text-gray-100"
                    x-text="current.active ? 'Online' : 'Offline'"
                ></span>
            </div>
        </div>
    </div>
    <div>
        <ul class="flex space-x-1 mr-2">
            <li
                class="w-10 h-10 p-2 cursor-pointer rounded-full flex justify-center items-center hover:bg-blue-100"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="fill-blue-500 dark:w-[80%] w-[70%]"
                    viewBox="0 0 48 48"
                >
                    <path
                        d="M38.4,48c-2.1,0-5.1-.8-9.5-3.2a62.9,62.9,0,0,1-14.6-11A61.7,61.7,0,0,1,3.2,19C-.9,11.8-.3,8.5.7,6.4A9.7,9.7,0,0,1,4.8,2,21.1,21.1,0,0,1,7.8.4h.3c1.8-.7,3-.3,4.9,1.5h.1a40.1,40.1,0,0,1,5.4,8.2c1.3,2.6,1.6,4.3-.2,6.9l-.5.6c-.8,1-.8,1.2-.8,1.6s1.9,3.4,5.2,6.7S28,30.8,28.8,31s.6,0,1.6-.8l.7-.4c2.5-1.9,4.2-1.6,6.8-.3A40.6,40.6,0,0,1,46.1,35h.1c1.8,1.9,2.2,3.1,1.5,4.9v.2h0a21.1,21.1,0,0,1-1.6,3,10,10,0,0,1-4.3,4.1A7.7,7.7,0,0,1,38.4,48ZM9.5,4.1H9.2L6.9,5.4H6.8A6.3,6.3,0,0,0,4.3,8.1c-.3.7-1.2,2.6,2.4,9A58.9,58.9,0,0,0,17.1,30.9,58.2,58.2,0,0,0,30.9,41.3c6.4,3.6,8.4,2.7,9.1,2.4a6.7,6.7,0,0,0,2.5-2.5.1.1,0,0,0,.1-.1c.5-.8.9-1.6,1.3-2.4v-.2l-.5-.6a35.4,35.4,0,0,0-7.3-4.8c-1.7-.8-1.8-.8-2.7-.1l-.6.4A5.3,5.3,0,0,1,28,34.9c-2.9-.6-7.4-4.9-8.7-6.2s-5.6-5.8-6.2-8.7.6-3.6,1.5-4.8l.4-.6c.7-.9.8-1-.1-2.7a35.4,35.4,0,0,0-4.8-7.3Z"
                    ></path>
                </svg>
            </li>
            <li
                class="w-10 h-10 p-2 cursor-pointer rounded-full flex justify-center items-center hover:bg-blue-100"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="fill-blue-500 dark:w-[80%] w-[70%]"
                    viewBox="0 0 46.8 47.4"
                >
                    <path
                        d="M35.8,47.4H11a11,11,0,0,1-11-11V11.6A11,11,0,0,1,11,.6h8.8a2,2,0,1,1,0,4H11a7,7,0,0,0-7,7V36.4a7,7,0,0,0,7,7H35.8a7,7,0,0,0,7-7v-9a2,2,0,1,1,4,0v9A11,11,0,0,1,35.8,47.4Z"
                    ></path>
                    <path
                        d="M36.6,20.4A10.2,10.2,0,1,1,46.8,10.2,10.2,10.2,0,0,1,36.6,20.4ZM36.6,4a6.2,6.2,0,1,0,6.2,6.2A6.2,6.2,0,0,0,36.6,4Z"
                    ></path>
                </svg>
            </li>
            <li
                class="w-10 h-10 p-2 block lg:hidden cursor-pointer rounded-full flex justify-center items-center hover:bg-blue-100"
                @click="isOpenProfile = true"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="fill-blue-500 dark:w-[80%] w-[70%]"
                    viewBox="0 0 42.2 11.1"
                >
                    <g>
                        <circle cx="5.6" cy="5.6" r="5.6"></circle>
                        <circle cx="21.1" cy="5.6" r="5.6"></circle>
                        <circle cx="36.6" cy="5.6" r="5.6"></circle>
                    </g>
                </svg>
            </li>
        </ul>
    </div>
</div>
<div x-data class="flex-auto overflow-y-auto flex flex-col-reverse pt-6 px-4">
    <template x-for="(message, index) in $store.messages.items">
        <div>
            <div
                x-text="message.date"
                class="text-center dark:text-gray-100"
                :class="message.date === $store.messages.items[index + 1]?.date ? 'hidden' : ''"
            ></div>
            <div
                class="rounded-3xl dark:text-gray-100 cursor-pointer px-4 py-2 flex items-center max-w-[70%] w-fit"
                :class="[(message.in ? 'dark:bg-blue-500 bg-blue-400 dark:text-gray-100 text-white' : 'ml-auto dark:bg-gray-600 bg-gray-100'), (message.in === $store.messages.items[index - 1]?.in ? 'mb-1' : 'mb-3')]"
            >
                <div x-text="message.content"></div>
            </div>
        </div>
    </template>
</div>
<div class="p-4">
    <div class="relative">
        <input
            placeholder="Ecrivez un message …"
            class="w-full rounded-xl dark:bg-gray-700 bg-gray-100 py-6 pl-14 pr-24 h-[2.375rem] border-none outline-0 focus:outline-none focus:ring-1 focus:ring-gray-100"
        />
        <div
            class="absolute left-2 flex items-center justify-center top-1/2 -translate-y-1/2 w-10 h-10"
        >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="fill-gray-300 w-[55%]"
                viewBox="0 0 45.7 45.7"
            >
                <path
                    d="M6.6,45.7A6.7,6.7,0,0,1,0,39.1V6.6A6.7,6.7,0,0,1,6.6,0H39.1a6.7,6.7,0,0,1,6.6,6.6V39.1h0a6.7,6.7,0,0,1-6.6,6.6ZM39,4H6.6A2.6,2.6,0,0,0,4,6.6V39.1a2.6,2.6,0,0,0,2.6,2.6H39.1a2.6,2.6,0,0,0,2.6-2.6V6.6A2.7,2.7,0,0,0,39,4Zm4.7,35.1Zm-4.6-.4H6.6a2.1,2.1,0,0,1-1.8-1.1,2,2,0,0,1,.3-2.1l8.1-10.4a1.8,1.8,0,0,1,1.5-.8,2.4,2.4,0,0,1,1.6.7l4.2,5.1,6.6-8.5a1.8,1.8,0,0,1,1.6-.8,1.8,1.8,0,0,1,1.5.8L40.7,35.5a2,2,0,0,1,.1,2.1A1.8,1.8,0,0,1,39.1,38.7Zm-17.2-4H35.1l-6.5-8.6-6.5,8.4C22,34.6,22,34.7,21.9,34.7Zm-11.2,0H19l-4.2-5.1Z"
                ></path>
            </svg>
        </div>
        <div
            class="absolute right-12 flex items-center justify-center top-1/2 -translate-y-1/2 w-10 h-10"
        >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="fill-gray-300 w-[55%]"
                viewBox="0 0 46.2 46.2"
            >
                <path
                    d="M23.1,0A23.1,23.1,0,1,0,46.2,23.1,23.1,23.1,0,0,0,23.1,0Zm0,41.6A18.5,18.5,0,1,1,41.6,23.1,18.5,18.5,0,0,1,23.1,41.6Zm8.1-20.8a3.5,3.5,0,0,0,3.5-3.5,3.5,3.5,0,0,0-7,0,3.5,3.5,0,0,0,3.5,3.5ZM15,20.8a3.5,3.5,0,0,0,3.5-3.5A3.5,3.5,0,0,0,15,13.9a3.4,3.4,0,0,0-3.4,3.4A3.5,3.5,0,0,0,15,20.8Zm8.1,15a12.6,12.6,0,0,0,10.5-5.5,1.7,1.7,0,0,0-1.3-2.6H14a1.7,1.7,0,0,0-1.4,2.6A12.9,12.9,0,0,0,23.1,35.8Z"
                ></path>
            </svg>
        </div>
        <button
            type="submit"
            class="shadow-md shadow-blue-500 absolute top-1/2 -translate-y-1/2 right-2 h-9 w-9 flex justify-center items-center pr-0.5 pt-0.5 rounded-full bg-blue-400 hover:bg-blue-500"
        >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="fill-white w-3/5"
                viewBox="0 0 45.6 45.6"
            >
                <g>
                    <path
                        d="M20.7,26.7a1.4,1.4,0,0,1-1.2-.6,1.6,1.6,0,0,1,0-2.4L42.6.5a1.8,1.8,0,0,1,2.5,0,1.8,1.8,0,0,1,0,2.5L21.9,26.1A1.6,1.6,0,0,1,20.7,26.7Z"
                    ></path>
                    <path
                        d="M29.1,45.6a1.8,1.8,0,0,1-1.6-1L19.4,26.2,1,18.1a1.9,1.9,0,0,1-1-1.7,1.8,1.8,0,0,1,1.2-1.6L43.3.1a1.7,1.7,0,0,1,1.8.4,1.7,1.7,0,0,1,.4,1.8L30.8,44.4a1.8,1.8,0,0,1-1.6,1.2ZM6.5,16.7l14.9,6.6a2,2,0,0,1,.9.9l6.6,14.9L41,4.6Z"
                    ></path>
                </g>
            </svg>
        </button>
    </div>
</div>
