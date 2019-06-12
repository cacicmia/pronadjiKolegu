<template>
<div class="content">
    <div id="tlocrt" :style="{    backgroundImage: `url(${path})` }" >
        
            <stol v-for="(pos,i) in position" :styleObject="pos.styleObject" :orientation="pos.orientation" :key="i"/>
             <toggler/>
    </div>  
</div>
</template>

<script>
import stol from './stol.vue'
import toggler from './toggler.vue'
    export default {
       props: {
           path: {
               type: String,
               default: ""
           },
        },
        components : {
            stol,
            toggler
        },     
        data() {
            return {
                position: [
                    {
                        styleObject: { left:"36%", top:"5%" },
                        orientation: "bubble-right"
                    },
                     {
                        styleObject: { left:"36%", top:"18%" },
                        orientation: "bubble-right"
                    },
                    {
                        styleObject: { left: "46%", top: "5%"},
                        orientation: "bubble-left"
                    }
                ]
            }    
        },

                
       
       }
</script>
<style>
   .content {
       padding: 10px;
   }
   #move{
       background-color: red;
       width: 3%;
       height: 12%;
       position: absolute;
       top: 5%;
       left: 35%;
   }
</style>
