var app = new Vue({
  el: '#app',
  data: {
    todos: [
      {name: "todo1", state: false},
      {name: "todo2", state: false},
      {name: "todo3", state: false},
    ],
    message: '',
  },
  methods: {
    changeState: function(index) {
      this.todos[index].state = !this.todos[index].state;
    },
    addTodo: function() {
      var newTodo = this.message.trim();
      if(!newTodo) {
        return　alert('入力してください');
        }
      this.todos.push({name: this.message, state: false});
      this.message = '';
    },
    deleteTodo: function(index) {
      this.todos.splice(index, 1);
    },
    archive: function() {
            var remains = [];
            var todos = this.todos;
            var length = todos.length;
            for(var i = 0; i < length; i++) {
                var todo = todos[i];
                if(!todo.done) {
                    remains.push(todo);
                }
            }
            this.todos = remains;
        }
  }
})
