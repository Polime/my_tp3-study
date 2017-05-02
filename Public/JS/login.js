// window.onload=function(){
//   var ou = document.myform.username;
//   var op = document.myform.password;
//   var oc = document.myform.code;
//   if(ou.value == '' || op.value == '' || oc.value == ''){
//     alert('数据不能为空');
//   }else {
//     document.myform.submit();
//   }
// }//页面加载完执行匿名函数
function sub(){
  var ou = document.myform.username;
    var op = document.myform.password;
    var oc = document.myform.code;
    if(ou.value == '' || op.value == '' || oc.value == ''){
      alert('数据不能为空');
    }else {
      document.myform.submit();
    }
}
