<template>
    <div class="p-8 bg-gray-100 min-h-screen">
        <h1 class="text-3xl font-bold text-center mb-6">🎵 Minhas Músicas</h1>

        <!-- Campo de busca -->
        <div class="flex justify-center mb-6">
            <input
                v-model="search"
                type="text"
                placeholder="Buscar música..."
                class="w-1/2 p-2 border rounded-lg shadow"
            />
        </div>

        <!-- Lista de músicas -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div
                v-for="(musica, index) in musicasFiltradas"
                :key="index"
                class="bg-white rounded-xl shadow p-4 hover:scale-105 transition"
            >
                <h2 class="text-xl font-semibold mb-2">{{ musica.titulo }}</h2>
                <p class="text-gray-600">🎤 {{ musica.artista }}</p>
                <p class="text-gray-500">⏱️ {{ musica.duracao }}</p>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref, computed } from "vue"

// Lista de músicas de exemplo
const musicas = ref([
    { titulo: "Bohemian Rhapsody", artista: "Queen", duracao: "5:55" },
    { titulo: "Imagine", artista: "John Lennon", duracao: "3:07" },
    { titulo: "Hotel California", artista: "Eagles", duracao: "6:30" },
    { titulo: "Smells Like Teen Spirit", artista: "Nirvana", duracao: "5:01" },
    { titulo: "Billie Jean", artista: "Michael Jackson", duracao: "4:54" },
])

// Campo de busca
const search = ref("")

// Filtra músicas dinamicamente
const musicasFiltradas = computed(() =>
    musicas.value.filter(m =>
        m.titulo.toLowerCase().includes(search.value.toLowerCase()) ||
        m.artista.toLowerCase().includes(search.value.toLowerCase())
    )
)
</script>

<style scoped>
/* Estilo opcional */
</style>
