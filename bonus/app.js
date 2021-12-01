
Vue.config.devtools = true;

//at content loaded
window.addEventListener('DOMContentLoaded',()=>{
    //instantiate vue app
    const vueApp = new Vue({
        //root selector
        el: '#vue-root',
        //app variables
        data: {
            url : 'php/data.php',
            albums : []
        },
        methods : {
            performCallAPI(){
                axios.get(this.url).then((response) => {
                    this.albums.push(...response.data.response)
                    console.log(this.albums)
                }) 
            }
        },
        mounted(){
            this.performCallAPI()
        }
    })
})