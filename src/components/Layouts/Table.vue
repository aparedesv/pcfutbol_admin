<template>
    
    <table 
        class="table table-sm align-middle w-100"
        :class="[
            {'table-borderless': !tableBorder},
            {'m-0': !tableMargin},
        ]"
    >

        <thead v-if="tableHeader">

            <tr>

                <th v-for="column in tableColumns" scope="col">{{ column }}</th>
                
            </tr>

        </thead>

        <tbody>

            <tr v-for="rowData in tableData">

                <td v-for="column in tableColumns"> {{ rowData[column] }}</td>

            </tr>
        
        </tbody>

    </table>

</template>

<script>

    export default {
        
        name: 'Table',

        props: [
            'tableColumns', 
            'tableData', 
            'tableBorder', 
            'tableHeader',
            'tableMargin',
        ]
    }

</script>

<style scoped>

    table {
        font-size: 0.8em;
    }

</style>