<template>
  <header class="bg-eco-500 shadow-lg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center py-4">
        <!-- Logo and Brand -->
        <div class="flex items-center space-x-4">
          <div class="h-10 w-10 bg-eco-600 rounded-lg flex items-center justify-center">
            <span class="text-white text-xl font-bold">🌱</span>
          </div>
          <div>
            <h1 class="text-white text-2xl font-bold">EcoPulse Ghana</h1>
            <p class="text-eco-100 text-sm">Empowering Communities, Protecting Nature</p>
          </div>
        </div>

        <!-- Desktop Navigation -->
        <nav class="hidden md:flex space-x-8">
          <router-link
            to="/"
            class="text-white hover:text-eco-100 font-medium transition-colors"
          >
            Home
          </router-link>
          <router-link
            to="/about"
            class="text-white hover:text-eco-100 font-medium transition-colors"
          >
            About
          </router-link>
          <router-link
            to="/login"
            class="bg-white text-eco-500 px-4 py-2 rounded-lg font-medium hover:bg-eco-50 transition-colors"
          >
            Get Started
          </router-link>
        </nav>

        <!-- Mobile Menu Button -->
        <button
          @click="toggleMobileMenu"
          class="md:hidden text-white p-2"
        >
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  :d="showMobileMenu ? 'M6 18L18 6M6 6l12 12' : 'M4 6h16M4 12h16M4 18h16'" />
          </svg>
        </button>
      </div>

      <!-- Mobile Menu -->
      <div v-if="showMobileMenu" class="md:hidden border-t border-eco-400 py-4">
        <div class="flex flex-col space-y-4">
          <router-link
            to="/"
            class="text-white hover:text-eco-100 font-medium"
            @click="toggleMobileMenu"
          >
            Home
          </router-link>
          <router-link
            to="/about"
            class="text-white hover:text-eco-100 font-medium"
            @click="toggleMobileMenu"
          >
            About
          </router-link>
          <router-link
            to="/login"
            class="bg-white text-eco-500 px-4 py-2 rounded-lg font-medium hover:bg-eco-50 transition-colors inline-block text-center"
            @click="toggleMobileMenu"
          >
            Get Started
          </router-link>
        </div>
      </div>
    </div>
  </header>
</template>

<script setup>
import { ref } from 'vue'

const showMobileMenu = ref(false)

const toggleMobileMenu = () => {
  showMobileMenu.value = !showMobileMenu.value
}
</script>
