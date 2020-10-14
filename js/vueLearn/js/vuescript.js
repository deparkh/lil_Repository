    var app = new Vue({
    el: '#app',
    data: {
      message: 'Привет, Vue! Hello world!'
    }
})
    var app2 = new Vue({
  el: '#app-2',
  data: {
    message: 'Вы загрузили эту страницу: ' + new Date().toLocaleString()
  }
})
    var app3 = new Vue({
  el: '#app-3',
  data: {
    seen: true
  }
})
    var app4 = new Vue({
  el: '#app-4',
  data: {
    todos: [
      { text: 'Изучить JavaScript' },
      { text: 'Изучить Vue' },
      { text: 'Создать что-нибудь классное' }
    ]
  }
})
    var app5 = new Vue({
  el: '#app-5',
  data: {
    message: 'Привет, Vue.js!'
  },
  methods: {
    reverseMessage: function () {
      this.message = this.message.split('').reverse().join('')
    }
  }
})
    var app6 = new Vue({
  el: '#app-6',
  data: {
    message: 'Привет, Vue!'
  }
})

    // Определяем новый компонент под именем todo-item
  Vue.component('todo-item', {
  template: '<li>Это одна задача в списке</li>'
})
  new Vue({el: '#noapp'})

  var appmy1 = new Vue({
    el: '#my1',
    data: {
      message:'Hi, nice to meet you!'
    }
  })
  new Vue({
    el:'#dapp1',
    data:{
      title:'Hello world!',
      styleCSS:''
    },
    methods: {
      changeText(){
        this.title='Text, changed in methods'
      }
    }
  })
    new Vue({
    el:'#dapp2',
    data:{
      title:'Hello world!'
    }
  })

    new Vue({
    el:'#dapp3',
    data:{
      value:1
    },
    methods:{
      increment(value){
        this.value=value
      }
    },
    computed:{
      doubleValue(){
        return this.value*2
      }
    }
  })
    new Vue({
      el:'#dapp4',
      data:{
        show:true,
      }
    })
    new Vue({
      el:'#dapp5',
      data:{
        show:false,
        cars:[
        {model:"BMW", speed:250.8},
        {model:"Audi", speed:240.21},
        {model:"Mercedes-Benz AMG", speed:350.4},
        {model:"Ford", speed:160.5}
        ]
      },
      methods:{
        
      }
    })
    new Vue({
      el:'#dapp6',
      data:{
        show:true,
        message:'Hello world! hello',
      },
      computed:{
        showMess(){
          return this.message.toUpperCase();
        }
      },
      filters:{
        lowerCase(value){
          return value.toLowerCase()
        }
      }
    })
Vue.filter('capitalize', function(value){
  if (!value) return ''
    value=value.toString()
  return value.replace(/\b\w/g, function(l) {return l.toUpperCase()})
});

Vue.component ('app-car', {
  data: function (){
    return{
      lols:[
        {model:"BMW"},
        {model:"Volvo"},
        {model:"Mercedes-Benz"},
        {model:"Ford"},
        {model:"Audi"},
        {model:"Seat"},
        {model:"Fiat"}
        ],
    }
  },
  template:'<div><div class="lol" v-for="lol in lols"><p>{{lol.model}}</p></div></div>',
});

new Vue({
      el:'#dapp7'
    });

new Vue({
  el:'#dapp8',
  data:{
    isActive: true,
    isBtn: true,
  }
})
new Vue({
  el:'#dapp9',
  data:{
    counter:0,
  },
  created: function(){
      this.counter=3;
    },
  methods:{
    high(){
      this.counter++
    }
  }
})