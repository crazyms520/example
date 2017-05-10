function TodoCtrlList($scope){
    $scope.newItem = '';
    $scope.todoList = [];
    $scope.addItem = function(){
        if(this.newItem){
            this.todoList.push({label:this.newItem,isFinish:false});
            this.newItem = '';
        }
        $scope.removeItem = function(item){
            console.log(item);
            item.isFinish = true;
        }
    };
    $scope.edit = function(item){
        item.editing = true;
    }
    $scope.save = function(item){
        delete item.editing;
    }
    
}