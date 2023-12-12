import { client } from '@/api/client.ts';

export const getPropertyList = (params = {}) => {
	return client.get('/property', {
		params,
	});
}

