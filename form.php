<!doctype html>
<html>
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width; initial-scale=1.0" />
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <style type="text/css">
    *
    {
      margin: 0;
      padding: 0;
    }
    td
    {
      width:20%;
      margin: 5px;
    }

    hr
    {
      margin: 0px;
      width:100%;
      border:2px solid #983135;

    }

    input,select
    {
      margin:5px;
    }

    .Image
    {
      position: relative;
      width:100%;
      height: 10%;
      background-color:#31407C;
    }
    #Imagelogo
    {
      position: absolute;
      top:10%;
      left:11%;
      height: 65%;
    }

    table
    {
      margin: 0 auto;

    }
    .top
    {
      position: relative;
      margin: auto;
      width:100%;
      height: 10%;
      background-color:#31407C;
      overflow: hidden;
    }
    .line-d
    {
      width: 40%;
    }
    .red
    {
      color: red;
    }
    .button
    {
    text-align: center;
    }
    button
    {
      margin: 10px;
      width: 10%;
      height: 5%;
      border-radius: 5px;
      background-color: #4670AE;
      border-style: none;
      color: #FFFFFF;
    }
    @media screen and (max-width: 414px) {
      table
      {
        margin: 0;
      }
      td.line-d0
      {
        width: 60%;
        font-size: 16px;
        margin: 5px;
      }
      td.line-d label
      {

      }
      input
      {

      }
    }
  </style>
  <SCRIPT>

    $(function(){
      $(".to_submit").click(function(){to_check()});
    });

    function to_check()
    {

      var message = "";
      var send =
      {
        "mode":  'save',
        "source":  'front',
        "mname": $("input[name='mname']").val(),
        "id_no": $("input[name='id_no']").val(),
        "birth_y":$("input[name='birth_y']").val(),
        "birth_m":$("select[name='birth_m']").val(),
        "birth_d":$("select[name='birth_d']").val(),
        "sex":  $("input[name='sex']:checked").val(),
        "tel_1":$("input[name='tel_1']").val(),
        "tel_2":$("input[name='tel_2']").val(),
        "mobile":   $("input[name='mobile']").val(),
        "city_sn":  $("select[name='city_sn']").val(),
        "town_sn":  $("select[name='town_sn']").val(),
        "address":  $("input[name='address']").val(),
        "is_same_address":  $("input[name='is_same_address']:checked").val(),
        "city_sn_1":  $("select[name='city_sn_1").val(),
        "town_sn_1":  $("select[name='town_sn_1").val(),
        "address_1":  $("input[name='address_1").val(),
        "email":  $("input[name='email']").val(),
        "line_id":$("input[name='line_id']").val(),
        "remittance_account":$("input[name='remittance_account']").val(),
        "contact_name":   $("input[name='contact_name']").val(),
        "contact_tel": $("input[name='contact_tel']").val()
      };
      if($("input[name='mname']").val() == "")   message += "\n姓名必須填寫";

      if($("input[name='id_no']").val() == "")   message += "\n身分證字號必須填寫";

      if($("input[name='sex']:checked").val() == undefined)     message += "\n性別必須填寫";

      if($("input[name='mobile]").val() == "")  message += "\n手機必須填寫";

      if($("input[name='city_sn").val() == "" ) message += "\n戶籍地址的縣市必須填寫";

      if($("select[name='town_sn").val() == "" ) message += "\n戶籍地址的鄉鎮市區必須填寫";

      if($("select[name='address").val() == "" ) message += "\n戶籍地址的街道地址必須填寫";

      if($("input[name='is_same_address']:checked").val() != 1)
      {
        if($("select[name='city_sn_1']").val() == "")  message+="\n通訊地址的縣市必須選擇";

        if($("select[name='town_sn_1']").val() == "")  message+="\n通訊地址的鄉鎮市區必須選擇";

        if($("input[name='address_1']").val() == "")  message+="\n通訊地址的街道地址必須填寫";
      }

      if($("input[name='email']").val() == "") message+="\n電子信箱帳號必須填寫";

      if($("input[name='contact_name']").val() == "") message+="\n緊急聯絡人姓名必須填寫";

      if($("input[name='contact_tel']").val() == "") message+="\n緊急聯絡人電話必須填寫";

      if(message != "")
      {
        alert(message);
      }
      else
      {
        // $.ajax({
        //   url: 'm04a_1.php?area_sn='+$("#area_sn").val(),
        //   type: 'GET',
        //   dataType: 'html',
        //   success: function(response)
        //   {
        //     $('#branch').html(response);
        //     $('#branch').fadeIn();
        //   }
        // });

        $.ajax({
          url:'manage/m01a_save.php?sn=0',
          type:'POST',
          data:send,
          dataType:'text',
          success:function(mid)
          {

            alert("註冊成功");
            alert("帳號為"+mid.substr(0,10)+'請務必牢記');
            alert("密碼為身分證字號後六碼");
            document.location.href="member-login.php";

          }
        });
       }

    }

    function to_town(town)
    {
      $.ajax({
        url: 'manage/m01a_1.php?city_sn='+$("#city_sn").val()+'&town='+town,
        type: 'GET',
        dataType: 'html',
        success: function(response)
        {
          $('#town').html(response);
          $('#town').fadeIn();
        }
      });
    }

    function to_town_1(town)
  {
    $.ajax({
      url: 'manage/m01a_1.php?city_sn='+$("#city_sn_1").val()+'&town='+town,
      type: 'GET',
      dataType: 'html',
      success: function(response)
      {
        $('#town_1').html(response);
        $('#town_1').fadeIn();
      }
    });
  }

  </SCRIPT>
  </head>
  <body>


  <div class="container">
    <div class="Image">
    </div>
    <hr>
    <form name="form1" action="manage/m01a_save.php" type="POST">
      <table width="68%" border="0" cellpadding="2" cellspacing="1">
            <tbody>
              <tr>
                <td align="right" class="line-d0"><span class="red">*</span>姓名:</td>
                <td align="left" class="line-d">
                  <label>
                    <input type="text" name="mname" id="textfield" value="" />
                    (請輸入真實姓名)
                  </label>
                </td>
              </tr>

              <tr>
                <td align="right" class="line-d0"><span class="red">*</span>身份證字號:</td>
                <td align="left" bgcolor="#FFFFFF" class="line-d">
                  <input type="text" name="id_no" value="" />
                </td>
              </tr>

              <tr>
                <td align="right" class="line-d0">出生日期:</td>
                <td align="left" class="line-d">&nbsp西元
                  <input name="birth_y" type="text" id="textfield2" size="4" value="" />
                  年
                  <label>
                    <select name="birth_m" id="birth_m">
                      <? for($x=1;$x<=12;$x++){?>
                      <option value=""> <? echo $x;?></option>
                      <? }?>
                    </select>
                  </label>
                  月
                  <select name="birth_d" id="birth_d">
                    <? for($y=1;$y<=31;$y++){?>
                    <option value="" > <? echo $y;?></option>
                    <? }?>
                  </select>
                  日
                </td>
              </tr>

              <tr>
                <td align="right" class="line-d0"><span class="red">*</span>性別:</td>
                <td align="left" class="line-d">
                  <label style="margin-left:5px;">
                    <input type="radio" name="sex" id="radio" value="男" />
                    男 &nbsp;
                    <input type="radio" name="sex" id="radio" value="女" />
                    女
                  </label>
                </td>
              </tr>

              <tr>
                <td align="right" class="line-d0">電話:</td>
                <td align="left" class="line-d">
                  <label>
                    <input name="tel_1" type="text" id="textfield3" size="2" value="" />
                    -
                    <input type="text" name="tel_2" value="" />
                    (區碼-電話號碼，例:02-89904080)
                  </label>
                </td>
              </tr>

              <tr>
                <td align="right" class="line-d0"><span class="red">*</span>行動電話:</td>
                <td align="left" class="line-d">
                  <input type="text" name="mobile" value="" />
                  (例:0911123123)
                  電信公司
                  <select name="mobile_company">
                    <?
                      $mobile_company_array = array('請選擇', '中華電信', '台灣大哥大', '遠傳', '亞太電信','台灣之星');
                      foreach($mobile_company_array as $mc)
                      {
                        echo '<option value="'.$mc.'">'.$mc;
                      }
                    ?>
                  </select>
                </td>
              </tr>

              <tr>
                <td align="right" class="line-d0"><span class="red">*</span>戶籍地址:</td>
                <td align="left" class="line-d">
                  <select id="city_sn" name="city_sn" onchange="javascript:to_town('town_sn');">
                    <option value="">請選擇</option>

                  </select>

                  <span id="town">
                    <select id="town_sn" name="town_sn">
                      <option value="">請選擇</option>

                    </select>
                  </span>
                  <input type="text" style="width:60%;" name="address" class="input2" value="" />
                </td>
              </tr>

              <tr>
                <td align="right" class="line-d0"><span class="red">*</span>通訊地址:</td>
                <td align="left" class="line-d">
                  &nbsp<input name="is_same_address" type="checkbox" value="1" />
                  同戶籍地址
                  </br>
                  <select id="city_sn_1" name="city_sn_1" onchange="javascript:to_town_1('town_sn_1');">
                    <option value="">請選擇</option>

                  </select>

                  <span id="town_1">
                    <select id="town_sn_1" name="town_sn_1">
                      <option value="">請選擇</option>

                    </select>
                  </span>
                  <input type="text" style="width:60%;" name="address_1" class="input2" value="" />
                </td>
              </tr>

              <tr>
                <td align="right" class="line-d0"><span class="red">*</span>電子郵件:</td>
                <td align="left" class="line-d">
                  <input type="text" name="email" style="width:40%;" value="" />
                </td>
              </tr>

              <tr>
                <td align="right" class="line-d0">Line ID:</td>
                <td align="left" class="line-d">
                  <input type="text" name="line_id" style="width:40%;" value="" />
                </td>
              </tr>

              <tr>
                <td align="right" class="line-d0"><span class="red"></span>獎金匯款帳號:</td>
                <td align="left" class="line-d">
                  <input type="text" name="remittance_account" id="remittance_account" value="" />
                </td>
              </tr>

              <tr>
                <td align="right" class="line-d0"><span class="red">*</span>緊急連絡人姓名:</td>
                <td align="left" class="line-d">
                  <input type="text" name="contact_name" id="contact_name" value="" />
                </td>
              </tr>

              <tr>
                <td align="right" class="line-d0"><span class="red">*</span>緊急連絡人電話:</td>
                <td align="left" class="line-d">
                  <input type="text" name="contact_tel" id="contact_tel" value="" />
                </td>
              </tr>

              <tr>
                <td>
            </tbody>
                </td>
              </tr>

          </table>

        <div class="button">
          <button type="button" class="to_submit">送出</button>
          <button type="reset" >重設</button>
        </div>
      </form>

    </div>
  </body>
</html>