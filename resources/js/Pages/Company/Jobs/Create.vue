

<template>

    <AuthenticatedLayout>

        <Head title="Post job" />
        <div class="max-w-6xl p-4 mx-auto">
            <!-- Stepper -->
          
                <div data-hs-stepper="">
                    <!-- Stepper Nav -->
                    <ul class="relative flex flex-row gap-x-2 max-w-lg mx-auto">
                        <li class="flex items-center gap-x-2 shrink basis-0 flex-1 group" data-hs-stepper-nav-item='{
      "index": 1
    }'>
                            <span class="min-w-7 min-h-7 group inline-flex items-center text-xs align-middle">
                                <span
                                    class="size-7 flex justify-center items-center shrink-0 bg-gray-100 font-medium text-gray-800 rounded-full group-focus:bg-gray-200 hs-stepper-active:bg-blue-600 hs-stepper-active:text-white hs-stepper-success:bg-blue-600 hs-stepper-success:text-white hs-stepper-completed:bg-teal-500 hs-stepper-completed:group-focus:bg-teal-600 dark:bg-neutral-700 dark:text-white dark:group-focus:bg-gray-600 dark:hs-stepper-active:bg-blue-500 dark:hs-stepper-success:bg-blue-500 dark:hs-stepper-completed:bg-teal-500 dark:hs-stepper-completed:group-focus:bg-teal-600">
                                    <span class="hs-stepper-success:hidden hs-stepper-completed:hidden">1</span>
                                    <svg class="hidden shrink-0 size-3 hs-stepper-success:block"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg>
                                </span>
                                <span class="ms-2 text-sm font-medium text-gray-800 dark:text-neutral-200">
                                    Job Information
                                </span>
                            </span>
                            <div
                                class="w-full h-px flex-1 bg-gray-200 group-last:hidden hs-stepper-success:bg-blue-600 hs-stepper-completed:bg-teal-600 dark:bg-neutral-700 dark:hs-stepper-success:bg-blue-600 dark:hs-stepper-completed:bg-teal-600">
                            </div>
                        </li>

                        <li class="flex items-center gap-x-2 shrink basis-0 flex-1 group" data-hs-stepper-nav-item='{
      "index": 2
    }'>
                            <span class="min-w-7 min-h-7 group inline-flex items-center text-xs align-middle">
                                <span
                                    class="size-7 flex justify-center items-center shrink-0 bg-gray-100 font-medium text-gray-800 rounded-full group-focus:bg-gray-200 hs-stepper-active:bg-blue-600 hs-stepper-active:text-white hs-stepper-success:bg-blue-600 hs-stepper-success:text-white hs-stepper-completed:bg-teal-500 hs-stepper-completed:group-focus:bg-teal-600 dark:bg-neutral-700 dark:text-white dark:group-focus:bg-gray-600 dark:hs-stepper-active:bg-blue-500 dark:hs-stepper-success:bg-blue-500 dark:hs-stepper-completed:bg-teal-500 dark:hs-stepper-completed:group-focus:bg-teal-600">
                                    <span class="hs-stepper-success:hidden hs-stepper-completed:hidden">2</span>
                                    <svg class="hidden shrink-0 size-3 hs-stepper-success:block"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg>
                                </span>
                                <span class="ms-2 text-sm font-medium text-gray-800 dark:text-neutral-200">
                                    Job Description
                                </span>
                            </span>
                            <div
                                class="w-full h-px flex-1 bg-gray-200 group-last:hidden hs-stepper-success:bg-blue-600 hs-stepper-completed:bg-teal-600 dark:bg-neutral-700 dark:hs-stepper-success:bg-blue-600 dark:hs-stepper-completed:bg-teal-600">
                            </div>
                        </li>

                        <li class="flex items-center gap-x-2 shrink basis-0 flex-1 group" data-hs-stepper-nav-item='{
        "index": 3
      }'>
                            <span class="min-w-7 min-h-7 group inline-flex items-center text-xs align-middle">
                                <span
                                    class="size-7 flex justify-center items-center shrink-0 bg-gray-100 font-medium text-gray-800 rounded-full group-focus:bg-gray-200 hs-stepper-active:bg-blue-600 hs-stepper-active:text-white hs-stepper-success:bg-blue-600 hs-stepper-success:text-white hs-stepper-completed:bg-teal-500 hs-stepper-completed:group-focus:bg-teal-600 dark:bg-neutral-700 dark:text-white dark:group-focus:bg-gray-600 dark:hs-stepper-active:bg-blue-500 dark:hs-stepper-success:bg-blue-500 dark:hs-stepper-completed:bg-teal-500 dark:hs-stepper-completed:group-focus:bg-teal-600">
                                    <span class="hs-stepper-success:hidden hs-stepper-completed:hidden">3</span>
                                    <svg class="hidden shrink-0 size-3 hs-stepper-success:block"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg>
                                </span>
                                <span class="ms-2 text-sm font-medium text-gray-800 dark:text-neutral-200">
                                    Perks & Benefit
                                </span>
                            </span>
                            <div
                                class="w-full h-px flex-1 bg-gray-200 group-last:hidden hs-stepper-success:bg-blue-600 hs-stepper-completed:bg-teal-600 dark:bg-neutral-700 dark:hs-stepper-success:bg-blue-600 dark:hs-stepper-completed:bg-teal-600">
                            </div>
                        </li>
                        <!-- End Item -->
                    </ul>
                    <!-- End Stepper Nav -->
                    <form @submit.prevent="submit">
                    <!-- Stepper Content -->
                    <div class="mt-5 sm:mt-8">
                        <!-- First Contnet -->

                        <div data-hs-stepper-content-item='{
      "index": 1
    }'>
                            <div class="bg-white rounded-xl shadow p-4 sm:p-7 dark:bg-neutral-800">
                                <div class="mb-8">
                                    <h2 class="text-xl font-bold text-gray-800 dark:text-neutral-200">
                                        Basic Information
                                    </h2>
                                    <p class="text-sm text-gray-600 dark:text-neutral-400">
                                        Manage your name, password and account settings.
                                    </p>
                                </div>


                                <!-- Grid -->
                              
                                <div class="grid sm:grid-cols-12 gap-2 sm:gap-6">
                                    <div class="sm:col-span-3">
                                        <label for="af-account-nama"
                                            class="inline-block font-semibold text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                            Job Title
                                        </label>
                                        <p class="text-xs text-gray-600 dark:text-neutral-400">
                                            Job titles must be describe one position
                                        </p>

                                    </div>
                                    <!-- End Col -->

                                    <div class="sm:col-span-9">
                                        <div class="sm:flex">
                                            <input id="af-account-nama" type="text"
                                                class="py-2 px-3 pe-11 mt-2.5 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                                placeholder="e.g. Software Engineer" v-model="form.nama">

                                        </div>
                                    </div>
                                    <!-- End Col -->

                                    <div class="sm:col-span-3">
                                        <label for="af-account-email"
                                            class="inline-block font-semibold text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                            Type of Employment
                                        </label>
                                        <p class="text-xs text-gray-600 dark:text-neutral-400">
                                            You can select multiple type of employment
                                        </p>
                                    </div>
                                    <!-- End Col -->

                                    <div class="sm:col-span-9">
                                        <div class="flex mt-2.5">
                                            <input type="checkbox" v-model="form.fulltime"
                                                class="shrink-0 mt-0.5 border-gray-200 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                                id="hs-default-checkbox-fulltime">
                                            <label for="hs-default-checkbox-fulltime"
                                                class="text-sm text-gray-500 ms-3 dark:text-neutral-400">Full-Time</label>
                                        </div>
                                        <div class="flex mt-2.5">
                                            <input type="checkbox" v-model="form.parttime"
                                                class="shrink-0 mt-0.5 border-gray-200 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                                id="hs-default-checkbox-parttime">
                                            <label for="hs-default-checkbox-parttime"
                                                class="text-sm text-gray-500 ms-3 dark:text-neutral-400">Part-Time</label>
                                        </div>
                                        <div class="flex mt-2.5">
                                            <input type="checkbox" v-model="form.remote"
                                                class="shrink-0 mt-0.5 border-gray-200 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                                id="hs-default-checkbox-remote">
                                            <label for="hs-default-checkbox-remote"
                                                class="text-sm text-gray-500 ms-3 dark:text-neutral-400">Remote</label>
                                        </div>
                                        <div class="flex mt-2.5">
                                            <input type="checkbox" v-model="form.internship"
                                                class="shrink-0 mt-0.5 border-gray-200 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                                id="hs-default-checkbox-internship">
                                            <label for="hs-default-checkbox-internship"
                                                class="text-sm text-gray-500 ms-3 dark:text-neutral-400">Internship</label>
                                        </div>
                                        <div class="flex mt-2.5 first:mt-0">
                                            <input type="checkbox" v-model="form.contract"
                                                class="shrink-0 mt-0.5 border-gray-200 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                                id="hs-default-checkbox-contract">
                                            <label for="hs-default-checkbox-contract"
                                                class="text-sm text-gray-500 ms-3 dark:text-neutral-400">Contract</label>
                                        </div>

                                    </div>
                                    <!-- End Col -->

                                    <div class="sm:col-span-3">
                                        <label for="af-account-application-date"
                                            class="inline-block font-semibold text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                            Application Period
                                        </label>

                                        <p class="text-xs text-gray-600 dark:text-neutral-400">
                                            Please specify the start and end dates for the application period.
                                        </p>
                                    </div>
                                    <!-- End Col -->

                                    <div class="sm:col-span-9">

                                        <div class="mt-2.5 sm:flex">

                                            <input type="date" for="af-account-application-date"
                                                v-model="form.tanggal_mulai"
                                                class="flex justify-center py-2 px-3 w-full border border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">

                                            </input>

                                            <label
                                                class="flex justify-center py-2 px-3 w-full border border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                                until

                                            </label>

                                            <input type="date" for="af-account-application-date"
                                                v-model="form.tanggal_akhir"
                                                class="flex justify-center py-2 px-3 w-full border border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">

                                            </input>
                                        </div>


                                    </div>
                                    <div class="sm:col-span-3">
                                        <label for="af-account-salary"
                                            class="inline-block font-semibold text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                            Salary
                                        </label>
                                        <span class="text-sm text-gray-400 dark:text-neutral-600">
                                            (Optional)
                                        </span>
                                        <p class="text-xs text-gray-600 dark:text-neutral-400">
                                            Please specify the estimated salary range for the role. "You can leave this
                                            blank"
                                        </p>
                                    </div>
                                    <!-- End Col -->

                                    <div class="sm:col-span-9">

                                        <div class="mt-2.5 sm:flex">

                                            <input type="number" for="af-account-salary"
                                                v-model="form.rentang_gaji_awal"
                                                class="flex text-center py-2 px-3 w-full border border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                            <!-- <input type="number" name="af-account-gender-checkbox"
                                                    class="shrink-0 mt-0.5 border-gray-300 rounded-full focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-500 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                                    id="af-account-gender-checkbox" checked>
                                                <span
                                                    class="text-sm text-gray-500 ms-3 dark:text-neutral-400">Male</span> -->
                                            </input>

                                            <label
                                                class="flex justify-center py-2 px-3 w-full border border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                                to

                                            </label>

                                            <input type="number" for="af-account-salary"
                                                v-model="form.rentang_gaji_akhir"
                                                class="flex text-center py-2 px-3 w-full border border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">

                                            </input>
                                        </div>


                                    </div>
                                    <!-- End Col -->

                                    <div class="sm:col-span-3">
                                        <div class="inline-block">
                                            <label for="af-account-categories"
                                                class="inline-block font-semibold text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                                Categories
                                            </label>

                                            <p class="text-xs text-gray-600 dark:text-neutral-400">
                                                You can select multipe job categories
                                            </p>
                                        </div>
                                    </div>
                                    <!-- End Col -->

                                    <div class="sm:col-span-9">
                                        <div class="sm:flex">
                                            <!-- Select -->
                                            <select multiple v-model="form.kategori" data-hs-select='{
  "placeholder": "Select multiple options...",
  "hasSearch": true,
   "searchClasses": "block w-full text-sm border-gray-200 rounded-lg focus:border-blue-500 focus:ring-blue-500 before:absolute before:inset-0 before:z-[1] dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 py-2 px-3",
  "toggleTag": "<button type=\"button\" aria-expanded=\"false\"></button>",
  "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-2 px-3 pe-11 mt-2.5 flex gap-x-2 text-nowrap w-full cursor-pointer bg-white border border-gray-200 rounded-lg text-start text-sm focus:outline-none focus:ring-2 focus:ring-blue-500",
  "dropdownClasses": "mt-2 z-50 w-full max-h-72 p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300",
  "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100",
  "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"shrink-0 size-3.5 text-blue-600 \" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"/></svg></span></div>",
  "extraMarkup": "<div class=\"absolute top-[58%] end-3 -translate-y-1/2\"><svg class=\"shrink-0 size-3.5 text-gray-500 \" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"m7 15 5 5 5-5\"/><path d=\"m7 9 5-5 5 5\"/></svg></div>"
}' class="hidden">
                                                <option value="">Choose</option>
                                                <option value="Design">Design</option>
                                                <option value="Sales">Sales</option>
                                                <option value="Marketing">Marketing</option>
                                                <option value="Finance">Finance</option>
                                                <option value="Technology">Technology</option>
                                                <option value="Engineering">Engineering</option>
                                                <option value="Business">Business</option>
                                                <option value="Human Resources">Human Resources</option>
                                            </select>
                                            <!-- End Select -->
                                        </div>

                                       
                                    </div>

                                </div>
                            
                                <!-- End Grid -->

                                <div class="mt-5 flex justify-end gap-x-2">

                                </div>

                            </div>
                        </div>
                        <!-- End First Contnet -->

                        <!-- First Contnet -->
                        <div data-hs-stepper-content-item='{
      "index": 2
    }' style="display: none;">
                            <div class="bg-white rounded-xl shadow p-4 sm:p-7 dark:bg-neutral-800">
                                <div class="mb-8">
                                    <h2 class="text-xl font-bold text-gray-800 dark:text-neutral-200">
                                        Details
                                    </h2>
                                    <p class="text-sm text-gray-600 dark:text-neutral-400">
                                        Add the description of the job, responsibilites, who you are, and nice-to-haves.
                                    </p>
                                </div>


                                <!-- Grid -->
                                <div class="grid sm:grid-cols-12 gap-2 sm:gap-6">

                                    <div class="sm:col-span-3">
                                        <label for="af-account-job-description"
                                            class="inline-block font-semibold text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                            Job Descriptions
                                        </label>
                                        <p class="text-xs text-gray-600 dark:text-neutral-400">
                                            Job titles must be describe one position
                                        </p>

                                    </div>
                                    <!-- End Col -->

                                    <div class="sm:col-span-9">
                                        <div>
                                            <textarea id="af-account-job-description" v-model="form.deskripsi"
                                                class="mt-2.5 py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                                maxlength="500" rows="3" placeholder="Enter job description"
                                                aria-describedby="hs-textarea-helper-text"></textarea>
                                            <p class="mt-2 text-xs text-[#A8ADB7] dark:text-neutral-500"
                                                id="hs-textarea-helper-text">Maximum 500 characters</p>
                                        </div>
                                    </div>
                                    <div class="sm:col-span-3">
                                        <label for="af-account-job-responsibilities"
                                            class="inline-block font-semibold text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                            Responsibilities
                                        </label>
                                        <p class="text-xs text-gray-600 dark:text-neutral-400">
                                            Outline the core responsibilities of the position
                                        </p>

                                    </div>
                                    <!-- End Col -->

                                    <div class="sm:col-span-9">
                                        <div>
                                            <textarea id="af-account-job-responsibilities"
                                                v-model="form.responsibilities"
                                                class="mt-2.5 py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                                maxlength="500" rows="3" placeholder="Enter job responsibilities"
                                                aria-describedby="hs-textarea-helper-text"></textarea>
                                            <p class="mt-2 text-xs text-[#A8ADB7] dark:text-neutral-500"
                                                id="hs-textarea-helper-text">Maximum 500 characters</p>
                                        </div>
                                    </div>
                                    <div class="sm:col-span-3">
                                        <label for="af-account-job-whoyouare"
                                            class="inline-block font-semibold text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                            Who You Are
                                        </label>
                                        <p class="text-xs text-gray-600 dark:text-neutral-400">
                                            Add your preferred candidates qualifications
                                        </p>

                                    </div>
                                    <!-- End Col -->

                                    <div class="sm:col-span-9">
                                        <div class="max-w-sm">
                                            <textarea id="af-account-job-whoyouare" v-model="form.whoyouare"
                                                class="mt-2.5 py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                                maxlength="500" rows="3" placeholder="Enter qualifications"
                                                aria-describedby="hs-textarea-helper-text"></textarea>
                                            <p class="mt-2 text-xs text-[#A8ADB7] dark:text-neutral-500"
                                                id="hs-textarea-helper-text">Maximum 500 characters</p>
                                        </div>
                                    </div>
                                    <div class="sm:col-span-3">
                                        <label for="af-account-job-nicetohaves"
                                            class="inline-block font-semibold text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                            Nice-To-Haves
                                        </label>
                                        <p class="text-xs text-gray-600 dark:text-neutral-400">
                                            Add nice-to-have skills and qualifications for the role to encourage a more
                                            diverse set of candidates to apply
                                        </p>

                                    </div>
                                    <!-- End Col -->

                                    <div class="sm:col-span-9">
                                        <div class="max-w-sm">
                                            <textarea id="af-account-job-nicetohaves" v-model="form.nicetohaves"
                                                class="mt-2.5 py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                                maxlength="500" rows="3" placeholder="Enter nice-to-haves"
                                                aria-describedby="hs-textarea-helper-text"></textarea>
                                            <p class="mt-2 text-xs text-[#A8ADB7] dark:text-neutral-500"
                                                id="hs-textarea-helper-text">Maximum 500 characters</p>
                                        </div>
                                    </div>


                                </div>
                                <!-- End Grid -->



                            </div>
                        </div>
                        <!-- End First Contnet -->

                        <!-- First Contnet -->
                        <div data-hs-stepper-content-item='{
      "index": 3
    }' style="display: none;">
                            <div class="bg-white rounded-xl shadow p-4 sm:p-7 dark:bg-neutral-800">
                                <div class="mb-8">
                                    <h2 class="text-xl font-bold text-gray-800 dark:text-neutral-200">
                                        Basic Information
                                    </h2>
                                    <p class="text-sm text-gray-600 dark:text-neutral-400">
                                        List out your top perks and benefits.
                                    </p>
                                </div>


                                <!-- Grid -->
                                <div class="grid sm:grid-cols-12 gap-2 sm:gap-6">

                                    <div class="sm:col-span-3">
                                        <label for="af-account-job-benefits"
                                            class="inline-block font-semibold text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                            Perks and Benefits
                                        </label>
                                        <p class="text-xs text-gray-600 dark:text-neutral-400">
                                            Encourage more people to apply by sharing the attractive rewards and
                                            benefits you offer your employees
                                        </p>

                                    </div>
                                    <!-- End Col -->

                                    <div class="sm:col-span-9">
                                        <div>
                                            <textarea id="af-account-job-benefits" v-model="form.benefits"
                                                class="mt-2.5 py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                                maxlength="500" rows="3" placeholder="Enter perks & benefits"
                                                aria-describedby="hs-textarea-helper-text"></textarea>
                                            <!-- <div v-if="form.errors.perks">{{ form.errors.perks }}</div> -->
                                            <p class="mt-2 text-xs text-[#A8ADB7] dark:text-neutral-500"
                                                id="hs-textarea-helper-text">Maximum 500 characters</p>
                                        </div>

                                    </div>




                                </div>
                                <!-- End Grid -->



                            </div>
                        </div>
                        <!-- End First Contnet -->

                        <!-- Final Contnet -->
                        <div data-hs-stepper-content-item='{
      "isFinal": true
    }' style="display: none;">
                            <div
                                class="p-4 h-48 bg-gray-50 flex justify-center items-center border border-dashed border-gray-200 rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
                                <button type="submit" :disabled="form.processing"
                                        class="py-2 px-3 inline-flex items-center gap-x-1 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"> Submit</button>
                            </div>
                        </div>
                        <!-- End Final Contnet -->

                        <!-- Button Group -->
                        <div class="mt-5 flex justify-between items-center gap-x-2">
                            <button type="button"
                                class="py-2 px-3 inline-flex items-center gap-x-1 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                                data-hs-stepper-back-btn="">
                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m15 18-6-6 6-6"></path>
                                </svg>
                                Back
                            </button>
                            <button type="button"
                                class="py-2 px-3 inline-flex items-center gap-x-1 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                                data-hs-stepper-next-btn="">
                                Next
                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m9 18 6-6-6-6"></path>
                                </svg>
                            </button>
                            <button type="button"
                                class="py-2 px-3 inline-flex items-center gap-x-1 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                                data-hs-stepper-finish-btn="" style="display: none;">
                                Finish
                            </button>
                            <!-- <button type="reset"
                                class="py-2 px-3 inline-flex items-center gap-x-1 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                                data-hs-stepper-reset-btn="" style="display: none;">
                                Reset
                            </button> -->
                        </div>
                        <!-- End Button Group -->
                    </div>
                    </form>
                    <!-- End Stepper Content -->
                </div>
            
            <!-- End Stepper -->
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/components/InputError.vue';
import InputLabel from '@/components/InputLabel.vue';
import PrimaryButton from '@/components/PrimaryButton.vue';
import TextInput from '@/components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
const form = useForm({
    nama: '',
    tanggal_mulai: '',
    tanggal_akhir: '',
    rentang_gaji_awal: '',
    rentang_gaji_akhir: '',
    kategori: [],
    // deskripsi: '',
    // responsibilities: '',
    // whoyouare: '',
    // nicetohaves: '',
    // benefits: '',
});
const submit = () => {
  form.post("/company/job/store");
};

</script>