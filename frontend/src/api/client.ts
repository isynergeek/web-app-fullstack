import axios from 'axios';
import qs from 'query-string';

const API_HOST = import.meta.env.VITE_API_HOST;
const API_PREFIX = import.meta.env.VITE_API_PREFIX;

export const client = axios.create({
	baseURL: API_HOST + API_PREFIX,
	headers: {
		Accept: 'application/json',
	},
	paramsSerializer: function (params) {
		return qs.stringify(params, { skipNull: true, skipEmptyString: true });
	},
});

