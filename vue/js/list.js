var app = new Vue({
    el: "#app",
    data:{
        lists: [
            {todo:'洗澡'},
            {todo:'吃飯'},
            {todo:'睡覺'},
        ],
        value: '',
    },
    methods:{
        add:function(){
            this.lists.push(this.value);
            this.value = '';
        },
        del:function(e){
            console.log(e);
            // this.lists.splice(del, 1)
            // var val = e.target.innerText;
            // var del = this.lists.indexOf(val)
            // del !== -1 ? this.lists.splice(del, 1) : console.log(1);
            
        }
    },
});