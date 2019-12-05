var savedParts=[]
const allParts=[]

$(function(){
    $.ajax({
        url: "assets/php/pullparts.php",
        dataType: "json",
        type: 'get',
        success: function(res){
            str=""
         $.each(res, function(index, value){
             allParts.push({name:value.item_name,price:value.price,desc:value.item_desc,id:value.id})
             str+="<li class='part ui-widget-content'><h3>"+value.item_name+"</h3><p>  "+parseFloat(value.price).toFixed(2)+"</p><p>"+value.item_desc+"</p>"
         });
         $("#list").html(str);
         $("#list").selectable({
             stop: function(){
                savedParts=[];
                $( ".ui-selected", this ).each(function() {
                    let index = $( "#list li" ).index( this );
                    savedParts.push(index);
                  });
                  savedParts=allParts.filter(function(value,index,arr){
                      return savedParts.includes(index)
                  })
                  console.log(savedParts)

                //   console.log(length);
             }
         })
        },
     });
})

function onSave(){
    $.ajax({
        url:'./assets/php/addtocart.php',
        type:'get',
        data:{parts: JSON.stringify(savedParts)},
        success:function(res){
            console.log(res)
        }

    })
}