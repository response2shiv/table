<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Table</div>

                    <div class="card-body">
                        <p>First Numbers: {{ firstNumbers }}</p>
                        <p>Second Numbers: {{ secondNumbers }}</p>
                        <table>
                            <thead>
                                <tr>
                                    <th>X</th>
                                    <th
                                        v-for="(data, key) in firstNumbers"
                                        :key="key"
                                    >
                                        {{ data }}
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(data, key) in tableData" :key="key">
                                    <td>
                                        <b>{{ secondNumbers[key] }}</b>
                                    </td>
                                    <td v-for="(d, k) in data" :key="k">
                                        {{ d }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "table-comp",
    props: ["first", "second"],
    data() {
        return {
            tableData: [
                [0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                [0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                [0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                [0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                [0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                [0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                [0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                [0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                [0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                [0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            ],
            firstNumbers: [],
            secondNumbers: [],
        };
    },
    mounted() {
        let first = JSON.parse(this.first);
        let second = JSON.parse(this.second);
        this.firstNumbers = first;
        this.secondNumbers = second;
        console.log("first = ", this.first);
        console.log("second = ", this.second);
        for (let i = 0; i < first.length; i++) {
            for (let j = 0; j < second.length; j++) {
                this.tableData[j][i] = parseInt(first[i]) * parseInt(second[j]);
            }
        }
    },
};
</script>
<style>
table,
th,
td {
    border: 1px solid black;
    border-collapse: collapse;
    padding: 10px;
}
</style>
