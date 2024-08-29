<script setup>
import { Head } from '@inertiajs/vue3';
import AuthenticatedUserLayout from '@/Layouts/AuthenticatedUserLayout.vue';
// import Header from '../layout/header.vue';
import Footer from '../layout/footer.vue';
defineProps({
    jobs: Object,
});
</script>

<template>
    <AuthenticatedUserLayout>

        <Head title="Job Description" />
        <div class="bg-[#F8F8FD] min-h-[calc(50vh-70px)] flex flex-col justify-center items-center">
            <div class="flex w-[95%] xl:w-[80%] p-4 border border-[#D6DDEB] bg-white shadow-sm">
                <div class="py-1 px-1">
                    <svg width="89" height="92" viewBox="0 0 89 92" fill="none" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <rect x="4.66797" y="4.14746" width="80" height="82.9412" fill="url(#pattern0_2217_19668)" />
                        <defs>
                            <pattern id="pattern0_2217_19668" patternContentUnits="objectBoundingBox" width="1"
                                height="1">
                                <use xlink:href="#image0_2217_19668"
                                    transform="matrix(0.00518382 0 0 0.005 -0.0183825 0)" />
                            </pattern>
                            <image id="image0_2217_19668" width="200" height="200"
                                xlink:href="data:image/jpeg;base64,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" />
                        </defs>
                    </svg>
                </div>
                <div class="flex flex-col justify-center flex-grow px-4">
                    <div class="text-2xl font-bold">{{ jobs.nama }}</div>
                    <div class="text-lg font-bold text-[#515B6F]">Lokasi {{ jobs.tipe_pekerjaan.map(tipe =>
                        tipe.tipe).join(' ') }}</div>
                </div>
                <div class="flex items-center px-1">
                    <a href="" class="px-8 py-3 font-semibold text-white bg-[#4640DE] hover:bg-[#343283]">Apply</a>
                </div>
            </div>
        </div>
        <div class="max-w-7xl flex mx-auto w-[95%] xl:w-[80%] pt-8">
            <div class="w-[70%]">
                <div class="py-4">
                    <div class="text-2xl font-bold">Description</div>
                    <div class="text-[#515B6F] font-bold">{{ jobs.deskripsi_tambahan_pekerjaan.deskripsi }}</div>
                </div>
                <div class="py-4">
                    <div class="text-2xl font-bold">Responsibilities</div>
                    <div class="text-[#515B6F] font-bold">{{ jobs.deskripsi_tambahan_pekerjaan.responsibilities }}</div>
                </div>
                <div class="py-4">
                    <div class="text-2xl font-bold">Who You Are</div>
                    <div class="text-[#515B6F] font-bold">{{ jobs.deskripsi_tambahan_pekerjaan.whoyouare }}</div>
                </div>
                <div class="py-4">
                    <div class="text-2xl font-bold">Nice-To-Haves</div>
                    <div class="text-[#515B6F] font-bold">{{ jobs.deskripsi_tambahan_pekerjaan.nicetohaves }}</div>
                </div>
                <div class="pt-4">
                    <div class="text-2xl font-bold">Benefits</div>
                    <div class="text-[#515B6F] font-bold">{{ jobs.deskripsi_tambahan_pekerjaan.benefits }}</div>
                </div>

            </div>
            <div class="w-[30%]">
                <div class="py-4">
                    <div class="text-2xl font-bold">About this role</div>
                    <div class="flex justify-between">
                        <div>
                            <div class="py-1 text-[#515B6F] text-sm font-bold">Apply Before</div>
                            <div class="py-1 text-[#515B6F] text-sm font-bold">Job Posted On</div>
                            <div class="py-1 text-[#515B6F] text-sm font-bold">Salary</div>
                        </div>
                        <div class="">
                            <div class="py-1 text-end text-sm font-bold">{{jobs.tanggal_akhir}}</div>
                            <div class="py-1 text-end text-sm font-bold">{{jobs.tanggal_mulai}}</div>
                            <div class="py-1 text-end text-sm font-bold">{{jobs.rentang_gaji_awal}}-{{jobs.rentang_gaji_akhir}}</div>
                        </div>
                    </div>
                </div>
                <div class="py-4">
                    <div class="text-2xl font-bold">Categories</div>
                    <div class="text-[#515B6F] font-bold">{{ jobs.kategori_pekerjaan.map(kategori =>
                        kategori.kategori).join(' ') }}</div>
                </div>
                <!-- <div class="py-4">
                <div class="text-2xl font-bold">Required Skills</div>
                <div class="text-[#515B6F] font-bold">Isi respon</div>
            </div> -->
            </div>
        </div>
        <div class="max-w-7xl flex mx-auto w-[95%] xl:w-[80%] py-8">
            <div class="w-full border-t">
                <div class="flex py-16">
                    <div class="w-[65%]">
                        <div class="flex">
                            <svg width="60" height="60" viewBox="0 0 60 60" fill="none"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect x="0.90918" y="0.90918" width="58.1818" height="58.1818"
                                    fill="url(#pattern0_2221_15893)" />
                                <defs>
                                    <pattern id="pattern0_2221_15893" patternContentUnits="objectBoundingBox" width="1"
                                        height="1">
                                        <use xlink:href="#image0_2221_15893" transform="scale(0.005)" />
                                    </pattern>
                                    <image id="image0_2221_15893" width="200" height="200"
                                        xlink:href="data:image/jpeg;base64,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" />
                                </defs>
                            </svg>
                            <div class="flex flex-col justify-center px-6">
                                <div class="text-2xl font-bold">Perusahaan</div>
                                <div class="flex items-center text-sm text-[#4640DE] font-bold">Read more about
                                    Perusahaan
                                    <span><svg width="20" height="24" viewBox="0 0 25 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20.3945 11.7261L5.39453 11.7261" stroke="#4640DE" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M14.3447 5.70149L20.3947 11.7255L14.3447 17.7505" stroke="#4640DE"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="py-4">
                            <div class="w-[82%] text-[#515B6F] font-bold">Stripe is a technology company that builds
                                economic infrastructure for the internet. Businesses of every size—from new startups to
                                public companies—use our software to accept payments and manage their businesses online.
                            </div>
                        </div>
                    </div>
                    <div class="w-[35%] flex justify-center items-center">
                        <div class="">
                            Gambar
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedUserLayout>
    <Footer />
</template>