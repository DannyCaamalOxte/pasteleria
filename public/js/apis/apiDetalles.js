function init(){
var ruta = document.querySelector("[name=route]").value;

var Detalles=ruta + '/apiDetalles';

new Vue({


	http: {
      headers: {
        'X-CSRF-TOKEN': document.querySelector('#token').getAttribute('value')
      }
    },

	el:"#apiDetalles",

	data:{
		alineacion:'center',
		detas:[],
		id:'',
		cantidad:'',
		precio:'',
		total:'',
		sku:'',
		folio:'',
	},

	
	created:function(){
        this.obtenerDetalles();
      },
	

	methods:{


		obtenerDetalles:function(){
          this.$http.get(Detalles).then(function(json){
            this.detas=json.data;
            console.log(json.data)
          }).catch(function(json){
            console.log(json);
          });
        },
        
	},
	// FIN DE METHODS


	// INICIO COMPUTED
	computed:{
		
		// filtroventas:function(){
  //     return this.ventas.filter((apiVentashechas)=>{
  //       return apiVentashechas.folio.toLowerCase().match(this.buscar.toLowerCase().trim())

  //     });
  //   },



    // filtrofechas:function(){
    // 	return this.ventas.filter((apiVentashechas)=>{
    // 		return(
    // 			apiVentashechas.fecha_venta >= this.buscar2 &&
    // 			apiVentashechas.fecha_venta <= this.buscar3
    // 			);

    // 	});

    // },
    //calcula el total de ventas hechas, calculando por medio del filtrofechas
		// totalNeto:function(){
		// 	return this.filtrofechas.reduce((total, item)=>{
		// 		return total + parseFloat(item.total);
		// 	}, 0);
		// },

		


		

		
	}
	// FIN DE COMPUTED



	});
} window.onload= init;
