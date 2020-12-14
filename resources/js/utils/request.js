import axios from 'axios';

const baseURL = process.env.VUE_APP_BASE_API_URL;

const api = axios.create({  baseURL: baseURL });

export default {
    async getRequest(URL) {
        return await api.get(URL);
    },
    async postRequest(URL, BODY) {
        return await api.post(URL, BODY);
    },
    async putRequest(URL, BODY) {
        return await api.put(URL, BODY);
    },
    async deleteRequest(URL) {
        return await api.delete(URL);
    },
}