<template>
  <aside class="z-20 hidden w-64 overflow-y-auto bg-blue-700 md:block flex-shrink-0">
    <div class="py-4 text-white">
      <Link class="ml-6 text-lg font-bold text-gray-100" :href="route('dashboard')">
        Directorio
      </Link>

      <ul class="mt-6">
        <li class="relative px-6 py-3">
          <NavLink :href="route('dashboard')" :active="route().current('dashboard')">
            <template #icon>
              <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                   stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path
                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
              </svg>
            </template>
            Inicio
          </NavLink>
        </li>
        <div v-if="isAuthenticated">
          <li class="relative px-6 py-3">
            <NavLink :href="route('users.index')" :active="route().current('users.index')">
              <template #icon>
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                     xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                </svg>
              </template>
              Usuarios
            </NavLink>
          </li>

          <li class="relative px-6 py-3">
            <NavLink :href="route('contactos.index')" :active="route().current('contactos.index')">
              <template #icon>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0ZM3.75 12h.007v.008H3.75V12Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm-.375 5.25h.007v.008H3.75v-.008Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                </svg>
              </template>
              Contactos
            </NavLink>
          </li>
        </div>
        <div v-else>
          <p class="px-6 py-3">Inicia sesión para ver más opciones.</p>
        </div>
      </ul>
    </div>
  </aside>
</template>

<script>
import NavLink from '@/Components/NavLink.vue';
import { Link, usePage } from '@inertiajs/vue3';
import { computed } from 'vue';

export default {
  components: {
    NavLink,
    Link,
  },

  setup() {
    // Usamos computed para determinar si el usuario está autenticado
    const isAuthenticated = computed(() => {
      return !!usePage().props.auth.user; // Verifica si hay un usuario en los props de Inertia
    });

    let showingTwoLevelMenu = false; // No necesitas ref aquí si no lo usas

    return {
      isAuthenticated,
      showingTwoLevelMenu,
    };
  },
};
</script>