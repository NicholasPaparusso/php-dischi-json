const {createApp} = Vue;

createApp({

  data(){
    return{
      apiUrl : 'server.php',
      cds : [],
    }
  },

  methods:{

    getCds(){
      axios.get(this.apiUrl)
        .then( result =>{
          this.cds = result.data;
          console.log(this.cds);
        }) 
    }

  },

  mounted(){
    this.getCds();
  }

}).mount('#app')