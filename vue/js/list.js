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
            var l = this.lists.length;
            this.lists[l] = {todo:this.value};
            this.value = '';
        },
        del:function(e){
            //因為是li呼叫
            var del = e.target.firstElementChild.defaultValue;
            this.lists.splice(del, 1);
            // var val = e.target.innerText;
            // var del = this.lists.indexOf(val)
            // del !== -1 ? this.lists.splice(del, 1) : console.log(1);
        }
    },
});