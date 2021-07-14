function LoadDataOneThese(id){
    $.ajax({
            type:"get",
            url :"recuperationdestheses",
            data :{id:id},
            success:function(result){
                document.getElementById('demo').innerHTML='
                ';
            }
    });
}