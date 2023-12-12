import { client } from '@/api/client.ts';

export type RequestParams = {
	name: string | null;
	bedrooms: number | null;
	bathrooms: number | null;
	storeys: number | null;
	garages: number | null;
	price_from: number | null;
	price_to: number | null;
}

export type PropertyItem = {
	id: number,
	name: string,
	price: number,
	bedrooms: number,
	bathrooms: number,
	storeys: number,
	garages: number,
	created_at: string,
	updated_at: string
}

export type ResponseListResponse = {
	data: PropertyItem[];
}

export const getPropertyList = (params: Partial<RequestParams> = {}) => {
	return client.get('/property', {
		params,
	}).then((resp: { data: ResponseListResponse }) => resp.data?.data);
}

