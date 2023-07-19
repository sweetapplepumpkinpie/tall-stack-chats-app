 <div x-data="{profile: $store.users.profile}" class="pt-20 flex flex-col relative">
   <div class="block lg:hidden absolute top-4 left-3 w-8 h-8 cursor-pointer" @click="isOpenProfile = false">
     <svg xmlns="http://www.w3.org/2000/svg" class="fill-blue-400 w-[70%]" viewBox="0 0 38.8 38.9">
       <g>
         <path d="M2,38.9a1.9,1.9,0,0,1-1.4-.5,2.1,2.1,0,0,1,0-2.9L35.4.6a1.9,1.9,0,0,1,2.8,0,1.9,1.9,0,0,1,0,2.8L3.4,38.4A1.9,1.9,0,0,1,2,38.9Z"></path>
         <path d="M36.8,38.9a1.9,1.9,0,0,1-1.4-.5L.6,3.4A1.9,1.9,0,0,1,.6.6,1.9,1.9,0,0,1,3.4.6L38.2,35.5a2.1,2.1,0,0,1,0,2.9A1.9,1.9,0,0,1,36.8,38.9Z"></path>
       </g>
     </svg>
   </div>
   <div class="w-fit mx-auto">
     <img x-bind:src="profile.image" class="w-36 rounded-full" x-bind:alt="profile.name" />
   </div>
   <div class="flex flex-col items-center mt-1">
     <span x-text="profile.name" class="text-xl font-bold dark:text-gray-100 text-neutral-600 mt-2"></span>
     <span x-text="profile.phone" class="text-neutral-500 dark:text-gray-200"></span>
     <span x-text="profile.location" class="text-neutral-400"></span>
   </div>
   <div>
     <p x-text="profile.description" class="my-5 text-neutral-500 dark:text-gray-200 text-center"></p>
   </div>
   <div class="mt-16">
     <div class="font-bold text-neutral-800">Social Medias</div>
     <div x-data class="flex gap-1 mt-2 mb-4 flex-wrap">
       <template x-for="socialMedia in $store.users.profile.socialMedias">
         <div class="rounded-full bg-sky-50 dark:bg-gray-700 text-sky-500 cursor-pointer px-4 py-1" x-text="socialMedia"></div>
       </template>
     </div>
   </div>
   <div>
     <div class="font-bold text-neutral-800">Activities</div>
     <div x-data class="flex gap-1 mt-2 mb-4 flex-wrap">
       <template x-for="activity in $store.users.profile.activities">
         <div class="rounded-full bg-green-50 dark:bg-gray-700  text-green-500 cursor-pointer px-4 py-1" x-text="activity"></div>
       </template>
     </div>
   </div>
 </div>