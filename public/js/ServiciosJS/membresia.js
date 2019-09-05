$( document ).ready(function() {
  $('#selectCliente').select2('open');
  $('a').removeClass('active');
  $('#MenuServicio').addClass('active');
  $('#credencialMembresia').addClass('active');
});
$("#selectCliente").change(function()
    {
        $('#idCliente').val($('#selectCliente').val());
        idClientes = $('#selectCliente').val();
        $('#selectProducto').select2('open');
    }
);

$('#bucarUser').click(function () {
  verCliente(1002);
})

function verCliente(id){

  $.ajax({
    url: 'editarCliente',
    type:'GET',
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },data:{
      id:id,
    },
    success: function(data,textStatus,jqXHR) {
      console.log(data.responseData1);
      var canvas = document.getElementById('miCanvas');
      var contexto = canvas.getContext('2d');
      var canvas1 = document.getElementById('miCanvas2');
      var contexto1 = canvas1.getContext('2d');
      var img = new Image();
      var img1 = new Image();
      var img2 = new Image();
      var img3 = new Image();
      var img4 = new Image();
      img.src = "img/front.png";
      img3.src = "img/rear.png";
      contexto.font = "  11px sans-serif";
      contexto.fillStyle ='white';
      //img1.src = 'data:image/png;base64,{{DNS1D::getBarcodePNG('1002', 'C39')}}';
      img1.src = 'data:image/png;base64,'+data.responseData.barcode+' ';
      if (data.responseData1.length) {
        img2.src = 'img/fotos/files/'+data.responseData1[0].foto;
      } else {

          img2.src='img/avatar.png';
      }
      img4.src = 'data:image/png;base64,'+data.responseData.barcode+' ';
      img.onload = function(){
        contexto.drawImage(img, 0, 0,325,204);
        contexto.drawImage(img1, 130, 140,130,20);
        contexto.fillText(data.responseData.name+' '+data.responseData.apePat+' '+data.responseData.apeMat,135,75);
        contexto.fillText(data.responseData.created_at,175,95);
        contexto.fillStyle ='#b5b3b3';
        contexto.font = "bold  13px sans-serif";
        contexto.fillText('#'+data.responseData.id,20,160);
        img2.onload = function(){
        	contexto.drawImage(img2, 14, 65,70,75);
     	}
     	img3.onload=function () {
       		contexto1.drawImage(img3,  0, 0,325,204);
       		contexto1.drawImage(img4,  100, 148,130,20);
     	}
      }
      
    }
  });
}

$('#downloadFornt').click(function() {
  var jpeg = document.getElementById("miCanvas");
  link = document.createElement('a');
	link.download = "Frente";
	link.href = jpeg.toDataURL("image/png");//us
  link.click();
});

$('#downloadRear').click(function() {
  var jpeg = document.getElementById("miCanvas2");
  link = document.createElement('a');
  link.download = "Reverso";
  link.href = jpeg.toDataURL("image/png");//us
  link.click();
});

$('#selectCliente').select2(
    {
        ajax:
        {
            url: 'listaClientes',
            dataType: 'json',
            delay: 200,
            data: function(params)
            {
                return{
                    q: params.term,
                    page: params.page
                };
            },
            processResults: function(data,params)
            {
                params.page = params.page || 1;
                return {
                    results: data.data,
                    pagination:{
                        more: (params.page * 10) < data.total
                    }
                };
            }
        },
        minimumInputLength: 1,
        templateResult: function(repo)
        {
            if(repo.loading)
                return repo.name;
            var markup = repo.name+' '+repo.apePat+' '+repo.apeMat;
            return markup;
        },
        templateSelection: function(repo)
        {
            return repo.name+' '+repo.apePat+' '+repo.apeMat;
        },
        escapeMarkup: function(markup)
        {
            return markup;
        }
    }
);
$("#selectCliente").change(function()
    {
        if($(this).val() != null){
            verCliente($('#selectCliente').val());
        }
    }
);
