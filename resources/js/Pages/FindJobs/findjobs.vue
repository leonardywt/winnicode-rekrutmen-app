<script setup>
import { ref, watch, computed } from 'vue'
import { Head } from '@inertiajs/vue3';
import AuthenticatedUserLayout from '@/Layouts/AuthenticatedUserLayout.vue';
import Header from '../layout/header.vue';
import Footer from '../layout/footer.vue';

const props = defineProps({
    jobs: {
        type: Array,
        required: true,
    },
    jobTypeCounts: {
        type: Object,
        required: true,
    },
    jobCategoriesCounts: {
        type: Object,
        required: true,
    }
});
const selectedTypes = ref([]);
const selectedCategories = ref([]);

const types = computed(() => {
    return Object.entries(props.jobTypeCounts).map(([tipe, count]) => ({ tipe, count }));
});
const categories = computed(() => {
    return Object.entries(props.jobCategoriesCounts).map(([kategori, count]) => ({ kategori, count }));
});

const filteredJobs = computed(() => {
    return props.jobs.filter(job => {
        const matchesType = selectedTypes.value.length === 0 || job.tipe_pekerjaan.some(tipe => selectedTypes.value.includes(tipe.tipe));
        const matchesCategory = selectedCategories.value.length === 0 || job.kategori_pekerjaan.some(kategori => selectedCategories.value.includes(kategori.kategori));
        return matchesType && matchesCategory;
    });
});

</script>

<template>

    <Head title="Find Jobs" />
    <AuthenticatedUserLayout>
        <div class="bg-[#F8F8FD] min-h-[calc(100vh-66px)] flex flex-col justify-center items-center">
            <div class="max-w-7xl flex flex-col justify-center px-10 md:px-24">
                <div class="">
                    <p class="text-5xl text-center font-bold">Find your <span class="text-[#26A4FF]">dream job</span>
                    </p>
                </div>
                <div class="flex justify-end px-4 py-3 max-w-[100%]">
                    <svg width="242" height="12" viewBox="0 0 242 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M5.63897 5.83831C7.52586 5.83831 9.5026 5.77873 11.3895 5.71916C12.1982 5.71916 12.917 5.65958 13.7256 5.65958C17.14 5.54043 20.5544 5.42128 23.9687 5.30214C28.1019 5.18299 32.1453 5.00426 36.2784 4.88512C42.1188 4.64682 47.9592 4.46809 53.7995 4.22979C55.1473 4.17022 56.4951 4.17022 57.8429 4.11064C61.2572 3.9915 64.6716 3.87235 68.086 3.81277C71.5004 3.69362 74.9147 3.57447 78.3291 3.5149C79.6769 3.45532 81.0246 3.39575 82.3724 3.39575C87.7635 3.2766 93.2445 3.15745 98.6356 3.0383C101.96 2.97873 105.285 2.91916 108.699 2.80001C110.047 2.80001 111.305 2.74043 112.652 2.74043C117.864 2.68085 123.165 2.62128 128.377 2.56171C133.588 2.50213 138.71 2.44256 143.921 2.38298C145.269 2.38298 146.616 2.38298 148.054 2.38298C151.468 2.38298 154.793 2.38298 158.207 2.38298C163.509 2.38298 168.72 2.38298 174.021 2.32341C175.728 2.32341 177.436 2.32341 179.143 2.32341C182.737 2.32341 186.331 2.32341 189.925 2.32341C190.195 2.32341 190.554 2.32341 190.824 2.32341C182.737 2.38298 174.56 2.44256 166.474 2.56171C163.059 2.62128 159.735 2.62128 156.32 2.68085C154.883 2.68085 153.355 2.68085 151.918 2.74043C146.976 2.8 142.124 2.91915 137.182 2.97873C131.521 3.09788 125.861 3.15745 120.2 3.2766C119.212 3.2766 118.313 3.33617 117.325 3.33617C114.27 3.45532 111.305 3.5149 108.25 3.63405C102.14 3.81277 96.0299 3.99149 89.92 4.17022C89.0215 4.17022 88.1229 4.2298 87.2244 4.28937C84.2593 4.40852 81.2044 4.58724 78.2392 4.70639C72.8481 4.94469 67.5469 5.18298 62.1558 5.42128C60.7181 5.48086 59.1907 5.60001 57.753 5.65958C54.3387 5.83831 50.9243 6.01703 47.5099 6.25533C43.197 6.49363 38.7943 6.73193 34.4814 6.97022C28.4613 7.32767 22.3514 7.68512 16.3313 8.04256C14.8937 8.10214 13.4561 8.22129 11.9286 8.28086C9.32289 8.45959 6.71719 8.63831 4.11149 8.81703C3.84193 8.81703 3.57238 8.93618 3.57238 9.17448C3.57238 9.3532 3.84193 9.53193 4.11149 9.53193C5.09986 9.53193 5.99838 9.5915 6.98675 9.5915C6.89689 9.77022 6.80704 9.94895 6.80704 10.1277C6.80704 10.783 7.61571 11.3787 8.69393 11.3787C16.1516 11.0809 23.5195 10.7234 30.9772 10.4851C37.4465 10.3064 43.9158 10.0681 50.3852 9.88937C57.4835 9.65108 64.6716 9.41278 71.7699 9.23406C74.0162 9.17448 76.2625 9.1149 78.5088 8.99576C79.1378 8.99576 79.7667 8.93618 80.4855 8.93618C91.9866 8.75746 103.488 8.51916 114.989 8.34044C121.099 8.22129 127.298 8.10214 133.408 8.04256C135.655 7.98299 137.811 7.98299 140.057 7.92342C151.828 7.80427 163.598 7.68512 175.369 7.56597C180.401 7.5064 185.432 7.44682 190.464 7.38724C194.777 7.32767 199.09 7.32767 203.403 7.20852C206.997 7.14894 210.501 7.0298 214.095 6.97022C215.892 6.91065 217.689 6.91065 219.396 6.85107C223.44 6.67235 227.483 6.49362 231.526 6.3149C231.257 6.5532 231.257 6.91065 231.347 7.14895C231.437 7.44682 231.706 7.68512 232.155 7.80426C232.515 7.92341 233.054 8.04257 233.413 7.92342C234.312 7.68512 235.21 7.44682 236.019 7.20852C236.019 7.20852 236.019 7.20852 235.929 7.20852C236.019 7.20852 236.019 7.14895 236.109 7.14895C236.199 7.14895 236.289 7.08937 236.289 7.08937H236.199C236.648 6.97022 237.097 6.85108 237.636 6.67235C238.086 6.5532 238.625 6.37448 239.074 6.25533C239.613 6.0766 240.062 5.89788 240.601 5.71916C241.141 5.54043 241.5 5.06384 241.5 4.64682C241.5 4.40852 241.41 4.2298 241.23 3.9915C241.051 3.7532 240.601 3.45533 240.152 3.39575C239.703 3.33618 239.254 3.2766 238.804 3.2766C238.715 3.2766 238.625 3.2766 238.535 3.2766C238.265 3.2766 237.906 3.2766 237.636 3.33617C236.918 3.39575 236.289 3.45533 235.57 3.45533C235.031 3.45533 234.492 3.5149 233.863 3.5149C232.335 3.57447 230.897 3.63405 229.37 3.7532C229.011 3.7532 228.561 3.81277 228.202 3.81277C228.382 3.69362 228.471 3.57447 228.471 3.45533C228.561 3.33618 228.561 3.21703 228.561 3.09788C228.561 3.0383 228.561 2.91915 228.651 2.85958C228.651 2.74043 228.651 2.62128 228.561 2.56171C228.561 2.56171 228.651 2.56171 228.651 2.50213C228.921 2.38298 229.19 2.26383 229.37 2.02554C229.55 1.84681 229.64 1.60851 229.64 1.37022C229.64 1.13192 229.55 0.953195 229.37 0.714897C229.28 0.655323 229.19 0.536173 229.1 0.476598C228.831 0.297875 228.561 0.2383 228.292 0.178725C227.753 0.0595764 227.124 0 226.495 0C225.956 0 225.506 0 224.967 0C224.248 0 223.53 0 222.811 0C221.822 0 220.744 0 219.756 0C217.06 0 214.365 0 211.669 0C209.153 0 206.548 0 204.032 0C201.696 0 199.449 0 197.113 0C187.858 0 178.694 0.0595773 169.439 0.119152C162.52 0.178726 155.602 0.238299 148.683 0.238299C145.628 0.238299 142.483 0.297872 139.428 0.357446C132.51 0.476595 125.591 0.53617 118.673 0.655319C116.696 0.655319 114.719 0.714897 112.742 0.714897C111.574 0.714897 110.496 0.774471 109.328 0.774471C102.499 0.953195 95.6705 1.13192 88.8418 1.31064C86.7752 1.37022 84.7086 1.42979 82.5521 1.48936C81.3841 1.48936 80.216 1.54894 79.0479 1.60852C72.2192 1.84681 65.4803 2.08511 58.6515 2.32341C55.1473 2.44256 51.6431 2.5617 48.1389 2.74043C42.1188 2.97873 36.0987 3.21703 30.1685 3.5149C24.9571 3.7532 19.7457 3.93192 14.5343 4.11064C13.7256 4.17022 12.917 4.17022 12.0184 4.22979C10.6707 4.28937 9.32289 4.28937 7.97512 4.34894C6.80704 4.40852 5.63897 4.40852 4.38104 4.40852C4.29119 4.22979 3.93178 4.05107 3.66223 4.05107C2.85356 4.11065 2.13475 4.17022 1.32608 4.22979C0.966674 4.22979 0.607266 4.34894 0.517415 4.64682C0.427563 4.94469 0.697118 5.24256 1.05653 5.30214C1.41593 5.36171 1.68549 5.42129 2.0449 5.48086C2.4043 5.54044 2.67386 5.54043 3.03327 5.54043C3.93178 5.77873 4.74045 5.77873 5.63897 5.83831ZM215.892 3.87235C216.97 3.87235 218.139 3.87235 219.217 3.87235C219.307 4.05107 219.486 4.17022 219.666 4.28937C219.217 4.28937 218.767 4.34894 218.408 4.34894C217.599 4.34894 216.791 4.40852 215.982 4.40852C212.388 4.46809 208.884 4.58724 205.29 4.64682C203.672 4.70639 202.055 4.76596 200.438 4.76596C197.922 4.76596 195.316 4.82554 192.8 4.82554C186.96 4.88511 181.209 4.94469 175.369 5.00426C164.048 5.12341 152.816 5.24256 141.495 5.36171C133.408 5.42128 125.322 5.60001 117.235 5.77873C105.105 6.01703 92.8851 6.19575 80.7551 6.43405C78.3291 6.49363 75.9031 6.5532 73.4771 6.67235C66.5585 6.91065 59.6399 7.08937 52.7213 7.32767C45.9824 7.56597 39.1537 7.74469 32.4148 7.98299C31.7858 7.98299 31.1569 8.04256 30.5279 8.04256C32.325 7.92341 34.2118 7.86384 36.0089 7.74469C42.3884 7.44682 48.7678 7.08937 55.1473 6.7915C57.3936 6.67235 59.6399 6.5532 61.7964 6.43405C62.9644 6.37448 64.1325 6.3149 65.2107 6.3149C71.8598 6.0766 78.5088 5.77873 85.1578 5.54043C86.4158 5.48086 87.7635 5.42128 89.0215 5.36171C90.9084 5.30213 92.7952 5.24256 94.5923 5.24256C101.421 5.06384 108.25 4.88511 115.078 4.70639C116.606 4.64682 118.133 4.64682 119.571 4.58724C119.93 4.58724 120.38 4.58724 120.739 4.58724C121.817 4.58724 122.896 4.58724 123.884 4.52766C130.713 4.40852 137.631 4.34894 144.46 4.22979C147.605 4.17022 150.75 4.11064 153.894 4.11064C164.048 4.05107 174.291 3.99149 184.444 3.93192C195.136 3.93192 205.559 3.93192 215.892 3.87235Z"
                            fill="#26A4FF" />
                    </svg>

                </div>
                <div class="pb-6">
                    <p class="text-[#515B6F] text-center tracking-wide max-w-lg">Find your next career at companies like
                        BCA, Telkom, and Google.</p>
                </div>

            </div>
            <div class="w-[80%] p-4 bg-white shadow-sm">
                <div class="flex justify-between pl-10 relative">
                    <input type="email"
                        class="peer mx-2 py-2 pe-0 ps-2 w-[85%] block bg-transparent border-t-transparent border-b-2 border-x-transparent border-b-gray-200 text-sm focus:border-t-transparent focus:border-x-transparent focus:border-b-blue-500 focus:ring-0 disabled:opacity-50 disabled:pointer-events-none"
                        placeholder="Job title or keyword">
                    <div
                        class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-2 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="11.7669" cy="11.8499" r="8.98856" stroke="#25324B" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M18.0186 18.5684L21.5426 22.0832" stroke="#25324B" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <button type="button"
                        class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-xl border border-transparent bg-[#4640DE] text-[#FFFFFF] hover:bg-[#343283] focus:outline-none transition disabled:opacity-50 disabled:pointer-events-none">
                        Search
                    </button>
                </div>
            </div>
        </div>
        <div class="flex w-[80%] mx-auto py-8">
            <div class="w-[35%] pr-20">
                <div>
                    <details class="group" open>
                        <summary
                            class="flex items-center justify-between gap-2 p-2 font-medium marker:content-none hover:cursor-pointer">
                            <span class="flex gap-2">
                                <span>
                                    Types of Employment
                                </span>
                            </span>
                            <svg class="w-5 h-5 text-gray-500 transition group-open:rotate-90"
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                </path>
                            </svg>
                        </summary>

                        <article class="px-2 pb-4">
                            <ul class="flex flex-col gap-1 pl-2">
                                <li v-for="(tipe, index) in types" :key="tipe.tipe">
                                    <div class="flex items-center">
                                        <input type="checkbox" :id="`filter_option_type_${index}`" :value="tipe.tipe"
                                            v-model="selectedTypes" />
                                        <label :for="`filter_option_type_${index}`" class="px-2">
                                            {{ tipe.tipe }} ({{ tipe.count }})
                                        </label>
                                    </div>
                                </li>
                            </ul>
                        </article>

                    </details>
                </div>
                <div>
                    <details class="group" open>
                        <summary
                            class="flex items-center justify-between gap-2 p-2 font-medium marker:content-none hover:cursor-pointer">
                            <span class="flex gap-2">
                                <span>
                                    Categories
                                </span>
                            </span>
                            <svg class="w-5 h-5 text-gray-500 transition group-open:rotate-90"
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                </path>
                            </svg>
                        </summary>

                        <article class="px-2 pb-4">
                            <ul class="flex flex-col gap-1 pl-2">
                                <li v-for="(kategori, index) in categories" :key="kategori.kategori">
                                    <div class="flex items-center">
                                        <input type="checkbox" :id="`filter_option_category_${index}`" :value="kategori.kategori"
                                            v-model="selectedCategories" />
                                        <label :for="`filter_option_category_${index}`" class="px-2">
                                            {{ kategori.kategori }} ({{ kategori.count }})
                                        </label>
                                    </div>
                                </li>
                            </ul>
                        </article>

                    </details>
                </div>
            </div>
            <div class="w-[65%]">
                <div class="">
                    <div class="text-xl font-bold">All Jobs</div>
                    <div class="text-[#7C8493] text-xs">Showing {{ filteredJobs.length }} results</div>
                </div>
                <div v-if="filteredJobs.length">
                    <div class="grid grid-cols-1 gap-y-4 my-4">
                        <a :href="`jobdesc/${job.id}`" v-for="job in filteredJobs" :key="job.id"
                            class="flex flex-col w-full border px-10 py-4 bg-white md:flex-row">
                            <svg width="64" height="64" viewBox="0 0 64 64" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
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

                            <div class="px-4 flex flex-col justify-between leading-normal">
                                <h5 class="text-lg font-semibold tracking-tight text-gray-900">{{ job.nama }}
                                </h5>
                                <p class="mb-2 text-sm font-normal text-gray-700">{{ job.user.name }}</p>
                                <div class="flex flex-row">
                                    <svg v-for="tipe in job.tipe_pekerjaan" :key="tipe.tipe" width="83" height="34"
                                        viewBox="0 0 83 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="83" height="34" rx="17" fill="#56CDAD" fill-opacity="0.1" />
                                        <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle"
                                            fill="#56CDAD" font-size="14">
                                            {{ tipe.tipe }}
                                        </text>
                                    </svg>
                                </div>

                            </div>
                        </a>


                    </div>
                </div>
                <div v-else>
                    <div class="grid grid-cols-1 gap-y-4 my-4">
                        <div class="flex flex-col w-full border px-10 py-4 bg-white md:flex-row">
                            <div class="px-4 flex flex-col justify-between leading-normal">
                                <h5 class="text-lg font-semibold tracking-tight text-gray-900">No data found.
                                </h5>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedUserLayout>
    <Footer />
</template>
