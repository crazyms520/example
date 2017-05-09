function TodoCtrl($scope) {
    $scope.nweItem   = "";
    $scope.todoList  = [{ label:"買牛奶"},{ label:"繳電話費"}];
    $scope.todoList2 = [{ label:"買牛奶"},{ label:"繳電話費"},{label:"睡覺"}];
    $scope.addItem   = function(){
        if(this.newItem)
        {
            console.log(this.newItem)
            this.todoList2.push({label:this.newItem});
            this.newItem = '';
        }
    }

}
