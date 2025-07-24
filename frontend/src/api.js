import axios from 'axios';

// Set the base URL to your backend API
const api = axios.create({
  baseURL: 'http://localhost/api', // Change if your backend runs elsewhere
  // You can add headers or credentials here if needed
});

export default api;
