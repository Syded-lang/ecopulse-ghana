<!-- eslint-disable-next-line vue/multi-word-component-names -->
<template>
  <div class="section-padding max-w-md mx-auto">
    <h1 class="text-3xl font-bold mb-6 text-center">Login to EcoPulse</h1>
    <form class="space-y-6">
      <div>
        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
        <input id="email" name="email" type="email" required class="form-input w-full" />
      </div>
      <div>
        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
        <input id="password" name="password" type="password" required class="form-input w-full" />
      </div>
      <button type="submit" class="btn-primary w-full">Login</button>
    </form>
    <p class="mt-4 text-center text-gray-500 text-sm">
      Don’t have an account?
      <router-link to="/register" class="text-eco-500 hover:underline">Sign up</router-link>
    </p>
  </div>
</template>
<script setup>
// Login logic (if needed)
</script>
