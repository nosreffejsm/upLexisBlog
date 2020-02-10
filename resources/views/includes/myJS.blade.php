<script type="text/javascript">

    var search = document.querySelector("#search");
    var artigos = [];

    function msgAdd(sts,msg) 
    {
        selectorRemove('#alerta');
        var alerta = document.querySelector("#alerta");
        alerta.innerHTML = msg;
		setTimeout("selectorRemove('#alerta')", 10000);
		switch(sts) {
		  case 1:
			alerta.classList.add("alert-success");
			return;
		  case 2:
			alerta.classList.add("alert-danger");
			return;
		  case 3:
			alerta.classList.add("alert-info");
			return;
		  case 4:
			alerta.classList.add("alert-warning");
			return;
		  default:
			alerta.classList.add("alert-primary");
		}
    }

    function selectorRemove(idselector) {
        var selector = document.querySelector(idselector);
        selector.innerHTML = "";
        selector.classList.remove("alert-primary");
        selector.classList.remove("alert-success");
        selector.classList.remove("alert-danger");
        selector.classList.remove("alert-warning");
        selector.classList.remove("alert-info");
        selector.classList.remove("bg-primary");
        selector.classList.remove("bg-success");
        selector.classList.remove("bg-danger");
        selector.classList.remove("bg-warning");
        selector.classList.remove("bg-info");
        return;
    }

    function progressbar(sts,percent)
    {
        selectorRemove('#progress');
      var progress = document.querySelector("#progress");
      progress.innerHTML = percent+"%";
      progress.style.width = percent+"%";
      switch(sts) {
		  case 1:
          progress.classList.add("bg-success");
			return;
		  case 2:
          progress.classList.add("bg-danger");
			return;
		  case 3:
          progress.classList.add("bg-info");
			return;
		  case 4:
          progress.classList.add("bg-warning");
			return;
		  default:
          progress.classList.add("bg-primary");
		}
      return;
    }

    function jsphp(array) {
        var url = "/"
        $.ajax({
             type: 'POST',
             url: "{{route('artigosSave')}}",
             data: {array:array,
                    _token: '{{ csrf_token() }}'},
             success: function(data) {
                msgAdd(1, "Quatidade de Artigos baixados: " + data.success + ".");
                progressbar(1,100);
                setTimeout("selectorRemove('#progress')", 10000);
                setTimeout("progressbar(0,0)", 10000);
                return window.location.href = "/captura";
             },
             error: function(error){
                msgAdd(2, "Não foi possivel baixar os artigos, tente novamente.");
             }
         });
    }

    search.addEventListener("click", function(e) 
    {
        var buscar = document.getElementById("input").value;
        if (buscar.length == 0) 
        {
            msgAdd(3, "Ops! Você precisa digitar algo no campo de pesquisa acima.");
            return;
        }
        e.preventDefault();

        $.ajax({ url: 'https://uplexis.com.br/category/blog/?s='+buscar, 
        success: function(data) 
        {
            
            var artigos = [];
            var html = $.parseHTML(data);
            var resultfind = $(html).find('.post');
            progressbar(3,10);
            msgAdd(1, "Conectando... https://uplexis.com.br/category/blog/");
            $.each(resultfind, function(i, e) 
            {
                progressbar(3,50);
                msgAdd(1, "Tratando os dados...");
                var titulo = $(e).find('.title').html();
                var link = $(e).find('.btn-uplexis').attr('href');
                var imga = $(e).find('.row').attr('style');
                var imgb = imga.replace("background-image: url('","");
                var img = imgb.replace("')","");
                artigos.push({titulo: titulo, link: link,img: img});
            });
            if (artigos.length != 0) 
            {
                jsphp(artigos); 
            } else {
                progressbar(3,100);
                setTimeout("selectorRemove('#progress')", 10000);
                setTimeout("progressbar(0,0)", 10000);
                msgAdd(3,"Não foi localizado nenhum artigo com o termo pesquisado.");
            }
        }
        });
    });
</script>