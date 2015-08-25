/**
 * 每秒刷新一次
 * @return {[type]} [description]
 */
// document.getElementById("send").onclick = function() { 
//         var request = new XMLHttpRequest();
//         request.open("POST", "chat");
//         var data = "content=" + document.getElementById("input1").value;
//         request.setRequestHeader("Content-type","application/x-www-form-urlencoded");
//         request.send(data);
//         request.onreadystatechange = function() {
//             if (request.readyState===4) {
//                 if (request.status===200) { 
//                     document.getElementById("content_true").innerHTML = document.getElementById("content_true").innerHTML+request.responseText;
//                     document.getElementById("record_content").innerHTML = document.getElementById("record_content").innerHTML+request.responseText;
//                     document.getElementById("input1").value = '';    //????为什么innerHTML和innerText不行呢
//                 } else {
//                     alert("发生错误：" + request.status);
//                 }
//             } 
//         }
//     }
window.onload=function fresh() {
   

    function refresh() {
    var request = new XMLHttpRequest();
        request.open("POST", "refresh");
        var data = "content=" + document.getElementById("input1").value;
        request.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        request.send(data);
        request.onreadystatechange = function() {
            if (request.readyState===4) {
                if (request.status===200) { 
                    document.getElementById("online").innerHTML = request.responseText;
                        
                } else {
                    alert("发生错误：" + request.status);
                }
            } 
        }
    }
    refresh();
	var request = new XMLHttpRequest();
        request.open("POST", "fresh");
        var data = "content=" + document.getElementById("input1").value;
        request.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        request.send(data);
        request.onreadystatechange = function() {
            if (request.readyState===4) {
                if (request.status===200) { 
                    document.getElementById("content_true").innerHTML = request.responseText;
                    document.getElementById("record_content").innerHTML = request.responseText;
                    // document.getElementById("input1").value = '';    //????为什么innerHTML和innerText不行呢
                	var div = document.getElementById("content_true");
                    var div1 = document.getElementById("record_content");
                    div.scrollTop = div.scrollHeight;
                    div1.scrollTop = div1.scrollHeight;
                    // window.setTimeout(fresh, 1000);
                } else {
                    alert("发生错误：" + request.status);
                }
            } 
        }
    }