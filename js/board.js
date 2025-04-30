
$(document).ready(function() {
	selectDesign();
});

$(function(){ 
	jQuery('.scrollbar-dynamic').scrollbar();
	jQuery('.scrollbar-inner').scrollbar();
});

$(function() {
  $( ".datepicker" ).datepicker({
    dateFormat: 'yy-mm-dd',
    prevText: '�댁쟾 ��',
    nextText: '�ㅼ쓬 ��',
    monthNames: ['1��','2��','3��','4��','5��','6��','7��','8��','9��','10��','11��','12��'],
    monthNamesShort: ['1��','2��','3��','4��','5��','6��','7��','8��','9��','10��','11��','12��'],
    dayNames: ['��','��','��','��','紐�','湲�','��'],
    dayNamesShort: ['��','��','��','��','紐�','湲�','��'],
    dayNamesMin: ['��','��','��','��','紐�','湲�','��'],
    showMonthAfterYear: true,
    changeMonth: true,
    changeYear: true,
	showOn: "both",
	buttonText: "�щ젰蹂닿린",
  });
});

function sms_send() {
	var phone_tmp1 = $("input[name='phone1']").val();
	var phone_tmp2 = $("input[name='phone2']").val();
	var phone_tmp3 = $("input[name='phone3']").val();

	if( phone_tmp1 == "" || phone_tmp2 == "" || phone_tmp3 == "" ){
		alert("�대��곕쾲�몃� �щ컮瑜닿쾶 �낅젰�댁＜�몄슂.");
		return false;
	}

	if( phone_tmp1.length != 3 || phone_tmp2.length != 4 || phone_tmp3.length != 4 ){
		alert("�대��곕쾲�몃� �щ컮瑜닿쾶 �낅젰�댁＜�몄슂.");
		return false;
	}

	var data = phone_tmp1 + "-" + phone_tmp2 + "-" + phone_tmp3; 

	$.ajax({
		type : "POST",
		url : "/ko_admin/inc/sms_ajax.php",
		data : {
			data_send : data
		},
		success : function(args) {
				alert(args);
		}
	});
}

function sms_auth() {
	var sms_auth = $("input[name='sms_auth']").val();

	if( sms_auth == ""){
		alert("�몄쬆踰덊샇瑜� �щ컮瑜닿쾶 �낅젰�댁＜�몄슂.");
		return false;
	}

	var phone_tmp1 = $("input[name='phone1']").val();
	var phone_tmp2 = $("input[name='phone2']").val();
	var phone_tmp3 = $("input[name='phone3']").val();

	if( phone_tmp1 == "" || phone_tmp2 == "" || phone_tmp3 == "" ){
		alert("�대��곕쾲�몃� �щ컮瑜닿쾶 �낅젰�댁＜�몄슂.");
		return false;
	}

	if( phone_tmp1.length != 3 || phone_tmp2.length != 4 || phone_tmp3.length != 4 ){
		alert("�대��곕쾲�몃� �щ컮瑜닿쾶 �낅젰�댁＜�몄슂.");
		return false;
	}

	var data = phone_tmp1 + "-" + phone_tmp2 + "-" + phone_tmp3; 

	$.ajax({
		type : "POST",
		dataType: 'json',
		url : "/ko_admin/inc/sms_auth_ajax.php",
		data : {
			sms_auth : sms_auth,
			data_send : data
		},
		success : function(request) {
			alert(request.message);
			$("#auth_message").html(request.tag);
			if(request.result == "true"){
				$("#sms_auth2").val("Y");
			}
		}
	});
}

$(document).ready(function() {
	$('form').submit(function() {
		var chk = true;

		//���됲듃 泥댄겕
		$('.required_select').each(function() {
			if (!$(this).val()) {			
				alert($(this).attr('title') + "�� �좏깮�섏꽭��.");
				$(this).focus();
				chk = false;
				return false;
			}
		});
		if (!chk) { return false; }
		
		// �쇰뵒�� 踰꾪듉 泥댄겕
		$('.required_radio').each(function() {
		/*
			if (!$(this).find('input:radio:checked').length) {			
				alert($(this).attr('title') + "�� �좏깮�섏꽭��.");
				$(this).find('input:radio').first().focus();
				chk = false;
				return false;
			}
		*/
			var radio_name = $(this).attr("name");
		
			if(!$("input[type=radio][name="+radio_name+"]").is(":checked")){
				alert($(this).attr('title') + "�� �좏깮�섏꽭��.");
				//$(this).find('input:radio').first().focus();
				$("input[type=radio][name="+radio_name+"]").focus();
				chk = false;
				return false;
			}

		});
		if (!chk) { return false; }
			
		// 泥댄겕諛뺤뒪 踰꾪듉 泥댄겕
		$('.required_checkbox').each(function() {
		
			// 理쒖냼 �쒓컻 �좏깮
			if (!$(this).find('input:checkbox:checked').length) {			
				alert($(this).attr('title') + "�� �좏깮�섏꽭��.");
				$(this).find('input:checkbox').first().focus();
				chk = false;
				return false;
			}

			// 理쒕� �좏깮
			if ($(this).find('input:checkbox:checked').length > $(this).attr('limit')) {			
				alert($(this).attr('title') + "�� " + $(this).attr('limit') + "媛쒓퉴吏� �좏깮�� 媛��ν빀�덈떎.");
				$(this).find('input:checkbox').first().focus();
				chk = false;
				return false;
			}
			/*
			// �꾩닔 �좏깮 �� �곸슜
			if ($(this).find('input:checkbox:checked').length != $(this).attr('limit')) {			
				alert($(this).attr('title') + "�� " + $(this).attr('limit') + "媛쒓퉴吏� �좏깮�섏뀛�� �⑸땲��.");
				$(this).find('input:checkbox').first().focus();
				chk = false;
				return false;
			}
			*/

		});
		
		if (!chk) { return false; }

		$('.required').each(function() {
			if (!$(this).val()) {			
				alert($(this).attr('title') + "�� �낅젰�섏꽭��.");
				$(this).focus();
				chk = false;
				return false;
			}
		});
		
		if (!chk) { return false; }


		if("<?=$board[sms_auth]?>" == "Y" && "<?=$mode?>" != "modify"){
			$('.auth_required').each(function() {
				if ($(this).val() != "Y") {			
					alert("�몄쬆�� 吏꾪뻾�댁＜�몄슂.");
					chk = false;
					return false;
				}
			});
		
			if (!chk) { return false; }
		}
	});

});

$(document).on('click', 'a[href="#"]', function(e){
	e.preventDefault();
});

$(function(){
	$('.btn_del').click(function(){
		$("."+$(this).attr('id')).toggle('show');
	});

	$('.btn_reply').click(function(){
		$("."+$(this).attr('id')).toggle('show');
	});

	$('.hide_all').click(function(){
			//$("."+$(this).attr('id')).toggle('hide');
			$(this).closest("div").toggle('hide');
	});
});

	function reply_check(idx){
		var chk = true; 

		if($("#"+"re_comment_name_"+idx).val() == "") {
			alert("�대쫫�� �묒꽦�섏꽭��");
			chk = false;
			return false;
		}
		if (!chk) { return false; }


		if($("#"+"re_comment_pw_"+idx).val() == "") {
			alert("鍮꾨�踰덊샇瑜� �묒꽦�섏꽭��");
			chk = false;
			return false;
		}
		if (!chk) { return false; }

		if($("#"+"re_comment_text_"+idx).val() == "") {
			alert("�댁슜�� �묒꽦�섏꽭��");
			chk = false;
			return false;
		}
		if (!chk) { return false; }
	}



$(document).ready(function() {
	var chk = true;
	$(".comment_del_form").submit(function() {
		if($(this).children("input[type=password]").val() == ""){
			alert($(this).children('input[type=password]').attr('title')+"�� �낅젰�섏꽭��");
			chk = false;
			return false;
		}
		if (!chk) { return false; }
	});

	$(".comment_append_form").submit(function() {
		if($(this).children("input[type=password]").val() == ""){
			alert($(this).children('input[type=password]').attr('title')+"�� �낅젰�섏꽭��");
			chk = false;
			return false;
		}
		if (!chk) { return false; }
	});

	$(".comment_write").submit(function() {

		if($(this).children("input[type=comm_name]").val() == ""){
			alert($(this).children('input[type=comm_name]').attr('title')+"�� �낅젰�섏꽭��");
			chk = false;
			return false;
		}
		if (!chk) { return false; }
 
		if($(this).children("input[type=comm_password]").val() == ""){
			alert($(this).children('input[type=comm_password]').attr('title')+"�� �낅젰�섏꽭��");
			chk = false;
			return false;
		}
		if (!chk) { return false; }

		if($(this).children("textarea[type=comm_comments]").val() == ""){
			alert($(this).children('textarea[type=comm_comments]').attr('title')+"�� �낅젰�섏꽭��");
			chk = false;
			return false;
		}
		if (!chk) { return false; }
	});



});


function selectDesign() {
  $('.designSelect select').each(function () {
    var $this = $(this),
      numberOfOptions = $this.children('option').length;

    $this.addClass('select-hidden');
    $this.wrap('<div class="select"></div>');
    $this.after('<div class="selectbox"></div>');

    var $styledSelect = $this.next('div.selectbox');
    $styledSelect.text($this.children('option').eq(0).text());

    var $list = $('<ul />', {
      'class': 'selectoption'
    }).insertAfter($styledSelect);

    for (var i = 0; i < numberOfOptions; i++) {
      $('<li />', {
        text: $this.children('option').eq(i).text(),
        rel: $this.children('option').eq(i).val()
      }).appendTo($list);
      if ($this.children('option').eq(i).is(':selected')) {
        var tmp_this = $this.children('option').eq(i);
        $styledSelect.text(tmp_this.text()).removeClass('active');
      }
    }

    var $listItems = $list.children('li');

    $styledSelect.click(function (e) {
      $(this).parent("div").toggleClass('active');
      e.stopPropagation();
      $('div.selectbox.active').not(this).each(function () {
        $(this).removeClass('active').next('ul.selectoption').slideToggle();
      });
      $(this).toggleClass('active').next('ul.selectoption').slideToggle();
    });

    // 異붽�: 而ㅼ뒪�� �붿옄�몄뿉�� 留덉슦�ㅺ� 踰쀬뼱�� ��
    $(".designSelect").mouseleave(function () {
      $styledSelect.removeClass('active').addClass('trans');
      $(".designSelect .select").removeClass('active');
      $list.slideUp();
    });

    $listItems.click(function (e) {
      $list.children('li').removeClass("selected");
      $styledSelect.removeClass('trans');
      $(this).addClass("selected");
      e.stopPropagation();
      $styledSelect.text($(this).text()).removeClass('active');
      $this.val($(this).attr('rel')).change(); // onchange �대깽�� �섎룞�쇰줈 �몄텧
      $list.hide();
      $(".designSelect .select").removeClass('active');
    });
  });
}