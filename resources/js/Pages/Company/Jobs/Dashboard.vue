<script setup>
import { Head, Link } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
defineProps({
    jobs: Array,
});
</script>

<template>
    <AuthenticatedLayout>

        <Head title="Job Dashboard" />
        <div class="mx-auto px-20 py-4">
            <div class="w-full">
                <div class="flex justify-between">
                    <div>
                        <div class="text-xl font-bold">All Jobs</div>
                        <div class="text-[#7C8493] text-xs">Showing {{ jobs.length }} results</div>
                    </div>
                    <div class="flex items-center">
                        <a href="/company/job/create"
                            class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-xl border border-transparent bg-[#4640DE] text-[#FFFFFF] hover:bg-[#343283] focus:outline-none transition disabled:opacity-50 disabled:pointer-events-none">
                            Create Job
                        </a>

                    </div>
                </div>
                <div class="grid grid-cols-1 gap-y-4 my-4">
                    <div v-for="job in jobs" :key="job.id" class="flex w-[100%] border px-10 py-4 bg-white md:flex-row">
                        <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_2213_23404)">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M8 17.4937V45.9385L32.4321 60.6282L32.9992 59.715L32.4321 32.1083L8.84006 17.5105L8 17.4937Z"
                                    fill="#449B82" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M56.6005 17.3604V46.206L32.4326 60.6287V32.1086L55.7152 17.382L56.6005 17.3604Z"
                                    fill="#9BDB9C" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M32.3 3.2041L56.6 17.3598L32.4321 32.584L8 17.4934L32.3 3.2041Z"
                                    fill="#56CDAD" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M44.5054 14.5483L36.2866 19.413V29.2319L28.052 24.2874L20.1338 28.9743V49.497L28.3525 44.4004V33.3535L37.1307 38.9571L44.5054 34.384V14.5483Z"
                                    fill="white" />

                            </g>
                            <defs>
                                <clipPath id="clip0_2213_23404">
                                    <rect width="48.6" height="57.6" fill="white" transform="translate(8 3.2002)" />
                                </clipPath>
                            </defs>
                        </svg>

                        <div class="w-[90%] px-8 flex flex-col justify-between leading-normal">
                            <h5 class="text-lg font-semibold tracking-tight text-gray-900">{{ job.nama }}
                            </h5>
                            <p class="mb-2 text-sm font-normal text-gray-700">{{ job.user.name }}</p>
                            <svg width="83" height="34" viewBox="0 0 83 34" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="83" height="34" rx="17" fill="#56CDAD" fill-opacity="0.1" />
                                <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" fill="#56CDAD"
                                    font-size="14">
                                    Full-Time
                                </text>
                            </svg>

                        </div>
                        <div class="w-[10%] flex justify-center items-center">
                            <Link href="" class="px-2 hover:underline">Edit</Link>
                            <Link href="" class="px-2 hover:underline">Delete</Link>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </AuthenticatedLayout>

</template>
