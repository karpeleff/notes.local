<template>
<div>
    {{time2}}
        <label>First Name</label>
        <input type="text" v-model="form.title"/>

        <label>Last Name</label>
        <input type="text" v-model="form.text"/>

        <label>Email</label>
        <input type="text" v-model="form.email"/>

        <button v-on:click="submit()">Submit</button>

    <date-picker v-model="time1" valueType="format"></date-picker>
    <date-picker v-model="time2" type="datetime"></date-picker>
    <date-picker v-model="time3" range></date-picker>
    </div>

</template>
<script>
import DatePicker from 'vue2-datepicker';
import 'vue2-datepicker/index.css';
export default {
name: "Carousel",
    components: { DatePicker },
data(){
        return {
            form: {
                title: '',
                text: '',
                email: ''
                  },
            time1: null,
            time2: null,
            time3: null,
               }
     },
      methods: {
        submit(){
            axios.post('note', this.form)
                .then(function( response ){
                     this.$alert(response.data.text);

                }.bind(this));
        }
    }
}

</script>
