function submit_comment()
{
    var name = document.getElementById('name').value;
    var comment = document.getElementById('comment').value;
    var dataString = 'name='+name+'comment='+comment;
    $.ajax({
        type: "POST",
        url: "/add_comment.php",
        data: dataString,
        cache: false,
        success: function(html) {
        alert(html);
        }
        });
    
    return false;
}
function check()
{
    if(comment.name.value==''){
        alert("Please tell me your name.");
        comment.name.focus();
        return false;
    }
    else if(comment.content.value==''){
        alert("Tell me anything!");
        comment.content.focus();
        return false;
    }
}