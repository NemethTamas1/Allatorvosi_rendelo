import { defineStore } from "pinia";
import {http} from '@utils/http';

export const useAllatStore = defineStore("allatok", {
    state:()=>({
        allatok:[],
        allat:[]
    }),
    actions:{
        async getAllats(){
            const response = await http.get("allatok")
            this.allatok = response.data.data
        },

        async getGazdi(id){
            const response = await http.get("gazdik");
            return response.data.data;
        },

        async getAllat(id){
            const response = await http.get(`allatok/${id}`)
            this.allat = response.data.data
        }
    }
})