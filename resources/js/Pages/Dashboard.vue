<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, useForm } from '@inertiajs/vue3';
import PrimaryButton from "@/Components/PrimaryButton.vue";

const form = useForm({
    message: '',
});

</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Dashboard</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 space-y-4">
                        <div class="flex items-center space-x-3">
                            <div class="rounded-full h-8 w-8 bg-gray-300"></div>
                            <div class="p-3 bg-gray-200 rounded-lg">
                                <p class="text-gray-900">こんにちは！どのようにお手伝いできますか？</p>
                            </div>
                        </div>

                        <div class="flex items-center space-x-3 justify-end">
                            <div class="p-3 bg-blue-500 text-white rounded-lg">
                                <p>Tailwind CSSに関する情報を探しています。</p>
                            </div>
                            <div class="rounded-full h-8 w-8 bg-gray-300"></div>
                        </div>
                    </div>

                    <div class="p-6 bg-gray-100 dark:bg-gray-700">

                        <form  @submit.prevent="form.post(route('chat.store'))">
                            <input
                                placeholder="メッセージを入力..."
                                class="w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
                                v-model="form.message"
                            />
                            <PrimaryButton :disabled="form.processing">Send</PrimaryButton>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
