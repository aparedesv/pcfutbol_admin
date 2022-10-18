<template>
    
    <div class="m-0 p-2 row d-flex justify-content-between sticky-top bg-light">
        
        <div class="col-2">

            <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-list"></i>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                </ul>
            </div>

        </div>
        
        <div class="col col-md-auto text-center">
            <h1>topbar</h1>
        </div>
        
        <div class="col-2">
            <img class="img-fluid" :src="`${constants.API_URL}/assets/img/user.png`">
        </div>

    </div>

</template>

<script>
    import { computed } from 'vue'
    import { useStore } from 'vuex'

    export default {
        data() {
            const store = useStore();
            return {

                constants: computed(() => {
                    return store.state.constants
                }),
                jornada: null
            }
        },
        methods: {
            async doSearch() {
                const response = await fetch(`${this.constants.API_URL}/jornades/1/9`)
                const data = await response.json()
                
                console.log(data);
                
                this.jornada = data;
            }        
        }

    }

</script>