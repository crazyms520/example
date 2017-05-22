Vue.component('todo-item', {
  props: ['todo'],
  template: '<li>{{ todo.text }}</li>'
})

var app = new Vue({
    el: '#app',
    data: {
        message: 'Hello Vue.js!',
        message2: 'look what',
        seen: false,
        todos: [
            { text: 'JavaScript' },
            { text: 'Vue' },
            { text: 'all' }
        ],
        groceryList: [
            { text: '蔬菜' },
            { text: '奶酪' },
            { text: '随便其他什么人吃的东西' }
        ]
    },
    methods:{
        reverseMessage: function(){
            console.log(this.message)
            this.message = this.message.split('').reverse().join('')
        }
    }
})

