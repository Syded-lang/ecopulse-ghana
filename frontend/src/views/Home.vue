<!-- eslint-disable-next-line vue/multi-word-component-names -->
<template>
  <div>
    <!-- Hero Section -->
    <section class="bg-gradient-to-br from-eco-500 to-eco-600 text-white section-padding">
      <div class="max-w-7xl mx-auto text-center">
        <h1 class="text-4xl md:text-6xl font-bold mb-6">
          Transform Waste Into
          <span class="text-eco-200">Wealth</span>
        </h1>
        <p class="text-xl md:text-2xl mb-8 max-w-4xl mx-auto text-eco-100">
          Join 10,000+ waste pickers across Ghana in preventing 1,000 tons of plastic waste
          annually through community-driven recycling and economic incentives.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
          <button class="bg-white text-eco-500 px-8 py-4 rounded-lg font-bold text-lg hover:bg-eco-50 transition-colors">
            Start Recycling Today
          </button>
          <button class="border-2 border-white text-white px-8 py-4 rounded-lg font-bold text-lg hover:bg-white hover:text-eco-500 transition-colors">
            Become a Vendor
          </button>
        </div>
      </div>
    </section>

    <!-- Stats Section -->
    <section class="section-padding bg-white">
      <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <div class="text-center card">
            <div class="text-4xl font-bold text-eco-500 mb-2">10,000+</div>
            <div class="text-gray-600 text-lg">Waste Pickers Empowered</div>
          </div>
          <div class="text-center card">
            <div class="text-4xl font-bold text-eco-500 mb-2">1,000</div>
            <div class="text-gray-600 text-lg">Tons of Waste Prevented</div>
          </div>
          <div class="text-center card">
            <div class="text-4xl font-bold text-eco-500 mb-2">GHS 500K</div>
            <div class="text-gray-600 text-lg">Income Generated</div>
          </div>
        </div>
      </div>
    </section>

    <!-- How It Works -->
    <section class="section-padding bg-gray-50">
      <div class="max-w-7xl mx-auto">
        <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-gray-900">
          How EcoPulse Works
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <div class="text-center">
            <div class="bg-eco-500 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
              <span class="text-white text-2xl">📱</span>
            </div>
            <h3 class="text-xl font-semibold mb-3">Log Recyclables</h3>
            <p class="text-gray-600">Use our mobile app to log collected plastic bottles, cans, and other recyclables with photos.</p>
          </div>
          <div class="text-center">
            <div class="bg-eco-500 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
              <span class="text-white text-2xl">🏪</span>
            </div>
            <h3 class="text-xl font-semibold mb-3">Find Vendors</h3>
            <p class="text-gray-600">Connect with nearby recycling vendors and request pickup or drop-off services.</p>
          </div>
          <div class="text-center">
            <div class="bg-eco-500 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
              <span class="text-white text-2xl">💰</span>
            </div>
            <h3 class="text-xl font-semibold mb-3">Earn Rewards</h3>
            <p class="text-gray-600">Get paid instantly via MTN MoMo and earn points for community leaderboards.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA Section -->
    <section class="section-padding bg-eco-500 text-white">
      <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">
          Ready to Make a Difference?
        </h2>
        <p class="text-xl mb-8 text-eco-100">
          Join the recycling revolution and start earning money while protecting Ghana's environment.
        </p>
        <button class="bg-white text-eco-500 px-8 py-4 rounded-lg font-bold text-lg hover:bg-eco-50 transition-colors">
          Join EcoPulse Today
        </button>
        <div class="mt-8">
          <button @click="callApi" class="bg-eco-200 text-eco-700 px-6 py-2 rounded shadow hover:bg-eco-100">Test Backend Connection</button>
          <div v-if="apiMessage" class="mt-4 text-lg text-white">{{ apiMessage }}</div>
        </div>
      </div>
    </section>
  </div>
</template>

<script setup>
import { ref } from 'vue';
import api from '../api';

const apiMessage = ref('');
async function callApi() {
  apiMessage.value = '';
  try {
    const res = await api.get('/hello');
    apiMessage.value = res.data.message;
  } catch (err) {
    apiMessage.value = 'Failed to connect to backend.';
  }
}
</script>
