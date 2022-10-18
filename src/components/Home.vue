<template>
    
    <div class="container p-0 m-0">

        <TopBar></TopBar>
        <TeamActionsBar></TeamActionsBar>
        <Equip></Equip>

    </div>

</template>

<script>
    import TopBar from "./Layouts/TopBar.vue";
    import TeamActionsBar from "./Layouts/TeamActionsBar.vue";
    import Equip from "./Equip.vue";

    export default {
        
        name: 'Home',
        
        components: {
            TopBar,
            TeamActionsBar,
            Equip
        },
        
        beforeMount() {
            this.$store.dispatch('getEquipId', 1)
        }
    }
</script>