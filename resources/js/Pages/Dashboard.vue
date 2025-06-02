<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';

const props = defineProps({
    contacto: { type: Object }
});
</script>

<template>
    <Head title="Authors" />
    <AuthenticatedLayout>
        <template #header>
            Directorio
        </template>

        <div class="w-full overflow-hidden rounded-lg border shadow-md">
            <div class="w-full overflow-x-auto bg-white">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left uppercase border">
                            <th class="px-4 py-3">#</th>
                            <th class="px-4 py-3">Nombre/Alias</th>
                            <th class="px-4 py-3">Apellidos</th>
                            <th class="px-4 py-3">Telefono</th>
                            <th class="px-4 py-3">Correo</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-blue-700">
                        <tr v-for="(c, i) in contacto" :key="c.id" class="text-white">
                            <td class="px-4 py-3 text-sm">{{ i + 1 }}</td>
                            <td class="px-4 py-3 text-sm">{{ c.alias ? c.alias : c.nombre }}</td>
                            <td class="px-4 py-3 text-sm">{{ c.apellidos }}</td>
                            <td class="px-4 py-3 text-sm">{{ c.telefono }}</td>
                            <td class="px-4 py-3 text-sm">{{ c.email }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </AuthenticatedLayout>
</template>