<template>
    
    <div class="m-0 p-2 d-flex justify-content-between bg-body">
        
        <button class="btn btn-sm btn-primary">equip</button>
        <button class="btn btn-sm btn-primary">mercat</button>
        <button class="btn btn-sm btn-primary">club</button>
        <button class="btn btn-sm btn-primary">estadístiques</button>

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
                })
            }
        } 

    }

</script>