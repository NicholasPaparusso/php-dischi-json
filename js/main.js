const {createApp} = Vue;

createApp({

  data(){
    return{
      apiUrl : 'server.php',
      cds : [],
      cd : {},
      showCdDetail : false,
    }
  },

  methods:{

    getCds(){
      axios.get(this.apiUrl)
        .then( result =>{
          this.cds = result.data;
          console.log(this.cds);
        }) 
    },

    getCdDetail(index){
      const params = {
        cdIndex: index
      }

      axios.get(this.apiUrl ,{params})
        .then(result => {
          this.showCdDetail = true;
          this.cd = result.data
        })
    }



  },

  mounted(){
    this.getCds();
  }

}).mount('#app')