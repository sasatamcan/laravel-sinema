$(".delete").click(function(){
    if (confirm('Delete place?')) {
        alert('Thanks for confirming');
    var id = $(this).data("id");
    var token = $("meta[name='csrf-token']").attr("content");
   
    $.ajax(
    {
        url: "/admin/place/delete/"+id,
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