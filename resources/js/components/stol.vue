<template>
    <div> 
        <div class="stol1" :style="styleObject">
            <div :class="orientation">
                <img class="person" src="https://www.petmd.com/sites/default/files/Acute-Dog-Diarrhea-47066074.jpg"  alt="">
            </div>
        </div>
    </div>
</template>
<script>
export default {
    props: {
        
        styleObject: {
            type: Object,
            default: {}
        },
        orientation: null

    },
    data() {
        return {

        }
    }
}

</script>
