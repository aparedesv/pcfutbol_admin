// store/index.js
import { createStore } from 'vuex'

import state from './state.js'

const store = createStore({
    state () {  
        return state
    },
    getters: {

        getEquip: (state) => {

            return state.equip;
            // const response = fetch(`${state.constants.API_URL}/jornades/1/${id}`)
        }
    },
    actions: {
        async getEquipId ({ state }, id) {

            console.log(id);
            const response = await fetch(`${state.constants.API_URL}/equips/${id}`)
            const data = await response.json()
                    
            state.equip = data
        }
    }
})

export default store