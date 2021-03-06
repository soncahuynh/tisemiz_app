<!--javascript for backend. Author: cahs huynhsonca@gmail.com-->
<script type="text/javascript">
$(function () {
	$.fn.serializeObject = function () {
		var o = {};
		var a = this.serializeArray();
		a.forEach(function (e) {
			if (e.name != 'undefined') {
				o[e.name] = e.value;
			}
		});
		return o;
	};
	$('#button-them-danhmuc-sanpham').click(function () {
		PopUp(1);
	});
	$('#button-them-sanpham').bind('click', function () {
		PopUp(2);
	});
});
function echoDate(value) {
	if (!value) {
		return '';
	}
	return formatDate(new Date(getDateFromFormat(value, 'yyyy-MM-dd HH:mm:ss')), 'dd/MM/yyyy')
}
function echoNull(value) {
	if (!value) {
		value = '';
	}
	return value;
}
function echoBoolValue(value) {
	if (value === true || value === "true") {
		return 1;
	} else {
		return 0;
	}
}
function doPostAjax(url, data, callbackfn) {
	$.ajax({
		beforeSend: function (XMLHttpRequest) {
			showLoading();
		},
		complete: function (XMLHttpRequest, textStatus) {
			hideLoading();
		},
		data: data,
		type: "post",
		success: function (data, textStatus) {
			if (callbackfn) {
				window[callbackfn](data);
			} else {
				window.location.reload();
			}
		},
		url: url
	});
}
function PopUp(type) {
	var width = 800;
	var height = 400;
	var left = parseInt((screen.availWidth / 2) - (width / 2));
	var top = parseInt((screen.availHeight / 2) - (height / 2));
	var PPwindow2 = window.open("<?php echo Router::url('/admin/commonfunction/chucnang/type/'); ?>" + type, "_blank", "width=" + width + ",height=" + height + ",toolbar=no,directories=no,status=yes, menubar=no,scrollbars=yes,resizable=yes,border=thin,left=" + left + ",top=" + top + "screenX=" + left + ",screenY=" + top + "");
	PPwindow2.focus();
}
function PopUpUpdate(type, madn) {
	var width = 800;
	var height = 400;
	var left = parseInt((screen.availWidth / 2) - (width / 2));
	var top = parseInt((screen.availHeight / 2) - (height / 2));
	var PPwindow2 = window.open("<?php echo Router::url('/admin/commonfunction/chucnang/type/'); ?>" + type + '/id_dn/' + madn, "_blank", "width=" + width + ",height=" + height + ",toolbar=no,directories=no,status=yes, menubar=no,scrollbars=yes,resizable=yes,border=thin,left=" + left + ",top=" + top + "screenX=" + left + ",screenY=" + top + "");
	PPwindow2.focus();
}
function doUpdate(type, id) {
	var width = 1100;
	var height = 400;
	var left = parseInt((screen.availWidth / 2) - (width / 2));
	var top = parseInt((screen.availHeight / 2) - (height / 2));
	var PPwindow3 = window.open("<?php echo Router::url('/admin/commonfunction/capnhat/type/'); ?>" + type + '/id/' + id, "_blank", "width=" + width + ",height=" + height + ",toolbar=no,directories=no,status=yes, menubar=no,scrollbars=yes,resizable=yes,border=thin,left=" + left + ",top=" + top + "screenX=" + left + ",screenY=" + top + "");
	PPwindow3.focus();
}
function doDelete(type, id) {
	var url = "<?php echo Router::url('/admin/commonfunction/chucnangxoa'); ?>";
	var data = {type: type, id: id};
	if (type === 10) {
		if (confirm("Bạn muốn xóa dòng này khỏi danh sách nguyên liệu của cơ sở?")) {
			doPostAjax(url, data);
		} else {
			return false;
		}
	} else if (type === 20) {
		if (confirm("Bạn muốn xóa dòng này khỏi danh sách sản phẩm của cơ sở?")) {
			doPostAjax(url, data);
		} else {
			return false;
		}
	} else if (type === 30) {
		if (confirm("Bạn muốn xóa dòng này khỏi danh sách chất thải nguy hại?")) {
			doPostAjax(url, data);
		} else {
			return false;
		}
	} else if (type === 40) {
		if (confirm("Bạn muốn xóa danh mục chất thải?")) {
			doPostAjax(url, data);
		} else {
			return false;
		}
	} else if (type === 50) {
		if (confirm("Bạn muốn xóa nguồn thải?")) {
			doPostAjax(url, data);
		} else {
			return false;
		}
	} else if (type === 90) {
		if (confirm("Bạn muốn xóa dòng này khỏi danh sách chất thải nguy hại của cơ sở?")) {
			doPostAjax(url, data);
		} else {
			return false;
		}
	} else if (type === 100) {
		if (confirm("Bạn muốn xóa file này?")) {
			doPostAjax(url, data);
		} else {
			return false;
		}
	} else if (type === 200) {
		if (confirm("Bạn muốn xóa văn bản này?")) {
			doPostAjax(url, data);
		} else {
			return false;
		}
	}
}
function doAddItem(type, data) {
	var url = "<?php echo Router::url('/admin/thongtinchung/additem'); ?>";
	doPostAjax(url, data);
}
function showLoading() {
	var div = '<div id="indicator" style="display: none;text-align: center; width: 100%; height: 100%; margin: auto; position: fixed; z-index: 999; background-color: #000; opacity: 0.7; left: 0; right: 0; top: 0; bottom: 0; vertical-align: middle;"><div style="position: relative; top: 45%; font-size: 14pt; color: #ccc; font-style: italic;">Đang xử lý...</div></div>';
	var i = 0;
	$('#indicator').each(function () {
		++i;
	});
	if (i > 1) {
		$('#indicator').fadeIn();
	} else {
		$('body').append(div);
		$('#indicator').fadeIn();
	}
}
function hideLoading() {
	$("#indicator").fadeOut();
//        window.location.reload();
}
function doPostAjaxWithoutAffect(url, data, callbackfn, prefix) {
	$.ajax({
		beforeSend: function (XMLHttpRequest) {
//				showLoading();
		},
		complete: function (XMLHttpRequest, textStatus) {
//				hideLoading();
		},
		data: data,
		type: "post",
		success: function (data, textStatus) {
			if (callbackfn) {
				window[callbackfn](data, prefix);
			} else {
				console.log(data);
			}
		},
		url: url
	});
}
function fillOutData(data, prefix) {
	log(data);
	try {
		var result = JSON.parse(data);
		if (result) {
			$('.loadData').each(function () {
				var attr_prefix = $(this).attr('prefix');
				if (attr_prefix == prefix) {
					var attr = $(this).attr('name');
					if (result[attr] != 'undefined') {
						$(this).val(result[attr]);
					}
					if($(this).attr('type')=='checkbox'){
						$(this).prop('checked',result[attr]);
					}
				}
			});
		}
	} catch (e) {

	}
}
function loadData(type, id) {
	var url = '<?php echo Router::url('/admin/commonfunction/load')?>';
	var data = {type: type, id: id};
	var prefix = '';
	if (type == 1005) {
		prefix = 'M_';
	}else if(type==1010){
		prefix = 'P_';
	}else if(type==1015){
		prefix= 'F_';
	}else if(type==1020){
		prefix='W_';
	}else if(type==1025){
		prefix='RH_';
	}
	doPostAjaxWithoutAffect(url, data, 'fillOutData', prefix);
}
function updatesanphamdoanhnghiep() {
	var data = $('#formupdatesanphamdoanhnghiep').serialize();
	var dataArr = $('#formupdatesanphamdoanhnghiep').serializeObject();
	//validation
	if (dataArr['colMa'] == "" || !IsPositiveNumber(dataArr['colMa'])) {
		alert('Xin chọn sản phảm để cập nhật');
		return false;
	}
	if (!IsPositiveNumber(dataArr['colThang']) || parseInt(dataArr['colThang']) > 12) {
		alert('Xin nhập tháng từ 1-12');
		return false;
	}
	if (!IsPositiveNumber(dataArr['colNam']) || parseInt(dataArr['colNam']) < 2000) {
		alert('Xin nhập năm (>2000)');
		return false;
	}
	if (dataArr['colDVi'].trim() == "") {
		alert('Xin nhập đơn vị');
		return false;
	}
	if (dataArr['colCongSuatTK'] != "" && !IsPositiveNumber(dataArr['colCongSuatTK'])) {
		alert('Công suất thiết kế phải là số dương');
		return false;
	}
	if (dataArr['colCongSuatTT'] != "" && !IsPositiveNumber(dataArr['colCongSuatTT'])) {
		alert('Công suất thực tế phải là số dương');
		return false;
	}
	//end validation
	var url = '<?php echo Router::url('/admin/commonfunction/update/1000')?>';
	doPostAjax(url, data, 'redirectsanpham');
}
function updatenguyenlieusanpham(){
	var data = $('#formupdatenguyenlieusanpham').serialize();
	var dataArr = $('#formupdatenguyenlieusanpham').serializeObject();
	//validation
	//end validation
	var url = '<?php echo Router::url('/admin/commonfunction/update/1005');?>';
	doPostAjax(url,data,'redirectnguyenlieu');
}
function updatediennuocdoanhnghiep(){
	var data = $('#formupdatediennuocdoanhnghiep').serialize();
	var dataArr = $('#formupdatediennuocdoanhnghiep').serializeObject();
	//validation
	//end validation
	var url = '<?php echo Router::url('/admin/commonfunction/update/1010');?>';
	doPostAjax(url,data,'redirectdien');
}
function updatenuocdoanhnghiep(){
	var data = $('#formupdatenuocdoanhnghiep').serialize();
	var dataArr = $('#formupdatenuocdoanhnghiep').serializeObject();
	//validation
	//end validation
	var url = '<?php echo Router::url('/admin/commonfunction/update/1010');?>';
	doPostAjax(url,data,'redirectnuoc');
}
function updatenhienlieudoanhnghiep(){
	var data = $('#formupdatenhienlieudoanhnghiep').serialize();
	var dataArr = $('#formupdatenhienlieudoanhnghiep').serializeObject();
	//validation
	//end validation
	var url = '<?php echo Router::url('/admin/commonfunction/update/1015');?>';
	doPostAjax(url,data,'redirectnhienlieu');
}
function updatenuocthainhamay(){
	var data = $('#formupdatenuocthainhamay').serialize();
	var dataArr = $('#formupdatenuocthainhamay').serializeObject();
	//validation
	//end validation
	var url = '<?php echo Router::url('/admin/commonfunction/update/1020');?>';
	doPostAjax(url,data,'redirectnuocthainhamay');
}
function updatechatthainguyhai(){
	var data = $('#formupdatechatthainguyhai').serialize();
	var dataArr = $('#formupdatechatthainguyhai').serializeObject();
	//validation
	//end validation
	var url = '<?php echo Router::url('/admin/commonfunction/update/1025');?>';
	doPostAjax(url,data,'redirectchatthainguyhai');
}
function redirectsanpham(data) {
	location.href = '<?php echo Router::url('/admin/doanhnghiep/themmoi/step2/sanpham')?>';
}
function redirectnguyenlieu(data) {
	location.href = '<?php echo Router::url('/admin/doanhnghiep/themmoi/step2/nguyenlieu')?>';
}
function redirectdien(data) {
	location.href = '<?php echo Router::url('/admin/doanhnghiep/themmoi/step2/dien')?>';
}
function redirectnuoc(data) {
	location.href = '<?php echo Router::url('/admin/doanhnghiep/themmoi/step2/nuoc')?>';
}
function redirectnhienlieu(data){
	location.href = '<?php echo Router::url('/admin/doanhnghiep/themmoi/step2/nhienlieu')?>';
}
function redirectnuocngam(data){
	location.href = '<?php echo Router::url('/admin/doanhnghiep/themmoi/step2/nuocngam')?>';
}
function redirectkiemsoatnuocthai(){
	location.href = '<?php echo Router::url('/admin/doanhnghiep/themmoi/step3/kiemsoatnuocthai')?>';
}
function redirectkhithai(){
	location.href = '<?php echo Router::url('/admin/doanhnghiep/themmoi/step3/khithai')?>';
}
function redirecttiengonrung(){
	location.href = '<?php echo Router::url('/admin/doanhnghiep/themmoi/step3/tiengonrung')?>';
}
function redirectracsinhhoat(){
	location.href = '<?php echo Router::url('/admin/doanhnghiep/themmoi/step3/racsinhhoat')?>';
}
function redirectchatthaicongnghiep(){
	location.href = '<?php echo Router::url('/admin/doanhnghiep/themmoi/step3/chatthaicongnghiep')?>';
}
function redirectchatthainguyhai(){
	location.href = '<?php echo Router::url('/admin/doanhnghiep/themmoi/step3/chatthainguyhai')?>';
}
function redirectnuocthainhamay(){
	location.href = '<?php echo Router::url('/admin/doanhnghiep/themmoi/step3/nuocthainhamay')?>';
}
function log(data) {
	console.log(data);
}
//Check Integer value
function IsNumber(numberVal) {
	if (numberVal == "") return false;
	if (isNaN(numberVal))
		return false;
	return true;
}
function IsPositiveNumber(numberVal) {
	if (!IsNumber(numberVal)) return false;
	var Temp = eval(numberVal) * 1;
	if (Temp <= 0) return false;
	return true;
}
var MONTH_NAMES = new Array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December', 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
var DAY_NAMES = new Array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');
function LZ(x) {
	return(x < 0 || x > 9 ? "" : "0") + x
}

// ------------------------------------------------------------------
// isDate ( date_string, format_string )
// Returns true if date string matches format of format string and
// is a valid date. Else returns false.
// It is recommended that you trim whitespace around the value before
// passing it to this function, as whitespace is NOT ignored!
// ------------------------------------------------------------------
function isDate(val, format) {
	var date = getDateFromFormat(val, format);
	if (date == 0) {
		return false;
	}
	return true;
}

// -------------------------------------------------------------------
// compareDates(date1,date1format,date2,date2format)
//   Compare two date strings to see which is greater.
//   Returns:
//   1 if date1 is greater than date2
//   0 if date2 is greater than date1 of if they are the same
//  -1 if either of the dates is in an invalid format
// -------------------------------------------------------------------
function compareDates(date1, dateformat1, date2, dateformat2) {
	var d1 = getDateFromFormat(date1, dateformat1);
	var d2 = getDateFromFormat(date2, dateformat2);
	if (d1 == 0 || d2 == 0) {
		return -1;
	}
	else if (d1 > d2) {
		return 1;
	}
	return 0;
}

// ------------------------------------------------------------------
// formatDate (date_object, format)
// Returns a date in the output format specified.
// The format string uses the same abbreviations as in getDateFromFormat()
// ------------------------------------------------------------------
function formatDate(date, format) {
	format = format + "";
	var result = "";
	var i_format = 0;
	var c = "";
	var token = "";
	var y = date.getYear() + "";
	var M = date.getMonth() + 1;
	var d = date.getDate();
	var E = date.getDay();
	var H = date.getHours();
	var m = date.getMinutes();
	var s = date.getSeconds();
	var yyyy, yy, MMM, MM, dd, hh, h, mm, ss, ampm, HH, H, KK, K, kk, k;
	// Convert real date parts into formatted versions
	var value = new Object();
	if (y.length < 4) {
		y = "" + (y - 0 + 1900);
	}
	value["y"] = "" + y;
	value["yyyy"] = y;
	value["yy"] = y.substring(2, 4);
	value["M"] = M;
	value["MM"] = LZ(M);
	value["MMM"] = MONTH_NAMES[M - 1];
	value["NNN"] = MONTH_NAMES[M + 11];
	value["d"] = d;
	value["dd"] = LZ(d);
	value["E"] = DAY_NAMES[E + 7];
	value["EE"] = DAY_NAMES[E];
	value["H"] = H;
	value["HH"] = LZ(H);
	if (H == 0) {
		value["h"] = 12;
	}
	else if (H > 12) {
		value["h"] = H - 12;
	}
	else {
		value["h"] = H;
	}
	value["hh"] = LZ(value["h"]);
	if (H > 11) {
		value["K"] = H - 12;
	} else {
		value["K"] = H;
	}
	value["k"] = H + 1;
	value["KK"] = LZ(value["K"]);
	value["kk"] = LZ(value["k"]);
	if (H > 11) {
		value["a"] = "PM";
	}
	else {
		value["a"] = "AM";
	}
	value["m"] = m;
	value["mm"] = LZ(m);
	value["s"] = s;
	value["ss"] = LZ(s);
	while (i_format < format.length) {
		c = format.charAt(i_format);
		token = "";
		while ((format.charAt(i_format) == c) && (i_format < format.length)) {
			token += format.charAt(i_format++);
		}
		if (value[token] != null) {
			result = result + value[token];
		}
		else {
			result = result + token;
		}
	}
	return result;
}

// ------------------------------------------------------------------
// Utility functions for parsing in getDateFromFormat()
// ------------------------------------------------------------------
function _isInteger(val) {
	var digits = "1234567890";
	for (var i = 0; i < val.length; i++) {
		if (digits.indexOf(val.charAt(i)) == -1) {
			return false;
		}
	}
	return true;
}
function _getInt(str, i, minlength, maxlength) {
	for (var x = maxlength; x >= minlength; x--) {
		var token = str.substring(i, i + x);
		if (token.length < minlength) {
			return null;
		}
		if (_isInteger(token)) {
			return token;
		}
	}
	return null;
}

// ------------------------------------------------------------------
// getDateFromFormat( date_string , format_string )
//
// This function takes a date string and a format string. It matches
// If the date string matches the format string, it returns the 
// getTime() of the date. If it does not match, it returns 0.
// ------------------------------------------------------------------
function getDateFromFormat(val, format) {
	val = val + "";
	format = format + "";
	var i_val = 0;
	var i_format = 0;
	var c = "";
	var token = "";
	var token2 = "";
	var x, y;
	var now = new Date();
	var year = now.getYear();
	var month = now.getMonth() + 1;
	var date = 1;
	var hh = now.getHours();
	var mm = now.getMinutes();
	var ss = now.getSeconds();
	var ampm = "";

	while (i_format < format.length) {
		// Get next token from format string
		c = format.charAt(i_format);
		token = "";
		while ((format.charAt(i_format) == c) && (i_format < format.length)) {
			token += format.charAt(i_format++);
		}
		// Extract contents of value based on format token
		if (token == "yyyy" || token == "yy" || token == "y") {
			if (token == "yyyy") {
				x = 4;
				y = 4;
			}
			if (token == "yy") {
				x = 2;
				y = 2;
			}
			if (token == "y") {
				x = 2;
				y = 4;
			}
			year = _getInt(val, i_val, x, y);
			if (year == null) {
				return 0;
			}
			i_val += year.length;
			if (year.length == 2) {
				if (year > 70) {
					year = 1900 + (year - 0);
				}
				else {
					year = 2000 + (year - 0);
				}
			}
		}
		else if (token == "MMM" || token == "NNN") {
			month = 0;
			for (var i = 0; i < MONTH_NAMES.length; i++) {
				var month_name = MONTH_NAMES[i];
				if (val.substring(i_val, i_val + month_name.length).toLowerCase() == month_name.toLowerCase()) {
					if (token == "MMM" || (token == "NNN" && i > 11)) {
						month = i + 1;
						if (month > 12) {
							month -= 12;
						}
						i_val += month_name.length;
						break;
					}
				}
			}
			if ((month < 1) || (month > 12)) {
				return 0;
			}
		}
		else if (token == "EE" || token == "E") {
			for (var i = 0; i < DAY_NAMES.length; i++) {
				var day_name = DAY_NAMES[i];
				if (val.substring(i_val, i_val + day_name.length).toLowerCase() == day_name.toLowerCase()) {
					i_val += day_name.length;
					break;
				}
			}
		}
		else if (token == "MM" || token == "M") {
			month = _getInt(val, i_val, token.length, 2);
			if (month == null || (month < 1) || (month > 12)) {
				return 0;
			}
			i_val += month.length;
		}
		else if (token == "dd" || token == "d") {
			date = _getInt(val, i_val, token.length, 2);
			if (date == null || (date < 1) || (date > 31)) {
				return 0;
			}
			i_val += date.length;
		}
		else if (token == "hh" || token == "h") {
			hh = _getInt(val, i_val, token.length, 2);
			if (hh == null || (hh < 1) || (hh > 12)) {
				return 0;
			}
			i_val += hh.length;
		}
		else if (token == "HH" || token == "H") {
			hh = _getInt(val, i_val, token.length, 2);
			if (hh == null || (hh < 0) || (hh > 23)) {
				return 0;
			}
			i_val += hh.length;
		}
		else if (token == "KK" || token == "K") {
			hh = _getInt(val, i_val, token.length, 2);
			if (hh == null || (hh < 0) || (hh > 11)) {
				return 0;
			}
			i_val += hh.length;
		}
		else if (token == "kk" || token == "k") {
			hh = _getInt(val, i_val, token.length, 2);
			if (hh == null || (hh < 1) || (hh > 24)) {
				return 0;
			}
			i_val += hh.length;
			hh--;
		}
		else if (token == "mm" || token == "m") {
			mm = _getInt(val, i_val, token.length, 2);
			if (mm == null || (mm < 0) || (mm > 59)) {
				return 0;
			}
			i_val += mm.length;
		}
		else if (token == "ss" || token == "s") {
			ss = _getInt(val, i_val, token.length, 2);
			if (ss == null || (ss < 0) || (ss > 59)) {
				return 0;
			}
			i_val += ss.length;
		}
		else if (token == "a") {
			if (val.substring(i_val, i_val + 2).toLowerCase() == "am") {
				ampm = "AM";
			}
			else if (val.substring(i_val, i_val + 2).toLowerCase() == "pm") {
				ampm = "PM";
			}
			else {
				return 0;
			}
			i_val += 2;
		}
		else {
			if (val.substring(i_val, i_val + token.length) != token) {
				return 0;
			}
			else {
				i_val += token.length;
			}
		}
	}
	// If there are any trailing characters left in the value, it doesn't match
	if (i_val != val.length) {
		return 0;
	}
	// Is date valid for month?
	if (month == 2) {
		// Check for leap year
		if (((year % 4 == 0) && (year % 100 != 0)) || (year % 400 == 0)) { // leap year
			if (date > 29) {
				return 0;
			}
		}
		else {
			if (date > 28) {
				return 0;
			}
		}
	}
	if ((month == 4) || (month == 6) || (month == 9) || (month == 11)) {
		if (date > 30) {
			return 0;
		}
	}
	// Correct hours value
	if (hh < 12 && ampm == "PM") {
		hh = hh - 0 + 12;
	}
	else if (hh > 11 && ampm == "AM") {
		hh -= 12;
	}
	var newdate = new Date(year, month - 1, date, hh, mm, ss);
	return newdate.getTime();
}

// ------------------------------------------------------------------
// parseDate( date_string [, prefer_euro_format] )
//
// This function takes a date string and tries to match it to a
// number of possible date formats to get the value. It will try to
// match against the following international formats, in this order:
// y-M-d   MMM d, y   MMM d,y   y-MMM-d   d-MMM-y  MMM d
// M/d/y   M-d-y      M.d.y     MMM-d     M/d      M-d
// d/M/y   d-M-y      d.M.y     d-MMM     d/M      d-M
// A second argument may be passed to instruct the method to search
// for formats like d/M/y (european format) before M/d/y (American).
// Returns a Date object or null if no patterns match.
// ------------------------------------------------------------------
function parseDate(val) {
	var preferEuro = (arguments.length == 2) ? arguments[1] : false;
	generalFormats = new Array('y-M-d', 'MMM d, y', 'MMM d,y', 'y-MMM-d', 'd-MMM-y', 'MMM d');
	monthFirst = new Array('M/d/y', 'M-d-y', 'M.d.y', 'MMM-d', 'M/d', 'M-d');
	dateFirst = new Array('d/M/y', 'd-M-y', 'd.M.y', 'd-MMM', 'd/M', 'd-M');
	var checkList = new Array('generalFormats', preferEuro ? 'dateFirst' : 'monthFirst', preferEuro ? 'monthFirst' : 'dateFirst');
	var d = null;
	for (var i = 0; i < checkList.length; i++) {
		var l = window[checkList[i]];
		for (var j = 0; j < l.length; j++) {
			d = getDateFromFormat(val, l[j]);
			if (d != 0) {
				return new Date(d);
			}
		}
	}
	return null;
}

</script>