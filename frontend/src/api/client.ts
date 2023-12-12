import axios from 'axios';

const API_HOST = import.meta.env.VITE_API_HOST;
const API_PREFIX = import.meta.env.VITE_API_PREFIX;

export const client = axios.create({
	baseURL: API_HOST + API_PREFIX,
	headers: {
		Accept: 'application/json',
	},
});

