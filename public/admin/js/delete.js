$(".delete").click(function(){
    if (confirm('Delete film?')) {
        alert('Thanks for confirming');
    var id = $(this).data("id");
    var url = $(this).data("url");
    var token = $("meta[name='csrf-token']").attr("content");
   
    $.ajax(
    {
        url: url+id,
        type: 'POST',
        data: {
            "id": id,
            "_token": token,
        },
        success: function (){
            console.log("it Works");
        }
    });
}
    return false;
   
});
