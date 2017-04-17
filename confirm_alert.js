function my_confirm(title, content, yesFn, noFn) {
    $('#my_confirm').remove();
    var confirm = '';
    confirm += '<div class="modal fade" id="my_confirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">';
    confirm += '<div class="modal-dialog">';
    confirm += '<div class="modal-content">';
    confirm += '<div class="modal-header">';
    confirm += '<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>';
    confirm += '<h4 class="modal-title center" id="myModalLabel">' + title + '</h4>';
    confirm += '</div>';
    confirm += '<div class="modal-body">';
    confirm += content;
    confirm += '</div>';
    confirm += '<div class="modal-footer">';
    confirm += '<button type="button" class="btn myBtnStyle col-sm-4 col-xs-3 yes" data-dismiss="modal">是</button>'; //data-dismiss="modal" data-toggle="modal" data-target="#myModal2"
    // confirm +=        '<div class="col-sm-4 col-xs-3"> </div>';
    // confirm +=        '<div class="col-sm-4 col-xs-3"> </div>';
    confirm += '<button type="button" class="btn myBtnStyle col-sm-4 col-xs-3 no" data-dismiss="modal">否</button>';
    confirm += '</div>';
    confirm += '</div>';
    confirm += '</div>';
    confirm += '</div>';
    $('html').append(confirm);
    var confirmBox = $("#my_confirm");
    confirmBox.modal('show');
    confirmBox.find(".yes").click(yesFn);
    confirmBox.find(".no").click(noFn);
}
//example

//  my_confirm("標題","內容", function yes()
//  {
//    如果是的話do_something()
//
//  }, function no()
//  {
//    如果不是的話do_something()
//
//  });


function my_alert(title, content, yesFn) //,yesFn
{
    $('#my_alert').remove();
    var alert = '';
    alert += '<div id="my_alert" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">';
    alert += '  <div class="modal-dialog">';
    alert += '    <div class="modal-content">';
    alert += '      <div class="modal-header">';
    alert += '        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>';
    alert += '        <h4 class="modal-title">' + title + '</h4>';
    alert += '      </div>';
    alert += '      <div class="modal-body">';
    alert += '        <p>' + content + '</p>';
    alert += '      </div>';
    alert += '      <div class="modal-footer">';
    alert += '        <button type="button" class="btn myBtnStyle yes" data-dismiss="modal"> 確認 </button>';
    // confirm += '        <button type="button" class="btn btn-success yes" data-dismiss="modal">確認</button>';
    // confirm += '        <button type="button" class="btn btn-primary">Save changes</button>';
    alert += '      </div>';
    alert += '    </div>';
    alert += '  </div>';
    alert += '</div>';
    $('html').append(alert);
    var alertBox = $("#my_alert");
    alertBox.modal('show');
    alertBox.find(".yes").click(yesFn);
}
//  my_alert("標題","內容")

function my_prompt(title, content, yesFn) //,yesFn
{

    $('#my_prompt').remove();
    var alert = '';
    prompt += '<div id="my_prompt" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">';
    prompt += '  <div class="modal-dialog">';
    prompt += '    <div class="modal-content">';
    prompt += '      <div class="modal-header">';
    prompt += '        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>';
    prompt += '        <h4 class="modal-title">' + title + '</h4>';
    prompt += '      </div>';
    prompt += '      <div class="modal-body">';
    prompt += '        <p>' + content + '</p>';
    prompt += '        <input class="form-control" type="text" name="fee" value="">';
    prompt += '      </div>';
    prompt += '      <div class="modal-footer">';
    prompt += '        <button type="button" class="btn myBtnStyle col-sm-4 col-xs-3 yes" data-dismiss="modal"> 確認 </button>';
    // prompt += '        <div class="col-md-4"> </div>';
    // prompt += '        <div class="col-md-4"> </div>';
    prompt += '        <button type="button" class="btn myBtnStyle col-sm-4 col-xs-3 no" data-dismiss="modal"> 取消 </button>';
    prompt += '      </div>';
    prompt += '    </div>';
    prompt += '  </div>';
    prompt += '</div>';
    $('html').append(prompt);
    var promptBox = $("#my_prompt");
    promptBox.modal('show');
    promptBox.find(".yes").click(yesFn);

}
//  my_alert("標題","內容")
