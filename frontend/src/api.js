import axios from 'axios';

// Set the base URL to your backend API
const api = axios.create({
  baseURL: 'http://localhost:8000/api', // Laravel backend
  // You can add headers or credentials here if needed
});

export default api;
