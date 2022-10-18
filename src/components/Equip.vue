<template>

    <div class="table-responsive w-100 p-2">

        <div 
            v-if="equip"
            class="w-100"
        >

            <div 
                v-for="(jugador, indexJugador) in equip.plantilla"
                class="w-100 mb-2"
            >
    
                <button 
                    class="btn btn-sm btn-outline-secondary w-100" 
                    type="button" 
                    data-bs-toggle="collapse" 
                    :data-bs-target="`#jugador_${indexJugador}`" 
                    aria-expanded="false" 
                    aria-controls="collapseExample"
                >
                    <p class="m-0 d-flex justify-content-between"> <span>{{ jugador.cognoms }}</span> <span>{{ jugador.mitja }}</span> </p>
                    <Table
                        :tableColumns="constants.QUALITATS_JUGADOR" 
                        :tableData="getAttributes(jugador)"
                        :tableBorder="null"
                        :tableHeader="null"
                        :tableMargin="null"
                    >

                    </Table>
                </button>
        
                <div class="collapse" :id="`jugador_${indexJugador}`">
                    <div class="card card-body">
                        Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                    </div>
                </div>
                
            </div>

        </div>
        
        <Table
            v-if="equip" 
            :tableColumns="columns"
            :tableData="equip.plantilla"
            :tableBorder="true"
            :tableHeader="true"
            :tableMargin="true"
        >
        </Table>

    </div>

</template>

<script>
    import { computed } from 'vue'
    import { useStore } from 'vuex'

    import Table from "./Layouts/Table.vue";

    export default {
        
        name: 'Equip',
        
        components: {
            Table
        },
        
        data() {

            const store = useStore();

            return {

                columns: [
                    'nom',
                    'cognoms',
                    'data_naixement',
                    'mitja',
                ],

                equip: computed(() => {
                    return store.getters.getEquip
                }),
                
                constants: computed(() => {
                    return store.state.constants
                })

            }

        },
        methods: {
            
            getAttributes(jugador) {

                var response = {}

                jugador.atributs.forEach(atribut => {
                    
                    response[atribut.nom] = atribut.pivot.valor
                });

                return [response]
            }
        }
    }
</script>