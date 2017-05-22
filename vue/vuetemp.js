
<body>
  <div id="app">
    <input type="button" type="button" value="click" v-on:click="clickme">
    <div>
       <div v-for=" item in items " v-bind:style="astyle">
         {{item}}
       </div>
    </div>
  </div>
  
</body>

export default({
	el:'#app',
  data:{
    count:0,
    items: [1,2,3],
    astyle:{
 			color: 'red',
		},
  },
  methods:{
  	clickme: function(){
    	this.count = 1;
      let lastN = this.items.unshift();
      this.items.push(++lastN);
      console.log(lastN)
    }
  },
});
