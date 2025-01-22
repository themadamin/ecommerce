import {defineStore} from 'pinia';
import axios from 'axios';
export const useAuthStore = defineStore('auth', {
    state: () => ({
        user: {
            name: null,
            email: null,
            token: null
        }
    }),

    getters: {
        isAuthenticated: (state) => !!state?.user
    },

    actions: {
        async login (data) {
            try {
              this.user = (await axios.post('auth/login', data)).data.data;
            }
            catch (error){
                throw error;
            }
        },

        async register (data) {
            try{
                this.user = (await axios.post('auth/register', data)).data.data
            }
            catch (error){
                throw error;
            }
        },
    }
});
