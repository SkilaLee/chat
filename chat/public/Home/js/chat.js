/***
*功能：隐藏和显示div
*参数divDisplay：html标签id
***/
function click_a(divDisplay)
{
    if(document.getElementById(divDisplay).style.display != "block")
    {
        document.getElementById(divDisplay).style.display = "block";
    }
    else
    {
        document.getElementById(divDisplay).style.display = "none";
    }
}

/**
 * 发送消息
 */
document.getElementById("send").onclick = function() { 
        var request = new XMLHttpRequest();
        request.open("POST", "chat");
        var data = "content=" + document.getElementById("input1").value;
        request.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        request.send(data);
        request.onreadystatechange = function() {
            if (request.readyState===4) {
                if (request.status===200) { 
                    document.getElementById("content_true").innerHTML = document.getElementById("content_true").innerHTML+request.responseText;
                    document.getElementById("record_content").innerHTML = document.getElementById("record_content").innerHTML+request.responseText;
                    document.getElementById("input1").value = '';    //????为什么innerHTML和innerText不行呢
                    var div = document.getElementById("content_true");
                    var div1 = document.getElementById("record_content");
                    div.scrollTop = div.scrollHeight;
                    div1.scrollTop = div1.scrollHeight;
                } 
                else {
                    alert("发生错误：" + request.status);
                }
            } 
        }
    }