<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
	<Head title="About us" />
	
	<AuthenticatedLayout>
		<template #header>
			About us
		</template>
		
	</AuthenticatedLayout>
</template>
